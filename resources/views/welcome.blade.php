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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Teachers:wght@700&family=Lexend:wght@800&family=Inter:wght@400;600&family=Rubik:wght@700&display=swap" rel="stylesheet">

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
        <div class="flex items-center gap-3 bg-white/10 backdrop-blur-sm px-4 py-2 rounded-full w-fit border border-white/20 mb-4">
            <div class="bg-white w-10 h-10 rounded-full flex items-center justify-center">
                <i class="fas fa-graduation-cap text-aisd-orange text-xl"></i>
            </div>
            <span class="text-white text-sm md:text-base font-inter font-semibold">
                    Development arm of Maryam Abacha American University of Nigeria
                </span>
        </div>

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
                <i data-lucide="heart-handshake" class="w-12 h-12 text-[#FF7F50]"></i>
                <div>
                    <h3 class="text-xl font-bold font-teachers">Federal and State Ministries of Health</h3>
                    <p class="text-sm text-black/60 mt-1">Fermentum nisl accumsan nisi sapien in vitae</p>
                </div>
            </div>

            <!-- Item 2 -->
            <div class="flex items-start gap-5">
                <i data-lucide="landmark" class="w-12 h-12 text-[#FF7F50]"></i>
                <div>
                    <h3 class="text-xl font-bold font-teachers">Local Government Authorities</h3>
                    <p class="text-sm text-black/60 mt-1">Ultricies lacus turpis proin tempor faucibus</p>
                </div>
            </div>

            <!-- Item 3 -->
            <div class="flex items-start gap-5">
                <i data-lucide="users" class="w-12 h-12 text-[#FF7F50]"></i>
                <div>
                    <h3 class="text-xl font-bold font-teachers">Community Based Organizations</h3>
                    <p class="text-sm text-black/60 mt-1">Nunc tristique quis leo duis gravida volutpat vitae</p>
                </div>
            </div>

            <!-- Item 4 -->
            <div class="flex items-start gap-5">
                <i data-lucide="globe" class="w-12 h-12 text-[#FF7F50]"></i>
                <div>
                    <h3 class="text-xl font-bold font-teachers">Development Partners</h3>
                    <p class="text-sm text-black/60 mt-1">Fermentum nisl accumsan nisi sapien in vitae</p>
                </div>
            </div>

            <!-- Item 5 -->
            <div class="flex items-start gap-5">
                <i data-lucide="graduation-cap" class="w-12 h-12 text-[#FF7F50]"></i>
                <div>
                    <h3 class="text-xl font-bold font-teachers">Academic Institutions</h3>
                    <p class="text-sm text-black/60 mt-1">Ultricies lacus turpis proin tempor faucibus</p>
                </div>
            </div>

            <!-- Item 6 -->
            <div class="flex items-start gap-5">
                <i data-lucide="hospital" class="w-12 h-12 text-[#FF7F50]"></i>
                <div>
                    <h3 class="text-xl font-bold font-teachers">National and International Health Agencies</h3>
                    <p class="text-sm text-black/60 mt-1">Adipiscing in vitae nec posuere eget fringilla a morbi</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="overflow-hidden bg-white pb-12 pt-20 lg:pb-[90px] lg:pt-[120px] dark:bg-dark">
    <div class="container mx-auto">
        <div class="-mx-4 flex flex-wrap items-center justify-between">

            <!-- Left: TailGrids Image Layout -->
            <div class="w-full px-4 lg:w-6/12">
                <div class="-mx-3 flex items-center sm:-mx-4">
                    <div class="w-full px-3 sm:px-4 xl:w-1/2">
                        <div class="py-3 sm:py-4">
                            <img src="https://cdn.tailgrids.com/assets/images/marketing/about/about-01/image-1.jpg" alt=""
                                 class="w-full rounded-2xl" />
                        </div>
                        <div class="py-3 sm:py-4">
                            <img src="https://cdn.tailgrids.com/assets/images/marketing/about/about-01/image-2.jpg" alt=""
                                 class="w-full rounded-2xl" />
                        </div>
                    </div>
                    <div class="w-full px-3 sm:px-4 xl:w-1/2">
                        <div class="relative z-10 my-4">
                            <img src="https://cdn.tailgrids.com/assets/images/marketing/about/about-01/image-3.jpg" alt=""
                                 class="w-full rounded-2xl" />
                            <span class="absolute -bottom-7 -right-7 z-[-1]">
                  <svg width="134" height="106" viewBox="0 0 134 106" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="1.66667" cy="104" r="1.66667" transform="rotate(-90 1.66667 104)" fill="#3056D3" />
                    <circle cx="16.3333" cy="104" r="1.66667" transform="rotate(-90 16.3333 104)" fill="#3056D3" />
                    <circle cx="31" cy="104" r="1.66667" transform="rotate(-90 31 104)" fill="#3056D3" />
                    <circle cx="45.6667" cy="104" r="1.66667" transform="rotate(-90 45.6667 104)" fill="#3056D3" />
                    <circle cx="60.3334" cy="104" r="1.66667" transform="rotate(-90 60.3334 104)" fill="#3056D3" />
                    <circle cx="88.6667" cy="104" r="1.66667" transform="rotate(-90 88.6667 104)" fill="#3056D3" />
                    <circle cx="117.667" cy="104" r="1.66667" transform="rotate(-90 117.667 104)" fill="#3056D3" />
                    <circle cx="74.6667" cy="104" r="1.66667" transform="rotate(-90 74.6667 104)" fill="#3056D3" />
                    <circle cx="103" cy="104" r="1.66667" transform="rotate(-90 103 104)" fill="#3056D3" />
                    <circle cx="132" cy="104" r="1.66667" transform="rotate(-90 132 104)" fill="#3056D3" />
                    <circle cx="1.66667" cy="89.3333" r="1.66667" transform="rotate(-90 1.66667 89.3333)"
                            fill="#3056D3" />
                    <circle cx="16.3333" cy="89.3333" r="1.66667" transform="rotate(-90 16.3333 89.3333)"
                            fill="#3056D3" />
                    <circle cx="31" cy="89.3333" r="1.66667" transform="rotate(-90 31 89.3333)" fill="#3056D3" />
                    <circle cx="45.6667" cy="89.3333" r="1.66667" transform="rotate(-90 45.6667 89.3333)"
                            fill="#3056D3" />
                    <circle cx="60.3333" cy="89.3338" r="1.66667" transform="rotate(-90 60.3333 89.3338)"
                            fill="#3056D3" />
                    <circle cx="88.6667" cy="89.3338" r="1.66667" transform="rotate(-90 88.6667 89.3338)"
                            fill="#3056D3" />
                    <circle cx="117.667" cy="89.3338" r="1.66667" transform="rotate(-90 117.667 89.3338)"
                            fill="#3056D3" />
                    <circle cx="74.6667" cy="89.3338" r="1.66667" transform="rotate(-90 74.6667 89.3338)"
                            fill="#3056D3" />
                    <circle cx="103" cy="89.3338" r="1.66667" transform="rotate(-90 103 89.3338)" fill="#3056D3" />
                    <circle cx="132" cy="89.3338" r="1.66667" transform="rotate(-90 132 89.3338)" fill="#3056D3" />
                    <circle cx="1.66667" cy="74.6673" r="1.66667" transform="rotate(-90 1.66667 74.6673)"
                            fill="#3056D3" />
                    <circle cx="1.66667" cy="31.0003" r="1.66667" transform="rotate(-90 1.66667 31.0003)"
                            fill="#3056D3" />
                    <circle cx="16.3333" cy="74.6668" r="1.66667" transform="rotate(-90 16.3333 74.6668)"
                            fill="#3056D3" />
                    <circle cx="16.3333" cy="31.0003" r="1.66667" transform="rotate(-90 16.3333 31.0003)"
                            fill="#3056D3" />
                    <circle cx="31" cy="74.6668" r="1.66667" transform="rotate(-90 31 74.6668)" fill="#3056D3" />
                    <circle cx="31" cy="31.0003" r="1.66667" transform="rotate(-90 31 31.0003)" fill="#3056D3" />
                    <circle cx="45.6667" cy="74.6668" r="1.66667" transform="rotate(-90 45.6667 74.6668)"
                            fill="#3056D3" />
                    <circle cx="45.6667" cy="31.0003" r="1.66667" transform="rotate(-90 45.6667 31.0003)"
                            fill="#3056D3" />
                    <circle cx="60.3333" cy="74.6668" r="1.66667" transform="rotate(-90 60.3333 74.6668)"
                            fill="#3056D3" />
                    <circle cx="60.3333" cy="30.9998" r="1.66667" transform="rotate(-90 60.3333 30.9998)"
                            fill="#3056D3" />
                    <circle cx="88.6667" cy="74.6668" r="1.66667" transform="rotate(-90 88.6667 74.6668)"
                            fill="#3056D3" />
                    <circle cx="88.6667" cy="30.9998" r="1.66667" transform="rotate(-90 88.6667 30.9998)"
                            fill="#3056D3" />
                    <circle cx="117.667" cy="74.6668" r="1.66667" transform="rotate(-90 117.667 74.6668)"
                            fill="#3056D3" />
                    <circle cx="117.667" cy="30.9998" r="1.66667" transform="rotate(-90 117.667 30.9998)"
                            fill="#3056D3" />
                    <circle cx="74.6667" cy="74.6668" r="1.66667" transform="rotate(-90 74.6667 74.6668)"
                            fill="#3056D3" />
                    <circle cx="74.6667" cy="30.9998" r="1.66667" transform="rotate(-90 74.6667 30.9998)"
                            fill="#3056D3" />
                    <circle cx="103" cy="74.6668" r="1.66667" transform="rotate(-90 103 74.6668)" fill="#3056D3" />
                    <circle cx="103" cy="30.9998" r="1.66667" transform="rotate(-90 103 30.9998)" fill="#3056D3" />
                    <circle cx="132" cy="74.6668" r="1.66667" transform="rotate(-90 132 74.6668)" fill="#3056D3" />
                    <circle cx="132" cy="30.9998" r="1.66667" transform="rotate(-90 132 30.9998)" fill="#3056D3" />
                    <circle cx="1.66667" cy="60.0003" r="1.66667" transform="rotate(-90 1.66667 60.0003)"
                            fill="#3056D3" />
                    <circle cx="1.66667" cy="16.3333" r="1.66667" transform="rotate(-90 1.66667 16.3333)"
                            fill="#3056D3" />
                    <circle cx="16.3333" cy="60.0003" r="1.66667" transform="rotate(-90 16.3333 60.0003)"
                            fill="#3056D3" />
                    <circle cx="16.3333" cy="16.3333" r="1.66667" transform="rotate(-90 16.3333 16.3333)"
                            fill="#3056D3" />
                    <circle cx="31" cy="60.0003" r="1.66667" transform="rotate(-90 31 60.0003)" fill="#3056D3" />
                    <circle cx="31" cy="16.3333" r="1.66667" transform="rotate(-90 31 16.3333)" fill="#3056D3" />
                    <circle cx="45.6667" cy="60.0003" r="1.66667" transform="rotate(-90 45.6667 60.0003)"
                            fill="#3056D3" />
                    <circle cx="45.6667" cy="16.3333" r="1.66667" transform="rotate(-90 45.6667 16.3333)"
                            fill="#3056D3" />
                    <circle cx="60.3333" cy="60.0003" r="1.66667" transform="rotate(-90 60.3333 60.0003)"
                            fill="#3056D3" />
                    <circle cx="60.3333" cy="16.3333" r="1.66667" transform="rotate(-90 60.3333 16.3333)"
                            fill="#3056D3" />
                    <circle cx="88.6667" cy="60.0003" r="1.66667" transform="rotate(-90 88.6667 60.0003)"
                            fill="#3056D3" />
                    <circle cx="88.6667" cy="16.3333" r="1.66667" transform="rotate(-90 88.6667 16.3333)"
                            fill="#3056D3" />
                    <circle cx="117.667" cy="60.0003" r="1.66667" transform="rotate(-90 117.667 60.0003)"
                            fill="#3056D3" />
                    <circle cx="117.667" cy="16.3333" r="1.66667" transform="rotate(-90 117.667 16.3333)"
                            fill="#3056D3" />
                    <circle cx="74.6667" cy="60.0003" r="1.66667" transform="rotate(-90 74.6667 60.0003)"
                            fill="#3056D3" />
                    <circle cx="74.6667" cy="16.3333" r="1.66667" transform="rotate(-90 74.6667 16.3333)"
                            fill="#3056D3" />
                    <circle cx="103" cy="60.0003" r="1.66667" transform="rotate(-90 103 60.0003)" fill="#3056D3" />
                    <circle cx="103" cy="16.3333" r="1.66667" transform="rotate(-90 103 16.3333)" fill="#3056D3" />
                    <circle cx="132" cy="60.0003" r="1.66667" transform="rotate(-90 132 60.0003)" fill="#3056D3" />
                    <circle cx="132" cy="16.3333" r="1.66667" transform="rotate(-90 132 16.3333)" fill="#3056D3" />
                    <circle cx="1.66667" cy="45.3333" r="1.66667" transform="rotate(-90 1.66667 45.3333)"
                            fill="#3056D3" />
                    <circle cx="1.66667" cy="1.66683" r="1.66667" transform="rotate(-90 1.66667 1.66683)"
                            fill="#3056D3" />
                    <circle cx="16.3333" cy="45.3333" r="1.66667" transform="rotate(-90 16.3333 45.3333)"
                            fill="#3056D3" />
                    <circle cx="16.3333" cy="1.66683" r="1.66667" transform="rotate(-90 16.3333 1.66683)"
                            fill="#3056D3" />
                    <circle cx="31" cy="45.3333" r="1.66667" transform="rotate(-90 31 45.3333)" fill="#3056D3" />
                    <circle cx="31" cy="1.66683" r="1.66667" transform="rotate(-90 31 1.66683)" fill="#3056D3" />
                    <circle cx="45.6667" cy="45.3333" r="1.66667" transform="rotate(-90 45.6667 45.3333)"
                            fill="#3056D3" />
                    <circle cx="45.6667" cy="1.66683" r="1.66667" transform="rotate(-90 45.6667 1.66683)"
                            fill="#3056D3" />
                    <circle cx="60.3333" cy="45.3338" r="1.66667" transform="rotate(-90 60.3333 45.3338)"
                            fill="#3056D3" />
                    <circle cx="60.3333" cy="1.66683" r="1.66667" transform="rotate(-90 60.3333 1.66683)"
                            fill="#3056D3" />
                    <circle cx="88.6667" cy="45.3338" r="1.66667" transform="rotate(-90 88.6667 45.3338)"
                            fill="#3056D3" />
                    <circle cx="88.6667" cy="1.66683" r="1.66667" transform="rotate(-90 88.6667 1.66683)"
                            fill="#3056D3" />
                    <circle cx="117.667" cy="45.3338" r="1.66667" transform="rotate(-90 117.667 45.3338)"
                            fill="#3056D3" />
                    <circle cx="117.667" cy="1.66683" r="1.66667" transform="rotate(-90 117.667 1.66683)"
                            fill="#3056D3" />
                    <circle cx="74.6667" cy="45.3338" r="1.66667" transform="rotate(-90 74.6667 45.3338)"
                            fill="#3056D3" />
                    <circle cx="74.6667" cy="1.66683" r="1.66667" transform="rotate(-90 74.6667 1.66683)"
                            fill="#3056D3" />
                    <circle cx="103" cy="45.3338" r="1.66667" transform="rotate(-90 103 45.3338)" fill="#3056D3" />
                    <circle cx="103" cy="1.66683" r="1.66667" transform="rotate(-90 103 1.66683)" fill="#3056D3" />
                    <circle cx="132" cy="45.3338" r="1.66667" transform="rotate(-90 132 45.3338)" fill="#3056D3" />
                    <circle cx="132" cy="1.66683" r="1.66667" transform="rotate(-90 132 1.66683)" fill="#3056D3" />
                  </svg>
                </span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right: Your Numbered About Content -->
            <div class="w-full lg:w-1/2 px-4 mt-10 lg:mt-0">
                <!-- Section Label -->
                <div class="flex items-center mb-8">
                    <div class="w-12 h-px bg-gray-800 mr-4"></div>
                    <h2 class="text-cyan-700 text-sm font-bold uppercase tracking-widest">About Us</h2>
                </div>

                <!-- Vision Statement -->
                <p class="text-base text-gray-600 mb-10 max-w-md">
                    To improve health outcomes and well-being across Nigeria and Africa through people-centered innovation, evidence-based advocacy, and community-led solutions.
                </p>

                <!-- Info Grid -->
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-8">
                    <!-- Item 1 -->
                    <div>
                        <h3 class="text-4xl font-bold text-black mb-2">1.</h3>
                        <h4 class="text-xl font-bold text-black mb-2">Our Mission</h4>
                        <p class="text-gray-600 text-sm leading-relaxed">
                            We focus on four key areas: conducting applied research, engaging communities in co-designing solutions, collaborating with institutions, and strengthening the capacity of health professionals.
                        </p>
                    </div>

                    <!-- Item 2 -->
                    <div>
                        <h3 class="text-4xl font-bold text-black mb-2">2.</h3>
                        <h4 class="text-xl font-bold text-black mb-2">Our Health Strategy</h4>
                        <p class="text-gray-600 text-sm leading-relaxed">
                            We help by using evidence-based research, community-centered design, institutional collaboration, and strategic capacity strengthening to tackle health challenges.
                        </p>
                    </div>

                    <!-- Item 3 -->
                    <div>
                        <h3 class="text-4xl font-bold text-black mb-2">3.</h3>
                        <h4 class="text-xl font-bold text-black mb-2">A Collaborative Approach</h4>
                        <p class="text-gray-600 text-sm leading-relaxed">
                            We are creating a future where all communities are empowered to lead healthier lives through accountable health systems, inclusive research, and sustainable development.
                        </p>
                    </div>

                    <!-- Item 4 -->
                    <div>
                        <h3 class="text-4xl font-bold text-black mb-2">4.</h3>
                        <h4 class="text-xl font-bold text-black mb-2">Our Vision for Success</h4>
                        <p class="text-gray-600 text-sm leading-relaxed">
                            A future where health equity is driven by data, strengthened institutions, and empowered local leadership.
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<section class="py-16 bg-white sm:py-20 lg:py-24">
    <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
        <!-- Section Header -->
        <div class="text-center max-w-3xl mx-auto">
            <h2 class="text-sm font-bold tracking-widest text-cyan-700 uppercase mb-3">Our Strategic Framework</h2>
            <h3 class="text-3xl font-extrabold text-gray-900 sm:text-4xl lg:text-5xl mb-4">The PAAC Vision</h3>
            <p class="text-lg text-gray-700">
                At AISD, our mission is to drive transformative change in health. We achieve this through our comprehensive
                <strong>PAACE Vision</strong>, a strategic framework that guides every innovation, policy reform, and community
                engagement we undertake. It’s our commitment to creating a healthier future for all.
            </p>
        </div>

        <!-- Grid -->
        <div class="grid grid-cols-1 mt-12 gap-y-12 text-center sm:grid-cols-2 sm:gap-x-12 md:grid-cols-4 md:gap-y-16 xl:mt-20">

            <!-- P -->
            <div class="md:px-4 relative">
                <div class="absolute text-[100px] font-black text-cyan-700 opacity-5 top-2 right-4 leading-none pointer-events-none select-none z-0">P</div>
                <div class="relative z-10 flex items-center justify-center w-16 h-16 mx-auto bg-white border-2 border-[#FF7F50] rounded-full shadow">
                    <i data-lucide="heart-pulse" class="h-6 w-6 text-[#FF7F50]"></i>
                </div>
                <h3 class="mt-8 text-xl font-bold text-gray-900">Promoting Health Advancement</h3>
                <p class="mt-4 text-base text-gray-600">
                    Championing innovations and inclusive systems to improve health outcomes and quality of life for all.
                </p>
            </div>

            <!-- A -->
            <div class="md:px-4 md:border-l md:border-gray-200 relative">
                <div class="absolute text-[100px] font-black text-cyan-700 opacity-5 top-2 right-4 leading-none pointer-events-none select-none z-0">A</div>
                <div class="relative z-10 flex items-center justify-center w-16 h-16 mx-auto bg-white border-2 border-[#FF7F50] rounded-full shadow">
                    <i data-lucide="shield-check" class="h-6 w-6 text-[#FF7F50]"></i>
                </div>
                <h3 class="mt-8 text-xl font-bold text-gray-900">Accountability</h3>
                <p class="mt-4 text-base text-gray-600">
                    Fostering transparency and evidence-driven action in public and community health engagement.
                </p>
            </div>

            <!-- A -->
            <div class="md:px-4 md:border-l md:border-gray-200 relative">
                <div class="absolute text-[100px] font-black text-cyan-700 opacity-5 top-2 right-4 leading-none pointer-events-none select-none z-0">A</div>
                <div class="relative z-10 flex items-center justify-center w-16 h-16 mx-auto bg-white border-2 border-[#FF7F50] rounded-full shadow">
                    <i data-lucide="arrow-up-right" class="h-6 w-6 text-[#FF7F50]"></i>
                </div>
                <h3 class="mt-8 text-xl font-bold text-gray-900">Advancement</h3>
                <p class="mt-4 text-base text-gray-600">
                    Driving forward policies, practices, and platforms that elevate public health equity and reach.
                </p>
            </div>

            <!-- C -->
            <div class="md:px-4 md:border-l md:border-gray-200 relative">
                <div class="absolute text-[100px] font-black text-cyan-700 opacity-5 top-2 right-4 leading-none pointer-events-none select-none z-0">C</div>
                <div class="relative z-10 flex items-center justify-center w-16 h-16 mx-auto bg-white border-2 border-[#FF7F50] rounded-full shadow">
                    <i data-lucide="users" class="h-6 w-6 text-[#FF7F50]"></i>
                </div>
                <h3 class="mt-8 text-xl font-bold text-gray-900">Citizen Engagement</h3>
                <p class="mt-4 text-base text-gray-600">
                    Empowering communities to take part in shaping solutions and holding systems accountable.
                </p>
            </div>

        </div>
    </div>
