@extends('layouts.app')

@section('title', $article['title'] . ' - News - Xinji')

@section('content')
    <!-- Hero Section -->
    <section class="relative z-10 pt-32 pb-20 px-6 md:px-12 lg:px-20 bg-canvas">
        <div class="max-w-7xl mx-auto">
            <a href="{{ route('news') }}" class="inline-flex items-center gap-2 text-subtle hover:text-obsidian transition-colors mb-8">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="m12 19-7-7 7-7"></path>
                    <path d="M19 12H5"></path>
                </svg>
                Back to News
            </a>
            <div class="mb-4">
                <span class="text-xs text-subtle uppercase tracking-wider font-light">{{ $article['date'] }} <span class="text-charcoal">tagged news</span></span>
            </div>
            <h1 class="font-sans text-4xl md:text-5xl lg:text-6xl font-semibold tracking-tighter leading-[0.95] text-obsidian mb-8">
                {{ $article['title'] }}
            </h1>
        </div>
    </section>

    <!-- Article Content Section -->
    <section class="py-24 px-6 md:px-12 lg:px-20 bg-white border-y border-border/60">
        <div class="max-w-4xl mx-auto">
            <div class="mb-12 max-w-2xl mx-auto">
                <img src="{{ asset('images/news/' . $article['image']) }}" alt="{{ $article['title'] }}" class="w-full h-auto rounded-lg object-cover">
            </div>
            <div class="font-sans text-base text-obsidian leading-relaxed space-y-6 mb-12">
                {!! $article['content'] !!}
            </div>

            @if(isset($article['features']) && $article['features'])
            <div class="mb-12">
                <h2 class="font-sans text-2xl md:text-3xl font-semibold text-obsidian mb-6 tracking-tight">FEATURES</h2>
                <ul class="space-y-3 font-sans text-base text-obsidian leading-relaxed list-disc list-inside">
                    @foreach($article['features'] as $feature)
                    <li>{{ $feature }}</li>
                    @endforeach
                </ul>
            </div>
            @endif

            @if(isset($article['applications']) && $article['applications'])
            <div class="mb-12">
                <h2 class="font-sans text-2xl md:text-3xl font-semibold text-obsidian mb-6 tracking-tight">APPLICATIONS</h2>
                <ul class="space-y-3 font-sans text-base text-obsidian leading-relaxed list-disc list-inside">
                    @foreach($article['applications'] as $application)
                    <li>{{ $application }}</li>
                    @endforeach
                </ul>
            </div>
            @endif

            @if(isset($article['required_equipment']) && $article['required_equipment'])
            <div class="mb-12">
                <h2 class="font-sans text-2xl md:text-3xl font-semibold text-obsidian mb-6 tracking-tight">REQUIRED EQUIPMENT</h2>
                <ul class="space-y-3 font-sans text-base text-obsidian leading-relaxed list-disc list-inside">
                    @foreach($article['required_equipment'] as $equipment)
                    <li>{{ $equipment }}</li>
                    @endforeach
                </ul>
            </div>
            @endif

        </div>
    </section>
@endsection

@section('scripts')
<script>
    document.addEventListener('DOMContentLoaded', () => {
        // Hide Three.js animation background on News article page
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

