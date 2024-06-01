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
Route::get('logout', [Controller::class, 'logout'])->name('logout');
Route::post('login', [Controller::class, 'loginPost'])->name('login.action');
Route::get('signup', [Controller::class, 'signup'])->name('signup');
