<section>
  <div class="max-w-screen-xl px-4 py-8 mx-auto sm:px-6 sm:py-12 lg:px-8">
    <header>
      <h2 class="text-xl font-bold text-gray-900 sm:text-3xl">Product Collection</h2>

      <p class="max-w-md mt-4 text-gray-500">
        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Itaque praesentium cumque iure
        dicta incidunt est ipsam, officia dolor fugit natus?
      </p>
    </header>

    <div class="mt-8">
      <p class="text-sm text-gray-500">
        Showing 
        <span>{{ $products->firstItem() }}</span> 
        to 
        <span>{{ $products->lastItem() }}</span> 
        of 
        <span>{{ $products->total() }}</span> 
        products
      </p>
    </div>

    <ul class="grid gap-4 mt-4 sm:grid-cols-2 lg:grid-cols-4">
      @forelse ( $products as $product )
        
      <li>
        <a href="#" class="relative block overflow-hidden group">
          <button
            class="absolute end-4 top-4 z-10 rounded-full bg-white p-1.5 text-gray-900 transition hover:text-gray-900/75"
          >
            <span class="sr-only">Wishlist</span>
        
            <svg
              xmlns="http://www.w3.org/2000/svg"
              fill="none"
              viewBox="0 0 24 24"
              stroke-width="1.5"
              stroke="currentColor"
              class="size-4"
            >
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z"
              />
            </svg>
          </button>
        
          <img
            src="{{ asset($product->image) }}"
            alt=""
            class="object-cover w-full h-64 transition duration-500 group-hover:scale-105 sm:h-72"
          />
        
          <div class="relative p-6 bg-white border border-gray-100">
            <p class="text-gray-700">
              Rp{{ $product->price }}
              {{-- <span class="text-gray-400 line-through">$80</span> --}}
            </p>
        
            <h3 class="mt-1.5 text-lg font-medium text-gray-900">{{ $product->name }}</h3>
        
            <p class="mt-1.5 line-clamp-3 text-gray-700">
              {{ $product->description }}.
            </p>
        
            <form class="flex flex-col-reverse gap-4 mt-4">
              <button
                class="block w-full px-4 py-3 text-sm font-medium text-gray-900 transition bg-gray-100 hover:scale-105"
              >
                Tambah Ke Keranjang
              </button>
        
              <button
                type="button"
                class="block w-full px-4 py-3 text-sm font-medium text-white transition bg-gray-900 hover:scale-105"
              >
                Beli Sekarang
              </button>
            </form>
          </div>
        </a>
      </li>
      @empty
        
      @endforelse
      
    </ul>

    <ol class="flex justify-center gap-1 mt-8 text-xs font-medium">
      <!-- Tombol Previous -->
      @if ($products->onFirstPage())
          <li>
              <span
                  class="inline-flex items-center justify-center text-gray-300 border border-gray-100 cursor-not-allowed size-8"
              >
                  <svg xmlns="http://www.w3.org/2000/svg" class="size-3" viewBox="0 0 20 20" fill="currentColor">
                      <path
                        fill-rule="evenodd"
                        d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
                        clip-rule="evenodd"
                      />
                  </svg>
              </span>
          </li>
      @else
          <li>
              <a href="{{ $products->previousPageUrl() }}" class="inline-flex items-center justify-center border border-gray-100 size-8">
                  <span class="sr-only">Prev Page</span>
                  <svg xmlns="http://www.w3.org/2000/svg" class="size-3" viewBox="0 0 20 20" fill="currentColor">
                      <path
                          fill-rule="evenodd"
                          d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
                          clip-rule="evenodd"
                        />
                  </svg>
              </a>
          </li>
      @endif
  
      <!-- Nomor Halaman -->
      @foreach ($products->getUrlRange(1, $products->lastPage()) as $page => $url)
          @if ($page == $products->currentPage())
              <li class="block leading-8 text-center text-white bg-black border-black size-8">{{ $page }}</li>
          @else
              <li>
                  <a href="{{ $url }}" class="block leading-8 text-center border border-gray-100 size-8">{{ $page }}</a>
              </li>
          @endif
      @endforeach
  
      <!-- Tombol Next -->
      @if ($products->hasMorePages())
          <li>
              <a href="{{ $products->nextPageUrl() }}" class="inline-flex items-center justify-center border border-gray-100 size-8">
                  <span class="sr-only">Next Page</span>
                  <svg xmlns="http://www.w3.org/2000/svg" class="size-3" viewBox="0 0 20 20" fill="currentColor">
                      <path
                      fill-rule="evenodd"
                      d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                      clip-rule="evenodd"
                    />
                  </svg>
              </a>
          </li>
      @else
          <li>
              <span class="inline-flex items-center justify-center text-gray-300 border border-gray-100 cursor-not-allowed size-8">
                  <svg xmlns="http://www.w3.org/2000/svg" class="size-3" viewBox="0 0 20 20" fill="currentColor">
                    <path
                    fill-rule="evenodd"
                    d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                    clip-rule="evenodd"
                  />
                  </svg>
              </span>
          </li>
      @endif
  </ol>  
  </div>
</section>