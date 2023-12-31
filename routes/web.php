<?php

use App\Http\Controllers\Auth\LoginRegisterController;
use App\Http\Controllers\UserController;
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

Route::get('/', function () {
    return view('auth.login');
});


Route::controller(LoginRegisterController::class)->group(function() {
    Route::get('/register', 'register')->name('register');
    Route::post('/store', 'store')->name('store');
    Route::get('/login', 'login')->name('login');
    Route::post('/authenticate', 'authenticate')->name('authenticate');
    Route::get('/dashboard', 'dashboard')->name('home');
    Route::post('/logout', 'logout')->name('logout');
});


Route::get('/profile', function () {
    return view('pages.profiles');
  })->name('user-info');

Route::controller(UserController::class)->group(function() {
    Route::post('/profile', 'update')->name('update-profile');
});

Route::get('/user', function () {
    return view('pages.users');
  })->name('user-management');

