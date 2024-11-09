<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Customer\HomeController;
use App\Http\Controllers\Customer\ProductController;

Route::get('/masuk', [AuthController::class, 'login'])->name('login');
Route::post('/masuk', [AuthController::class, 'login_post'])->name('login_post');
Route::get('/daftar', [AuthController::class, 'register'])->name('register');
Route::post('/daftar', [AuthController::class, 'register_post'])->name('register_post');
Route::get('/keluar', [AuthController::class, 'logout'])->name('logout');

Route::get('/', [HomeController::class, 'index'])->name('home.index');
Route::get('/produk', [ProductController::class, 'index'])->name('products.index');
Route::get('/pesanan', [ProductController::class, 'index'])->name('orders.index');
Route::get('/keranjang', [ProductController::class, 'index'])->name('cart.index');
Route::get('/profile', [ProductController::class, 'index'])->name('profile.index');

Route::prefix('dashboard')->middleware(['auth', 'admin.superadmin'])->group(function () {
    
});


Route::fallback(function () {
    return view('pages.error.404');
});