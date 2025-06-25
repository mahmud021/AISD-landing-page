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
<section class="relative min-h-[80vh] w-full overflow-hidden">
    <!-- Background with gradient overlay and floating shapes -->
    <div class="absolute inset-0 bg-gradient-to-br from-aisd-blue via-gray-800 to-gray-900 z-0">
        <!-- Animated floating shapes -->
        <div class="absolute top-20 left-10 w-16 h-16 rounded-full bg-aisd-orange/20 floating"></div>
        <div class="absolute top-1/3 right-1/4 w-10 h-10 rounded-full bg-white/10 floating" style="animation-delay: 1.5s;"></div>
        <div class="absolute bottom-1/4 left-1/3 w-12 h-12 rotate-45 bg-aisd-teal/15 floating" style="animation-delay: 2.5s;"></div>
        <div class="absolute bottom-20 right-20 w-14 h-14 rounded-full bg-aisd-orange/15 floating" style="animation-delay: 3.5s;"></div>

        <!-- Abstract grid pattern -->
        <div class="absolute inset-0 opacity-20 bg-[radial-gradient(#e5e7eb_1px,transparent_1px)] [background-size:16px_16px]"></div>
    </div>

    <!-- Content Container -->
    <div class="relative z-10 flex flex-col justify-center min-h-[80vh] px-4 md:px-16 lg:px-24 gap-4 md:gap-6">
        <!-- University Badge -->
        <div class="flex items-center gap-3 bg-white/10 backdrop-blur-sm px-4 py-2 rounded-full w-fit border border-white/20 mb-4">
            <div class="bg-white w-10 h-10 rounded-full flex items-center justify-center">
                <i class="fas fa-graduation-cap text-aisd-orange text-xl"></i>
            </div>
            <span class="text-white text-sm md:text-base font-inter font-semibold">
                    Development arm of Maryam Abacha American University of Nigeria
                </span>
        </div>

        <!-- Main Heading -->
        <h1 class="text-white text-4xl md:text-6xl lg:text-7xl font-bold font-teachers leading-tight max-w-4xl">
            Transforming Health Systems for
            <span class="text-aisd-orange relative">
                    Lasting Impact
                    <span class="absolute -bottom-2 left-0 w-full h-1 bg-aisd-orange rounded-full"></span>
                </span>
        </h1>

        <!-- Organization Name -->
        <div class="flex items-center mt-2">
            <div class="h-px w-12 bg-aisd-orange mr-4"></div>
            <p class="text-white text-xl md:text-2xl font-extrabold font-lexend">
                AISD – African Institute for Solutions and Development
            </p>
        </div>
        <!-- CTA Button with Animation -->
        <div class="flex flex-col sm:flex-row gap-4 mt-8">
            <a href="#" class="relative group w-fit bg-aisd-orange text-white text-sm md:text-lg font-bold font-rubik px-8 py-4 rounded-full hover:bg-orange-600 transition-all duration-300 transform hover:-translate-y-1 shadow-lg hover:shadow-xl">
                <span>Partner With Us</span>
                <span class="absolute -right-2 -top-2 w-6 h-6 bg-white rounded-full flex items-center justify-center text-aisd-orange text-xs">
                        <i class="fas fa-arrow-right"></i>
                    </span>
                <div class="absolute inset-0 rounded-full bg-white opacity-0 group-hover:opacity-10 transition-opacity"></div>
            </a>

            <a href="#" class="w-fit bg-transparent border-2 border-white text-white text-sm md:text-lg font-bold font-rubik px-8 py-4 rounded-full hover:bg-white/10 transition">
                <span>Learn More</span>
                <i class="fas fa-chevron-down ml-2 text-xs"></i>
            </a>
        </div>
    </div>

    <!-- Scrolling Indicator -->
    <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 text-center">
        <p class="text-white/80 text-sm font-inter mb-2">Explore our impact</p>
        <div class="pulse w-8 h-12 rounded-full border-2 border-white/50 flex items-start justify-center mx-auto">
            <div class="w-2 h-2 bg-white rounded-full mt-2"></div>
        </div>
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

<section class="relative bg-white py-20">
    <div class="container mx-auto px-4">
        <div class="mb-12 max-w-3xl">
            <h2 class="text-sm font-bold tracking-widest text-cyan-700 uppercase mb-3">Our Strategic Framework</h2>
            <h3 class="text-3xl sm:text-4xl font-extrabold text-gray-900 mb-4">The PAACE Vision</h3>
            <p class="text-lg text-gray-700">
                At AISD, our mission is to drive transformative change in health. We achieve this through our comprehensive <strong>PAACE Vision</strong>,
                a strategic framework that guides every innovation, policy reform, and community engagement we undertake.
                It’s our commitment to creating a healthier future for all.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <!-- P -->
            <div class="bg-gray-50 p-6 rounded-xl shadow-md relative">
                <div class="absolute text-[120px] font-black text-cyan-700 opacity-5 top-0 right-2 leading-none">P</div>
                <div class="flex items-start gap-4 relative z-10">
                    <img src="img/group.png" alt="Icon" class="w-10 h-10" />
                    <div>
                        <h4 class="font-bold text-gray-900 text-base">Promoting Health Advancement</h4>
                        <p class="text-sm text-gray-600 mt-1">
                            Connection has put impossible own apartments boisterous. At jointure ladyship an insisted so humanity he.
                            Friendly bachelor entrance to on by.
                        </p>
                    </div>
                </div>
            </div>

            <!-- A -->
            <div class="bg-gray-50 p-6 rounded-xl shadow-md relative">
                <div class="absolute text-[120px] font-black text-cyan-700 opacity-5 top-0 right-2 leading-none">A</div>
                <div class="flex items-start gap-4 relative z-10">
                    <img src="img/image.svg" alt="Icon" class="w-10 h-10" />
                    <div>
                        <h4 class="font-bold text-gray-900 text-base">Accountability</h4>
                        <p class="text-sm text-gray-600 mt-1">
                            Connection has put impossible own apartments boisterous. At jointure ladyship an insisted so humanity he.
                            Friendly bachelor entrance to on by.
                        </p>
                    </div>
                </div>
            </div>

            <!-- A -->
            <div class="bg-gray-50 p-6 rounded-xl shadow-md relative">
                <div class="absolute text-[120px] font-black text-cyan-700 opacity-5 top-0 right-2 leading-none">A</div>
                <div class="flex items-start gap-4 relative z-10">
                    <img src="img/frame.svg" alt="Icon" class="w-10 h-10" />
                    <div>
                        <h4 class="font-bold text-gray-900 text-base">Advancement</h4>
                        <p class="text-sm text-gray-600 mt-1">
                            Connection has put impossible own apartments boisterous. At jointure ladyship an insisted so humanity he.
                            Friendly bachelor entrance to on by.
                        </p>
                    </div>
                </div>
            </div>

            <!-- C -->
            <div class="bg-gray-50 p-6 rounded-xl shadow-md relative">
                <div class="absolute text-[120px] font-black text-cyan-700 opacity-5 top-0 right-2 leading-none">C</div>
                <div class="flex items-start gap-4 relative z-10">
                    <img src="img/frame-2.svg" alt="Icon" class="w-10 h-10" />
                    <div>
                        <h4 class="font-bold text-gray-900 text-base">Citizen Engagement</h4>
                        <p class="text-sm text-gray-600 mt-1">
                            Connection has put impossible own apartments boisterous. At jointure ladyship an insisted so humanity he.
                            Friendly bachelor entrance to on by.
                        </p>
                    </div>
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
