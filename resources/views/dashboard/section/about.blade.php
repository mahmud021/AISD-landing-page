<!-- About Section with Static Spread Cards and Orange Borders -->
<section class="w-full py-12 md:py-16 px-4 sm:px-6 lg:px-8 bg-white">
    <div class="max-w-7xl mx-auto flex flex-col lg:flex-row items-center gap-8 md:gap-12">
        <!-- Cards Container -->
        <div class="w-full lg:w-[45%]">
            <!-- Mobile Stack - Main Card FIRST -->
            <div class="lg:hidden space-y-6">
                <!-- Main Card with Caption (Now First) -->
                <div class="rounded-2xl bg-white shadow-lg border-4 border-orange-500 overflow-hidden transition-transform hover:scale-[1.02]">
                    <div class="p-4">
                        <img src="{{asset('images/2.webp')}}" alt="AISD community health initiative"
                             class="w-full aspect-4/3 rounded-xl object-cover" loading="lazy">
                    </div>
                    <div class="px-4 pb-4">
                        <h3 class="font-semibold">AISD in Action</h3>
                        <h4 class="text-sm font-medium text-gray-600">Community Health Initiatives</h4>
                    </div>
                </div>

                <!-- Secondary Cards (Now After) -->
                <div class="rounded-2xl bg-white shadow-md border-4 border-orange-500/20 overflow-hidden">
                    <div class="p-4">
                        <img src="{{asset('images/5.webp')}}" alt="AISD educational activity"
                             class="w-full aspect-4/3 rounded-xl object-cover" loading="lazy">
                    </div>
                </div>
                <div class="rounded-2xl bg-white shadow-md border-4 border-orange-500/20 overflow-hidden">
                    <div class="p-4">
                        <img src="{{asset('images/4.webp')}}" alt="AISD field work"
                             class="w-full aspect-4/3 rounded-xl object-cover" loading="lazy">
                    </div>
                </div>
            </div>

            <!-- Desktop Overlap (Unchanged Layout) -->
            <div class="hidden lg:block relative min-h-[360px]">
                <div class="grid grid-cols-1 grid-rows-1 h-full">
                    <!-- Left Card (Behind) -->
                    <div class="col-start-1 row-start-1 flex justify-start items-start">
                        <div class="w-[90%] -rotate-6 rounded-2xl bg-white shadow-lg border-4 border-orange-500/20
                                    transition-transform hover:scale-105 hover:z-10">
                            <div class="p-4">
                                <img src="{{asset('images/5.webp')}}" alt="AISD activity"
                                     class="w-full aspect-4/3 rounded-xl object-cover" loading="lazy">
                            </div>
                        </div>
                    </div>

                    <!-- Right Card (Behind) -->
                    <div class="col-start-1 row-start-1 flex justify-end items-start">
                        <div class="w-[90%] rotate-6 rounded-2xl bg-white shadow-lg border-4 border-orange-500
                                    transition-transform hover:scale-105 hover:z-10">
                            <div class="p-4">
                                <img src="{{asset('images/4.webp')}}" alt="AISD community work"
                                     class="w-full aspect-4/3 rounded-xl object-cover" loading="lazy">
                            </div>
                            <div class="px-4 pb-4">
                                <h3 class="font-semibold">AISD in Action</h3>
                                <h4 class="text-sm font-medium text-gray-600">Community Health Initiatives</h4>
                            </div>
                        </div>
                    </div>

                    <!-- Center Card (Front) -->
                    <div class="col-start-1 row-start-1 flex justify-center items-start">
                        <div class="w-[90%] rounded-2xl bg-white shadow-xl border-4 border-orange-500/20
                                    transition-transform hover:scale-[1.03] hover:z-20">
                            <div class="p-4">
                                <img src="{{asset('images/2.webp')}}" alt="AISD main initiative"
                                     class="w-full aspect-4/3 rounded-xl object-cover" loading="lazy">
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>

        <!-- Text Content (Unchanged) -->
        <div class="w-full lg:w-[55%] space-y-4 md:space-y-6">
            <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold font-teachers leading-tight md:leading-snug">
                A Commitment to Stronger
                <span class="text-orange-500">African Nations</span>
                Through Healthier Communities
            </h2>
            <p class="text-gray-700 text-base md:text-lg leading-relaxed">
                The Alliance for International Health and Development (AISD) is dedicated to strengthening health systems and enhancing well-being across Africa. As the development arm of the Maryam Abacha American University of Nigeria (MAAUN), AISD translates academic knowledge into real-world impact.
            </p>
            <p class="text-gray-700 text-base md:text-lg leading-relaxed">
                Our core philosophy is that healthier communities are the foundation of stronger nations. We are committed to developing sustainable, evidence-based, and locally-driven health solutions.
            </p>
        </div>
    </div>
</section>


