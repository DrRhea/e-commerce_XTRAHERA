<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Customer\HomeController;

Route::get('/masuk', [AuthController::class, 'login'])->name('login');
Route::get('/daftar', [AuthController::class, 'register'])->name('register');

Route::get('/', [HomeController::class, 'index'])->name('home.index');


Route::fallback(function () {
    return view('pages.error.404');
});