<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return redirect('/dashboard');
});

Route::get('/login', [AuthController::class, 'tunjukinFormLogin'])->middleware('guest')->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.submit');

Route::get('/register', [AuthController::class, 'tunjukinFormRegister'])->middleware('guest')->name('register');
Route::post('/register', [AuthController::class, 'register'])->name('register.submit');

Route::get('/dashboard', [AuthController::class, 'dashboard'])->middleware('auth');
Route::get('/admin', [AuthController::class, 'admin'])->middleware(['auth', 'admin']);

Route::get('/submit-job', [AuthController::class, 'submitJob'])->middleware('auth');
Route::get('/jobs', [AuthController::class, 'jobs'])->middleware('auth');
Route::get('/jobs-detail', [AuthController::class, 'jobsDetail'])->middleware('auth');

Route::post('/logout', [AuthController::class, 'logout']);

// middleware('auth') : ini gunanya buat ngecek kalau user udah login belum, kalau belum login bakal gabisa ngakses dashboard, terus bakal diarahin ke halaman login
// middleware('guest') : ini gunanya buat ngecek kalau user udah login belum, kalau udah login bakal gabisa ngakses halaman login dan register, terus bakal diarahin ke halaman dashboard
// middleware('admin') : ini gunanya buat ngecek kalau user yang login itu admin atau bukan, kalau bukan admin maka bakal gabisa ngakses halaman admin, terus bakal diarahin ke halaman dashboard biasa