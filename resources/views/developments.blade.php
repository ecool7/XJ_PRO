@extends('layouts.app')

@section('title', 'Developments - Xinji')

@section('content')
    <!-- Hero Section -->
    <section class="relative z-10 pt-32 pb-20 px-6 md:px-12 lg:px-20">
        <div class="max-w-7xl mx-auto">
            <h1 class="font-sans text-5xl md:text-6xl lg:text-7xl font-semibold tracking-tighter leading-[0.95] text-obsidian mb-8">
                Our Developments
            </h1>
        </div>
    </section>

    <!-- Content Section -->
    <section class="py-24 px-6 md:px-12 lg:px-20 bg-white border-y border-border/60">
        <div class="max-w-7xl mx-auto space-y-16">
            <!-- Introduction -->
            <div class="max-w-4xl">
                <p class="font-sans text-base md:text-lg text-obsidian leading-relaxed">
                    Xinji has strong competencies across a wide range of technologies, including electronics, motor controls, sensors, embedded software, smart device applications, connectivity, wireless communication, communication protocols, patented solutions, internet of things (IoT), gateways, and more.
                </p>
                <p class="font-sans text-base md:text-lg text-obsidian leading-relaxed mt-6">
                    For your company, Xinji can develop reliable electronic products for various markets, industries and environments. Our experience and knowledge allow to implement the most complex idea that requires unconventional approach. We responsibly and flexibly manage projects for the development of new technological solutions throughout the entire process, from product idea to concept, development, pilot production, manufacturing and subsequent production management, provided your company does not have technological knowledge of electronics production.
                </p>
            </div>

            <!-- General Images Section -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 my-16">
                <div class="w-full aspect-video bg-canvas rounded-xl overflow-hidden">
                    <img src="{{ asset('images/developments/image-1.png') }}" alt="Xinji Development" class="w-full h-full object-cover">
                </div>
                <div class="w-full aspect-video bg-canvas rounded-xl overflow-hidden">
                    <img src="{{ asset('images/developments/image-2.png') }}" alt="Xinji Technology" class="w-full h-full object-cover">
                </div>
            </div>

            <!-- Competencies Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Microchips Card -->
                <div class="group bg-white border border-border rounded-xl p-6 hover:border-obsidian/30 transition-all duration-500 hover:shadow-xl hover:shadow-black/5">
                    <div class="w-12 h-12 bg-canvas border border-border rounded-lg flex items-center justify-center mb-4 text-obsidian shadow-sm group-hover:border-obsidian/30 transition-colors">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-circuit-board">
                            <rect x="2" y="2" width="20" height="20" rx="2"></rect>
                            <path d="M8 8h8"></path>
                            <path d="M8 12h8"></path>
                            <path d="M8 16h8"></path>
                        </svg>
                    </div>
                    <h2 class="font-sans text-xl font-semibold text-obsidian mb-3 tracking-tight">
                        Microchips
                    </h2>
                    <p class="font-sans text-sm text-subtle leading-relaxed">
                        With increasing digitalization, many industrial customers, local authorities and government agencies demand intelligent product solutions for their businesses and society. As a technology development partner, Xinji can introduce your company to the world of IoT and Industry 4.0 and offer comprehensive IoT solutions that cover the entire process, from data to value. Starting with the development of IoT smart devices for embedding in your company's products, connections, gateways to collect data from connected devices, data transfer over long distances into cloud solutions, and data processing. Cloud allows to analyze big data for presenting data analysis results to end users on digital devices such as computers, tablets, smartphones, and smart watches. The results of data analysis can serve as inspiration for new digital business models with even smarter and faster technologies.
                    </p>
                </div>
                <!-- Electronics Card -->
                <div class="group bg-white border border-border rounded-xl p-6 hover:border-obsidian/30 transition-all duration-500 hover:shadow-xl hover:shadow-black/5">
                    <div class="w-12 h-12 bg-canvas border border-border rounded-lg flex items-center justify-center mb-4 text-obsidian shadow-sm group-hover:border-obsidian/30 transition-colors">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-zap">
                            <polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"></polygon>
                        </svg>
                    </div>
                    <h2 class="font-sans text-xl font-semibold text-obsidian mb-3 tracking-tight">
                        Electronics
                    </h2>
                    <p class="font-sans text-sm text-subtle leading-relaxed">
                        Xinji's expertise in electronic product development ranges widely from simple or advanced layout designs for both analogue and digital electronics, to the latest wired and wireless microcontrollers.
                    </p>
                </div>

                <!-- Embedded Software Card -->
                <div class="group bg-white border border-border rounded-xl p-6 hover:border-obsidian/30 transition-all duration-500 hover:shadow-xl hover:shadow-black/5">
                    <div class="w-12 h-12 bg-canvas border border-border rounded-lg flex items-center justify-center mb-4 text-obsidian shadow-sm group-hover:border-obsidian/30 transition-colors">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-cpu">
                            <rect x="4" y="4" width="16" height="16" rx="2"></rect>
                            <rect x="9" y="9" width="6" height="6"></rect>
                            <path d="M9 1v6"></path>
                            <path d="M9 17v6"></path>
                            <path d="M1 9h6"></path>
                            <path d="M17 9h6"></path>
                        </svg>
                    </div>
                    <h2 class="font-sans text-xl font-semibold text-obsidian mb-3 tracking-tight">
                        Embedded Software
                    </h2>
                    <p class="font-sans text-sm text-subtle leading-relaxed">
                        Embedded software is the core of smart devices with various sensors and wireless communication protocols embedded in new smart products. Xinji selects the best available hardware and software platforms, sensor technology and wireless communication technology tailored to your new technology product ideas.
                    </p>
                </div>

                <!-- Wireless Communication Card -->
                <div class="group bg-white border border-border rounded-xl p-6 hover:border-obsidian/30 transition-all duration-500 hover:shadow-xl hover:shadow-black/5">
                    <div class="w-12 h-12 bg-canvas border border-border rounded-lg flex items-center justify-center mb-4 text-obsidian shadow-sm group-hover:border-obsidian/30 transition-colors">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-radio">
                            <path d="M4.9 19.1C1 15.2 1 8.8 4.9 4.9"></path>
                            <path d="M7.8 16.2c-2.3-2.3-2.3-6.1 0-8.5"></path>
                            <circle cx="12" cy="12" r="2"></circle>
                            <path d="M16.2 7.8c2.3 2.3 2.3 6.1 0 8.5"></path>
                            <path d="M19.1 4.9C23 8.8 23 15.1 19.1 19"></path>
                        </svg>
                    </div>
                    <h2 class="font-sans text-xl font-semibold text-obsidian mb-3 tracking-tight">
                        Wireless Communication
                    </h2>
                    <p class="font-sans text-sm text-subtle leading-relaxed">
                        After many years of developing technology solutions for industrial customers, local authorities and government agencies, Xinji has strong expertise in wireless communication and communication protocols.
                    </p>
                </div>

                <!-- Internet of Things Card -->
                <div class="group bg-white border border-border rounded-xl p-6 hover:border-obsidian/30 transition-all duration-500 hover:shadow-xl hover:shadow-black/5">
                    <div class="w-12 h-12 bg-canvas border border-border rounded-lg flex items-center justify-center mb-4 text-obsidian shadow-sm group-hover:border-obsidian/30 transition-colors">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-network">
                            <rect x="16" y="16" width="6" height="6" rx="1"></rect>
                            <rect x="2" y="16" width="6" height="6" rx="1"></rect>
                            <rect x="9" y="2" width="6" height="6" rx="1"></rect>
                            <path d="M5 16v-6h14v6"></path>
                            <path d="M12 12V8"></path>
                        </svg>
                    </div>
                    <h2 class="font-sans text-xl font-semibold text-obsidian mb-3 tracking-tight">
                        Internet of Things, IoT
                    </h2>
                    <p class="font-sans text-sm text-subtle leading-relaxed">
                        We know about the Internet of Things (IoT) from connected consumer products such as smartphones and TVs introduced to the B2C market. In the B2B market, the concept of Industrial Internet of Things (IIoT) applies to connected industrial systems and products, just as smart city solutions are used in the public sector.
                    </p>
                </div>

                <!-- Antenna Design Card -->
                <div class="group bg-white border border-border rounded-xl p-6 hover:border-obsidian/30 transition-all duration-500 hover:shadow-xl hover:shadow-black/5">
                    <div class="w-12 h-12 bg-canvas border border-border rounded-lg flex items-center justify-center mb-4 text-obsidian shadow-sm group-hover:border-obsidian/30 transition-colors">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-signal">
                            <path d="M2 20h.01"></path>
                            <path d="M7 20v-4"></path>
                            <path d="M12 20v-8"></path>
                            <path d="M17 20V8"></path>
                        </svg>
                    </div>
                    <h2 class="font-sans text-xl font-semibold text-obsidian mb-3 tracking-tight">
                        Antenna Design
                    </h2>
                    <p class="font-sans text-sm text-subtle leading-relaxed">
                        When developing technology products using wireless communication for data transmission, it is worth paying attention to antenna, as it has a significant impact on the quality and perceived functionality of the finished product.
                    </p>
                </div>
            </div>
        </div>
    </section>
@endsection

