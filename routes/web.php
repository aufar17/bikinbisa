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
Route::get('paket-sd1-1', [Controller::class, 'paketSD1_1'])->name('paket-sd1-1');
Route::get('paket-sd1-2', [Controller::class, 'paketSD1_2'])->name('paket-sd1-2');
Route::get('paket-sd1-3', [Controller::class, 'paketSD1_3'])->name('paket-sd1-3');
Route::get('paket-sd1-4', [Controller::class, 'paketSD1_4'])->name('paket-sd1-4');
Route::get('paket-sd2-1', [Controller::class, 'paketSD2_1'])->name('paket-sd2-1');
Route::get('paket-sd2-2', [Controller::class, 'paketSD2_2'])->name('paket-sd2-2');
Route::get('paket-sd2-3', [Controller::class, 'paketSD2_3'])->name('paket-sd2-3');
Route::get('paket-sd2-4', [Controller::class, 'paketSD2_4'])->name('paket-sd2-4');
Route::get('paket-sd3-1', [Controller::class, 'paketSD3_1'])->name('paket-sd3-1');
Route::get('paket-sd3-2', [Controller::class, 'paketSD3_2'])->name('paket-sd3-2');
Route::get('paket-sd3-3', [Controller::class, 'paketSD3_3'])->name('paket-sd3-3');
Route::get('paket-sd3-4', [Controller::class, 'paketSD3_4'])->name('paket-sd3-4');
Route::get('paket-sd4-1', [Controller::class, 'paketSD4_1'])->name('paket-sd4-1');
Route::get('paket-sd4-2', [Controller::class, 'paketSD4_2'])->name('paket-sd4-2');
Route::get('paket-sd4-3', [Controller::class, 'paketSD4_3'])->name('paket-sd4-3');
Route::get('paket-sd4-4', [Controller::class, 'paketSD4_4'])->name('paket-sd4-4');
Route::get('paket-sd5-1', [Controller::class, 'paketSD5_1'])->name('paket-sd5-1');
Route::get('paket-sd5-2', [Controller::class, 'paketSD5_2'])->name('paket-sd5-2');
Route::get('paket-sd5-3', [Controller::class, 'paketSD5_3'])->name('paket-sd5-3');
Route::get('paket-sd5-4', [Controller::class, 'paketSD5_4'])->name('paket-sd5-4');
Route::get('paket-sd6-1', [Controller::class, 'paketSD6_1'])->name('paket-sd6-1');
Route::get('paket-sd6-2', [Controller::class, 'paketSD6_2'])->name('paket-sd6-2');
Route::get('paket-sd6-3', [Controller::class, 'paketSD6_3'])->name('paket-sd6-3');
Route::get('paket-sd6-4', [Controller::class, 'paketSD6_4'])->name('paket-sd6-4');
Route::get('paket-smp7-1', [Controller::class, 'paketSMP7_1'])->name('paket-smp7-1');
Route::get('paket-smp7-2', [Controller::class, 'paketSMP7_2'])->name('paket-smp7-2');
Route::get('paket-smp7-3', [Controller::class, 'paketSMP7_3'])->name('paket-smp7-3');
Route::get('paket-smp7-4', [Controller::class, 'paketSMP7_4'])->name('paket-smp7-4');
Route::get('paket-smp8-1', [Controller::class, 'paketSMP8_1'])->name('paket-smp8-1');
Route::get('paket-smp8-2', [Controller::class, 'paketSMP8_2'])->name('paket-smp8-2');
Route::get('paket-smp8-3', [Controller::class, 'paketSMP8_3'])->name('paket-smp8-3');
Route::get('paket-smp8-4', [Controller::class, 'paketSMP8_4'])->name('paket-smp8-4');
Route::get('paket-smp9-1', [Controller::class, 'paketSMP9_1'])->name('paket-smp9-1');
Route::get('paket-smp9-2', [Controller::class, 'paketSMP9_2'])->name('paket-smp9-2');
Route::get('paket-smp9-3', [Controller::class, 'paketSMP9_3'])->name('paket-smp9-3');
Route::get('paket-smp9-4', [Controller::class, 'paketSMP9_4'])->name('paket-smp9-4');
Route::get('paket-sma10-1', [Controller::class, 'paketSMA10_1'])->name('paket-sma10-1');
Route::get('paket-sma10-2', [Controller::class, 'paketSMA10_2'])->name('paket-sma10-2');
Route::get('paket-sma10-3', [Controller::class, 'paketSMA10_3'])->name('paket-sma10-3');
Route::get('paket-sma10-4', [Controller::class, 'paketSMA10_4'])->name('paket-sma10-4');
Route::get('paket-sma11-1', [Controller::class, 'paketSMA11_1'])->name('paket-sma11-1');
Route::get('paket-sma11-2', [Controller::class, 'paketSMA11_2'])->name('paket-sma11-2');
Route::get('paket-sma11-3', [Controller::class, 'paketSMA11_3'])->name('paket-sma11-3');
Route::get('paket-sma11-4', [Controller::class, 'paketSMA11_4'])->name('paket-sma11-4');
Route::get('paket-sma12-1', [Controller::class, 'paketSMA12_1'])->name('paket-sma12-1');
Route::get('paket-sma12-2', [Controller::class, 'paketSMA12_2'])->name('paket-sma12-2');
Route::get('paket-sma12-3', [Controller::class, 'paketSMA12_3'])->name('paket-sma12-3');
Route::get('paket-sma12-4', [Controller::class, 'paketSMA12_4'])->name('paket-sma12-4');

Route::get('materi-rekomen1-1', [Controller::class, 'materiRekomen1_1'])->name('materi-rekomen1-1');
Route::get('materi-rekomen1-2', [Controller::class, 'materiRekomen1_2'])->name('materi-rekomen1-2');
Route::get('materi-rekomen1-3', [Controller::class, 'materiRekomen1_3'])->name('materi-rekomen1-3');
Route::get('materi-rekomen1-4', [Controller::class, 'materiRekomen1_4'])->name('materi-rekomen1-4');
