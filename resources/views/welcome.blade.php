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
</body>
</html>
