<header class="bg-white " x-data="{ open: false }">
  <div class="fixed z-50 w-full px-4 bg-white sm:px-6 lg:px-8">
    <div class="flex items-center justify-between h-16">
      {{-- <div class="flex-1 md:flex md:items-center md:gap-12">
        <a class="block text-slate-950" href="#">
          <span class="sr-only">Home</span>
          <svg class="h-8" viewBox="0 0 28 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <!-- path -->
          </svg>
        </a>
      </div> --}}

      <div class="flex items-center justify-end flex-1 md:justify-between">
        <!-- Menu untuk Desktop -->
        <nav aria-label="Global" class="hidden md:block">
          <ul class="flex items-center gap-6">
            <li>
              <a class="text-gray-500 transition hover:text-gray-500/75" href="{{ route('home.index') }}"> Beranda </a>
            </li>
            <li>
              <a class="text-gray-500 transition hover:text-gray-500/75" href="#"> Produk </a>
            </li>
            <li>
              <a class="text-gray-500 transition hover:text-gray-500/75" href="#"> Pesanan </a>
            </li>
          </ul>
        </nav>

        <div class="flex items-center gap-4">
          <div class="sm:flex sm:gap-4">
            <a
              class="bg-slate-950 px-5 py-2.5 font-medium text-white shadow"
              href="{{ route('login') }}"
            >
              Masuk
            </a>

            <div class="hidden sm:flex">
              <a
                class="bg-gray-100 px-5 py-2.5 font-medium text-slate-950"
                href="{{ route('register') }}"
              >
                Daftar
              </a>
            </div>
          </div>

          <!-- Tombol untuk membuka menu mobile -->
          <div class="block md:hidden">
            <button 
              @click="open = !open" 
              class="p-2 text-gray-600 transition bg-gray-100 hover:text-gray-600/75"
            >
              <svg
                xmlns="http://www.w3.org/2000/svg"
                class="size-5"
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor"
                stroke-width="2"
              >
                <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
              </svg>
            </button>
          </div>
        </div>
      </div>
    </div>

    <!-- Menu responsif untuk tampilan mobile dengan animasi transisi -->
    <nav 
      x-show="open" 
      x-transition:enter="transition ease-out duration-300 transform"
      x-transition:enter-start="opacity-0 -translate-y-4"
      x-transition:enter-end="opacity-100 translate-y-0"
      x-transition:leave="transition ease-in duration-200 transform"
      x-transition:leave-start="opacity-100 translate-y-0"
      x-transition:leave-end="opacity-0 -translate-y-4"
      @click.away="open = false" 
      aria-label="Global" 
      class="md:hidden"
    >
      <ul class="px-4 mt-2 space-y-2 text-sm">
        <li>
          <a class="block py-2 text-gray-700 transition hover:text-gray-500" href="{{ route('home.index') }}"> Beranda </a>
        </li>
        <li>
          <a class="block py-2 text-gray-700 transition hover:text-gray-500" href="#"> Produk </a>
        </li>
        <li>
          <a class="block py-2 text-gray-700 transition hover:text-gray-500" href="#"> Pesanan </a>
        </li>
        <li>
          <span class="relative flex justify-center">
            <div
              class="absolute inset-x-0 h-px -translate-y-1/2 bg-transparent opacity-75 top-1/2 bg-gradient-to-r from-transparent via-gray-500 to-transparent"
            ></div>
          
            <span class="relative z-10 px-6 pb-2 bg-white">Masuk Disini</span>
          </span>
        </li>
        <li>
          <a
            class="block bg-slate-950 px-5 py-2.5 text-sm font-medium text-white text-center"
            href="{{ route('login') }}"
          >
            Masuk
          </a>
        </li>
        <li>
          <a
            class="block bg-gray-100 px-5 py-2.5 text-sm font-medium text-slate-950 text-center"
            href="{{ route('register') }}"
          >
            Daftar
          </a>
        </li>
      </ul>
    </nav>
  </div>
</header>