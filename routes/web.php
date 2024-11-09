<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Customer\HomeController;

Route::get('/masuk', [AuthController::class, 'login'])->name('login');
Route::post('/masuk', [AuthController::class, 'login_post'])->name('login_post');
Route::get('/daftar', [AuthController::class, 'register'])->name('register');
Route::post('/daftar', [AuthController::class, 'register_post'])->name('register_post');
Route::get('/keluar', [AuthController::class, 'logout'])->name('logout');

Route::get('/', [HomeController::class, 'index'])->name('home.index');


Route::fallback(function () {
    return view('pages.error.404');
});