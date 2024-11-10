@extends('layouts.dashboard')

@section('title', 'Dashboard | Produk | E-Commerce')

@section('content')
<!--
  Heads up! 👋

  Plugins:
    - @tailwindcss/forms
-->

<div class="max-w-screen-xl px-4 py-16 mx-auto sm:px-6 lg:px-8">
  <div class="max-w-lg mx-auto">
    <h1 class="text-2xl font-bold text-center text-indigo-600 sm:text-3xl">Tambah Produk Baru</h1>

    <p class="max-w-md mx-auto mt-4 text-center text-gray-500">
      Silakan lengkapi informasi produk di bawah ini untuk menambahkannya ke dalam katalog. Pastikan data yang diisi akurat untuk memudahkan pelanggan dalam menemukan produk ini.
    </p>

    <form action="{{ route('dashboard.products.store') }}" method="POST" class="p-4 mt-6 mb-0 space-y-4 rounded-sm shadow-sm sm:p-6 lg:p-8" enctype="multipart/form-data">
      @csrf

      <div>
        <label for="name" class="sr-only">Name</label>

        <div class="relative">
          <input
            type="text"
            id="name"
            name="name"
            value="{{ old('name') }}"
            class="w-full p-4 text-sm border-gray-200 rounded-lg shadow-sm pe-12"
            placeholder="Masukan Nama Produk"
          />

          <span class="absolute inset-y-0 grid px-4 end-0 place-content-center">
            <i class='text-slate-400 bx bxs-t-shirt'></i>
          </span>
        </div>
      </div>

      <div>
        <label for="description" class="sr-only">Description</label>

        <div class="relative">
          <textarea
            id="description"
            name="description"
            class="w-full p-4 text-sm border-gray-200 rounded-lg shadow-sm"
            placeholder="Masukkan Deskripsi Produk"
          >{{ old('description') }}</textarea>
        

          <span class="absolute inset-y-0 grid px-4 end-0 place-content-center">
            
          </span>
        </div>
      </div>

      <div>
        <label for="price" class="sr-only">Price</label>

        <div class="relative">
          <input
            type="number"
            id="price"
            name="price"
            value="{{ old('price') }}"
            class="w-full p-4 text-sm border-gray-200 rounded-lg shadow-sm pe-12
            [-moz-appearance:_textfield] [&::-webkit-inner-spin-button]:m-0 [&::-webkit-inner-spin-button]:appearance-none [&::-webkit-outer-spin-button]:m-0 [&::-webkit-outer-spin-button]:appearance-none"
            placeholder="Masukan Harga Produk"
          />

          <span class="absolute inset-y-0 grid px-4 end-0 place-content-center">
            <i class='text-slate-400 bx bxs-purchase-tag'></i>
          </span>
        </div>
      </div>

      <div>
        <label for="category_id" class="sr-only">Category</label>

        <div class="relative">
          <select
            name="category_id"
            id="category_id"
            class="w-full p-4 text-sm border-gray-200 rounded-lg shadow-sm pe-12"
          >
            @foreach ( App\Models\Category::all() as $category )
              <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach
          </select>

          <span class="absolute inset-y-0 grid px-4 end-0 place-content-center">
            
          </span>
        </div>
      </div>

      <div>
        <label for="stock" class="sr-only">Stock</label>

        <div class="relative">
          <input
            type="number"
            id="stock"
            name="stock_quantity"
            value="{{ old('stock_quantity') }}"
            class="w-full p-4 text-sm border-gray-200 rounded-lg shadow-sm pe-12
            [-moz-appearance:_textfield] [&::-webkit-inner-spin-button]:m-0 [&::-webkit-inner-spin-button]:appearance-none [&::-webkit-outer-spin-button]:m-0 [&::-webkit-outer-spin-button]:appearance-none"
            placeholder="Masukan Stok Produk"
          />

          <span class="absolute inset-y-0 grid px-4 end-0 place-content-center">
            <i class='text-slate-400 bx bxs-box'></i>
          </span>
        </div>
      </div>

      <div>
        <label for="discount" class="sr-only">Discount</label>

        <div class="relative">
          <input
            type="number"
            id="discount"
            name="discount"
            value="{{ old('discount') }}"
            class="w-full p-4 text-sm border-gray-200 rounded-lg shadow-sm pe-12
            [-moz-appearance:_textfield] [&::-webkit-inner-spin-button]:m-0 [&::-webkit-inner-spin-button]:appearance-none [&::-webkit-outer-spin-button]:m-0 [&::-webkit-outer-spin-button]:appearance-none"
            placeholder="Masukan Diskon Produk"
          />

          <span class="absolute inset-y-0 grid px-4 end-0 place-content-center">
            <i class='text-slate-400 bx bxs-discount'></i>
          </span>
        </div>
      </div>

      <div>
        <label for="image" class="sr-only">Image</label>

        <div class="relative">
          <input
            type="file"
            id="image"
            name="image"
            value="{{ old('image') }}"
            class="w-full p-4 text-sm border-gray-200 rounded-lg shadow-sm pe-12"
            placeholder="Masukan Diskon Produk"
          />

          <span class="absolute inset-y-0 grid px-4 end-0 place-content-center">
            <i class='text-slate-400 bx bxs-file-image'></i>
          </span>
        </div>
      </div>


      <button
        type="submit"
        class="block w-full px-5 py-3 text-sm font-medium text-white bg-indigo-600 rounded-lg"
      >
        Kirim
      </button>
    </form>
  </div>
</div>

@endsection