</section>


<section class="bg-white py-16">
    <div class="container mx-auto px-4 flex flex-col gap-12">

        <!-- Section Header -->
        <div class="flex items-center mb-12">
            <div class="w-12 h-px bg-gray-700 mr-4"></div>
            <h2 class="text-cyan-700 text-sm font-bold uppercase tracking-widest">Current Activities</h2>
        </div>

        <!-- Cards Grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">

            <!-- Card 1 -->
            <div class="relative w-[369px] h-[377px] mx-auto overflow-hidden">
                <img src="https://placehold.co/369x160" alt="Out-of-School Study" class="w-full h-40 object-cover rounded-t">
                <div class="absolute top-[141px] left-4 w-[337px] bg-white border border-gray-200 shadow-sm rounded p-4 flex flex-col gap-6">
                    <div class="w-fit">
  <span class="inline-block px-2 py-0.5 bg-emerald-50 text-emerald-700 text-xs font-semibold rounded">
    Access to Education
  </span>
                    </div>
                    <div class="flex flex-col gap-3">
                        <h3 class="text-base font-semibold text-black leading-snug">Out-of-School Children Study</h3>
                        <p class="text-sm text-gray-600 leading-relaxed">
                            Investigating drivers of out-of-school children in Kano State to inform recommendations.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="relative w-[369px] h-[377px] mx-auto overflow-hidden">
                <img src="https://placehold.co/369x160" alt="Child Labor Study" class="w-full h-40 object-cover rounded-t">
                <div class="absolute top-[141px] left-4 w-[337px] bg-white border border-gray-200 shadow-sm rounded p-4 flex flex-col gap-6">
                    <div class="w-fit">
  <span class="inline-block px-2 py-0.5 bg-emerald-50 text-emerald-700 text-xs font-semibold rounded">
    Child Protection
  </span>
                    </div>
                    <div class="flex flex-col gap-3">
                        <h3 class="text-base font-semibold text-black leading-snug">Child Labor Study</h3>
                        <p class="text-sm text-gray-600 leading-relaxed">
                            Examining factors of child labor to propose actionable solutions and mitigate practices.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="relative w-[369px] h-[377px] mx-auto overflow-hidden">
                <img src="https://placehold.co/369x160" alt="Diabetes Study" class="w-full h-40 object-cover rounded-t">
                <div class="absolute top-[141px] left-4 w-[337px] bg-white border border-gray-200 shadow-sm rounded p-4 flex flex-col gap-6">
                    <div class="w-fit">
  <span class="inline-block px-2 py-0.5 bg-emerald-50 text-emerald-700 text-xs font-semibold rounded">
    Public Health
  </span>
                    </div>
                    <div class="flex flex-col gap-3">
                        <h3 class="text-base font-semibold text-black leading-snug">Diabetes Study</h3>
                        <p class="text-sm text-gray-600 leading-relaxed">
                            Researching rising diabetes incidences in Northern Nigeria to offer prevention strategies.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Card 4 -->
            <div class="relative w-[369px] h-[377px] mx-auto overflow-hidden">
                <img src="https://placehold.co/369x160" alt="Drug Vigilance Study" class="w-full h-40 object-cover rounded-t">
                <div class="absolute top-[141px] left-4 w-[337px] bg-white border border-gray-200 shadow-sm rounded p-4 flex flex-col gap-6">
                    <div class="w-fit">
  <span class="inline-block px-2 py-0.5 bg-emerald-50 text-emerald-700 text-xs font-semibold rounded">
    Substance Control
  </span>
                    </div>
                    <div class="flex flex-col gap-3">
                        <h3 class="text-base font-semibold text-black leading-snug">Drug Vigilance Study</h3>
                        <p class="text-sm text-gray-600 leading-relaxed">
                            Assessing drug misuse among youth to guide government remediation actions.
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<section class="py-16 bg-gray-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-2 sm:grid-cols-2 md:grid-cols-4 gap-8 text-center">

            <!-- Children Reached -->
            <div class="flex flex-col items-center space-y-3">
                <div class="w-14 h-14 flex items-center justify-center bg-white border-2 border-orange-200 rounded-full shadow">
                    <i data-lucide="rocket" class="w-6 h-6 text-[#FF7F50]"></i>
                </div>
                <h3 class="text-4xl font-bold text-[#FF7F50]">20k+</h3>
                <p class="text-lg font-semibold text-gray-600">Children Reached</p>
            </div>

            <!-- Communities Engaged -->
            <div class="flex flex-col items-center space-y-3">
                <div class="w-14 h-14 flex items-center justify-center bg-white border-2 border-orange-200 rounded-full shadow">
                    <i data-lucide="users" class="w-6 h-6 text-[#FF7F50]"></i>
                </div>
                <h3 class="text-4xl font-bold text-[#FF7F50]">50+</h3>
                <p class="text-lg font-semibold text-gray-600">Communities Engaged</p>
            </div>

            <!-- Individuals Empowered -->
            <div class="flex flex-col items-center space-y-3">
                <div class="w-14 h-14 flex items-center justify-center bg-white border-2 border-orange-200 rounded-full shadow">
                    <i data-lucide="activity" class="w-6 h-6 text-[#FF7F50]"></i>
                </div>
                <h3 class="text-4xl font-bold text-[#FF7F50]">3.5k+</h3>
                <p class="text-lg font-semibold text-gray-600">Individuals Empowered</p>
            </div>

            <!-- Youth Champions Trained -->
            <div class="flex flex-col items-center space-y-3">
                <div class="w-14 h-14 flex items-center justify-center bg-white border-2 border-orange-200 rounded-full shadow">
                    <i data-lucide="graduation-cap" class="w-6 h-6 text-[#FF7F50]"></i>
                </div>
                <h3 class="text-4xl font-bold text-[#FF7F50]">1k+</h3>
                <p class="text-lg font-semibold text-gray-600">Youth Champions Trained</p>
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
