<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/index', function () {
    return view('index');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/forgot-password', function () {
    return view('forgot-password');
});

Route::get('/landingpage', function () {
    return view('landingpage');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/verifikasi', function () {
    return view('verifikasi');
});

Route::get('/manajemenuser', function () {
    return view('manajemenuser');
});

Route::get('/manajemenproduk', function () {
    return view('manajemenproduk');
});

Route::get('/', function () {
    return view('otp');
});

Route::get('/otp', function () {
    return view('otp');
});


Route::get('/berhasil', function () {
    return view('berhasil');
});