<!-- Second Section (unchanged) -->
<section class="overflow-hidden bg-white pb-12 pt-20 lg:pb-[90px] lg:pt-[120px]">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="-mx-4 flex flex-wrap items-center justify-between">

            <!-- Left: Enhanced Image Gallery -->
            <div class="w-full px-4 lg:w-6/12">
                <div class="-mx-3 flex items-center sm:-mx-4">
                    <!-- Left Column -->
                    <div class="w-full px-3 sm:px-4 xl:w-1/2">
                        <!-- Top Image with Tilt Effect -->
                        <div class="py-3 sm:py-4 group relative">
                            <div class="overflow-hidden rounded-2xl border-4 border-white shadow-2xl
                                      transition-all duration-500 group-hover:border-orange-400
                                      group-hover:shadow-lg group-hover:-translate-y-1">
                                <img src="{{asset('images/5.webp')}}" alt="Community health activity"
                                     class="w-full transform transition-transform duration-700 group-hover:scale-105"
                                     loading="lazy" />
                            </div>
                            <div class="absolute -bottom-3 -right-3 h-16 w-16 rounded-full bg-orange-500
                                      opacity-20 group-hover:opacity-30 transition-opacity duration-300"></div>
                        </div>

                        <!-- Bottom Image with Floating Effect -->
                        <div class="py-3 sm:py-4 group relative">
                            <div class="overflow-hidden rounded-2xl border-4 border-white shadow-2xl
                                      transition-all duration-500 group-hover:border-blue-400
                                      group-hover:shadow-lg group-hover:-translate-y-1">
                                <img src="{{asset('images/4.webp')}}" alt="Field research work"
                                     class="w-full transform transition-transform duration-700 group-hover:scale-105"
                                     loading="lazy" />
                            </div>
                            <div class="absolute -top-3 -left-3 h-12 w-12 rounded-lg bg-blue-500 rotate-12
                                      opacity-20 group-hover:opacity-30 transition-opacity duration-300"></div>
                        </div>
                    </div>

                    <!-- Right Column - Featured Image -->
                    <div class="w-full px-3 sm:px-4 xl:w-1/2">
                        <div class="relative z-10 my-4 group">
                            <!-- Main Image with Decorative Elements -->
                            <div class="overflow-hidden rounded-2xl border-8 border-white shadow-[0_25px_50px_-15px_rgba(0,0,0,0.3)]
                                      transition-all duration-500 group-hover:border-orange-500/90
                                      group-hover:shadow-xl">
                                <img src="{{asset('images/3.webp')}}" alt="Team collaboration"
                                     class="w-full transform transition-transform duration-700 group-hover:scale-105"
                                     loading="lazy" />
                            </div>

                            <!-- Floating Decorative Elements -->
                            <span class="absolute -bottom-6 -right-6 z-[-1] h-14 w-14 rounded-full bg-orange-500/20
                                      group-hover:bg-orange-500/30 transition-all duration-500"></span>
                            <span class="absolute -top-6 -left-6 z-[-1] h-10 w-10 rotate-45 bg-blue-500/20
                                      group-hover:bg-blue-500/30 transition-all duration-500"></span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right: Content Section (Unchanged Structure) -->
            <div class="w-full lg:w-1/2 px-4 mt-10 lg:mt-0">
                <!-- Section Label -->
                <div class="text-center mb-12">
                    <h2 class="text-sm font-bold uppercase tracking-widest text-blue-700 mb-2">About Us</h2>
                    <p class="text-3xl sm:text-4xl font-bold text-gray-800">Learn About Our Mission and Work</p>
                </div>

                <!-- Vision Statement -->
                <p class="text-base text-gray-600 mb-10 max-w-md">
                    To improve health outcomes and well-being across Nigeria and Africa through people-centered innovation, evidence-based advocacy, and community-led solutions.
                </p>

                <!-- Info Grid - Enhanced Cards -->
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                    <!-- Item 1 -->
                    <div class="bg-white p-6 rounded-xl border-l-4 border-orange-500 shadow-md hover:shadow-lg transition-shadow">
                        <div class="flex items-start">
                            <span class="text-4xl font-bold text-orange-500 mr-4">1.</span>
                            <div>
                                <h4 class="text-xl font-bold text-gray-800 mb-2">Our Mission</h4>
                                <p class="text-gray-600 text-sm leading-relaxed">
                                    We focus on four key areas: conducting applied research, engaging communities in co-designing solutions, collaborating with institutions, and strengthening capacity.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Item 2 -->
                    <div class="bg-white p-6 rounded-xl border-l-4 border-blue-500 shadow-md hover:shadow-lg transition-shadow">
                        <div class="flex items-start">
                            <span class="text-4xl font-bold text-blue-500 mr-4">2.</span>
                            <div>
                                <h4 class="text-xl font-bold text-gray-800 mb-2">Our Health Strategy</h4>
                                <p class="text-gray-600 text-sm leading-relaxed">
                                    We help by using evidence-based research, community-centered design, institutional collaboration, and strategic capacity strengthening.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Item 3 -->
                    <div class="bg-white p-6 rounded-xl border-l-4 border-green-500 shadow-md hover:shadow-lg transition-shadow">
                        <div class="flex items-start">
                            <span class="text-4xl font-bold text-green-500 mr-4">3.</span>
                            <div>
                                <h4 class="text-xl font-bold text-gray-800 mb-2">Collaborative Approach</h4>
                                <p class="text-gray-600 text-sm leading-relaxed">
                                    We are creating a future where all communities are empowered to lead healthier lives through accountable health systems.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Item 4 -->
                    <div class="bg-white p-6 rounded-xl border-l-4 border-purple-500 shadow-md hover:shadow-lg transition-shadow">
                        <div class="flex items-start">
                            <span class="text-4xl font-bold text-purple-500 mr-4">4.</span>
                            <div>
                                <h4 class="text-xl font-bold text-gray-800 mb-2">Our Vision</h4>
                                <p class="text-gray-600 text-sm leading-relaxed">
                                    A future where health equity is driven by data, strengthened institutions, and empowered local leadership.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
