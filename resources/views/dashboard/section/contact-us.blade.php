<section class="relative bg-white py-20 lg:py-32 overflow-hidden">
    <!-- Floating Background Elements -->
    <div class="absolute inset-0 overflow-hidden z-0">
        <div class="absolute -left-20 -top-20 w-96 h-96 rounded-full bg-orange-500/5 blur-3xl"></div>
        <div class="absolute -right-20 -bottom-20 w-80 h-80 rounded-full bg-blue-500/5 blur-3xl"></div>
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Section Header -->
        <div class="text-center mb-16 relative z-20">
            <div class="inline-flex items-center justify-center gap-3 mb-4">
                <span class="h-px w-12 bg-blue-500"></span>
                <h2 class="text-sm font-bold uppercase tracking-widest text-blue-700">Contact Us</h2>
                <span class="h-px w-12 bg-blue-500"></span>
            </div>
            <h1 class="text-3xl sm:text-4xl lg:text-5xl font-bold font-teachers text-gray-800">
                Help Us Route Your Inquiry
            </h1>
        </div>

        <!-- Contact Cards -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-16 relative z-10">
            <!-- Collaborate Card -->
            <div
                class="bg-white border-4 border-white rounded-2xl shadow-lg p-8 md:p-10 hover:shadow-xl transition-shadow">
                <h3 class="text-xl font-bold text-gray-800 mb-4">Collaborate</h3>
                <a href="mailto:info@aisd.org"
                   class="text-2xl font-medium text-orange-500 hover:text-orange-600 transition-colors block mb-3">
                    info@aisd.org
                </a>
                <p class="text-gray-600">+234 000 000 0000</p>
            </div>

            <!-- Press Card -->
            <div
                class="bg-white border-4 border-white rounded-2xl shadow-lg p-8 md:p-10 hover:shadow-xl transition-shadow">
                <h3 class="text-xl font-bold text-gray-800 mb-4">Press</h3>
                <a href="mailto:press@aisd.org"
                   class="text-2xl font-medium text-blue-500 hover:text-blue-600 transition-colors block mb-3">
                    press@aisd.org
                </a>
                <p class="text-gray-600">+234 000 000 0000</p>
            </div>
        </div>

        <!-- Gradient Divider -->
        <div class="relative h-1 mb-16">
            <div class="absolute inset-0 bg-gradient-to-r from-transparent via-orange-500/20 to-transparent"></div>
        </div>

        <!-- Contact Form -->
        <div
            class="bg-white border-4 border-white rounded-2xl shadow-lg p-6 sm:p-10 lg:p-12 max-w-3xl mx-auto relative z-10">
            <div class="mb-10">
                <h3 class="text-2xl font-bold font-teachers text-gray-800">Let's Get You to the Right Place</h3>
                <p class="mt-3 text-gray-600">
                    Reach out to our team! We're eager to learn more about how you'd like to collaborate.
                </p>
            </div>

            <form class="space-y-6">
                <!-- Name Field -->
                <div>
                    <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Full Name</label>
                    <input type="text" id="name" required
                           class="w-full px-4 py-3 rounded-xl border border-gray-300 focus:border-orange-500 focus:ring-2 focus:ring-orange-200 transition">
                </div>

                <!-- Email Field -->
                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Work Email</label>
                    <input type="email" id="email" required
                           class="w-full px-4 py-3 rounded-xl border border-gray-300 focus:border-orange-500 focus:ring-2 focus:ring-orange-200 transition">
                </div>


                <!-- Company Field -->
                <div>
                    <label for="company" class="block text-sm font-medium text-gray-700 mb-1">Organization</label>
                    <input type="text" id="company"
                           class="w-full px-4 py-3 rounded-xl border border-gray-300 focus:border-orange-500 focus:ring-2 focus:ring-orange-200 transition">
                </div>

                <!-- Message Field -->
                <div>
                    <label for="message" class="block text-sm font-medium text-gray-700 mb-1">Message</label>
                    <textarea id="message" rows="4"
                              class="w-full px-4 py-3 rounded-xl border border-gray-300 focus:border-orange-500 focus:ring-2 focus:ring-orange-200 transition"></textarea>
                </div>

                <!-- Submit Button -->
                <div class="text-right">
                    <button type="submit"
                            class="inline-flex items-center px-6 py-3 bg-orange-500 hover:bg-orange-600 text-white font-medium rounded-full shadow-md hover:shadow-lg transition-all duration-300">
                        Submit
                        <svg class="ml-2 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                        </svg>
                    </button>
                </div>
            </form>
        </div>
    </div>
</section>
