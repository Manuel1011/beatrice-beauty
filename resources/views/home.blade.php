@extends('layouts.app')

@section('content')

   <!-- Hero Section -->
  <div id="hero" class="relative overflow-hidden hero-grain" style="background:linear-gradient(140deg,#fdf8f5 0%,#f9ede7 45%,#f5e3db 100%); min-height:92vh; display:flex; align-items:center;">

    <!-- Decorative circles -->
    <div class="absolute -top-24 -right-24 w-96 h-96 rounded-full opacity-30" style="background:radial-gradient(circle,#e8bfb5,transparent 70%);"></div>
    <div class="absolute bottom-0 -left-16 w-72 h-72 rounded-full opacity-20" style="background:radial-gradient(circle,#c9a96e,transparent 70%);"></div>

    <div class="relative z-10 max-w-7xl mx-auto px-6 lg:px-10 py-20 grid lg:grid-cols-2 gap-16 items-center w-full">

      <!-- Left copy -->
      <div>
        <div class="fade-up inline-flex items-center gap-2 px-4 py-1.5 rounded-full border text-xs font-medium tracking-widest uppercase mb-6" style="border-color:#e8bfb5; color:var(--gold); background:rgba(232,191,181,0.18);">
          ✦ Accra's Premier Hair Studio
        </div>

        <h1 class="fade-up delay-1 font-display font-light leading-tight mb-6" style="font-size:clamp(2.6rem,5.5vw,4.5rem); color:var(--charcoal); line-height:1.12;">
          Luxury Hair Services,<br/>
          <em style="font-style:italic; color:var(--gold);">Booked Effortlessly</em>
        </h1>

        <p class="fade-up delay-2 text-base leading-relaxed mb-10 max-w-md" style="color:var(--muted);">
          From silk presses to flawless wig installs — experience premium hair care crafted for the modern woman. Book your appointment in minutes.
        </p>

        <div class="fade-up delay-3 flex flex-wrap gap-4">
          <a href="/booking" class="btn-gold px-8 py-3.5 rounded-full text-sm font-medium inline-flex items-center gap-2">
            Book Appointment
            <svg width="14" height="14" viewBox="0 0 14 14" fill="none"><path d="M2 7h10M8 3l4 4-4 4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
          </a>
          <a href="#services" class="btn-outline-gold px-8 py-3.5 rounded-full text-sm inline-flex items-center gap-2">
            View Services
          </a>
        </div>

        <!-- Social proof -->
        <div class="mt-12 flex items-center gap-6 flex-wrap">
        <div class="flex -space-x-2">
          <img src="https://images.unsplash.com/photo-1531746020798-e6953c6e8e04?w=40&h=40&fit=crop&crop=face" class="w-9 h-9 rounded-full border-2 border-white object-cover" alt=""/>
          <img src="https://images.unsplash.com/photo-1524504388940-b1c1722653e1?w=40&h=40&fit=crop&crop=face" class="w-9 h-9 rounded-full border-2 border-white object-cover" alt=""/>
          <img src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?w=40&h=40&fit=crop&crop=face" class="w-9 h-9 rounded-full border-2 border-white object-cover" alt=""/>
      </div>
          <div>
            <div class="flex gap-0.5 mb-0.5">
              <span class="star text-sm">★★★★★</span>
            </div>
            <p class="text-xs" style="color:var(--muted);">Loved by <strong style="color:var(--charcoal);">500+</strong> happy clients</p>
          </div>
        </div>
      </div>

     <!-- Right image collage -->
