<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Jadwal;
use App\Models\Task1Rekomen1;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
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
        return view('paket-rekomen1', compact('jadwals', 'data', 'tasks1_rekomen1'));
    }

    public function task1Rekomen1Post()
{
    $user = session('user');
    if (!$user) {
        return redirect()->route('login');
    }
    $form = request()->post();
    $user = User::find($user->id);
    if (!$user) {
        return redirect()->route('logout');
    }

    // Ambil jawaban yang benar dari database
    $jawabanBenar = Task1Rekomen1::pluck('jawaban', 'id')->toArray();

    // Ambil jawaban user dari form
    $jawabanUser = [
        1 => $form['answer1'],
        2 => $form['answer2'],
        3 => $form['answer3'],
        4 => $form['answer4'],
        5 => $form['answer5'],
        6 => $form['answer6'],
        7 => $form['answer7'],
        8 => $form['answer8'],
        9 => $form['answer9'],
        10 => $form['answer10'],
    ];

    // Simpan hasil pengecekan ke dalam variabel
    $hasilPengecekan = [];
    $poin = 0;

    foreach ($jawabanUser as $id => $jawaban) {
        $status = ($jawaban == ($jawabanBenar[$id] ?? null)) ? 'benar' : 'salah';
        if ($status == 'benar') {
            $poin += 10; // Increment poin jika jawaban benar
        }

        $hasilPengecekan[$id] = [
            'jawaban_user' => $jawaban,
            'jawaban_benar' => $jawabanBenar[$id] ?? null,
            'status' => $status
        ];
    }

    // Redirect atau tampilkan umpan balik ke pengguna
    return view('hasil-pengecekan', ['hasilPengecekan' => $hasilPengecekan, 'poin' => $poin]);
}

    
    

    public function paketRekomen2()
    {
        return view('paket-rekomen2');
    }
    public function paketRekomen3()
    {
        return view('paket-rekomen3');
    }
    public function paketRekomen4()
    {
        return view('paket-rekomen4');
    }
    public function paketSD1_1()
    {
        return view('paket-sd1-1');
    }
    public function paketSD1_2()
    {
        return view('paket-sd1-2');
    }
    public function paketSD1_3()
    {
        return view('paket-sd1-3');
    }
    public function paketSD1_4()
    {
        return view('paket-sd1-4');
    }
    public function paketSD2_1()
    {
        return view('paket-sd2-1');
    }
    public function paketSD2_2()
    {
        return view('paket-sd2-2');
    }
    public function paketSD2_3()
    {
        return view('paket-sd2-3');
    }
    public function paketSD2_4()
    {
        return view('paket-sd2-4');
    }
    public function paketSD3_1()
    {
        return view('paket-sd3-1');
    }
    public function paketSD3_2()
    {
        return view('paket-sd3-2');
    }
    public function paketSD3_3()
    {
        return view('paket-sd3-3');
    }
    public function paketSD3_4()
    {
        return view('paket-sd3-4');
    }
    public function paketSD4_1()
    {
        return view('paket-sd4-1');
    }
    public function paketSD4_2()
    {
        return view('paket-sd4-2');
    }
    public function paketSD4_3()
    {
        return view('paket-sd4-3');
    }
    public function paketSD4_4()
    {
        return view('paket-sd4-4');
    }
    public function paketSD5_1()
    {
        return view('paket-sd5-1');
    }
    public function paketSD5_2()
    {
        return view('paket-sd5-2');
    }
    public function paketSD5_3()
    {
        return view('paket-sd5-3');
    }
    public function paketSD5_4()
    {
        return view('paket-sd5-4');
    }
    public function paketSD6_1()
    {
        return view('paket-sd6-1');
    }
    public function paketSD6_2()
    {
        return view('paket-sd6-2');
    }
    public function paketSD6_3()
    {
        return view('paket-sd6-3');
    }
    public function paketSD6_4()
    {
        return view('paket-sd6-4');
    }
    public function paketSMP7_1()
    {
        return view('paket-smp7-1');
    }
    public function paketSMP7_2()
    {
        return view('paket-smp7-2');
    }
    public function paketSMP7_3()
    {
        return view('paket-smp7-3');
    }
    public function paketSMP7_4()
    {
        return view('paket-smp7-4');
    }
    public function paketSMP8_1()
    {
        return view('paket-smp8-1');
    }
    public function paketSMP8_2()
    {
        return view('paket-smp8-2');
    }
    public function paketSMP8_3()
    {
        return view('paket-smp8-3');
    }
    public function paketSMP8_4()
    {
        return view('paket-smp8-4');
    }
    public function paketSMP9_1()
    {
        return view('paket-smp9-1');
    }
    public function paketSMP9_2()
    {
        return view('paket-smp9-2');
    }
    public function paketSMP9_3()
    {
        return view('paket-smp9-3');
    }
    public function paketSMP9_4()
    {
        return view('paket-smp9-4');
    }
    public function paketSMA10_1()
    {
        return view('paket-sma10-1');
    }
    public function paketSMA10_2()
    {
        return view('paket-sma10-2');
    }
    public function paketSMA10_3()
    {
        return view('paket-sma10-3');
    }
    public function paketSMA10_4()
    {
        return view('paket-sma10-4');
    }
    public function paketSMA11_1()
    {
        return view('paket-sma11-1');
    }
    public function paketSMA11_2()
    {
        return view('paket-sma11-2');
    }
    public function paketSMA11_3()
    {
        return view('paket-sma11-3');
    }
    public function paketSMA11_4()
    {
        return view('paket-sma11-4');
    }
    public function paketSMA12_1()
    {
        return view('paket-sma12-1');
    }
    public function paketSMA12_2()
    {
        return view('paket-sma12-2');
    }
    public function paketSMA12_3()
    {
        return view('paket-sma12-3');
    }
    public function paketSMA12_4()
    {
        return view('paket-sma12-4');
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
}
