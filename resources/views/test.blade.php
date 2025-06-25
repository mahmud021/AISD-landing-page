<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - Enhanced Layout</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    animation: {
                        'float': 'float 6s ease-in-out infinite',
                        'float-reverse': 'floatReverse 7s ease-in-out infinite',
                        'fade-in': 'fadeIn 1s ease-out forwards'
                    },
                    keyframes: {
                        float: {
                            '0%, 100%': { transform: 'translateY(0)' },
                            '50%': { transform: 'translateY(-10px)' },
                        },
                        floatReverse: {
                            '0%, 100%': { transform: 'translateY(0)' },
                            '50%': { transform: 'translateY(12px)' },
                        },
                        fadeIn: {
                            '0%': { opacity: 0 },
                            '100%': { opacity: 1 }
                        }
                    }
                }
            }
        }
    </script>
    <style>
        .floating-element {
            transition: all 0.4s cubic-bezier(0.34, 1.56, 0.64, 1);
        }

        .floating-element:hover {
            transform: translateY(-8px) rotate(2deg);
            z-index: 50 !important;
        }

        .shadow-cyan-glow {
            box-shadow: 0 15px 30px -5px rgba(14, 116, 144, 0.15);
        }

        .shadow-cyan-glow:hover {
            box-shadow: 0 20px 40px -5px rgba(14, 116, 144, 0.25);
        }

        .feature-card:hover h3 {
            color: #0e7490;
            transition: color 0.3s ease;
        }

        .image-container {
            perspective: 1200px;
        }

        .parallax-layer {
            transform-style: preserve-3d;
        }
    </style>