<div class="relative hidden lg:block">
  <div class="grid grid-cols-2 gap-4">

    <!-- IMAGE 1 (Silk Press) -->
    <img src="{{ asset('images/hero/silk-press.png') }}"
         class="rounded-3xl object-cover w-full h-72 card-shadow-lg"
         alt="Silk press hair styling"
         style="margin-top:3rem;" />

    <!-- IMAGE 2 (Braids) -->
    <img src="{{ asset('images/hero/braids.png') }}"
         class="rounded-3xl object-cover w-full h-72 card-shadow-lg"
         alt="Braiding service"
         style="margin-top:-1.5rem;" />

    <!-- IMAGE 3 (Wig Install) -->
    <img src="{{ asset('images/hero/wig.png') }}"
         class="rounded-3xl object-cover w-full h-60 card-shadow-lg"
         alt="Wig installation" />

    <!-- KEEP ONE ORIGINAL OR DUPLICATE BEST -->
    <img src="{{ asset('images/hero/wash.png') }}"
         class="rounded-3xl object-cover w-full h-44 card-shadow-lg"
         alt="Luxury hair styling"
         style="margin-top:1.5rem;" />

  </div>

  <!-- Floating badge -->
  <div class="absolute top-8 -left-6 bg-white rounded-2xl px-4 py-3 card-shadow flex items-center gap-3 text-sm">
    <div class="w-9 h-9 rounded-full flex items-center justify-center text-lg" style="background:var(--nude);">✂️</div>
    
  </div>
