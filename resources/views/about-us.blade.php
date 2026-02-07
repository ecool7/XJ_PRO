@extends('layouts.app')

@section('title', 'About us - Xinji')

@section('content')
    <!-- Hero Section -->
    <section class="relative z-10 pt-32 pb-20 px-6 md:px-12 lg:px-20 bg-white border-b border-border/60">
        <div class="max-w-7xl mx-auto">
            <div class="max-w-4xl">
                <h1 class="font-sans text-6xl md:text-7xl lg:text-8xl font-bold text-obsidian tracking-tighter leading-[0.95] mb-8 fade-in-up">
                    Xinji
                </h1>
                <p class="font-sans text-xl md:text-2xl text-subtle leading-relaxed mb-12 fade-in-up">
                    An experienced independent technology development partner offering a full service concept with a focus on product development and production management.
                </p>
            </div>
        </div>
    </section>

    <!-- Content Section -->
    <section class="relative z-10 py-24 px-6 md:px-12 lg:px-20 bg-white">
        <div class="max-w-7xl mx-auto">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 lg:gap-24 items-start mb-24">
                <!-- Left Column: Text Content -->
                <div class="space-y-8 fade-in-up">
                    <div class="space-y-6">
                        <p class="font-sans text-base md:text-lg text-obsidian leading-relaxed">
                            We develop innovative products and solutions in electronics, embedded software, wireless technology and the internet of things (IoT) for customers with their own product portfolio.
                        </p>
                        
                        <p class="font-sans text-base md:text-lg text-obsidian leading-relaxed">
                            As an external development partner, Xinji is responsible for product development and production management. Significantly, customers always own the finished solution and have all intellectual property rights. Full product documentation is provided to customers upon completion of development projects.
                        </p>
                    </div>
                </div>

                <!-- Right Column: Key Points -->
                <div class="space-y-6 fade-in-up">
                    <div class="bg-canvas border border-border/60 rounded-xl p-6 hover:border-obsidian/30 transition-all duration-500 hover:shadow-lg">
                        <div class="flex items-start gap-4">
                            <div class="w-10 h-10 bg-obsidian rounded-lg flex items-center justify-center flex-shrink-0">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="font-sans text-sm font-semibold text-obsidian mb-2">Intellectual Property</h3>
                                <p class="font-sans text-xs text-subtle leading-relaxed">
                                    Customers always own the finished solution and have all intellectual property rights.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="bg-canvas border border-border/60 rounded-xl p-6 hover:border-obsidian/30 transition-all duration-500 hover:shadow-lg">
                        <div class="flex items-start gap-4">
                            <div class="w-10 h-10 bg-obsidian rounded-lg flex items-center justify-center flex-shrink-0">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                                    <polyline points="14 2 14 8 20 8"></polyline>
                                    <line x1="16" y1="13" x2="8" y2="13"></line>
                                    <line x1="16" y1="17" x2="8" y2="17"></line>
                                    <polyline points="10 9 9 9 8 9"></polyline>
                                </svg>
                            </div>
                            <div>
                                <h3 class="font-sans text-sm font-semibold text-obsidian mb-2">Full Documentation</h3>
                                <p class="font-sans text-xs text-subtle leading-relaxed">
                                    Complete product documentation is provided to customers upon completion of development projects.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="bg-canvas border border-border/60 rounded-xl p-6 hover:border-obsidian/30 transition-all duration-500 hover:shadow-lg">
                        <div class="flex items-start gap-4">
                            <div class="w-10 h-10 bg-obsidian rounded-lg flex items-center justify-center flex-shrink-0">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <circle cx="12" cy="12" r="10"></circle>
                                    <polyline points="12 6 12 12 16 14"></polyline>
                                </svg>
                            </div>
                            <div>
                                <h3 class="font-sans text-sm font-semibold text-obsidian mb-2">Full Lifecycle</h3>
                                <p class="font-sans text-xs text-subtle leading-relaxed">
                                    Product management throughout the entire value chain and product life cycle.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Full Width Paragraph -->
            <div class="max-w-4xl mx-auto mb-24 fade-in-up">
                <p class="font-sans text-base md:text-lg text-obsidian leading-relaxed">
                    Xinji's full cycle concept includes product management throughout the entire value chain and product life cycle, from the first creative product idea to product discontionuation and replacement with a new technology product.
                </p>
            </div>

            <!-- Graphic Section -->
            <div class="relative w-full min-h-[500px]">
                <!-- Background Pattern (Abstract Circuit Lines) -->
                <div class="absolute inset-0 opacity-20">
                    <svg class="w-full h-full" viewBox="0 0 1200 800" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice">
                        <defs>
                            <pattern id="circuit-pattern" x="0" y="0" width="100" height="100" patternUnits="userSpaceOnUse">
                                <path d="M0 50 L100 50 M50 0 L50 100" stroke="#111111" stroke-width="0.5" fill="none"/>
                            </pattern>
                        </defs>
                        <rect width="100%" height="100%" fill="url(#circuit-pattern)"/>
                        <!-- Abstract circuit lines -->
                        <path d="M50 100 L200 100 L200 250 L350 250 L350 400 L500 400" stroke="#111111" stroke-width="1.5" fill="none" stroke-linecap="round" opacity="0.4"/>
                        <path d="M100 150 L100 300 L250 300 L250 450 L400 450" stroke="#111111" stroke-width="1.5" fill="none" stroke-linecap="round" opacity="0.4"/>
                        <path d="M600 200 L750 200 L750 350 L900 350 L900 500" stroke="#111111" stroke-width="1.5" fill="none" stroke-linecap="round" opacity="0.4"/>
                        <path d="M700 100 L700 250 L850 250 L850 400 L1000 400" stroke="#111111" stroke-width="1.5" fill="none" stroke-linecap="round" opacity="0.4"/>
                        <path d="M300 500 L450 500 L450 650 L600 650" stroke="#111111" stroke-width="1.5" fill="none" stroke-linecap="round" opacity="0.4"/>
                        <path d="M800 550 L950 550 L950 700 L1100 700" stroke="#111111" stroke-width="1.5" fill="none" stroke-linecap="round" opacity="0.4"/>
                    </svg>
                </div>
                
                <!-- Circuit Board Image -->
                <div class="relative z-10 flex items-center justify-center h-full">
                    <div class="w-full max-w-3xl transform hover:scale-[1.02] transition-transform duration-700">
                        <div class="relative">
                            <div class="absolute inset-0 bg-gradient-to-br from-obsidian/5 to-transparent rounded-2xl blur-3xl"></div>
                            <img src="{{ asset('images/about/circuit-board.png') }}" alt="Xinji Technology Circuit Board" class="w-full h-auto object-contain transform rotate-[-1deg] shadow-2xl rounded-lg relative z-10">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <style>
        @keyframes fade-in-up {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        .fade-in-up {
            animation: fade-in-up 0.6s ease-out forwards;
        }
    </style>
@endsection