</head>
<body class="bg-gray-50 font-sans">
<!-- Enhanced About Us Section -->
<section class="bg-white py-20">
    <div class="container mx-auto px-4">
        <div class="flex flex-col lg:flex-row items-start lg:items-center gap-12">
            <!-- Text Content (Left) -->
            <div class="lg:w-1/2 w-full">
                <div class="flex items-center gap-4 mb-4 animate-fade-in">
                    <div class="w-16 h-px bg-gray-800"></div>
                    <h2 class="uppercase tracking-widest text-cyan-700 text-sm font-bold">About us</h2>
                </div>
                <p class="text-gray-600 text-base mb-8 max-w-md animate-fade-in" style="animation-delay: 0.1s">
                    To improve health outcomes and well-being across Nigeria and Africa through people-centered innovation, evidence-based advocacy, and community-led solutions.
                </p>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-8">
                    <!-- Card 1 -->
                    <div class="feature-card p-5 rounded-xl transition-all duration-300 hover:bg-cyan-50">
                        <h3 class="text-5xl font-bold text-black leading-tight mb-2">1.</h3>
                        <h4 class="text-xl font-bold text-black mb-2">Our Mission</h4>
                        <p class="text-gray-500 text-base leading-relaxed">
                            We focus on four key areas: conducting applied research, engaging communities in co-designing solutions, collaborating with institutions, and strengthening the capacity of health professionals.
                        </p>
                    </div>

                    <!-- Card 2 -->
                    <div class="feature-card p-5 rounded-xl transition-all duration-300 hover:bg-cyan-50">
                        <h3 class="text-5xl font-bold text-black leading-tight mb-2">2.</h3>
                        <h4 class="text-xl font-bold text-black mb-2">Our Health Strategy</h4>
                        <p class="text-gray-500 text-base leading-relaxed">
                            We help by using evidence-based research, community-centered design, institutional collaboration, and strategic capacity strengthening to tackle health challenges.
                        </p>
                    </div>

                    <!-- Card 3 -->
                    <div class="feature-card p-5 rounded-xl transition-all duration-300 hover:bg-cyan-50">
                        <h3 class="text-5xl font-bold text-black leading-tight mb-2">3.</h3>
                        <h4 class="text-xl font-bold text-black mb-2">A Collaborative Approach</h4>
                        <p class="text-gray-500 text-base leading-relaxed">
                            We are creating a future where all communities are empowered to lead healthier lives through accountable health systems, inclusive research, and sustainable development.
                        </p>
                    </div>

                    <!-- Card 4 -->
                    <div class="feature-card p-5 rounded-xl transition-all duration-300 hover:bg-cyan-50">
                        <h3 class="text-5xl font-bold text-black leading-tight mb-2">4.</h3>
                        <h4 class="text-xl font-bold text-black mb-2">Our Vision for Success</h4>
                        <p class="text-gray-500 text-base leading-relaxed">
                            A future where health equity is driven by data, strengthened institutions, and empowered local leadership.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Image Stack (Right) -->
            <div class="lg:w-1/2 w-full relative h-[700px] lg:h-[550px] image-container">
                <!-- Floating elements with animations -->
                <div class="absolute w-72 h-[465px] top-10 left-16 rounded-2xl z-10 floating-element shadow-cyan-glow animate-float">
                    <div class="w-full h-full bg-gradient-to-br from-cyan-500 to-cyan-700 rounded-2xl flex flex-col items-center justify-center p-6 text-white">
                        <i class="fas fa-users text-5xl mb-4"></i>
                        <h3 class="text-xl font-bold mb-2">Community Impact</h3>
                        <p class="text-center text-cyan-100">Engaging local communities to develop sustainable health solutions</p>
                    </div>
                </div>

                <div class="absolute w-72 h-[189px] top-20 right-0 rounded-2xl z-20 floating-element shadow-cyan-glow animate-float-reverse">
                    <div class="w-full h-full bg-gradient-to-tr from-cyan-600 to-cyan-800 rounded-2xl flex items-center justify-center p-4">
                        <div class="bg-white/20 rounded-full p-4 mr-4">
                            <i class="fas fa-chart-line text-2xl text-white"></i>
                        </div>
                        <div>
                            <h3 class="text-white font-bold">Data-Driven</h3>
                            <p class="text-cyan-100 text-sm">Evidence-based approaches</p>
                        </div>
                    </div>
                </div>

                <div class="absolute w-72 h-[189px] bottom-0 left-0 rounded-2xl z-30 floating-element shadow-cyan-glow animate-float">
                    <div class="w-full h-full bg-gradient-to-tl from-cyan-400 to-cyan-600 rounded-2xl flex items-center justify-center p-4">
                        <div class="bg-white/20 rounded-full p-4 mr-4">
                            <i class="fas fa-handshake text-2xl text-white"></i>
                        </div>
                        <div>
                            <h3 class="text-white font-bold">Partnerships</h3>
                            <p class="text-cyan-100 text-sm">Collaborating for greater impact</p>
                        </div>
                    </div>
                </div>

                <!-- Decorative elements -->
                <div class="absolute top-0 right-10 w-24 h-24 rounded-full bg-cyan-100/30 z-0 animate-pulse"></div>
                <div class="absolute bottom-20 left-5 w-16 h-16 rounded-full bg-cyan-200/40 z-0 animate-ping" style="animation-delay: 1s"></div>
                <div class="absolute top-1/3 right-1/4 w-10 h-10 rounded-full bg-cyan-300/30 z-0 animate-pulse" style="animation-delay: 0.5s"></div>

                <!-- Responsive fallback -->
                <div class="lg:hidden flex flex-col gap-6 mt-10">
                    <div class="w-full h-48 rounded-2xl shadow-xl bg-gradient-to-r from-cyan-500 to-cyan-700 flex items-center justify-center text-white p-4">
                        <i class="fas fa-users text-4xl mr-4"></i>
                        <div>
                            <h3 class="text-xl font-bold">Community Impact</h3>
                            <p class="text-sm">Engaging local communities</p>
                        </div>
                    </div>
                    <div class="w-full h-48 rounded-2xl shadow-xl bg-gradient-to-r from-cyan-600 to-cyan-800 flex items-center justify-center text-white p-4">
                        <i class="fas fa-chart-line text-4xl mr-4"></i>
                        <div>
                            <h3 class="text-xl font-bold">Data-Driven</h3>
                            <p class="text-sm">Evidence-based approaches</p>
                        </div>
                    </div>
                    <div class="w-full h-48 rounded-2xl shadow-xl bg-gradient-to-r from-cyan-400 to-cyan-600 flex items-center justify-center text-white p-4">
                        <i class="fas fa-handshake text-4xl mr-4"></i>
                        <div>
                            <h3 class="text-xl font-bold">Partnerships</h3>
                            <p class="text-sm">Collaborating for impact</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Stats Section -->
        <div class="mt-24 grid grid-cols-2 md:grid-cols-4 gap-6 max-w-4xl mx-auto">
            <div class="text-center p-6 bg-cyan-50 rounded-xl border border-cyan-100">
                <div class="text-4xl font-bold text-cyan-700 mb-2">15+</div>
                <div class="text-gray-600">Years of Experience</div>
            </div>
            <div class="text-center p-6 bg-cyan-50 rounded-xl border border-cyan-100">
                <div class="text-4xl font-bold text-cyan-700 mb-2">200+</div>
                <div class="text-gray-600">Projects Completed</div>
            </div>
            <div class="text-center p-6 bg-cyan-50 rounded-xl border border-cyan-100">
                <div class="text-4xl font-bold text-cyan-700 mb-2">50+</div>
                <div class="text-gray-600">Community Partners</div>
            </div>
            <div class="text-center p-6 bg-cyan-50 rounded-xl border border-cyan-100">
                <div class="text-4xl font-bold text-cyan-700 mb-2">12</div>
                <div class="text-gray-600">African Countries</div>
            </div>
        </div>
    </div>
</section>

<script>
    // Simple animation trigger
    document.addEventListener('DOMContentLoaded', function() {
        const featureCards = document.querySelectorAll('.feature-card');

        featureCards.forEach((card, index) => {
            card.style.animationDelay = `${index * 0.1}s`;
        });
    });
</script>
</body>
</html>
