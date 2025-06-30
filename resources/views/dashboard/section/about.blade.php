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

            <!-- Left: TailGrids Image Layout -->
            <div class="w-full px-4 lg:w-6/12">
                <div class="-mx-3 flex items-center sm:-mx-4">
                    <div class="w-full px-3 sm:px-4 xl:w-1/2">
                        <div class="py-3 sm:py-4">
                            <img src="{{asset('images/5.webp')}}" alt=""
                                 class="w-full rounded-2xl" />
                        </div>
                        <div class="py-3 sm:py-4">
                            <img src="{{asset('images/4.webp')}}" alt=""
                                 class="w-full rounded-2xl" />
                        </div>
                    </div>
                    <div class="w-full px-3 sm:px-4 xl:w-1/2">
                        <div class="relative z-10 my-4">
                            <img src="{{asset('images/3.webp')}}" alt=""
                                 class="w-full rounded-2xl" />
                            <span class="absolute -bottom-7 -right-7 z-[-1]">
                                <!-- SVG omitted for brevity -->
                            </span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right: Your Numbered About Content -->
            <div class="w-full lg:w-1/2 px-4 mt-10 lg:mt-0">
                <!-- Section Label -->
                <div class="text-center mb-12">
                    <h2 class="text-sm font-bold uppercase tracking-widest text-blue-700 mb-2">About Us</h2>
                    <p class="text-3xl sm:text-4xl font-bold text-gray-800">Learn About Our Mission and Work</p>
                </div>

                <!-- Vision Statement -->
                <p class="text-base text-gray-600  mb-10 max-w-md">
                    To improve health outcomes and well-being across Nigeria and Africa through people-centered innovation, evidence-based advocacy, and community-led solutions.
                </p>

                <!-- Info Grid -->
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-8">
                    <!-- Item 1 -->
                    <div class="bg-white -800 p-6 rounded-lg shadow-md">
                        <h3 class="text-4xl font-bold text-black  mb-2">1.</h3>
                        <h4 class="text-xl font-bold text-black  mb-2">Our Mission</h4>
                        <p class="text-gray-600  text-sm leading-relaxed">
                            We focus on four key areas: conducting applied research, engaging communities in co-designing solutions, collaborating with institutions, and strengthening the capacity of health professionals.
                        </p>
                    </div>

                    <!-- Item 2 -->
                    <div class="bg-white -800 p-6 rounded-lg shadow-md">
                        <h3 class="text-4xl font-bold text-black  mb-2">2.</h3>
                        <h4 class="text-xl font-bold text-black  mb-2">Our Health Strategy</h4>
                        <p class="text-gray-600  text-sm leading-relaxed">
                            We help by using evidence-based research, community-centered design, institutional collaboration, and strategic capacity strengthening to tackle health challenges.
                        </p>
                    </div>

                    <!-- Item 3 -->
                    <div class="bg-white -800 p-6 rounded-lg shadow-md">
                        <h3 class="text-4xl font-bold text-black  mb-2">3.</h3>
                        <h4 class="text-xl font-bold text-black  mb-2">A Collaborative Approach</h4>
                        <p class="text-gray-600  text-sm leading-relaxed">
                            We are creating a future where all communities are empowered to lead healthier lives through accountable health systems, inclusive research, and sustainable development.
                        </p>
                    </div>

                    <!-- Item 4 -->
                    <div class="bg-white -800 p-6 rounded-lg shadow-md">
                        <h3 class="text-4xl font-bold text-black  mb-2">4.</h3>
                        <h4 class="text-xl font-bold text-black  mb-2">Our Vision for Success</h4>
                        <p class="text-gray-600  text-sm leading-relaxed">
                            A future where health equity is driven by data, strengthened institutions, and empowered local leadership.
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
