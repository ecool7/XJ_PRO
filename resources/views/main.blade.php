@extends('layouts.app')

@section('title', 'Main - Xinji')

@section('content')
      <!-- HERO SECTION -->
      <section class="relative min-h-[90vh] flex flex-col lg:flex-row items-center justify-between px-6 md:px-12 lg:px-20 pt-32 pb-20 gap-16">
        <div class="max-w-2xl space-y-10 relative z-10">
          <div class="space-y-6">
            <h1 class="font-sans text-6xl md:text-7xl lg:text-8xl font-semibold tracking-tighter text-obsidian leading-[0.95]">
              <span id="rotating-headline" class="transition-opacity duration-1000">
                From idea to
                <br>
                <span class="text-subtle">design.</span>
              </span>
            </h1>
            <p class="max-w-md font-sans text-base text-subtle leading-relaxed">
              <span id="rotating-text" class="transition-opacity duration-1000">
                The main competence of Xinji is to conduct projects based on high-speed microprocessor solutions, power supplies, power electronics, embedded software, wireless communication technologies and the Internet of Things (IoT).
              </span>
            </p>
          </div>

          <div class="flex flex-wrap items-center gap-4">
            <button class="group relative isolate overflow-hidden bg-obsidian text-white text-sm font-semibold px-8 py-3.5 rounded shadow-[0_1px_2px_rgba(0,0,0,0.08)] ring-1 ring-white/10 transition-all duration-500 ease-[cubic-bezier(0.25,1,0.5,1)] hover:scale-[1.03] hover:shadow-[0_12px_32px_-8px_rgba(0,0,0,0.3)] hover:ring-white/20 active:scale-[0.98] focus:outline-none focus:ring-2 focus:ring-obsidian/20 focus:ring-offset-2 flex items-center gap-2">
              <div class="shimmer-layer absolute inset-0 bg-gradient-to-r from-transparent via-white/15 to-transparent z-0 pointer-events-none"></div>
              <span class="relative z-10">Request Demo</span>
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-right relative z-10 transition-transform duration-300 group-hover:translate-x-1">
                <path d="M5 12h14"></path>
                <path d="m12 5 7 7-7 7"></path>
              </svg>
            </button>
            <button class="px-8 py-3.5 bg-white text-obsidian border border-border text-sm font-medium rounded shadow-sm transition-all duration-300 ease-out hover:bg-gray-50 hover:border-obsidian/40 hover:text-black hover:shadow-md active:scale-[0.97] active:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-obsidian/10 focus:ring-offset-2">
              Documentation
            </button>
          </div>
        </div>

        <!-- Visual -->
        <div class="relative w-full max-w-lg aspect-square lg:aspect-[4/3] flex items-center justify-center">
          <div class="absolute inset-0 bg-gradient-to-tr from-canvas via-white to-canvas opacity-50 blur-3xl"></div>
          <div class="premium-card w-full h-full p-6 relative overflow-hidden rounded-xl">
            <div class="absolute top-0 left-0 w-full h-1 bg-gradient-to-r from-obsidian to-transparent"></div>
            <!-- Mock UI: Node Graph -->
            <div class="h-full w-full flex flex-col">
              <div class="flex justify-between items-center mb-8 border-b border-border/50 pb-4">
                <div class="flex items-center gap-2">
                  <div class="w-3 h-3 rounded-full bg-border"></div>
                  <span class="text-[10px] uppercase tracking-wider font-semibold text-subtle">
                    Development Flow
                  </span>
                </div>
                <div class="flex gap-2">
                  <span class="w-12 h-1.5 rounded-full bg-border/50"></span>
                </div>
              </div>
              <div class="flex-1 relative">
                <!-- SVG Graph -->
                <svg class="w-full h-full" viewBox="0 0 400 300">
                  <style>
                    .signal-path {
                      stroke-dasharray: 60 400;
                      stroke-dashoffset: 60;
                      animation: signal-flow 6s linear infinite;
                    }
                    @keyframes signal-flow {
                      0% { stroke-dashoffset: 60; opacity: 0; }
                      5% { opacity: 1; }
                      90% { stroke-dashoffset: -360; opacity: 1; }
                      95% { opacity: 0; }
                      100% { stroke-dashoffset: -360; opacity: 0; }
                    }
                    .node-context { animation: pulse-context 6s infinite ease-out; transform-origin: 50px 150px; }
                    @keyframes pulse-context {
                      0% { transform: scale(1); fill: #111; }
                      5% { transform: scale(1.4); fill: #000; }
                      15% { transform: scale(1); fill: #111; }
                    }
                    .node-assumptions { animation: pulse-assumptions 6s infinite ease-out; transform-origin: 190px 80px; }
                    @keyframes pulse-assumptions {
                      25% { stroke-width: 1.5; transform: scale(1); }
                      30% { stroke-width: 2.5; transform: scale(1.05); stroke: #000; }
                      40% { stroke-width: 1.5; transform: scale(1); stroke: #111; }
                    }
                    .node-evidence { animation: pulse-evidence 6s infinite ease-out; transform-origin: 280px 120px; }
                    @keyframes pulse-evidence {
                      55% { stroke-width: 1.5; transform: scale(1); }
                      60% { stroke-width: 2.5; transform: scale(1.05); stroke: #000; }
                      70% { stroke-width: 1.5; transform: scale(1); stroke: #111; }
                    }
                    .node-outcome { animation: pulse-outcome 6s infinite ease-out; transform-origin: 320px 150px; }
                    @keyframes pulse-outcome {
                      85% { transform: scale(1); fill: #111; }
                      90% { transform: scale(1.25); fill: #000; }
                      100% { transform: scale(1); fill: #111; }
                    }
                    .outcome-check {
                      stroke-dasharray: 12;
                      stroke-dashoffset: 12;
                      animation: check-draw 6s linear infinite;
                    }
                    @keyframes check-draw {
                      0%, 88% { stroke-dashoffset: 12; opacity: 0; }
                      92% { stroke-dashoffset: 0; opacity: 1; }
                      100% { stroke-dashoffset: 0; opacity: 0; }
                    }
                  </style>

                  <!-- Static Base Paths -->
                  <path d="M50,150 C100,150 100,80 150,80" fill="none" stroke="#E5E5E5" stroke-width="2"></path>
                  <path d="M50,150 C100,150 100,220 150,220" fill="none" stroke="#E5E5E5" stroke-width="2"></path>
                  <path d="M150,80 C200,80 200,120 250,120" fill="none" stroke="#E5E5E5" stroke-width="2"></path>
                  <path d="M150,220 C200,220 200,180 250,180" fill="none" stroke="#E5E5E5" stroke-width="2"></path>
                  <path d="M250,120 L320,150" fill="none" stroke="#E5E5E5" stroke-width="2"></path>
                  <path d="M250,180 L320,150" fill="none" stroke="#E5E5E5" stroke-width="2"></path>

                  <!-- Active Signal Path -->
                  <path d="M50,150 C100,150 100,80 150,80 C200,80 200,120 250,120 L320,150" fill="none" stroke="#111" stroke-width="2.5" stroke-linecap="round" class="signal-path"></path>

                  <!-- Nodes & Text -->
                  <circle cx="50" cy="150" r="6" fill="#111" class="node-context"></circle>
                  <text x="50" y="175" text-anchor="middle" font-family="Plus Jakarta Sans, sans-serif" font-size="10" font-weight="600" fill="#111">
                    Your Idea
                  </text>

                  <rect x="150" y="70" width="80" height="20" rx="4" fill="white" stroke="#111" stroke-width="1.5" class="node-assumptions"></rect>
                  <text x="190" y="83" text-anchor="middle" font-family="Plus Jakarta Sans, sans-serif" font-size="9" font-weight="600" fill="#111" dy="1">
                    Our Development
                  </text>

                  <rect x="130" y="210" width="120" height="20" rx="4" fill="white" stroke="#111" stroke-width="1.5"></rect>
                  <text x="190" y="223" text-anchor="middle" font-family="Plus Jakarta Sans, sans-serif" font-size="9" font-weight="600" fill="#111" dy="1">
                    Technical Confidence
                  </text>

                  <rect x="230" y="110" width="100" height="20" rx="4" fill="white" stroke="#111" stroke-width="1.5" class="node-evidence"></rect>
                  <text x="280" y="123" text-anchor="middle" font-family="Plus Jakarta Sans, sans-serif" font-size="9" font-weight="600" fill="#111" dy="1">
                    Logic & Optimization
                  </text>

                  <circle cx="320" cy="150" r="12" fill="#111" class="node-outcome"></circle>
                  <path d="M316 150l3 3 5-5" stroke="white" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="outcome-check"></path>
                  <text x="320" y="178" text-anchor="middle" font-family="Plus Jakarta Sans, sans-serif" font-size="10" font-weight="600" fill="#111">
                    Your Product
                  </text>
                </svg>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- COMPETENCIES SECTION -->
      <section class="py-32 px-6 md:px-12 lg:px-20 bg-white border-y border-border/60">
        <div class="max-w-7xl mx-auto">
          <div class="text-center mb-20">
            <h2 class="font-sans text-4xl md:text-5xl font-semibold text-obsidian tracking-tight mb-6 leading-[1.1]">
              Our Competencies
            </h2>
            <p class="text-subtle text-lg leading-relaxed max-w-2xl mx-auto">
              Xinji's expertise spans across multiple technological domains, delivering comprehensive solutions for modern challenges.
            </p>
          </div>

          <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            <!-- ELECTRONICS -->
            <div class="group relative bg-white border border-border rounded-xl p-8 hover:border-obsidian/30 transition-all duration-500 hover:shadow-xl hover:shadow-black/5">
              <div class="w-12 h-12 bg-canvas border border-border rounded-lg flex items-center justify-center mb-6 text-obsidian shadow-sm group-hover:border-obsidian/30 transition-colors">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-zap">
                  <polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"></polygon>
                </svg>
              </div>
              <h3 class="text-xl font-semibold text-obsidian mb-3 tracking-tight">
                ELECTRONICS
              </h3>
              <p class="text-sm text-subtle leading-relaxed">
                Xinji's competencies in electronic product development range widely from designing simple or advanced circuits with both analog and digital electronics.
              </p>
            </div>

            <!-- EMBEDDED SOFTWARE -->
            <div class="group relative bg-white border border-border rounded-xl p-8 hover:border-obsidian/30 transition-all duration-500 hover:shadow-xl hover:shadow-black/5">
              <div class="w-12 h-12 bg-canvas border border-border rounded-lg flex items-center justify-center mb-6 text-obsidian shadow-sm group-hover:border-obsidian/30 transition-colors">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-cpu">
                  <rect x="4" y="4" width="16" height="16" rx="2"></rect>
                  <rect x="9" y="9" width="6" height="6"></rect>
                  <path d="M9 1v6"></path>
                  <path d="M9 17v6"></path>
                  <path d="M1 9h6"></path>
                  <path d="M17 9h6"></path>
                </svg>
              </div>
              <h3 class="text-xl font-semibold text-obsidian mb-3 tracking-tight">
                EMBEDDED SOFTWARE
              </h3>
              <p class="text-sm text-subtle leading-relaxed">
                As a leading technology development company, Xinji has strong embedded software skills.
              </p>
            </div>

            <!-- WIRELESS CONNECTION -->
            <div class="group relative bg-white border border-border rounded-xl p-8 hover:border-obsidian/30 transition-all duration-500 hover:shadow-xl hover:shadow-black/5">
              <div class="w-12 h-12 bg-canvas border border-border rounded-lg flex items-center justify-center mb-6 text-obsidian shadow-sm group-hover:border-obsidian/30 transition-colors">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-radio">
                  <path d="M4.9 19.1C1 15.2 1 8.8 4.9 4.9"></path>
                  <path d="M7.8 16.2c-2.3-2.3-2.3-6.1 0-8.5"></path>
                  <circle cx="12" cy="12" r="2"></circle>
                  <path d="M16.2 7.8c2.3 2.3 2.3 6.1 0 8.5"></path>
                  <path d="M19.1 4.9C23 8.8 23 15.1 19.1 19"></path>
                </svg>
              </div>
              <h3 class="text-xl font-semibold text-obsidian mb-3 tracking-tight">
                WIRELESS CONNECTION
              </h3>
              <p class="text-sm text-subtle leading-relaxed">
                Xinji has strong competencies in the field of wireless communications and communication protocols after many years of experience in developing technological solutions for industrial customers.
              </p>
            </div>

            <!-- INTERNET OF THINGS - IOT -->
            <div class="group relative bg-white border border-border rounded-xl p-8 hover:border-obsidian/30 transition-all duration-500 hover:shadow-xl hover:shadow-black/5">
              <div class="w-12 h-12 bg-canvas border border-border rounded-lg flex items-center justify-center mb-6 text-obsidian shadow-sm group-hover:border-obsidian/30 transition-colors">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-network">
                  <rect x="16" y="16" width="6" height="6" rx="1"></rect>
                  <rect x="2" y="16" width="6" height="6" rx="1"></rect>
                  <rect x="9" y="2" width="6" height="6" rx="1"></rect>
                  <path d="M5 16v-6h14v6"></path>
                  <path d="M12 12V8"></path>
                </svg>
              </div>
              <h3 class="text-xl font-semibold text-obsidian mb-3 tracking-tight">
                INTERNET OF THINGS - IOT
              </h3>
              <p class="text-sm text-subtle leading-relaxed">
                Internet of Things IoT, we know how to ensure the connection of consumer goods, such as phones and televisions, in the BtC market.
              </p>
            </div>
          </div>
        </div>
      </section>

      <!-- DECISIONS SECTION -->
      <section class="py-32 px-6 md:px-12 lg:px-20 bg-canvas border-y border-border/60">
        <div class="max-w-7xl mx-auto">
          <div class="mb-16">
            <h2 class="font-sans text-4xl md:text-5xl font-semibold text-obsidian tracking-tight mb-6 leading-[1.1]">
              Decisions
            </h2>
          </div>

          <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <!-- Item 1: 2.4GHz communication channel for drones -->
            <div class="group bg-white border border-border rounded-xl p-6 hover:border-obsidian/30 transition-all duration-500 hover:shadow-xl hover:shadow-black/5">
              <div class="mb-4 aspect-square bg-canvas rounded-lg overflow-hidden flex items-center justify-center">
                <img src="{{ asset('images/products/drone-communication.png') }}" alt="2.4GHz communication channel for drones" class="w-full h-full object-contain p-4 group-hover:scale-105 transition-transform duration-500">
              </div>
              <h3 class="font-sans text-sm font-semibold text-obsidian tracking-tight text-center">
                2.4GHz communication channel for drones
              </h3>
            </div>

            <!-- Item 2: CONNECTING BLOCK XJ500 -->
            <div class="group bg-white border border-border rounded-xl p-6 hover:border-obsidian/30 transition-all duration-500 hover:shadow-xl hover:shadow-black/5">
              <div class="mb-4 aspect-square bg-canvas rounded-lg overflow-hidden flex items-center justify-center">
                <img src="{{ asset('images/products/connecting-block-xj500.png') }}" alt="CONNECTING BLOCK XJ500" class="w-full h-full object-contain p-4 group-hover:scale-105 transition-transform duration-500">
              </div>
              <h3 class="font-sans text-sm font-semibold text-obsidian tracking-tight text-center">
                CONNECTING BLOCK XJ500
              </h3>
            </div>

            <!-- Item 3: IOT MULTIPLATFORM -->
            <div class="group bg-white border border-border rounded-xl p-6 hover:border-obsidian/30 transition-all duration-500 hover:shadow-xl hover:shadow-black/5">
              <div class="mb-4 aspect-square bg-canvas rounded-lg overflow-hidden flex items-center justify-center">
                <img src="{{ asset('images/products/iot-multiplatform.png') }}" alt="IOT MULTIPLATFORM" class="w-full h-full object-contain p-4 group-hover:scale-105 transition-transform duration-500">
              </div>
              <h3 class="font-sans text-sm font-semibold text-obsidian tracking-tight text-center">
                IOT MULTIPLATFORM
              </h3>
            </div>

            <!-- Item 4: XECU Engine Control Unit -->
            <div class="group bg-white border border-border rounded-xl p-6 hover:border-obsidian/30 transition-all duration-500 hover:shadow-xl hover:shadow-black/5">
              <div class="mb-4 aspect-square bg-canvas rounded-lg overflow-hidden flex items-center justify-center">
                <img src="{{ asset('images/products/xecu-engine-control.png') }}" alt="XECU Engine Control Unit" class="w-full h-full object-contain p-4 group-hover:scale-105 transition-transform duration-500">
              </div>
              <h3 class="font-sans text-sm font-semibold text-obsidian tracking-tight text-center">
                XECU Engine Control Unit
              </h3>
            </div>
          </div>
        </div>
      </section>

      <!-- LAST NEWS SECTION -->
      <section class="py-32 px-6 md:px-12 lg:px-20 bg-white border-y border-border/60">
        <div class="max-w-7xl mx-auto">
          <div class="mb-16">
            <h2 class="font-sans text-4xl md:text-5xl font-semibold text-obsidian tracking-tight mb-6 leading-[1.1]">
              Last news.
            </h2>
          </div>

          <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <!-- News Item 1: STM32F4DISCOVERY -->
            <div class="group bg-white border border-border rounded-xl overflow-hidden hover:border-obsidian/30 transition-all duration-500 hover:shadow-xl hover:shadow-black/5">
              <div class="aspect-video bg-canvas overflow-hidden">
                <img src="{{ asset('images/news/IM1.png') }}" alt="The STM32F4DISCOVERY Discovery" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
              </div>
              <div class="p-6">
                <h3 class="font-sans text-sm font-semibold text-obsidian mb-3 tracking-tight">
                  The STM32F4DISCOVERY Discovery
                </h3>
                <p class="font-sans text-xs text-obsidian leading-relaxed">
                  The STM32F4DISCOVERY Discovery kit leverages the capabilities of the STM32F407 high-performance microcontrollers, to allow users to develop...
                </p>
              </div>
            </div>

            <!-- News Item 2: Microchip Technology PIC18-Q71 -->
            <div class="group bg-white border border-border rounded-xl overflow-hidden hover:border-obsidian/30 transition-all duration-500 hover:shadow-xl hover:shadow-black/5">
              <div class="aspect-video bg-canvas overflow-hidden">
                <img src="{{ asset('images/news/IM2.png') }}" alt="Microchip Technology PIC18-Q71" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
              </div>
              <div class="p-6">
                <h3 class="font-sans text-sm font-semibold text-obsidian mb-3 tracking-tight">
                  Microchip Technology PIC18-Q71 28/40/44/48-Pin Microcontrollers
                </h3>
                <p class="font-sans text-xs text-obsidian leading-relaxed">
                  Microchip Technology PIC18-Q71 28/40/44/48-Pin Microcontrollers are designed for high bandwidth mixed-signal and sensor applications. The PIC18-Q71...
                </p>
              </div>
            </div>

            <!-- News Item 3: SparkFun MGM240P -->
            <div class="group bg-white border border-border rounded-xl overflow-hidden hover:border-obsidian/30 transition-all duration-500 hover:shadow-xl hover:shadow-black/5">
              <div class="aspect-video bg-canvas overflow-hidden">
                <img src="{{ asset('images/news/IM3.png') }}" alt="SparkFun MGM240P Thing Plus Matter Development Board" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
              </div>
              <div class="p-6">
                <h3 class="font-sans text-sm font-semibold text-obsidian mb-3 tracking-tight">
                  SparkFun MGM240P Thing Plus Matter Development Board
                </h3>
                <p class="font-sans text-xs text-obsidian leading-relaxed">
                  SparkFun MGM240P Thing Plus Matter Development Board is an easily accessible board that combines Matter and Qwiic...
                </p>
              </div>
            </div>

            <!-- News Item 4: UnitedSiC / Qorvo -->
            <div class="group bg-white border border-border rounded-xl overflow-hidden hover:border-obsidian/30 transition-all duration-500 hover:shadow-xl hover:shadow-black/5">
              <div class="aspect-video bg-canvas overflow-hidden">
                <img src="{{ asset('images/news/IM4.png') }}" alt="UnitedSiC / Qorvo 750V UJ4C/SC SiC FETs" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
              </div>
              <div class="p-6">
                <h3 class="font-sans text-sm font-semibold text-obsidian mb-3 tracking-tight">
                  UnitedSiC / Qorvo 750V UJ4C/SC SiC FETs in D2PAK-7L Package
                </h3>
                <p class="font-sans text-xs text-obsidian leading-relaxed">
                  Morbi turpis risus, vestibulum sed tempor eget, varius vitae leo. Aenean ornare tellus eget ipsum congue....
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- LOGOS CAROUSEL -->
      <section class="border-y border-border/60 py-16 bg-white overflow-hidden relative">
        <div class="max-w-7xl mx-auto px-6 md:px-12">
          <div class="relative overflow-hidden">
            <!-- Gradient masks on sides -->
            <div class="absolute left-0 top-0 bottom-0 w-32 bg-gradient-to-r from-white to-transparent z-10 pointer-events-none"></div>
            <div class="absolute right-0 top-0 bottom-0 w-32 bg-gradient-to-l from-white to-transparent z-10 pointer-events-none"></div>
            
            <!-- Carousel Container -->
            <div class="logos-carousel flex gap-16 items-center h-20" id="logos-carousel">
              <!-- Logo 1: Micron -->
              <div class="flex-shrink-0 w-[200px] flex items-center justify-center opacity-60 hover:opacity-100 transition-opacity duration-500">
                <img src="{{ asset('images/logos/micron-technology-logo.png') }}" alt="Micron" class="h-20 w-auto object-contain">
              </div>

              <!-- Logo 2: SK hynix -->
              <div class="flex-shrink-0 w-[200px] flex items-center justify-center opacity-60 hover:opacity-100 transition-opacity duration-500">
                <img src="{{ asset('images/logos/sk_hynix.png') }}" alt="SK hynix" class="h-20 w-auto object-contain">
              </div>

              <!-- Logo 3: STMicroelectronics -->
              <div class="flex-shrink-0 w-[200px] flex items-center justify-center opacity-60 hover:opacity-100 transition-opacity duration-500">
                <img src="{{ asset('images/logos/st.png') }}" alt="STMicroelectronics" class="h-12 w-auto object-contain">
              </div>

              <!-- Logo 4: Texas Instruments -->
              <div class="flex-shrink-0 w-[200px] flex items-center justify-center opacity-60 hover:opacity-100 transition-opacity duration-500">
                <img src="{{ asset('images/logos/texas_instruments.png') }}" alt="Texas Instruments" class="h-12 w-auto object-contain">
              </div>

              <!-- Logo 5: IBM -->
              <div class="flex-shrink-0 w-[200px] flex items-center justify-center opacity-60 hover:opacity-100 transition-opacity duration-500">
                <img src="{{ asset('images/logos/ibm.png') }}" alt="IBM" class="h-12 w-auto object-contain">
              </div>

              <!-- Duplicate logos for seamless loop -->
              <!-- Logo 1: Micron (duplicate) -->
              <div class="flex-shrink-0 w-[200px] flex items-center justify-center opacity-60 hover:opacity-100 transition-opacity duration-500">
                <img src="{{ asset('images/logos/micron-technology-logo.png') }}" alt="Micron" class="h-20 w-auto object-contain">
              </div>

              <!-- Logo 2: SK hynix (duplicate) -->
              <div class="flex-shrink-0 w-[200px] flex items-center justify-center opacity-60 hover:opacity-100 transition-opacity duration-500">
                <img src="{{ asset('images/logos/sk_hynix.png') }}" alt="SK hynix" class="h-20 w-auto object-contain">
              </div>

              <!-- Logo 3: STMicroelectronics (duplicate) -->
              <div class="flex-shrink-0 w-[200px] flex items-center justify-center opacity-60 hover:opacity-100 transition-opacity duration-500">
                <img src="{{ asset('images/logos/st.png') }}" alt="STMicroelectronics" class="h-12 w-auto object-contain">
              </div>

              <!-- Logo 4: Texas Instruments (duplicate) -->
              <div class="flex-shrink-0 w-[200px] flex items-center justify-center opacity-60 hover:opacity-100 transition-opacity duration-500">
                <img src="{{ asset('images/logos/texas_instruments.png') }}" alt="Texas Instruments" class="h-12 w-auto object-contain">
              </div>

              <!-- Logo 5: IBM (duplicate) -->
              <div class="flex-shrink-0 w-[200px] flex items-center justify-center opacity-60 hover:opacity-100 transition-opacity duration-500">
                <img src="{{ asset('images/logos/ibm.png') }}" alt="IBM" class="h-12 w-auto object-contain">
              </div>
            </div>
          </div>
        </div>
      </section>

      <style>
        .logos-carousel {
          animation: scroll-logos 35s linear infinite;
          will-change: transform;
        }
        
        @keyframes scroll-logos {
          0% {
            transform: translateX(0);
          }
          100% {
            transform: translateX(calc(-200px * 5 - 64px * 5));
          }
        }
        
        .logos-carousel:hover {
          animation-play-state: paused;
        }
      </style>

      <script>
        document.addEventListener('DOMContentLoaded', function() {
          const headlineElement = document.getElementById('rotating-headline');
          const textElement = document.getElementById('rotating-text');
          
          const headlines = [
            {
              headline: 'From idea to<br><span class="text-subtle">design.</span>',
              text: 'The main competence of Xinji is to conduct projects based on high-speed microprocessor solutions, power supplies, power electronics, embedded software, wireless communication technologies and the Internet of Things (IoT).'
            },
            {
              headline: 'Business with<br><span class="text-subtle">Xinji.</span>',
              text: 'Xinji is an experienced technology partner offering a full-service concept with an emphasis on product development and production management.'
            },
            {
              headline: 'It all starts with<br><span class="text-subtle">an idea.</span>',
              text: 'Xinji can take responsibility for the development of your technological product throughout the entire product lifecycle from initial production to the finished product and further production management after the development process is completed.'
            }
          ];
          
          let currentIndex = 0;
          
          function rotateText() {
            // Fade out
            headlineElement.style.opacity = '0';
            textElement.style.opacity = '0';
            
            setTimeout(() => {
              // Change content
              currentIndex = (currentIndex + 1) % headlines.length;
              headlineElement.innerHTML = headlines[currentIndex].headline;
              textElement.textContent = headlines[currentIndex].text;
              
              // Fade in
              headlineElement.style.opacity = '1';
              textElement.style.opacity = '1';
            }, 500);
          }
          
          // Rotate every 6 seconds
          setInterval(rotateText, 6000);
        });
      </script>
@endsection

