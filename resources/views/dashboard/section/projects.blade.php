<!-- Projects (Ongoing Activities) Section -->
<section class="bg-white py-16">
    <div class="container mx-auto px-4 flex flex-col gap-12">
        <!-- Section Header -->
        <div class="text-center mb-12">
            <h2 class="text-sm font-bold uppercase tracking-widest text-blue-700 mb-2">Current Activities</h2>
            <p class="text-3xl sm:text-4xl font-bold text-gray-800">Ongoing Projects and Field Engagements</p>
        </div>
        <!-- Cards Grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
            <!-- Card 1 -->
            <div class="bg-white border border-gray-200 rounded-xl shadow-md overflow-hidden flex flex-col">
                <img src="{{ asset('images/6.webp') }}" alt="Out-of-School Study" class="w-full h-40 object-cover">
                <div class="p-5 flex flex-col gap-4">
          <span class="inline-block w-fit px-2 py-0.5 bg-emerald-50 text-emerald-700 text-xs font-semibold rounded">
            Access to Education
          </span>
                    <div class="flex flex-col gap-2">
                        <h3 class="text-base font-semibold text-black leading-snug">Out-of-School Children Study</h3>
                        <p class="text-sm text-gray-600 leading-relaxed">
                            Investigating drivers of out-of-school children in Kano State to inform recommendations.
                        </p>
                    </div>
                </div>
            </div>
            <!-- Card 2 -->
            <div class="bg-white border border-gray-200 rounded-xl shadow-md overflow-hidden flex flex-col">
                <img src="{{ asset('images/7.webp') }}" alt="Child Labor Study" class="w-full h-40 object-cover">
                <div class="p-5 flex flex-col gap-4">
          <span class="inline-block w-fit px-2 py-0.5 bg-emerald-50 text-emerald-700 text-xs font-semibold rounded">
            Child Protection
          </span>
                    <div class="flex flex-col gap-2">
                        <h3 class="text-base font-semibold text-black leading-snug">Child Labor Study</h3>
                        <p class="text-sm text-gray-600 leading-relaxed">
                            Examining factors of child labor to propose actionable solutions and mitigate practices.
                        </p>
                    </div>
                </div>
            </div>
            <!-- Card 3 -->
            <div class="bg-white border border-gray-200 rounded-xl shadow-md overflow-hidden flex flex-col">
                <img src="{{ asset('images/8.webp') }}" alt="Diabetes Study" class="w-full h-40 object-cover">
                <div class="p-5 flex flex-col gap-4">
          <span class="inline-block w-fit px-2 py-0.5 bg-emerald-50 text-emerald-700 text-xs font-semibold rounded">
            Public Health
          </span>
                    <div class="flex flex-col gap-2">
                        <h3 class="text-base font-semibold text-black leading-snug">Diabetes Study</h3>
                        <p class="text-sm text-gray-600 leading-relaxed">
                            Researching rising diabetes incidences in Northern Nigeria to offer prevention strategies.
                        </p>
                    </div>
                </div>
            </div>
            <!-- Card 4 -->
            <div class="bg-white border border-gray-200 rounded-xl shadow-md overflow-hidden flex flex-col">
                <img src="{{ asset('images/9.webp') }}" alt="Drug Vigilance Study" class="w-full h-40 object-cover">
                <div class="p-5 flex flex-col gap-4">
          <span class="inline-block w-fit px-2 py-0.5 bg-emerald-50 text-emerald-700 text-xs font-semibold rounded">
            Substance Control
          </span>
                    <div class="flex flex-col gap-2">
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
<!-- Past Projects Section -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Section Header -->
        <div class="text-center mb-12">
            <h2 class="text-sm font-bold uppercase tracking-widest text-blue-700 mb-2">Projects We Have Done</h2>
            <p class="text-3xl sm:text-4xl font-bold text-gray-800">
                Holistic Development: Community-Led Transformation Programs
            </p>
        </div>
        <!-- Grid Layout -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Project Card -->
            @foreach([
              ['img' => '10.webp', 'title' => 'Girl Child Education Program', 'desc' => 'Empowers JSS3 and SS3 girls to excel in exit exams through after-school tutoring by MAAUN student mentors.'],
              ['img' => '11.webp', 'title' => 'Hygiene Promotion Campaign', 'desc' => 'MAAUN students educate communities on waste management and environmental cleanliness.'],
              ['img' => '12.webp', 'title' => 'Out-of-School Children Program', 'desc' => 'Provides alternative schooling and daily nutrition to street hawkers and child laborers.'],
              ['img' => '13.webp', 'title' => 'Conflict Management and Peacebuilding', 'desc' => 'Equipping individuals with communication and mediation skills for conflict resolution.'],
              ['img' => '14.webp', 'title' => 'Livelihood Training Centers', 'desc' => 'Training centers in Maiduguri, Bama, and Ngala for vocational skills.'],
              ['img' => '15.webp', 'title' => 'Economic Empowerment Initiative', 'desc' => 'Boot camps for women and youth traders focused on business and financial skills.']
            ] as $project)
                <div class="relative overflow-hidden rounded-2xl shadow-lg group">
                    <!-- Project Image -->
                    <img src="{{ asset('images/' . $project['img']) }}" alt="{{ $project['title'] }}"
                         class="w-full h-64 object-cover transition-transform duration-500 group-hover:scale-105">
                    <!-- Gradient Overlay -->
                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent"></div>
                    <!-- Text Content -->
                    <div class="absolute bottom-0 left-0 right-0 p-6 text-white">
                        <h3 class="text-lg font-bold drop-shadow-md">{{ $project['title'] }}</h3>
                        <p class="text-sm mt-1 drop-shadow-md">{{ $project['desc'] }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

