@extends('layouts.app')

@section('title', 'Keranjang | E-Commerce')

@section('content')
<div class="bg-white min-h-screen">
  <div class="mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-24 lg:px-0">
    <h1 class="text-center text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Keranjang Belanja</h1>

    <div class="mt-12">
      <section aria-labelledby="cart-heading">
        <h2 id="cart-heading" class="sr-only">Barang di keranjang belanja Anda</h2>

        <ul role="list" class="divide-y divide-gray-200 border-b border-t border-gray-200">
          @forelse ( $carts as $cart )
            <li class="flex py-6">
              <div class="flex-shrink-0">
                <img src="{{ asset('/storage/products/' . $cart->product->image) }}" alt="{{ $cart->product->name }}." class="h-24 w-24 rounded-md object-cover object-center sm:h-32 sm:w-32">
              </div>

              <div class="ml-4 flex flex-1 flex-col sm:ml-6">
                <div>
                  <div class="flex justify-between">
                    <h4 class="text-sm">
                      <a href="#" class="font-medium text-gray-700 hover:text-gray-800">
                        {{ $cart->product->name }}.
                      </a>
                    </h4>
                    <p class="ml-4 text-sm font-medium text-gray-900">Rp{{ number_format($cart->product->price, 0, ',', '.') }}</p>
                  </div>
                </div>

                <div class="mt-4 flex flex-1 items-end justify-between">
                  <p class="flex items-center space-x-2 text-sm text-gray-700">
                    <svg class="h-5 w-5 flex-shrink-0 text-green-500" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                      <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                    </svg>
                    {{-- <span>Stok tersedia</span> --}}
                  </p>
                  <form action="{{ route('cart.destroy', $cart->id) }}" method="POST" class="ml-4" onclick="alert('Apakah Anda yakin ingin menghapus produk ini?')">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="text-sm font-medium text-indigo-600 hover:text-indigo-500">
                      <span>Hapus</span>
                    </button>
                  </form>
                </div>
              </div>
            </li>  
          @empty
            <div>
              Kosong
            </div>
          @endforelse
        </ul>
      </section>

      <!-- Ringkasan pesanan -->
      @if( $carts->count() > 0 )
        <section aria-labelledby="summary-heading" class="mt-10">
          <h2 id="summary-heading" class="sr-only">Ringkasan Pesanan</h2>

          <div>
            <dl class="space-y-4">
              <div class="flex items-center justify-between">
                <dt class="text-base font-medium text-gray-900">Subtotal</dt>
                <dd class="ml-4 text-base font-medium text-gray-900">Rp{{ number_format($total, 0, ',', '.') }}</dd>
              </div>
            </dl>
            <p class="mt-1 text-sm text-gray-500">Pengiriman dan pajak akan dihitung saat checkout.</p>
          </div>

          <div class="mt-10">
            <button type="submit" class="w-full rounded-md border border-transparent bg-indigo-600 px-4 py-3 text-base font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 focus:ring-offset-gray-50">Checkout</button>
          </div>

          <div class="mt-6 text-center text-sm">
            <p>
              atau
              <a href="{{ route('products.index') }}" class="font-medium text-indigo-600 hover:text-indigo-500">
                Lanjutkan Belanja
                <span aria-hidden="true"> &rarr;</span>
              </a>
            </p>
          </div>
        </section>
      @endif
    </div>
  </div>
</div>
@endsection