@extends('layouts.dashboard')

@section('title', 'Dashboard | E-Commerce')

@section('content')
<div class="max-w-screen-xl px-4 py-8 mx-auto sm:px-6 sm:py-12 lg:px-8">
  <div class="max-w-3xl mx-auto text-center">
    <h2 class="text-3xl font-bold text-gray-900 sm:text-4xl">Dashboard</h2>
  
    <p class="mt-4 text-gray-500 sm:text-xl">
      Selamat datang di halaman dashboard. Di sini Anda dapat mengelola dan memantau berbagai informasi terkait akun Anda.
    </p>
  </div>  

  <dl class="grid grid-cols-1 gap-4 mt-6 sm:mt-8 sm:grid-cols-2 lg:grid-cols-4">
    <div class="flex flex-col px-4 py-8 text-center rounded-lg bg-blue-50">
      <dt class="order-last text-lg font-medium text-gray-500">Total Pendapatan</dt>
      <dd class="text-4xl font-extrabold text-blue-600 md:text-5xl">Rp4.8m</dd>
    </div>
  
    <div class="flex flex-col px-4 py-8 text-center rounded-lg bg-blue-50">
      <dt class="order-last text-lg font-medium text-gray-500">Produk Terlaris</dt>
      <dd class="text-4xl font-extrabold text-blue-600 md:text-5xl">24</dd>
    </div>
  
    <div class="flex flex-col px-4 py-8 text-center rounded-lg bg-blue-50">
      <dt class="order-last text-lg font-medium text-gray-500">Total Produk</dt>
      <dd class="text-4xl font-extrabold text-blue-600 md:text-5xl">86</dd>
    </div>
  
    <div class="flex flex-col px-4 py-8 text-center rounded-lg bg-blue-50">
      <dt class="order-last text-lg font-medium text-gray-500">Jumlah Pembelian</dt>
      <dd class="text-4xl font-extrabold text-blue-600 md:text-5xl">86k</dd>
    </div>
  </dl>    
</div>

@endsection