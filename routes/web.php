<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UserController;


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

// Halaman Utama
Route::get('/', function () {
    return view('welcome');
})->name('home');

// Halaman register
Route::get('/register', function () {
    return view('register'); 
})->name('register');

// Halaman login
Route::get('/login', function () {
    return view('login'); 
})->name('login');

// Halaman Admin
Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('dashboardadmin.blade.php');
Route::get('/admin/dashboard/datapribadimhs', [AdminController::class, 'datapribadimhs'])->name('pribadi.blade.php');