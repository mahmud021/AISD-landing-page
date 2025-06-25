<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet"/>
    <link rel="preconnect" href="https://fonts.googleapis.com"/>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin/>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&family=Lexend:wght@800&family=Rubik:wght@700&family=Teachers:wght@700&display=swap"
        rel="stylesheet"
    />

    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>
<body class="bg-black">
<section class="relative h-[70vh] w-full overflow-hidden">
    <!-- Background Image with Gradient Overlay -->
    <div
        class="absolute inset-0 bg-cover bg-center z-0"
        style="background-image: url('{{ asset('images/hero.jpg') }}');"
    >
        <div class="absolute inset-0 bg-gradient-to-l from-neutral-400/0 via-neutral-600/60 to-neutral-800/80"></div>
    </div>

    <!-- Content -->
    <div class="relative z-10 flex flex-col justify-center h-full px-4 md:px-16 gap-4 md:gap-6">
        <h1 class="text-white text-3xl md:text-6xl font-bold font-teachers leading-tight max-w-4xl">
            Transforming Health Systems for
            <span class="text-orange-500">Lasting Impact</span>
        </h1>
        <p class="text-white text-base md:text-xl font-extrabold font-lexend max-w-2xl">
            AISD – African Institute for Solutions and Development
        </p>
        <p class="text-white text-sm md:text-lg font-normal font-inter max-w-xl">
            Development arm of Maryam Abacha American University of Nigeria
        </p>

        <!-- CTA Button -->
        <a href="#"
           class="mt-4 w-fit bg-orange-500 text-white text-sm md:text-lg font-bold font-rubik px-6 py-2 md:px-8 md:py-3 rounded-full hover:bg-orange-600 transition">
            Partner With Us
        </a>
    </div>
</section>

<section class="w-full py-16 px-6 md:px-16 bg-white">
    <div class="max-w-7xl mx-auto flex flex-col md:flex-row items-center gap-10">
        <!-- Image -->
        <div class="w-full md:w-[45%]">
            <img
                src="https://placehold.co/488x429"
                alt="AISD banner"
                class="w-full h-auto rounded-2xl object-cover shadow-md"
            />
        </div>

        <!-- Text Content -->
        <div class="flex-1 space-y-6">
            <h2 class="text-3xl md:text-5xl font-bold font-teachers leading-snug">
                A Commitment to Stronger
                <span class="text-orange-500">African Nations</span>
                Through Healthier Communities
            </h2>
            <p class="text-gray-700 text-base md:text-lg leading-relaxed font-inter">
                The Alliance for International Health and Development (AISD) is dedicated to strengthening health systems and enhancing well-being across Africa. As the development arm of the Maryam Abacha American University of Nigeria (MAAUN), AISD translates academic knowledge into real-world impact.
            </p>
            <p class="text-gray-700 text-base md:text-lg leading-relaxed font-inter">
                Our core philosophy is that healthier communities are the foundation of stronger nations. We are committed to developing sustainable, evidence-based, and locally-driven health solutions.
            </p>
        </div>
    </div>
</section>

<section class="bg-gray-200 py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Section Header -->
        <div class="flex items-center mb-12">
            <div class="w-12 h-px bg-gray-700 mr-4"></div>
            <h2 class="text-cyan-700 text-sm font-bold uppercase tracking-widest">Who We Work With</h2>
        </div>

        <!-- Grid Layout -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-10">
            <!-- Item 1 -->
            <div class="flex items-start gap-5">
                <i data-lucide="heart-handshake" class="w-12 h-12 text-cyan-700"></i>
                <div>
                    <h3 class="text-xl font-bold font-teachers">Federal and State Ministries of Health</h3>
                    <p class="text-sm text-black/60 mt-1">Fermentum nisl accumsan nisi sapien in vitae</p>
                </div>
            </div>

            <!-- Item 2 -->
            <div class="flex items-start gap-5">
                <i data-lucide="landmark" class="w-12 h-12 text-cyan-700"></i>
                <div>
                    <h3 class="text-xl font-bold font-teachers">Local Government Authorities</h3>
                    <p class="text-sm text-black/60 mt-1">Ultricies lacus turpis proin tempor faucibus</p>
                </div>
            </div>

            <!-- Item 3 -->
            <div class="flex items-start gap-5">
                <i data-lucide="users" class="w-12 h-12 text-cyan-700"></i>
                <div>
                    <h3 class="text-xl font-bold font-teachers">Community Based Organizations</h3>
                    <p class="text-sm text-black/60 mt-1">Nunc tristique quis leo duis gravida volutpat vitae</p>
                </div>
            </div>

            <!-- Item 4 -->
            <div class="flex items-start gap-5">
                <i data-lucide="globe" class="w-12 h-12 text-cyan-700"></i>
                <div>
                    <h3 class="text-xl font-bold font-teachers">Development Partners</h3>
                    <p class="text-sm text-black/60 mt-1">Fermentum nisl accumsan nisi sapien in vitae</p>
                </div>
            </div>

            <!-- Item 5 -->
            <div class="flex items-start gap-5">
                <i data-lucide="graduation-cap" class="w-12 h-12 text-cyan-700"></i>
                <div>
                    <h3 class="text-xl font-bold font-teachers">Academic Institutions</h3>
                    <p class="text-sm text-black/60 mt-1">Ultricies lacus turpis proin tempor faucibus</p>
                </div>
            </div>

            <!-- Item 6 -->
            <div class="flex items-start gap-5">
                <i data-lucide="hospital" class="w-12 h-12 text-cyan-700"></i>
                <div>
                    <h3 class="text-xl font-bold font-teachers">National and International Health Agencies</h3>
                    <p class="text-sm text-black/60 mt-1">Adipiscing in vitae nec posuere eget fringilla a morbi</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Lucide Icons -->
<script src="https://unpkg.com/lucide@latest"></script>
<script>
    lucide.createIcons();
</script>

</body>
</html>
