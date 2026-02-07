@extends('layouts.app')

@section('title', 'News - Xinji')

@section('content')
    <!-- Hero Section -->
    <section class="relative z-10 pt-32 pb-20 px-6 md:px-12 lg:px-20 bg-canvas">
        <div class="max-w-7xl mx-auto">
            <h1 class="font-sans text-5xl md:text-6xl lg:text-7xl font-semibold tracking-tighter leading-[0.95] text-obsidian mb-8">
                News
            </h1>
        </div>
    </section>

    <!-- News Section -->
    <section class="py-24 px-6 md:px-12 lg:px-20 bg-white border-y border-border/60">
        <div class="max-w-6xl mx-auto">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <!-- News Article 1 -->
                <article class="group cursor-pointer border border-border rounded-lg overflow-hidden bg-surface hover:shadow-lg transition-all duration-300">
                    <a href="{{ route('news.article', 'stm32f4discovery') }}" class="block">
                        <div class="overflow-hidden bg-canvas flex items-center justify-center" style="width: 100%; max-width: 600px; height: 400px; margin: 0 auto;">
                            <img src="{{ asset('images/news/IM1.png') }}" alt="STM32F4DISCOVERY" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                        </div>
                        <div class="p-4">
                            <div class="mb-2">
                                <span class="text-xs text-subtle uppercase tracking-wider font-light">July 9, 2023</span>
                            </div>
                            <h3 class="text-lg md:text-xl font-semibold text-obsidian mb-2 tracking-tight group-hover:text-charcoal transition-colors line-clamp-2">
                                The STM32F4DISCOVERY Discovery
                            </h3>
                            <p class="text-xs text-subtle leading-relaxed line-clamp-2">
                                The STM32F4DISCOVERY Discovery kit leverages the capabilities of the STM32F407 high-performance microcontrollers, to allow users to develop audio applications easily. It includes an ST-LINK/V2-A embedded debug tool, one ST-MEMS digital accelerometer, one digital microphone, one audio DAC with integrated class D speaker driver, LEDs, push-buttons, and a USB OTG Micro-AB connector.
                            </p>
                        </div>
                    </a>
                </article>

                <!-- News Article 2 -->
                <article class="group cursor-pointer border border-border rounded-lg overflow-hidden bg-surface hover:shadow-lg transition-all duration-300">
                    <a href="{{ route('news.article', 'pic18-q71') }}" class="block">
                        <div class="overflow-hidden bg-canvas flex items-center justify-center" style="width: 100%; max-width: 600px; height: 400px; margin: 0 auto;">
                            <img src="{{ asset('images/news/IM2.png') }}" alt="Microchip PIC18-Q71" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                        </div>
                        <div class="p-4">
                            <div class="mb-2">
                                <span class="text-xs text-subtle uppercase tracking-wider font-light">April 18, 2017</span>
                            </div>
                            <h3 class="text-lg md:text-xl font-semibold text-obsidian mb-2 tracking-tight group-hover:text-charcoal transition-colors line-clamp-2">
                                Microchip Technology PIC18-Q71 28/40/44/48-Pin Microcontrollers
                            </h3>
                            <p class="text-xs text-subtle leading-relaxed line-clamp-2">
                                Microchip Technology PIC18-Q71 28/40/44/48-Pin Microcontrollers are designed for high bandwidth mixed-signal and sensor applications. The PIC18-Q71 MCUs are an ideal solution for lighting, motor control, and medical market segments. The analog-focused Microchip PIC18-Q71 MCUs incorporate a 12-bit differential ADC with computation and context switching, two operational amplifiers, a 10-bit Digital-to-Analog Converter (DAC), and two 8-bit…
                            </p>
                        </div>
                    </a>
                </article>

                <!-- News Article 3 -->
                <article class="group cursor-pointer border border-border rounded-lg overflow-hidden bg-surface hover:shadow-lg transition-all duration-300">
                    <a href="{{ route('news.article', 'sparkfun-mgm240p') }}" class="block">
                        <div class="overflow-hidden bg-canvas flex items-center justify-center" style="width: 100%; max-width: 600px; height: 400px; margin: 0 auto;">
                            <img src="{{ asset('images/news/IM3.png') }}" alt="SparkFun MGM240P" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                        </div>
                        <div class="p-4">
                            <div class="mb-2">
                                <span class="text-xs text-subtle uppercase tracking-wider font-light">April 10, 2017</span>
                            </div>
                            <h3 class="text-lg md:text-xl font-semibold text-obsidian mb-2 tracking-tight group-hover:text-charcoal transition-colors line-clamp-2">
                                SparkFun MGM240P Thing Plus Matter Development Board
                            </h3>
                            <p class="text-xs text-subtle leading-relaxed line-clamp-2">
                                SparkFun MGM240P Thing Plus Matter Development Board is an easily accessible board that combines Matter and Qwiic ecosystem for agile development and prototyping Matter-based IoT devices. This board provides secure connectivity for 802.15.4 with mesh communication (Thread) and 5.3 Bluetooth® low energy protocols. The development boards are Feather-compatible and come with a Qwiic connector for easy integration…
                            </p>
                        </div>
                    </a>
                </article>

                <!-- News Article 4 -->
                <article class="group cursor-pointer border border-border rounded-lg overflow-hidden bg-surface hover:shadow-lg transition-all duration-300">
                    <a href="{{ route('news.article', 'unitedsic-qorvo') }}" class="block">
                        <div class="overflow-hidden bg-canvas flex items-center justify-center" style="width: 100%; max-width: 600px; height: 400px; margin: 0 auto;">
                            <img src="{{ asset('images/news/IM4.png') }}" alt="UnitedSiC / Qorvo" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                        </div>
                        <div class="p-4">
                            <div class="mb-2">
                                <span class="text-xs text-subtle uppercase tracking-wider font-light">April 7, 2017</span>
                            </div>
                            <h3 class="text-lg md:text-xl font-semibold text-obsidian mb-2 tracking-tight group-hover:text-charcoal transition-colors line-clamp-2">
                                UnitedSiC / Qorvo 750V UJ4C/SC SiC FETs in D2PAK-7L Package
                            </h3>
                            <p class="text-xs text-subtle leading-relaxed line-clamp-2">
                                UnitedSiC / Qorvo 750V UJ4C/SC SiC FETs in D2PAK-7L Package are available in multiple on-resistance options from 9mΩ to 60mΩ. Leveraging a unique cascode SiC FET technology in which a normally-on SiC JFET is co-packaged with a Si MOSFET…
                            </p>
                        </div>
                    </a>
                </article>

                <!-- News Article 5 -->
                <article class="group cursor-pointer border border-border rounded-lg overflow-hidden bg-surface hover:shadow-lg transition-all duration-300">
                    <a href="{{ route('news.article', 'stm32c0116-dk') }}" class="block">
                        <div class="overflow-hidden bg-canvas flex items-center justify-center" style="width: 100%; max-width: 600px; height: 400px; margin: 0 auto;">
                            <img src="{{ asset('images/news/IM5.png') }}" alt="STM32C0116-DK" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                        </div>
                        <div class="p-4">
                            <div class="mb-2">
                                <span class="text-xs text-subtle uppercase tracking-wider font-light">April 2, 2017</span>
                            </div>
                            <h3 class="text-lg md:text-xl font-semibold text-obsidian mb-2 tracking-tight group-hover:text-charcoal transition-colors line-clamp-2">
                                STMicroelectronics STM32C0116-DK Discovery Kit
                            </h3>
                            <p class="text-xs text-subtle leading-relaxed line-clamp-2">
                                STMicroelectronics STM32C0116-DK Discovery Kit is designed to demonstrate the features of the STM32C0 MCUs in a UFQFPN20 package. The STM32C0116-DK Kit includes one UFQFPN20 to DIL20 module based on the STM32C011F6 microcontroller and enables the user to develop and share applications. The device incorporates an onboard ST-LINK/V2-1 to debug and program the embedded STM32 microcontroller.…
                            </p>
                        </div>
                    </a>
                </article>
            </div>
        </div>
    </section>
@endsection

@section('scripts')
<script>
    document.addEventListener('DOMContentLoaded', () => {
        // Hide Three.js animation background on News page
        const canvasContainer = document.getElementById('canvas-container');
        if (canvasContainer) {
            canvasContainer.style.display = 'none';
        }
        
        // Also hide technical grid background
        const technicalGrid = document.querySelector('.technical-grid');
        if (technicalGrid) {
            technicalGrid.style.display = 'none';
        }
    });
</script>
@endsection
