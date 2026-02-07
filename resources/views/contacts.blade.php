@extends('layouts.app')

@section('title', 'Contacts - Xinji')

@section('content')
    <!-- Hero Section -->
    <section class="relative z-10 pt-32 pb-20 px-6 md:px-12 lg:px-20 bg-white">
        <div class="max-w-7xl mx-auto fade-in-up">
            <h1 class="font-display text-5xl md:text-6xl lg:text-7xl font-medium tracking-tighter leading-[0.95] text-[#0A0A0A] mb-8">
                Contacts
            </h1>
        </div>
    </section>

    <!-- Content Section -->
    <section class="py-24 px-6 md:px-12 lg:px-20 bg-white">
        <div class="max-w-7xl mx-auto">
            <!-- Contact Info and Map Grid -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 mb-20">
                <!-- Contact Information -->
                <div>
                    <h2 class="font-display text-2xl font-medium text-[#0A0A0A] mb-8 tracking-tight">Contact Information</h2>
                    <div class="space-y-6">
                        <div>
                            <div class="text-xs text-[#737373] uppercase tracking-wider mb-2 font-medium">Email</div>
                            <a href="mailto:info@xinji-tech.com" class="text-[#0A0A0A] hover:text-[#737373] transition-colors text-base">info@xinji-tech.com</a>
                        </div>
                        <div>
                            <div class="text-xs text-[#737373] uppercase tracking-wider mb-2 font-medium">Phone</div>
                            <div class="text-[#0A0A0A] text-base">+852 58010458</div>
                        </div>
                        <div>
                            <div class="text-xs text-[#737373] uppercase tracking-wider mb-2 font-medium">Address</div>
                            <div class="text-[#0A0A0A] leading-relaxed text-base">
                                XINJI TECHNOLOGIES (HK) CO.,<br>
                                LIMITED<br><br>
                                RM4, 16/F HO KING COMM CTR 2-16<br>
                                FAYUEN ST MONGKOK KL HONG<br>
                                KONG
                            </div>
                        </div>
                        <div class="pt-4 border-t border-[#E5E5E5]">
                            <div class="text-xs text-[#737373] uppercase tracking-wider mb-4 font-medium">Business Hours</div>
                            <div class="space-y-3 text-sm">
                                <div class="flex justify-between">
                                    <span class="text-[#737373]">Monday - Friday</span>
                                    <span class="text-[#0A0A0A] font-medium">9:00 AM - 6:00 PM</span>
                                </div>
                                <div class="flex justify-between">
                                    <span class="text-[#737373]">Saturday</span>
                                    <span class="text-[#0A0A0A] font-medium">10:00 AM - 4:00 PM</span>
                                </div>
                                <div class="flex justify-between">
                                    <span class="text-[#737373]">Sunday</span>
                                    <span class="text-[#0A0A0A] font-medium">Closed</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Google Maps -->
                <div>
                    <h2 class="font-display text-2xl font-medium text-[#0A0A0A] mb-8 tracking-tight">Location</h2>
                    <div class="w-full h-[500px] rounded-lg overflow-hidden border border-[#E5E5E5]">
                        <iframe 
                            src="https://www.google.com/maps?q=Shenzhen,+Guangdong,+China&hl=en&output=embed"
                            width="100%" 
                            height="100%" 
                            style="border:0;" 
                            allowfullscreen="" 
                            loading="lazy" 
                            referrerpolicy="no-referrer-when-downgrade"
                            class="w-full h-full">
                        </iframe>
                    </div>
                </div>
            </div>

            <!-- Contact Form -->
            <div class="max-w-2xl">
                <h2 class="font-display text-2xl font-medium text-[#0A0A0A] mb-8 tracking-tight">Send Us a Message</h2>
                
                @if(session('success'))
                    <div class="mb-6 p-4 bg-green-50 border border-green-200 rounded-lg text-green-800 text-sm">
                        {{ session('success') }}
                    </div>
                @endif

                @if(session('error'))
                    <div class="mb-6 p-4 bg-red-50 border border-red-200 rounded-lg text-red-800 text-sm">
                        {{ session('error') }}
                    </div>
                @endif

                @if($errors->any())
                    <div class="mb-6 p-4 bg-red-50 border border-red-200 rounded-lg text-red-800 text-sm">
                        <ul class="list-disc list-inside">
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('contacts.send') }}" method="POST" class="space-y-6">
                    @csrf
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label for="name" class="block mb-2 text-xs text-[#737373] uppercase tracking-wider font-medium">Name</label>
                            <input type="text" id="name" name="name" value="{{ old('name') }}" required class="w-full px-4 py-3 rounded-lg border border-[#E5E5E5] bg-white text-[#0A0A0A] focus:border-[#0A0A0A] focus:outline-none transition-colors">
                        </div>
                        <div>
                            <label for="email" class="block mb-2 text-xs text-[#737373] uppercase tracking-wider font-medium">Email</label>
                            <input type="email" id="email" name="email" value="{{ old('email') }}" required class="w-full px-4 py-3 rounded-lg border border-[#E5E5E5] bg-white text-[#0A0A0A] focus:border-[#0A0A0A] focus:outline-none transition-colors">
                        </div>
                    </div>
                    <div>
                        <label for="message" class="block mb-2 text-xs text-[#737373] uppercase tracking-wider font-medium">Message</label>
                        <textarea id="message" name="message" rows="6" required class="w-full px-4 py-3 rounded-lg border border-[#E5E5E5] bg-white text-[#0A0A0A] focus:border-[#0A0A0A] focus:outline-none transition-colors resize-y">{{ old('message') }}</textarea>
                    </div>
                    <button type="submit" class="bg-[#0A0A0A] text-white px-8 py-3 rounded-lg text-sm font-medium hover:bg-[#171717] transition-all shadow-lg shadow-[#0A0A0A]/10 flex items-center gap-2 group">
                        <span>Send Message</span>
                        <iconify-icon icon="solar:arrow-right-linear" class="group-hover:translate-x-1 transition-transform" stroke-width="1.5"></iconify-icon>
                    </button>
                </form>
            </div>
        </div>
    </section>
@endsection

@section('scripts')
<script>
    document.addEventListener('DOMContentLoaded', () => {
        // Hide Three.js animation background on Contacts page
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