</div>

    </div>
  </div>
  <!-- End Hero Section -->

  <!-- Services Section -->
  <div id="services" class="py-24 px-6 lg:px-10 max-w-7xl mx-auto">

    <div class="text-center mb-14">
      <p class="text-xs font-medium tracking-widest uppercase mb-3" style="color:var(--gold);">Our Specialties</p>
      <h2 class="font-display font-light text-4xl lg:text-5xl" style="color:var(--charcoal);">Featured Services</h2>
      <p class="mt-4 text-sm leading-relaxed max-w-md mx-auto" style="color:var(--muted);">Expertly crafted services using premium products, designed to make you feel effortlessly beautiful.</p>
    </div>

    <!-- Service Cards Grid -->
    <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6">

      <!-- Card 1: Knotless Braids -->
      <div class="bg-white rounded-2xl overflow-hidden card-shadow group hover:shadow-lg transition-shadow duration-300">
        <div class="overflow-hidden h-72">
          <img src="{{ asset('images/services/knotless-braids.png') }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" alt="Knotless Braids" />
        </div>
        <div class="p-5">
          <div class="flex justify-between items-start mb-2">
            <h3 class="font-display font-medium text-xl" style="color:var(--charcoal);">Knotless Braids</h3>
            <span class="text-sm font-medium" style="color:var(--gold);">GH₵450</span>
          </div>
          <p class="text-xs leading-relaxed mb-5" style="color:var(--muted);">Clean, tension-free knotless braids styled to perfection. Long-lasting protective styling.</p>
          <a href="/booking" class="btn-gold w-full py-2.5 rounded-xl text-xs font-medium text-center block">Book Now</a>
        </div>
      </div>

      <!-- Card 2: Wig Install -->
      <div class="bg-white rounded-2xl overflow-hidden card-shadow group hover:shadow-lg transition-shadow duration-300">
        <div class="overflow-hidden h-72">
          <img src="{{ asset('images/services/wig-install.png') }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" alt="Wig Install" />
        </div>
        <div class="p-5">
          <div class="flex justify-between items-start mb-2">
            <h3 class="font-display font-medium text-xl" style="color:var(--charcoal);">Wig Install</h3>
            <span class="text-sm font-medium" style="color:var(--gold);">GH₵300</span>
          </div>
          <p class="text-xs leading-relaxed mb-5" style="color:var(--muted);">Seamless, natural-looking wig installs customised to your hairline and style preference.</p>
          <a href="/booking" class="btn-gold w-full py-2.5 rounded-xl text-xs font-medium text-center block">Book Now</a>
        </div>
      </div>

      <!-- Card 3: Closure Sew-In -->
      <div class="bg-white rounded-2xl overflow-hidden card-shadow group hover:shadow-lg transition-shadow duration-300">
        <div class="overflow-hidden h-72">
          <img src="{{ asset('images/services/closure-sew-in.png') }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" alt="Closure Sew-In" />
        </div>
        <div class="p-5">
          <div class="flex justify-between items-start mb-2">
            <h3 class="font-display font-medium text-xl" style="color:var(--charcoal);">Closure Sew-In</h3>
            <span class="text-sm font-medium" style="color:var(--gold);">GH₵550</span>
          </div>
          <p class="text-xs leading-relaxed mb-5" style="color:var(--muted);">Full closure sew-in for a natural scalp look. Premium bundles available for purchase.</p>
          <a href="/booking" class="btn-gold w-full py-2.5 rounded-xl text-xs font-medium text-center block">Book Now</a>
        </div>
      </div>

      <!-- Card 4: Silk Press -->
      <div class="bg-white rounded-2xl overflow-hidden card-shadow group hover:shadow-lg transition-shadow duration-300">
        <div class="overflow-hidden h-72">
          
        <img src="{{ asset('images/services/silk-press.png') }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" alt="Silk Press" />
        </div>
        <div class="p-5">
          <div class="flex justify-between items-start mb-2">
            <h3 class="font-display font-medium text-xl" style="color:var(--charcoal);">Silk Press</h3>
            <span class="text-sm font-medium" style="color:var(--gold);">GH₵200</span>
          </div>
          <p class="text-xs leading-relaxed mb-5" style="color:var(--muted);">Smooth, glossy silk press with heat protection for a healthy, salon-fresh finish.</p>
          <a href="/booking" class="btn-gold w-full py-2.5 rounded-xl text-xs font-medium text-center block">Book Now</a>
        </div>
      </div>

      <!-- Card 5: Stitch Braids -->
      <div class="bg-white rounded-2xl overflow-hidden card-shadow group hover:shadow-lg transition-shadow duration-300">
        <div class="overflow-hidden h-72">
          <img src="{{ asset('images/services/stitch-braids.png') }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" alt="Stitch Braids" />
        </div>
        <div class="p-5">
          <div class="flex justify-between items-start mb-2">
            <h3 class="font-display font-medium text-xl" style="color:var(--charcoal);">Stitch Braids</h3>
            <span class="text-sm font-medium" style="color:var(--gold);">GH₵280</span>
          </div>
          <p class="text-xs leading-relaxed mb-5" style="color:var(--muted);">Neat, defined stitch braids with clean parts and a sleek finish perfect for everyday glam.</p>
          <a href="/booking" class="btn-gold w-full py-2.5 rounded-xl text-xs font-medium text-center block">Book Now</a>
        </div>
      </div>

      <!-- Card 6: Frontal Install -->
      <div class="bg-white rounded-2xl overflow-hidden card-shadow group hover:shadow-lg transition-shadow duration-300">
        <div class="overflow-hidden h-72">
          <img src="{{ asset('images/services/frontal-install.png') }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" alt="Frontal Install" />
        </div>
        <div class="p-5">
          <div class="flex justify-between items-start mb-2">
            <h3 class="font-display font-medium text-xl" style="color:var(--charcoal);">Frontal Install</h3>
            <span class="text-sm font-medium" style="color:var(--gold);">GH₵380</span>
          </div>
          <p class="text-xs leading-relaxed mb-5" style="color:var(--muted);">Flawless frontal installs with a soft natural hairline, customised styling, and long-lasting hold.</p>
          <a href="/booking" class="btn-gold w-full py-2.5 rounded-xl text-xs font-medium text-center block">Book Now</a>
        </div>
      </div>

      <!-- Card 7: Natural Hair Treatment -->
      <div class="bg-white rounded-2xl overflow-hidden card-shadow group hover:shadow-lg transition-shadow duration-300">
        <div class="overflow-hidden h-72">
          <img src="{{ asset('images/services/natural-hair-treatment.png') }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" alt="Natural Hair Treatment" />
        </div>
        <div class="p-5">
          <div class="flex justify-between items-start mb-2">
            <h3 class="font-display font-medium text-xl" style="color:var(--charcoal);">Natural Hair Treatment</h3>
            <span class="text-sm font-medium" style="color:var(--gold);">GH₵180</span>
          </div>
          <p class="text-xs leading-relaxed mb-5" style="color:var(--muted);">Deep conditioning, scalp care, and strengthening treatment designed to restore healthy natural hair.</p>
          <a href="/booking" class="btn-gold w-full py-2.5 rounded-xl text-xs font-medium text-center block">Book Now</a>
        </div>
      </div>

      <!-- Card 8: Bridal Styling -->
      <div class="bg-white rounded-2xl overflow-hidden card-shadow group hover:shadow-lg transition-shadow duration-300">
        <div class="overflow-hidden h-72">
          <img src="{{ asset('images/services/bridal-styling.png') }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" alt="Bridal Styling" />
        </div>
        <div class="p-5">
          <div class="flex justify-between items-start mb-2">
            <h3 class="font-display font-medium text-xl" style="color:var(--charcoal);">Bridal Styling</h3>
            <span class="text-sm font-medium" style="color:var(--gold);">GH₵650</span>
          </div>
          <p class="text-xs leading-relaxed mb-5" style="color:var(--muted);">Luxury bridal hair styling for your big day, including consultation, prep, and polished finish.</p>
          <a href="/booking" class="btn-gold w-full py-2.5 rounded-xl text-xs font-medium text-center block">Book Now</a>
        </div>
      </div>

    </div>
    <!-- End Service Cards -->

  </div>
  <!-- End Services Section -->

  <!-- ABOUT SECTION -->
