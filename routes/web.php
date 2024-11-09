<?php

use App\Http\Controllers\Admin\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Customer\HomeController;
use App\Http\Controllers\Customer\ProductController;

Route::middleware(['guest'])->group(function () {
    Route::controller(AuthController::class)->group(function () {
        Route::get('/masuk', 'login')->name('login');
        Route::post('/masuk', 'login_post')->name('login_post');
        Route::get('/daftar', 'register')->name('register');
        Route::post('/daftar', 'register_post')->name('register_post');
    });
});

Route::get('/keluar', [AuthController::class, 'logout'])->middleware('auth')->name('logout');


Route::get('/', [HomeController::class, 'index'])->name('home.index');
Route::get('/produk', [ProductController::class, 'index'])->name('products.index');
Route::get('/pesanan', [ProductController::class, 'index'])->name('orders.index');
Route::get('/keranjang', [ProductController::class, 'index'])->name('cart.index');
Route::get('/profile', [ProductController::class, 'index'])->name('profile.index');

Route::prefix('dashboard')->middleware(['auth', 'admin'])->group(function () {
    Route::controller(DashboardController::class)->group(function () {
        Route::get('/', 'index')->name('dashboard.index');
    });
});


Route::fallback(function () {
    return view('pages.error.404');
});