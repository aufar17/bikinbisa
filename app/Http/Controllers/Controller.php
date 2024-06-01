<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\Session;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function login() {
        $user = session('user');
        if ($user) {
            return redirect()->route('home');
        }
        return view('login');
    }

    public function logout() {
        Session::remove('user');
        return redirect()->route('login');
    }

    public function loginPost() {
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

    public function signupPost() {
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

    public function profilePost() {
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
            'tgl_lahir' => $form['tanggal_lahir'],
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

    public function index() {
        return view('index');
    }
    public function signup() {
        return view('signup');
    }

    public function profile() {
        $user = session('user');
        if (!$user) {
            return redirect()->route('login');
        }
        $user = User::where('id', $user->id)->first();
        $data = [
            'profile' =>[
                'username' => $user->username ?? '',
                'email' => $user->email ?? '',
                'nama' => $user->nama ?? '',
                'tgl_lahir' => $user->tgl_lahir ?? '',
                'alamat' => $user->alamat ?? '',
                'jenjang' => $user->jenjang ?? '',
                'institusi' => $user->institusi ?? '',
            ],
        ];
        return view('profile', $data);
    }

    public function tentangkami() {
        return view('tentang-kami');
    }
}
