<!-- Navbar · partials/navbar.blade.php -->
<header x-data="{ open: false }" class="sticky top-0 z-50 bg-white/90 backdrop-blur-md border-b border-[#f0e6e0]" style="box-shadow:0 1px 20px rgba(180,140,120,0.07);">
  <div class="max-w-7xl mx-auto px-6 lg:px-10">

    <div class="h-16 flex items-center justify-between">

      <!-- Logo -->
      <a href="#home" class="flex items-center gap-2.5">
        <div class="w-8 h-8 rounded-full flex items-center justify-center" style="background:linear-gradient(135deg,#e8bfb5,#c9a96e);">
          <svg width="14" height="14" viewBox="0 0 14 14" fill="none">
            <path d="M7 1C7 1 3 4 3 8C3 10.2091 4.79086 12 7 12C9.20914 12 11 10.2091 11 8C11 4 7 1 7 1Z" fill="white"/>
          </svg>
        </div>
        <span class="font-display font-semibold text-xl tracking-wide" style="color:var(--charcoal);">Beatrice Beauty</span>
      </a>

      <!-- Links (desktop) -->
      <nav class="hidden md:flex items-center gap-8">
        <a href="{{ url('/') }}" class="nav-link">Home</a>
        <a href="{{ url('/') }}#services" class="nav-link">Services</a>
        <a href="{{ url('/') }}#about" class="nav-link">About</a>
        <a href="{{ url('/contact') }}" class="nav-link">Contact</a>
        <a href="{{ url('/booking') }}" class="nav-link">Book</a>
      </nav>

      <!-- CTA -->
      <div class="flex items-center gap-3">
        <a href="{{ url('/booking') }}" class="btn-gold px-5 py-2.5 rounded-full text-sm hidden sm:inline-flex items-center gap-1.5">
          Book Now
          <svg width="14" height="14" viewBox="0 0 14 14" fill="none">
            <path d="M2 7h10M8 3l4 4-4 4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
          </svg>
        </a>

        <button
          type="button"
          @click="open = !open"
          class="md:hidden p-2 rounded-lg hover:bg-[#fdf0eb] transition-colors"
        >
          <svg width="20" height="20" viewBox="0 0 20 20" fill="none">
            <path d="M3 5h14M3 10h14M3 15h14" stroke="var(--charcoal)" stroke-width="1.5" stroke-linecap="round"/>
          </svg>
        </button>
      </div>

    </div>

    <!-- Mobile menu -->
    <div x-show="open" x-transition x-cloak class="md:hidden px-2 pb-4 space-y-3">
      <a href="{{ url('/') }}" class="block nav-link text-sm">Home</a>
      <a href="{{ url('/') }}#services" class="block nav-link text-sm">Services</a>
      <a href="{{ url('/') }}#about" class="block nav-link text-sm">About</a>
      <a href="{{ url('/contact') }}" class="block nav-link text-sm">Contact</a>
      <a href="{{ url('/booking') }}" class="block nav-link text-sm">Book</a>
    </div>

  </div>
</header>
<!-- End Navbar -->