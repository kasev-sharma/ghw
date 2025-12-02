@extends('layouts.app')

@section('title', 'About Us - Global HealthWing India')

@section('content')

    <!-- 2.1 Hero Banner -->
    <section class="relative py-20 bg-gradient-to-r from-primary to-secondary text-white overflow-hidden">
        <!-- Abstract Background Pattern -->
        <div class="absolute inset-0 opacity-10">
            <svg class="w-full h-full" viewBox="0 0 100 100" preserveAspectRatio="none">
                <path d="M0 100 C 20 0 50 0 100 100 Z" fill="white" />
            </svg>
        </div>
        
        <div class="container mx-auto px-4 relative z-10 text-center">
            <h1 class="text-4xl md:text-5xl font-heading font-bold mb-4 animate-fade-in-up">
                World Class Healthcare,<br> Affordable & Accessible
            </h1>
            <p class="text-lg opacity-90 max-w-2xl mx-auto">
                Bridging the gap between international patients and India’s finest medical experts.
            </p>
        </div>
    </section>

    <!-- 2.2 Company Overview -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4 md:px-6 max-w-5xl">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-heading font-bold text-primary mb-6">Who We Are</h2>
                <div class="space-y-6 text-neutral-dark text-lg leading-relaxed text-justify md:text-center">
                    <p>
                        Global HealthWing India was founded with a singular mission: to provide affordable, world-class medical care to patients across the globe. We understand that seeking medical treatment abroad can be overwhelming, which is why we act as your compassionate partner every step of the way.
                    </p>
                    <p>
                        We have joined hands with top-notch medical facilities and JCI-accredited hospitals in India to ensure you receive excellent care at a fraction of the cost found in Western countries. From the moment you contact us until you return home safely, our team is dedicated to transparency, trust, and your well-being.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- 2.3 Mission & Vision -->
    <section class="py-16 bg-neutral-light">
        <div class="container mx-auto px-4 md:px-6">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                
                <!-- Mission Card -->
                <div class="bg-white p-8 rounded-xl shadow-card hover:shadow-card-hover transition-all duration-300 border-t-4 border-secondary group">
                    <div class="w-14 h-14 bg-neutral-light rounded-full flex items-center justify-center mb-6 group-hover:bg-secondary transition-colors">
                        <svg class="w-8 h-8 text-secondary group-hover:text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                    </div>
                    <h3 class="text-2xl font-heading font-bold text-primary mb-4">Our Mission</h3>
                    <p class="text-neutral-grey leading-relaxed">
                        To deliver high-quality medical treatment, personalized care, and seamless travel support to international patients, ensuring that geography is never a barrier to good health.
                    </p>
                </div>

                <!-- Vision Card -->
                <div class="bg-white p-8 rounded-xl shadow-card hover:shadow-card-hover transition-all duration-300 border-t-4 border-accent group">
                    <div class="w-14 h-14 bg-neutral-light rounded-full flex items-center justify-center mb-6 group-hover:bg-accent transition-colors">
                        <svg class="w-8 h-8 text-accent group-hover:text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path></svg>
                    </div>
                    <h3 class="text-2xl font-heading font-bold text-primary mb-4">Our Vision</h3>
                    <p class="text-neutral-grey leading-relaxed">
                        To become the most trusted medical tourism facilitator globally by bridging healthcare gaps and providing access to the best surgeons and technology India has to offer.
                    </p>
                </div>

            </div>
        </div>
    </section>

    <!-- 2.6 Our Process (Timeline) -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-4 md:px-6">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-heading font-bold text-primary">Your Journey With Us</h2>
                <p class="text-neutral-grey mt-4">A simple, step-by-step process for your global health tour.</p>
            </div>

            <div class="relative max-w-4xl mx-auto">
                <!-- Vertical Line (Mobile/Tablet) -->
                <div class="absolute left-8 top-0 bottom-0 w-0.5 bg-neutral-light md:left-1/2 md:-ml-0.5"></div>

                @php
                    $steps = [
                        ['title' => 'Initial Enquiry', 'desc' => 'Contact us via the form or phone. Our team will reach out to understand your needs.', 'icon' => '1'],
                        ['title' => 'Medical Assessment', 'desc' => 'Our experts review your medical reports to recommend the best treatment options.', 'icon' => '2'],
                        ['title' => 'Quotation & Doctor Selection', 'desc' => 'We provide a detailed cost estimate and help you choose the right specialist.', 'icon' => '3'],
                        ['title' => 'Travel & Visa Assistance', 'desc' => 'We guide you through the medical visa process, flight bookings, and accommodation.', 'icon' => '4'],
                        ['title' => 'Treatment & Care', 'desc' => 'From airport pickup to hospital admission, we coordinate your entire schedule.', 'icon' => '5'],
                        ['title' => 'Recovery & Follow-up', 'desc' => 'We assist with post-treatment recovery and virtual follow-ups after you return home.', 'icon' => '6'],
                    ];
                @endphp

                <div class="space-y-12">
                    @foreach($steps as $index => $step)
                        <div class="relative flex items-center md:justify-between group">
                            
                            <!-- Left Side (Text for Odd, Empty for Even on Desktop) -->
                            <div class="hidden md:block w-5/12 text-right pr-8 {{ $index % 2 != 0 ? 'order-1' : '' }}">
                                @if($index % 2 == 0)
                                    <h3 class="text-xl font-bold text-primary">{{ $step['title'] }}</h3>
                                    <p class="text-neutral-grey mt-2 text-sm">{{ $step['desc'] }}</p>
                                @endif
                            </div>

                            <!-- Center Icon -->
                            <div class="absolute left-0 md:relative md:left-auto flex-shrink-0 z-10 w-16 h-16 rounded-full bg-white border-4 border-secondary flex items-center justify-center font-bold text-2xl text-secondary shadow-lg group-hover:scale-110 transition-transform">
                                {{ $step['icon'] }}
                            </div>

                            <!-- Right Side (Text for Even, Empty for Odd on Desktop) -->
                            <div class="pl-24 md:pl-8 w-full md:w-5/12 {{ $index % 2 != 0 ? 'order-first text-right md:text-left' : '' }}">
                                <!-- Mobile View Logic Included here via CSS classes -->
                                <div class="md:hidden">
                                    <h3 class="text-xl font-bold text-primary">{{ $step['title'] }}</h3>
                                    <p class="text-neutral-grey mt-2 text-sm">{{ $step['desc'] }}</p>
                                </div>
                                
                                <!-- Desktop Logic for Alternating sides -->
                                <div class="hidden md:block">
                                    @if($index % 2 != 0)
                                        <h3 class="text-xl font-bold text-primary">{{ $step['title'] }}</h3>
                                        <p class="text-neutral-grey mt-2 text-sm">{{ $step['desc'] }}</p>
                                    @endif
                                </div>
                            </div>

                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <!-- 2.7 Extended FAQ -->
    <section class="py-20 bg-neutral-light">
        <div class="container mx-auto px-4 md:px-6 max-w-3xl">
            <h2 class="text-3xl font-heading font-bold text-primary text-center mb-10">Common Questions</h2>
            
            <div class="space-y-4" x-data="{ activeAccordion: null }">
                @php
                    $faqs = [
                        ['q' => 'What payment methods are accepted?', 'a' => 'Hospitals typically accept Credit/Debit Cards (Visa, Mastercard), Wire Transfer, and Cash (in allowable limits). We assist you in managing foreign exchange.'],
                        ['q' => 'Does insurance cover medical tourism?', 'a' => 'It depends on your provider. Some international insurance plans cover treatment abroad. We recommend checking with your insurance company beforehand.'],
                        ['q' => 'Can I bring a companion?', 'a' => 'Yes, absolutely. We can arrange accommodation and travel logistics for your companion to ensure they are comfortable while you receive care.'],
                        ['q' => 'Is it safe to travel to India for surgery?', 'a' => 'Yes. The hospitals we partner with follow strict international safety protocols (JCI accredited). India is a leading destination for medical tourism with a proven track record.'],
                        ['q' => 'How much does it cost compared to the US/UK?', 'a' => 'Procedures in India typically cost 60% to 80% less than in the US or UK, without compromising on quality or technology.'],
                    ];
                @endphp

                @foreach($faqs as $index => $faq)
                    <div class="bg-white rounded-lg shadow-sm overflow-hidden">
                        <button @click="activeAccordion = activeAccordion === {{ $index }} ? null : {{ $index }}"
                                class="w-full flex justify-between items-center p-5 text-left focus:outline-none hover:bg-gray-50">
                            <span class="font-heading font-semibold text-primary">{{ $faq['q'] }}</span>
                            <span class="text-secondary">
                                <svg x-show="activeAccordion !== {{ $index }}" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                                <svg x-show="activeAccordion === {{ $index }}" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7"></path></svg>
                            </span>
                        </button>
                        <div x-show="activeAccordion === {{ $index }}" x-collapse class="px-5 pb-5 text-neutral-grey border-t border-gray-100 pt-3">
                            {{ $faq['a'] }}
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

@endsection