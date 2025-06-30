<section class="relative bg-white py-20 overflow-hidden">
    <!-- Background Elements -->
    <div class="absolute inset-0 overflow-hidden z-0">
        <div class="absolute -left-20 -top-20 w-96 h-96 rounded-full bg-orange-500/5 blur-3xl"></div>
        <div class="absolute -right-20 -bottom-20 w-80 h-80 rounded-full bg-blue-500/5 blur-3xl"></div>
    </div>

    <!-- Header -->
    <div class="text-center mb-16 relative z-20 px-4">
        <div class="inline-flex items-center justify-center gap-2 mb-4">
            <span class="h-px w-8 bg-blue-600"></span>
            <h2 class="text-sm font-bold uppercase tracking-widest text-blue-700">Our Gallery</h2>
            <span class="h-px w-8 bg-blue-600"></span>
        </div>
        <p class="text-3xl sm:text-4xl font-bold text-gray-800 max-w-2xl mx-auto leading-tight">
            Visual Highlights <span class="text-blue-600">From Our Work</span>
        </p>
    </div>

    <!-- Optimized Marquee Rows -->
    <div class="relative z-10 space-y-8 md:space-y-12">
        <!-- Row 1 (Hero) -->
        <div class="overflow-hidden py-4">
            <div class="flex w-max animate-marquee-slow hover:paused">
                <!-- Original Set -->
                @foreach([1,2,3,4,5] as $i)
                    <div class="mx-4 w-64 md:w-96 h-56 md:h-72 flex-shrink-0 rounded-2xl overflow-hidden border-4 border-white shadow-lg relative">
                        <img src="{{ asset('images/' . $i . '.webp') }}"
                             class="absolute inset-0 w-full h-full object-cover"
                             loading="lazy"
                             alt="Project highlight {{ $i }}">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent opacity-0 hover:opacity-100 transition-opacity duration-300 flex items-end p-4">
                            <p class="text-white font-medium translate-y-4 hover:translate-y-0 transition-transform duration-300">
                                Project Highlight #{{ $i }}
                            </p>
                        </div>
                    </div>
                @endforeach

                <!-- Mirrored Set (for seamless loop) -->
                @foreach([1,2,3,4,5] as $i)
                    <div class="mx-4 w-64 md:w-96 h-56 md:h-72 flex-shrink-0 rounded-2xl overflow-hidden border-4 border-white shadow-lg relative" aria-hidden="true">
                        <img src="{{ asset('images/' . $i . '.webp') }}"
                             class="absolute inset-0 w-full h-full object-cover"
                             loading="lazy">
                    </div>
                @endforeach
            </div>
        </div>

        <!-- Row 2 (Secondary) -->
        <div class="overflow-hidden py-4">
            <div class="flex w-max animate-marquee-fast hover:paused">
                <!-- Original Set -->
                @foreach([6,7,8,9,10] as $i)
                    <div class="mx-4 w-48 md:w-64 h-40 md:h-52 flex-shrink-0 rounded-xl overflow-hidden border-4 border-white shadow-md">
                        <img src="{{ asset('images/' . $i . '.webp') }}"
                             class="w-full h-full object-cover"
                             loading="lazy"
                             alt="Gallery image {{ $i }}">
                    </div>
                @endforeach

                <!-- Mirrored Set -->
                @foreach([6,7,8,9,10] as $i)
                    <div class="mx-4 w-48 md:w-64 h-40 md:h-52 flex-shrink-0 rounded-xl overflow-hidden border-4 border-white shadow-md" aria-hidden="true">
                        <img src="{{ asset('images/' . $i . '.webp') }}"
                             class="w-full h-full object-cover"
                             loading="lazy">
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <!-- Gradient Fades -->
    <div class="pointer-events-none absolute inset-y-0 left-0 w-32 h-full bg-gradient-to-r from-white via-white/50 to-transparent z-20"></div>
    <div class="pointer-events-none absolute inset-y-0 right-0 w-32 h-full bg-gradient-to-l from-white via-white/50 to-transparent z-20"></div>

    <!-- CTA -->
    <div class="text-center mt-16 relative z-20">
        <button class="inline-flex items-center px-6 py-3 bg-blue-600 hover:bg-blue-700 text-white font-medium rounded-full shadow-md hover:shadow-lg transition-all duration-300">
            View Full Gallery
            <svg class="ml-2 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
            </svg>
        </button>
    </div>
</section>
