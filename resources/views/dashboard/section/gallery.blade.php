<!-- Gallery Section -->
<section class="relative bg-white py-20 overflow-hidden">
    <!-- Section Header -->
    <div class="text-center mb-12 relative z-20">
        <h2 class="text-sm font-bold uppercase tracking-widest text-blue-700 mb-2">Our Gallery</h2>
        <p class="text-3xl sm:text-4xl font-bold text-gray-800">
            Visual Highlights From Our Work
        </p>
    </div>
    <!-- Marquee Rows Container -->
    <div class="relative z-10 space-y-10">
        <!-- Row 1 -->
        <div class="group overflow-hidden relative">
            <div class="flex gap-6 animate-marquee group-hover:paused">
                @for ($i = 1; $i <= 5; $i++)
                    <img src="{{ asset('images/' . $i . '.jpg') }}" class="h-40 w-auto rounded-xl object-cover" />
                @endfor
                @for ($i = 1; $i <= 2; $i++)
                    <img src="{{ asset('images/' . $i . '.jpg') }}" class="h-40 w-auto rounded-xl object-cover" />
                @endfor
            </div>
        </div>
        <!-- Row 2 -->
        <div class="group overflow-hidden relative">
            <div class="flex gap-6 animate-marquee-reverse group-hover:paused">
                @for ($i = 6; $i <= 10; $i++)
                    <img src="{{ asset('images/' . $i . '.jpg') }}" class="h-40 w-auto rounded-xl object-cover" />
                @endfor
                @for ($i = 6; $i <= 7; $i++)
                    <img src="{{ asset('images/' . $i . '.jpg') }}" class="h-40 w-auto rounded-xl object-cover" />
                @endfor
            </div>
        </div>
        <!-- Blur Overlays (Apply ONLY to marquee rows) -->
        <div class="pointer-events-none absolute top-0 left-0 w-32 h-full bg-gradient-to-r from-white via-white/80 to-transparent z-10"></div>
        <div class="pointer-events-none absolute top-0 right-0 w-32 h-full bg-gradient-to-l from-white via-white/80 to-transparent z-10"></div>
    </div>
</section>
