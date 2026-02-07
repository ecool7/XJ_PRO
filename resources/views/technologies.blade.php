@extends('layouts.app')

@section('title', 'Technologies - Xinji')

@section('content')
    <!-- Hero Section -->
    <section class="relative z-10 pt-32 pb-20 px-6 md:px-12 lg:px-20 bg-canvas">
        <div class="max-w-7xl mx-auto">
            <h1 class="font-sans text-5xl md:text-6xl lg:text-7xl font-semibold tracking-tighter leading-[0.95] text-obsidian mb-8">
                Xinji – Your External Partner for Technology Development
            </h1>
        </div>
    </section>

    <!-- Content Section -->
    <section class="py-24 px-6 md:px-12 lg:px-20 bg-white border-y border-border/60">
        <div class="max-w-7xl mx-auto space-y-20">
            <!-- Introduction -->
            <div class="max-w-4xl space-y-6">
                <p class="font-sans text-base md:text-lg text-obsidian leading-relaxed">
                    Xinji is a technology development partner that has been developing technology product solutions and managing electronics manufacturing for start-ups and long-established businesses for over 10 years. We have built a solid technology background with extensive knowledge and strong expertise in the fields of technology product development and management. Xinji stays up to date with technological development and always uses the cutting-edge technology to develop your new product solutions.
                </p>
                <p class="font-sans text-base md:text-lg text-obsidian leading-relaxed">
                    Xinji's core competencies are technology services, namely proof of concept, product development, production management, and comprehensive IoT solutions. We do not sell technology products – instead, we develop new product solutions. With the developed project, your company gets all intellectual property rights and a full package of documents for the finished product.
                </p>
            </div>

            <!-- Design Model Section -->
            <div class="max-w-4xl">
                <h2 class="font-sans text-3xl md:text-4xl font-semibold tracking-tight text-obsidian mb-6">
                    Design Model for Product Development
                </h2>
                <p class="font-sans text-base text-obsidian leading-relaxed mb-6">
                    Xinji can take responsibility for the development of your technology product throughout the product life cycle, from the initial product idea to the finished product, and on to production management after the development process is complete.
                </p>
                <div class="space-y-4">
                    <p class="font-sans text-base text-obsidian leading-relaxed">
                        <strong>At the stage of idea development,</strong> Xinji clarifies whether your company's plans concerning technology product development matches Xinji's competencies and resources. <strong>At the stage of concept development,</strong> after the concept is approved, Xinji develops the specifications for the development project. Xinji also agrees to your company's final terms regarding savings and deadlines. <strong>During development,</strong> Xinji completes the project, documentation, prototypes, and all testing and approval of your new technology product. <strong>After development,</strong> Xinji launches pilot production of your product to check the quality of your company's new product manufacturing and completes the new product introduction (NPI).
                    </p>
                    <p class="font-sans text-base text-obsidian leading-relaxed">
                        Once your product idea has been developed into a new, complete and exciting technology solution, the product is ready for mass production. In addition, Xinji can take responsibility for managing the production of your new product if your company does not have technological expertise in electronics manufacturing.
                    </p>
                    <p class="font-sans text-base text-obsidian leading-relaxed">
                        When you choose Xinji as your company's new product technology development partner, you get one project manager committed to your development project. The project manager is responsible for the progress and continuity of the project throughout the development process.
                    </p>
                </div>
            </div>

            <!-- Proof of Concept Section -->
            <div class="max-w-4xl">
                <h2 class="font-sans text-3xl md:text-4xl font-semibold tracking-tight text-obsidian mb-6">
                    Proof of Concept
                </h2>
                <p class="font-sans text-base text-obsidian leading-relaxed mb-8">
                    Your company might have an exciting idea for a brand new product, yet doubt about the technical functionality of the product. Under the Xinji design model, we propose to develop a proof of concept during the concept development phase basing on our expertise in hardware, embedded software and firmware development, mechanics, design for manufacturing, and documentation, testing and approvals.
                </p>
                <p class="font-sans text-base text-obsidian leading-relaxed mb-8">
                    With a proof of concept, your company can assess all the risks associated with the development project as early as possible and clarify whether your preferences, like functionality, are applicable. That is why it is a good idea to do proof of concept before actually developing new technology products, so that we make the best use of time and expertise in the development phase.
                </p>
                
                <!-- Images Grid -->
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-12">
                    <div class="w-full bg-canvas rounded-xl overflow-hidden">
                        <img src="{{ asset('images/technologies/proof-concept-1.png') }}" alt="Proof of Concept" class="w-full h-auto object-contain">
                    </div>
                    <div class="w-full bg-canvas rounded-xl overflow-hidden">
                        <img src="{{ asset('images/technologies/proof-concept-2.png') }}" alt="Proof of Concept" class="w-full h-auto object-contain">
                    </div>
                    <div class="w-full bg-canvas rounded-xl overflow-hidden">
                        <img src="{{ asset('images/technologies/proof-concept-3.png') }}" alt="Proof of Concept" class="w-full h-auto object-contain">
                    </div>
                </div>
            </div>

            <!-- Product Development Section -->
            <div class="max-w-4xl">
                <h2 class="font-sans text-3xl md:text-4xl font-semibold tracking-tight text-obsidian mb-6">
                    Product Development
                </h2>
                <p class="font-sans text-base text-obsidian leading-relaxed mb-6">
                    With Xinji as your development partner, you will be well focused on the best product solutions. Xinji's core competencies are developments in a wide range of technologies, including high-speed microprocessors, power supplies, power electronics, motor controls, sensors, embedded software, mechanical integration, connectivity, communication protocols, wireless communication, patented solutions, Internet of things (IoT), gateways and more, driven by superior project management.
                </p>
                <p class="font-sans text-base text-obsidian leading-relaxed mb-6">
                    Since 2013, Xinji has been developing technology products for industrial customers with their own product range, government agencies and start-up companies. Our experience in product development includes:
                </p>
                <ul class="space-y-2 font-sans text-base text-obsidian leading-relaxed list-disc list-inside">
                    <li>Hardware</li>
                    <li>Embedded software and firmware</li>
                    <li>Mechanics</li>
                    <li>Design for production</li>
                    <li>Documentation, testing and approvals</li>
                </ul>
            </div>

            <!-- Production Management Section -->
            <div class="max-w-4xl">
                <h2 class="font-sans text-3xl md:text-4xl font-semibold tracking-tight text-obsidian mb-6">
                    Production Management
                </h2>
                <p class="font-sans text-base text-obsidian leading-relaxed mb-6">
                    Our full service concept involves transforming your product idea into a successful turnkey product solution with production management throughout the value chain and product life cycle. Xinji offers new product introductions (NPIs). Our production management experience includes:
                </p>
                <ul class="space-y-2 font-sans text-base text-obsidian leading-relaxed list-disc list-inside">
                    <li>Cooperation with EMS (electronic manufacturing services)</li>
                    <li>Production documentation for EMS</li>
                    <li>Control and emergency plan</li>
                    <li>Test planning and coverage</li>
                    <li>Quality assurance</li>
                    <li>Packaged solution</li>
                    <li>Delivery</li>
                </ul>
            </div>
        </div>
    </section>
@endsection

@section('scripts')
<script>
    document.addEventListener('DOMContentLoaded', () => {
        // Hide Three.js animation background on Technologies page
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