<section id="about" class="py-20 bg-[#fdf8f5]">
    <div class="max-w-6xl mx-auto px-6 grid md:grid-cols-2 gap-12 items-center">

        <!-- LEFT CONTENT -->
        <div>
            <p class="text-sm tracking-widest text-[#c9a47e] uppercase mb-3">
                About Beatrice Beauty Studio
            </p>

            <h2 class="text-4xl md:text-5xl font-semibold text-[#2d2a26] leading-tight mb-6"
              style="font-family: 'Playfair Display', serif;">
              Luxury Hair Care Rooted in Precision & Passion
          </h2>

            <p class="text-[#6b5f57] leading-relaxed mb-6">
                At Beatrice Beauty Studio, we believe your hair is more than just a style. It is a statement of confidence, identity, and elegance. 
                Located in the heart of Accra, our studio is dedicated to delivering premium hair services tailored to each client’s unique look and lifestyle.
            </p>

            <p class="text-[#6b5f57] leading-relaxed mb-6">
                With years of hands-on experience in protective styling, wig installations, and luxury treatments, Beatrice and her team are known for precision, attention to detail, and a commitment to healthy hair.
            </p>

            <p class="text-[#6b5f57] leading-relaxed">
                Every appointment is a personalised experience — from consultation to final finish — ensuring you leave feeling confident, refined, and effortlessly beautiful.
            </p>
        </div>

        <!-- RIGHT IMAGE -->
        <div>
            <img src="https://images.unsplash.com/photo-1595475884562-073c30d45670"
                 alt="Luxury hair styling"
                 class="rounded-2xl shadow-lg w-full h-[450px] object-cover">
        </div>

    </div>
</section>
<!-- WHY CHOOSE US -->
<section class="py-24 bg-[#fdf8f5]">
    <div class="max-w-6xl mx-auto px-6">

        <!-- HEADER -->
        <div class="text-center mb-16">
            <p class="text-sm tracking-widest text-[#c9a47e] uppercase mb-3">
                The Beatrice Experience
            </p>

            <h2 class="text-4xl md:text-5xl font-semibold text-[#2d2a26]" style="font-family: 'Playfair Display', serif;">
            Why Clients Choose Beatrice
        </h2>
        </div>

        <!-- GRID -->
        <div class="grid md:grid-cols-2 gap-10 items-center">

            <!-- LEFT IMAGE -->
            <div>
                <img src="https://images.unsplash.com/photo-1600948836101-f9ffda59d250"
                     class="rounded-2xl w-full h-[420px] object-cover shadow-lg"
                     alt="Hair styling luxury">
            </div>

            
              <!-- RIGHT CONTENT -->
              <div class="space-y-10">

                  <!-- ITEM -->
                  <div class="flex gap-5">
                      <div class="w-10 h-10 flex items-center justify-center rounded-full bg-[#f3e7dc] text-[#c9a47e] text-sm font-medium">
                          01
                      </div>
                      <div>
                          <h4 class="text-[17px] text-[#2d2a26] tracking-wide"
                              style="font-family: 'Playfair Display', serif;">
                              Precision Styling
                          </h4>
                          <p class="text-[#6b5f57] text-sm mt-1 leading-relaxed">
                              Every braid, install, and treatment is executed with detail-focused precision for a flawless finish.
                          </p>
                      </div>
                  </div>

                  <!-- ITEM -->
                  <div class="flex gap-5">
                      <div class="w-10 h-10 flex items-center justify-center rounded-full bg-[#f3e7dc] text-[#c9a47e] text-sm font-medium">
                          02
                      </div>
                      <div>
                          <h4 class="text-[17px] text-[#2d2a26] tracking-wide"
                              style="font-family: 'Playfair Display', serif;">
                              Healthy Hair First
                          </h4>
                          <p class="text-[#6b5f57] text-sm mt-1 leading-relaxed">
                              We prioritise the health and strength of your natural hair using premium, gentle products.
                          </p>
                      </div>
                  </div>

                  <!-- ITEM -->
                  <div class="flex gap-5">
                      <div class="w-10 h-10 flex items-center justify-center rounded-full bg-[#f3e7dc] text-[#c9a47e] text-sm font-medium">
                          03
                      </div>
                      <div>
                          <h4 class="text-[17px] text-[#2d2a26] tracking-wide"
                              style="font-family: 'Playfair Display', serif;">
                              Luxury Experience
                          </h4>
                          <p class="text-[#6b5f57] text-sm mt-1 leading-relaxed">
                              Enjoy a calm, clean, and elegant environment designed for comfort, care, and relaxation.
                          </p>
                      </div>
                  </div>

                  <!-- ITEM -->
                  <div class="flex gap-5">
                      <div class="w-10 h-10 flex items-center justify-center rounded-full bg-[#f3e7dc] text-[#c9a47e] text-sm font-medium">
                          04
                      </div>
                      <div>
                          <h4 class="text-[17px] text-[#2d2a26] tracking-wide"
                              style="font-family: 'Playfair Display', serif;">
                              Trusted in Accra
                          </h4>
                          <p class="text-[#6b5f57] text-sm mt-1 leading-relaxed">
                              Serving clients across East Legon, Airport, Cantonments, and surrounding areas.
                          </p>
                      </div>
                  </div>

              </div>

        </div>

    </div>
