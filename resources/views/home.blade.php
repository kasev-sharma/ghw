@extends('layouts.app')

@section('title', 'Home - Global HealthWing India')

@section('content')
    <!-- 1.2 Hero Section -->
    <section class="relative bg-primary text-white pt-32 pb-20 lg:pt-40 lg:pb-32 overflow-hidden">
        
        <!-- Background Image with Overlay -->
        <div class="absolute inset-0 z-0">
            <!-- You can replace the src below with your own image later -->
            <img src="https://images.unsplash.com/photo-1631217868264-e5b90bb7e133?auto=format&fit=crop&q=80&w=2091" 
                 alt="Medical Tourism India" 
                 class="w-full h-full object-cover opacity-40">
            <div class="absolute inset-0 bg-primary/60 mix-blend-multiply"></div>
        </div>

        <div class="container mx-auto px-4 relative z-10 text-center">
            
            <!-- Main Heading -->
            <h1 class="font-heading font-bold text-4xl md:text-5xl lg:text-6xl leading-tight mb-6 animate-fade-in-up">
                Affordable Healthcare Beyond Borders,<br class="hidden md:block"> with Trusted Quality.
            </h1>

            <!-- Sub Heading -->
            <p class="text-neutral-light text-lg md:text-xl max-w-3xl mx-auto mb-10 leading-relaxed opacity-90">
                Medical tourism is a ray of hope for global patients looking for affordable healthcare services with world-class quality.
            </p>

            <!-- Key Highlights (Icons) -->
            <div class="grid grid-cols-2 md:grid-cols-5 gap-6 max-w-5xl mx-auto mb-12">
                <!-- Highlight Items -->
                @php
                    $highlights = [
                        ['icon' => 'M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z', 'text' => 'No Waiting Time'],
                        ['icon' => 'M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z', 'text' => 'Hassle Free Visa'],
                        ['icon' => 'M18.364 5.636a9 9 0 010 12.728m0 0l-2.829-2.829m2.829 2.829L21 21M15.536 8.464a5 5 0 010 7.072m0 0l-2.829-2.829m-4.243 2.829a4.978 4.978 0 01-1.414-2.83m-1.414 5.658a9 9 0 01-2.167-9.238m7.824 2.167a1 1 0 111.414 1.414m-1.414-1.414L3 3m8.293 8.293l1.414 1.414', 'text' => '24/7 Support'],
                        ['icon' => 'M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z', 'text' => 'Travel Assistance'],
                        ['icon' => 'M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z', 'text' => 'Budget Friendly'],
                    ];
                @endphp

                @foreach($highlights as $item)
                    <div class="flex flex-col items-center group">
                        <div class="w-12 h-12 rounded-full bg-white/10 flex items-center justify-center mb-3 backdrop-blur-sm group-hover:bg-secondary transition-colors duration-300">
                            <svg class="w-6 h-6 text-secondary group-hover:text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="{{ $item['icon'] }}"></path>
                            </svg>
                        </div>
                        <span class="text-sm font-bold text-white tracking-wide">{{ $item['text'] }}</span>
                    </div>
                @endforeach
            </div>

            <!-- CTA Button (Triggers Popup) -->
            <button @click="consultationModalOpen = true" 
                    class="bg-primary border-2 border-white/20 text-white font-bold py-4 px-10 rounded-full hover:bg-secondary hover:border-secondary hover:scale-105 transition-all duration-300 shadow-2xl uppercase tracking-wider text-sm md:text-base">
                Request a Call Back
            </button>

        </div>
    </section>


    <!-- 1.4 Why Choose Us -->
    <section class="py-20 bg-white overflow-hidden">
        <div class="container mx-auto px-4 md:px-6">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                
                <!-- Text Content -->
                <div class="order-2 lg:order-1">
                    <h2 class="text-3xl md:text-4xl font-heading font-bold text-primary mb-6">
                        Why Choose Global HealthWing?
                    </h2>
                    <p class="text-neutral-dark leading-relaxed mb-8 text-lg">
                        We connect you with top-tier medical facilities in India to ensure you receive excellent care at reasonable prices. Global HealthWing India acts as your trusted partner, bridging the gap between international patients and world-class healthcare.
                    </p>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                        <!-- Bullet Points -->
                        <div class="flex items-start gap-3">
                            <div class="p-2 bg-neutral-light rounded-lg text-secondary">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path></svg>
                            </div>
                            <div>
                                <h3 class="font-bold text-primary">200+ Treatments</h3>
                                <p class="text-sm text-neutral-grey">All under one roof</p>
                            </div>
                        </div>

                        <div class="flex items-start gap-3">
                            <div class="p-2 bg-neutral-light rounded-lg text-secondary">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                            </div>
                            <div>
                                <h3 class="font-bold text-primary">Budget Friendly</h3>
                                <p class="text-sm text-neutral-grey">Quality within budget</p>
                            </div>
                        </div>

                        <div class="flex items-start gap-3">
                            <div class="p-2 bg-neutral-light rounded-lg text-secondary">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                            </div>
                            <div>
                                <h3 class="font-bold text-primary">Call Us 24/7</h3>
                                <p class="text-sm text-neutral-grey">+91 8733025959</p>
                            </div>
                        </div>

                        <div class="flex items-start gap-3">
                            <div class="p-2 bg-neutral-light rounded-lg text-secondary">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                            </div>
                            <div>
                                <h3 class="font-bold text-primary">2000+ Specialists</h3>
                                <p class="text-sm text-neutral-grey">Top surgeons & doctors</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Image Content -->
                <div class="order-1 lg:order-2 relative">
                    <div class="absolute inset-0 bg-secondary/10 rounded-full blur-3xl transform translate-x-10 translate-y-10"></div>
                    <!-- Using a placeholder Unsplash image for Doctor -->
                    <img src="https://images.unsplash.com/photo-1622253692010-333f2da6031d?auto=format&fit=crop&q=80&w=800" 
                         alt="Doctor Consultation" 
                         class="relative z-10 rounded-2xl shadow-2xl w-full h-auto object-cover transform hover:-translate-y-2 transition-transform duration-500">
                </div>
            </div>
        </div>
    </section>

    <!-- 1.5 Our Services -->
    <section class="py-20 bg-neutral-light">
        <div class="container mx-auto px-4 md:px-6">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-heading font-bold text-primary">Our Services</h2>
                <p class="text-neutral-grey mt-4 max-w-2xl mx-auto">Connecting you to the best international healthcare solutions with seamless support.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @php
                    $services = [
                        ['title' => 'Global Presence', 'desc' => 'Building Bridges Across Continents', 'icon' => 'M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z'],
                        ['title' => 'Best Hospitals', 'desc' => 'Excellence in Treatment', 'icon' => 'M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4'],
                        ['title' => 'Budget Treatment', 'desc' => 'Expert Care That Fits Your Budget', 'icon' => 'M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z'],
                        ['title' => 'Health Checkups', 'desc' => 'Regular Check-ups, Lifelong Wellness', 'icon' => 'M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01'],
                        ['title' => 'Visa Assistance', 'desc' => 'Smooth Access to Global Care', 'icon' => 'M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z'],
                    ];
                @endphp

                @foreach($services as $service)
                    <div class="bg-white p-8 rounded-xl shadow-card hover:shadow-card-hover transition-shadow duration-300 text-center group border border-transparent hover:border-secondary/20">
                        <div class="w-16 h-16 mx-auto bg-neutral-light rounded-full flex items-center justify-center mb-6 group-hover:bg-secondary transition-colors duration-300">
                            <svg class="w-8 h-8 text-secondary group-hover:text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="{{ $service['icon'] }}"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-heading font-semibold text-primary mb-2">{{ $service['title'] }}</h3>
                        <p class="text-neutral-grey">{{ $service['desc'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- 1.6 Advanced Treatment & Care (24-Grid) -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-4 md:px-6">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-heading font-bold text-primary">Advanced Treatment & Care</h2>
                <p class="text-neutral-grey mt-4">World-class specialized treatments available across our network.</p>
            </div>

            @php
                $treatments = [
                    'Knee Replacement', 'Hip Replacement', 'Cancer / Oncology', 'Orthopaedic & Joint',
                    'Stem Cell Treatments', 'Cosmetic Surgery', 'Bone Marrow Transplant', 'Cardiac Treatment',
                    'Plastic Surgery', 'Liver Transplant', 'Pediatric Cardiac', 'ENT & Cochlear Implant',
                    'Kidney Transplant', 'Heart Surgery', 'IVF & Infertility', 'Lung Transplant',
                    'Vascular Surgery', 'Ophthalmology', 'Heart Transplant', 'Neurology',
                    'Dental Treatments', 'Urology Treatments', 'Bariatric Surgery', 'Spine Surgery',
                    'Diabetes & Endo', 'Ayurveda Treatments'
                ];
                
                // Helper to pick icons based on name (Simple logic for visual variety)
                function getIcon($name) {
                    if (str_contains($name, 'Heart') || str_contains($name, 'Cardiac')) return 'M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z';
                    if (str_contains($name, 'Bone') || str_contains($name, 'Joint') || str_contains($name, 'Knee') || str_contains($name, 'Hip') || str_contains($name, 'Spine')) return 'M19 14l-7 7m0 0l-7-7m7 7V3'; // Simplified Bone/Arrow
                    if (str_contains($name, 'Eye') || str_contains($name, 'Ophthal')) return 'M15 12a3 3 0 11-6 0 3 3 0 016 0z M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z';
                    if (str_contains($name, 'Dental')) return 'M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z'; // Smile
                    return 'M19.428 15.428a2 2 0 00-1.022-.547l-2.384-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z'; // Flask/Generic
                }
            @endphp

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
                @foreach($treatments as $treatment)
                    <!-- Card with Click Interaction -->
                    <div @click="contactScrollSubject = 'Inquiry regarding {{ $treatment }}'; $refs.contactForm.scrollIntoView({behavior: 'smooth'})"
                         class="group cursor-pointer bg-white border border-neutral-light rounded-lg p-6 flex flex-col items-center text-center transition-all duration-300 hover:shadow-card-hover hover:border-secondary hover:-translate-y-1">
                        
                        <div class="w-10 h-10 mb-3 text-accent group-hover:text-secondary transition-colors">
                            <svg class="w-full h-full" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="{{ getIcon($treatment) }}"></path>
                            </svg>
                        </div>
                        
                        <h3 class="font-heading font-semibold text-neutral-dark group-hover:text-primary transition-colors">
                            {{ $treatment }}
                        </h3>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- 1.8 Get Free Consultation (On-Page Form) -->
    <section class="py-20 bg-neutral-light" x-ref="contactForm">
        <div class="container mx-auto px-4 md:px-6">
            <div class="max-w-4xl mx-auto bg-white rounded-2xl shadow-xl overflow-hidden">
                <div class="grid grid-cols-1 md:grid-cols-2">
                    
                    <!-- Left Side: Visual/Text -->
                    <div class="bg-primary p-10 text-white flex flex-col justify-center">
                        <h2 class="text-3xl font-heading font-bold mb-4">Get Free Consultation</h2>
                        <p class="mb-6 opacity-90">Need help with your medical journey? Schedule a free consultation with our healthcare experts today!</p>
                        <ul class="space-y-3 text-sm">
                            <li class="flex items-center gap-2"><svg class="w-5 h-5 text-secondary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg> 100% Confidential</li>
                            <li class="flex items-center gap-2"><svg class="w-5 h-5 text-secondary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg> Expert Medical Opinion</li>
                            <li class="flex items-center gap-2"><svg class="w-5 h-5 text-secondary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg> Personalized Cost Estimate</li>
                        </ul>
                    </div>

                    <!-- Right Side: Form -->
                    <div class="p-10">
                        <form action="#" method="POST" class="space-y-4">
                            @csrf
                            <div>
                                <label class="block text-sm font-medium text-neutral-dark">Full Name</label>
                                <input type="text" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-secondary focus:ring-secondary">
                            </div>
                            
                            <div>
                                <label class="block text-sm font-medium text-neutral-dark">Email Address</label>
                                <input type="email" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-secondary focus:ring-secondary">
                            </div>

                            <div>
                                <label class="block text-sm font-medium text-neutral-dark">Phone Number</label>
                                <input type="tel" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-secondary focus:ring-secondary">
                            </div>

                            <div>
                                <label class="block text-sm font-medium text-neutral-dark">How can we help?</label>
                                <!-- The x-model binds this field to the click from the Treatment cards -->
                                <textarea x-model="contactScrollSubject" rows="3" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-secondary focus:ring-secondary"></textarea>
                            </div>

                            <button type="submit" class="w-full bg-primary hover:bg-secondary text-white font-bold py-3 px-4 rounded-md transition-colors shadow-lg">
                                Get Free Consultation
                            </button>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- 1.9 Frequently Asked Questions (Accordion) -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-4 md:px-6 max-w-4xl">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-heading font-bold text-primary">Frequently Asked Questions</h2>
                <p class="text-neutral-grey mt-4">Common questions about medical tourism in India.</p>
            </div>

            <!-- Accordion Container -->
            <div class="space-y-4" x-data="{ activeAccordion: null }">
                @php
                    $faqs = [
                        [
                            'q' => 'Why should I prefer to get medical treatment in India?',
                            'a' => 'India offers advanced technology, low treatment cost, international standards (JCI accredited hospitals), and minimal language barriers compared to other countries.'
                        ],
                        [
                            'q' => 'Isn’t it expensive to travel to India for treatment?',
                            'a' => 'Not at all. The cost of medical procedures in India is significantly lower (often 60-80% less) than in Western countries. Even with travel costs included, the total savings remain substantial.'
                        ],
                        [
                            'q' => 'What if I speak only my native language?',
                            'a' => 'We provide language interpreter services for patients who do not speak English. Our multilingual staff and hospital teams ensure smooth communication throughout your stay.'
                        ],
                        [
                            'q' => 'How do I start the process?',
                            'a' => 'Simply fill out the "Get Free Consultation" form above or call us at +91 8733025959. Our case managers will review your medical reports and provide a treatment plan.'
                        ],
                        [
                            'q' => 'How to select the best hospital & doctor within budget?',
                            'a' => 'Global HealthWing has a curated network of top-tier hospitals. We analyze your medical needs and budget to recommend the best specialists and facilities tailored to you.'
                        ]
                    ];
                @endphp

                @foreach($faqs as $index => $faq)
                    <div class="border border-neutral-light rounded-lg overflow-hidden">
                        <button @click="activeAccordion = activeAccordion === {{ $index }} ? null : {{ $index }}"
                                class="w-full flex justify-between items-center p-5 bg-white hover:bg-neutral-light transition-colors text-left focus:outline-none">
                            <span class="font-heading font-semibold text-primary text-lg">{{ $faq['q'] }}</span>
                            <span class="ml-6 flex-shrink-0 text-secondary">
                                <!-- Plus Icon -->
                                <svg x-show="activeAccordion !== {{ $index }}" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path></svg>
                                <!-- Minus Icon -->
                                <svg x-show="activeAccordion === {{ $index }}" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 12H4"></path></svg>
                            </span>
                        </button>
                        
                        <!-- Answer -->
                        <div x-show="activeAccordion === {{ $index }}" 
                             x-collapse 
                             class="bg-neutral-light p-5 border-t border-gray-100 text-neutral-dark leading-relaxed">
                            {{ $faq['a'] }}
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection