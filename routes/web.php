<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [Controller::class, 'index'])->name('home');
Route::get('login', [Controller::class, 'login'])->name('login');
Route::get('signup', [Controller::class, 'signup'])->name('signup');
Route::get('logout', [Controller::class, 'logout'])->name('logout');
Route::post('login', [Controller::class, 'loginPost'])->name('login.action');
Route::post('signup', [Controller::class, 'signupPost'])->name('signup.action');
Route::get('profile', [Controller::class, 'profile'])->name('profile');
Route::post('profile', [Controller::class, 'profilePost'])->name('profile-action');
Route::get('tentang-kami', [Controller::class, 'tentangkami'])->name('tentang-kami');
Route::get('literasi', [Controller::class, 'literasi'])->name('literasi');
Route::get('artikel1', [Controller::class, 'artikel1'])->name('artikel1');
Route::get('artikel2', [Controller::class, 'artikel2'])->name('artikel2');

Route::get('paket-rekomen1', [Controller::class, 'paketRekomen1'])->name('paket-rekomen1');
Route::get('paket-rekomen2', [Controller::class, 'paketRekomen2'])->name('paket-rekomen2');
Route::get('paket-rekomen3', [Controller::class, 'paketRekomen3'])->name('paket-rekomen3');
Route::get('paket-rekomen3', [Controller::class, 'paketRekomen4'])->name('paket-rekomen4');