</section>
  <!-- End Why Choose Us -->

  <!-- Testimonials Section -->
  <div class="py-24 px-6 lg:px-10 max-w-7xl mx-auto">
    <div class="text-center mb-14">
      <p class="text-xs font-medium tracking-widest uppercase mb-3" style="color:var(--gold);">Client Love</p>
      <h2 class="font-display font-light text-4xl lg:text-5xl" style="color:var(--charcoal);">What Our Clients Say</h2>
    </div>
    <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">

      <div class="bg-white rounded-2xl p-7 card-shadow">
        <div class="flex gap-0.5 mb-4"><span class="star">★★★★★</span></div>
        <p class="text-sm leading-relaxed mb-5" style="color:var(--muted);">"My knotless braids turned out beautifully. The booking process was seamless and the studio felt calm, polished, and premium from start to finish."</p>
        <div class="flex items-center gap-3">
          
          <div>
            <p class="text-sm font-medium" style="color:var(--charcoal);">Efua A.</p>
            <p class="text-xs" style="color:var(--muted);">East Legon, Accra</p>
          </div>
        </div>
      </div>

      <div class="bg-white rounded-2xl p-7 card-shadow">
        <div class="flex gap-0.5 mb-4"><span class="star">★★★★★</span></div>
        <p class="text-sm leading-relaxed mb-5" style="color:var(--muted);">"My wig install looked so natural, my colleagues thought it was my real hair! I'll never go anywhere else. The service was flawless and the styling looked incredibly natural."</p>
        <div class="flex items-center gap-3">
          
          <div>
            <p class="text-sm font-medium" style="color:var(--charcoal);">Akosua B.</p>
            <p class="text-xs" style="color:var(--muted);">Cantonments, Accra</p>
          </div>
        </div>
      </div>

      <div class="bg-white rounded-2xl p-7 card-shadow">
        <div class="flex gap-0.5 mb-4"><span class="star">★★★★★</span></div>
        <p class="text-sm leading-relaxed mb-5" style="color:var(--muted);">"The silk press was perfection. My hair felt silky, smooth, and healthy, and the studio atmosphere was clean, relaxing, and beautiful."</p>
        <div class="flex items-center gap-3">
          
          <div>
            <p class="text-sm font-medium" style="color:var(--charcoal);">Abena K.</p>
            <p class="text-xs" style="color:var(--muted);">Airport Residential, Accra</p>
          </div>
        </div>
      </div>

    </div>
  </div>
  <!-- End Testimonials -->

@endsection