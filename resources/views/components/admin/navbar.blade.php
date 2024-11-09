<header class="bg-white" x-data="{ open: false, profileOpen: false }">
  <div class="flex items-center h-16 max-w-screen-xl gap-8 px-4 mx-auto sm:px-6 lg:px-8">
    <a class="block text-teal-600" href="#">
      <span class="sr-only">Home</span>
      LOGO
    </a>

    <div class="flex items-center justify-end flex-1 md:justify-between">
      <!-- Mobile Menu Toggle Button -->
      <button
        class="block p-2 text-gray-600 transition border border-gray-300 rounded md:hidden"
        @click="open = !open"
      >
        <span class="sr-only">Toggle menu</span>
        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
          <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
        </svg>
      </button>

      <!-- Desktop Navigation -->
      <nav aria-label="Global" class="hidden md:block">
        <ul class="flex items-center gap-6 text-sm">
          <li><a class="text-gray-500 transition hover:text-gray-500/75" href="#">Dashboard</a></li>
          <li><a class="text-gray-500 transition hover:text-gray-500/75" href="#">Produk</a></li>
          <li><a class="text-gray-500 transition hover:text-gray-500/75" href="#">Pemesanan</a></li>
          <li><a class="text-gray-500 transition hover:text-gray-500/75" href="#">Users</a></li>
        </ul>
      </nav>

      <!-- Profile Menu -->
      <div class="relative hidden md:block" @click.away="profileOpen = false">
        <button
          type="button"
          @click="profileOpen = !profileOpen"
          class="overflow-hidden border border-gray-300 rounded-full shadow-inner"
        >
          <span class="sr-only">Toggle dashboard menu</span>
          <img
            src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?q=80&w=1770&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
            alt=""
            class="object-cover w-10 h-10"
          />
        </button>

        <div
          x-show="profileOpen"
          x-transition
          class="absolute right-0 z-10 w-56 mt-2 bg-white border border-gray-100 rounded-md shadow-lg"
        >
          <div class="p-2">
            <a href="#" class="block px-4 py-2 text-sm text-gray-500 rounded-lg hover:bg-gray-50 hover:text-gray-700">My profile</a>
            <a href="#" class="block px-4 py-2 text-sm text-gray-500 rounded-lg hover:bg-gray-50 hover:text-gray-700">Billing summary</a>
            <a href="#" class="block px-4 py-2 text-sm text-gray-500 rounded-lg hover:bg-gray-50 hover:text-gray-700">Team settings</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Mobile Navigation (Dropdown) -->
  <div x-show="open" x-transition class="md:hidden">
    <nav aria-label="Global" class="p-4 bg-white border-t border-gray-200">
      <ul class="space-y-4">
        <li><a class="block text-gray-500 transition hover:text-gray-500/75" href="#">Dashboard</a></li>
        <li><a class="block text-gray-500 transition hover:text-gray-500/75" href="#">Produk</a></li>
        <li><a class="block text-gray-500 transition hover:text-gray-500/75" href="#">Pemesanan</a></li>
        <li><a class="block text-gray-500 transition hover:text-gray-500/75" href="#">Users</a></li>
      </ul>
    </nav>
  </div>
</header>
