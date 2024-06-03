<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Jadwal;
use App\Models\Task1Rekomen1;
use App\Models\UserTask;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function login() {
        return view('login');
    }

    public function logout()
    {
        Session::remove('user');
        return redirect()->route('login');
    }

    public function loginPost()
    {
        $form = request()->post();
        $user = User::where('username', $form['username'])->first();
        if (!$user) {
            return redirect()->route('login');
        }

        if (!password_verify($form['password'], $user->password)) {
            return redirect()->route('login');
        }
        // kondisi password ga sesuai
        Session::put('user', $user);
        return redirect()->route('home');
    }

    public function signupPost()
    {
        $form = request()->post();
        $user = User::where('username', $form['username'])->first();
        if ($user) {
            return redirect()->route('signup');
        }

        $data = [
            'nama' => '',
            'username' => $form['username'],
            'email' => $form['email'],
            'password' => password_hash($form['password'], PASSWORD_BCRYPT),
            'alamat' => '',
            'jenjang' => '',
            'institusi' => '',
        ];
        $res = User::create($data);
        if (!$res) {
            return redirect()->route('signup');
        }
        return redirect()->route('login');
    }

    public function profilePost()
    {
        $user = session('user');
        if (!$user) {
            return redirect()->route('login');
        }
        $form = request()->post();
        $user = User::where('id', $user->id)->first();
        if (!$user) {
            return redirect()->route('logout');
        }

        $data = [
            'nama' => $form['nama'],
            'email' => $form['email'],
            'tgl_lahir' => $form['tgl_lahir'],
            'alamat' => $form['alamat'],
            'jenjang' => $form['jenjang'],
            'institusi' => $form['institusi'],
        ];

        $res = User::where('id', $user->id)->update($data);
        if (!$res) {
            return redirect()->route('profile');
        }
        return redirect()->route('home');
    }

    public function index()
    {
        return view('index');
    }
    public function signup()
    {
        return view('signup');
    }

    public function profile()
    {
        $user = session('user');
        if (!$user) {
            return redirect()->route('login');
        }
        $user = User::where('id', $user->id)->first();
        $data = [
            'profile' => [
                'username' => $user->username ?? '',
                'email' => $user->email ?? '',
                'nama' => $user->nama ?? '',
                'tgl_lahir' => $user->tgl_lahir ?? '',
                'alamat' => $user->alamat ?? '',
                'jenjang' => $user->jenjang ?? '',
                'institusi' => $user->institusi ?? '',
            ],
        ];
        if (!empty($data['profile']['tgl_lahir'])) {
            $data['profile']['tgl_lahir'] = date('Y-m-d', strtotime($data['profile']['tgl_lahir']));
        }
        return view('profile', $data);
    }

    public function tentangkami()
    {
        return view('tentang-kami');
    }
    public function literasi()
    {
        return view('literasi');
    }
    public function artikel1()
    {
        return view('artikel1');
    }
    public function artikel2()
    {
        return view('artikel2');
    }

    public function paketRekomen1()
    {
        $user = session('user');
        if (!$user) {
            return redirect()->route('login');
        }
        $form = request()->post();
        $user = User::where('id', $user->id)->first();
        if (!$user) {
            return redirect()->route('logout');
        }


        $data = [
            'dashboard' => [
                'username' => $user->username ?? '',
                'email' => $user->email ?? '',
                'nama' => $user->nama ?? '',
                'tgl_lahir' => $user->tgl_lahir ?? '',
                'alamat' => $user->alamat ?? '',
                'jenjang' => $user->jenjang ?? '',
                'institusi' => $user->institusi ?? '',
            ],
        ];

        if (!empty($data['dashboard']['tgl_lahir'])) {
            $data['dashboard']['tgl_lahir'] = date('Y-m-d', strtotime($data['dashboard']['tgl_lahir']));
        }

        $jadwals = Jadwal::all();
        $tasks1_rekomen1 = [
            'task1' => [
                'jawaban' => $jawaban ?? ''
            ],
        ];
        // 'task_id' => 'task1_rekomen1',
        //         'jawaban_task_id' => $i+1,
        //         'jawaban' => $r,
        $dataJawaban = UserTask::with('task1Rekomen1')->where('user_id', session('user')->id)
            ->where('task_id', 'task1_rekomen1')->get();
        $nilai = 0;
        foreach ($dataJawaban as $r) {
            if (strtoupper($r->jawaban ?? '') == strtoupper($r->task1Rekomen1->jawaban)) {
                $nilai += 10;
            }
        }
        return view('paket-rekomen1', compact('jadwals', 'data', 'tasks1_rekomen1', 'nilai'));
    }

    public function Task1Rekomen1Post(Request $request)
    {
        $datapost = $request->post();
        $answer = [];
        foreach ($datapost as $i => $r) {
            if (str_contains($i, 'answer') == true) {
                $answer[]= $r;
            }
        }
        $arrData = [];
        foreach ($answer as $i => $r) {
            $data = [
                'user_id' => session('user')->id ?? '',
                'task_id' => 'task1_rekomen1',
                'jawaban_task_id' => $i+1,
                'jawaban' => $r,
            ];
            $arrData[]= $data;
        }
        // $request->validate([
        //     'id' => 'required|integer|exists:task1-rekomen1,id',
        //     'jawaban' => 'required|string'
        // ]);
        foreach ($arrData as $r) {
            $exist = UserTask::where('user_id', session('user')->id ?? '')
            ->where('task_id', 'task1_rekomen1')
            ->where('jawaban_task_id', $r['jawaban_task_id'])->first();
            if (!$exist) {
                UserTask::create($r);
            } else {
                UserTask::where('id', $exist->id)->update($r);
            }
        }

        return redirect()->route('paket-rekomen1');
    }

    public function paketRekomen2()
    {
        $jadwals = jadwal::all();
        return view('paket-rekomen2', compact('jadwals'));
    }
    public function paketRekomen3()
    {
        $jadwals = jadwal::all();
        return view('paket-rekomen3', compact('jadwals'));
    }
    public function paketRekomen4()
    {
        $jadwals = jadwal::all();
        return view('paket-rekomen4', compact('jadwals'));
    }
    public function paketSD1_1()
    {
        $jadwals = jadwal::all();
        return view('paket-sd1-1', compact('jadwals'));
    }
    public function paketSD1_2()
    {
        $jadwals = jadwal::all();
        return view('paket-sd1-2', compact('jadwals'));
    }
    public function paketSD1_3()
    {
        $jadwals = jadwal::all();
        return view('paket-sd1-3', compact('jadwals'));
    }
    public function paketSD1_4()
    {
        $jadwals = jadwal::all();
        return view('paket-sd1-4', compact('jadwals'));
    }
    public function paketSD2_1()
    {
        $jadwals = jadwal::all();
        return view('paket-sd2-1', compact('jadwals'));
    }
    public function paketSD2_2()
    {
        $jadwals = jadwal::all();
        return view('paket-sd2-2', compact('jadwals'));
    }
    public function paketSD2_3()
    {
        $jadwals = jadwal::all();
        return view('paket-sd2-3', compact('jadwals'));
    }
    public function paketSD2_4()
    {
        $jadwals = jadwal::all();
        return view('paket-sd2-4', compact('jadwals'));
    }
    public function paketSD3_1()
    {
        $jadwals = jadwal::all();
        return view('paket-sd3-1', compact('jadwals'));
    }
    public function paketSD3_2()
    {
        $jadwals = jadwal::all();
        return view('paket-sd3-2', compact('jadwals'));
    }
    public function paketSD3_3()
    {
        $jadwals = jadwal::all();
        return view('paket-sd3-3', compact('jadwals'));
    }
    public function paketSD3_4()
    {
        $jadwals = jadwal::all();
        return view('paket-sd3-4', compact('jadwals'));
    }
    public function paketSD4_1()
    {
        $jadwals = jadwal::all();
        return view('paket-sd4-1', compact('jadwals'));
    }
    public function paketSD4_2()
    {
        $jadwals = jadwal::all();
        return view('paket-sd4-2', compact('jadwals'));
    }
    public function paketSD4_3()
    {
        $jadwals = jadwal::all();
        return view('paket-sd4-3', compact('jadwals'));
    }
    public function paketSD4_4()
    {
        $jadwals = jadwal::all();
        return view('paket-sd4-4', compact('jadwals'));
    }
    public function paketSD5_1()
    {
        $jadwals = jadwal::all();
        return view('paket-sd5-1', compact('jadwals'));
    }
    public function paketSD5_2()
    {
        $jadwals = jadwal::all();
        return view('paket-sd5-2', compact('jadwals'));
    }
    public function paketSD5_3()
    {
        $jadwals = jadwal::all();
        return view('paket-sd5-3', compact('jadwals'));
    }
    public function paketSD5_4()
    {
        $jadwals = jadwal::all();
        return view('paket-sd5-4', compact('jadwals'));
    }
    public function paketSD6_1()
    {
        $jadwals = jadwal::all();
        return view('paket-sd6-1', compact('jadwals'));
    }
    public function paketSD6_2()
    {
        $jadwals = jadwal::all();
        return view('paket-sd6-2', compact('jadwals'));
    }
    public function paketSD6_3()
    {
        $jadwals = jadwal::all();
        return view('paket-sd6-3', compact('jadwals'));
    }
    public function paketSD6_4()
    {
        $jadwals = jadwal::all();
        return view('paket-sd6-4', compact('jadwals'));
    }
    public function paketSMP7_1()
    {
        $jadwals = jadwal::all();
        return view('paket-smp7-1', compact('jadwals'));
    }
    public function paketSMP7_2()
    {
        $jadwals = jadwal::all();
        return view('paket-smp7-2', compact('jadwals'));
    }
    public function paketSMP7_3()
    {
        $jadwals = jadwal::all();
        return view('paket-smp7-3', compact('jadwals'));
    }
    public function paketSMP7_4()
    {
        $jadwals = jadwal::all();
        return view('paket-smp7-4', compact('jadwals'));
    }
    public function paketSMP8_1()
    {
        $jadwals = jadwal::all();
        return view('paket-smp8-1', compact('jadwals'));
    }
    public function paketSMP8_2()
    {
        $jadwals = jadwal::all();
        return view('paket-smp8-2', compact('jadwals'));
    }
    public function paketSMP8_3()
    {
        $jadwals = jadwal::all();
        return view('paket-smp8-3', compact('jadwals'));
    }
    public function paketSMP8_4()
    {
        $jadwals = jadwal::all();
        return view('paket-smp8-4', compact('jadwals'));
    }
    public function paketSMP9_1()
    {
        $jadwals = jadwal::all();
        return view('paket-smp9-1', compact('jadwals'));
    }
    public function paketSMP9_2()
    {
        $jadwals = jadwal::all();
        return view('paket-smp9-2', compact('jadwals'));
    }
    public function paketSMP9_3()
    {
        $jadwals = jadwal::all();
        return view('paket-smp9-3', compact('jadwals'));
    }
    public function paketSMP9_4()
    {
        $jadwals = jadwal::all();
        return view('paket-smp9-4', compact('jadwals'));
    }
    public function paketSMA10_1()
    {
        $jadwals = jadwal::all();
        return view('paket-sma10-1', compact('jadwals'));
    }
    public function paketSMA10_2()
    {
        $jadwals = jadwal::all();
        return view('paket-sma10-2', compact('jadwals'));
    }
    public function paketSMA10_3()
    {
        $jadwals = jadwal::all();
        return view('paket-sma10-3', compact('jadwals'));
    }
    public function paketSMA10_4()
    {
        $jadwals = jadwal::all();
        return view('paket-sma10-4', compact('jadwals'));
    }
    public function paketSMA11_1()
    {
        $jadwals = jadwal::all();
        return view('paket-sma11-1', compact('jadwals'));
    }
    public function paketSMA11_2()
    {
        $jadwals = jadwal::all();
        return view('paket-sma11-2', compact('jadwals'));
    }
    public function paketSMA11_3()
    {
        $jadwals = jadwal::all();
        return view('paket-sma11-3', compact('jadwals'));
    }
    public function paketSMA11_4()
    {
        $jadwals = jadwal::all();
        return view('paket-sma11-4', compact('jadwals'));
    }
    public function paketSMA12_1()
    {
        $jadwals = jadwal::all();
        return view('paket-sma12-1', compact('jadwals'));
    }
    public function paketSMA12_2()
    {
        $jadwals = jadwal::all();
        return view('paket-sma12-2', compact('jadwals'));
    }
    public function paketSMA12_3()
    {
        $jadwals = jadwal::all();
        return view('paket-sma12-3', compact('jadwals'));
    }
    public function paketSMA12_4()
    {
        $jadwals = jadwal::all();
        return view('paket-sma12-4', compact('jadwals'));
    }
    public function materiRekomen1_1()
    {
        return view('materi-rekomen1-1');
    }
    public function materiRekomen1_2()
    {
        return view('materi-rekomen1-2');
    }
    public function materiRekomen1_3()
    {
        return view('materi-rekomen1-3');
    }
    public function materiRekomen1_4()
    {
        return view('materi-rekomen1-4');
    }
    public function materiRekomen1_5()
    {
        return view('materi-rekomen1-5');
    }
    public function materiRekomen1_6()
    {
        return view('materi-rekomen1-6');
    }
    public function beliPaket()
    {
        return view('beli-paket');
    }
}
