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

// Route home
Route::get('/', function () {
    return view('home');
});

// Route daftar mahasiswa
Route::get('/mahasiswa', function () {
    return view('mahasiswa');
});

// Route tambah mahasiswa
Route::get('/tambahmahasiswa', function () {
    return view('tambahmahasiswa');
});