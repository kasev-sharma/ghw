@extends('layouts.app')

@section('title', 'Contact Us - Global HealthWing India')

@section('content')

    <!-- 3.0 Header -->
    <section class="bg-primary py-16 text-center text-white">
        <div class="container mx-auto px-4">
            <h1 class="text-4xl font-heading font-bold mb-4">Contact Us</h1>
            <p class="text-lg opacity-90">We are here to assist you with your medical journey.</p>
        </div>
    </section>

    <!-- 3.1 & 3.2 Contact Section -->
    <section class="py-20 bg-neutral-light">
        <div class="container mx-auto px-4 md:px-6">
            
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 max-w-6xl mx-auto">
                
                <!-- Left Column: Contact Form -->
                <div class="bg-white p-8 rounded-xl shadow-card" x-data="{ submitted: false }">
                    
                    <h2 class="text-2xl font-heading font-bold text-primary mb-6">Send us a Message</h2>
                    
                    <!-- Success Message (Shown after submit) -->
                    <div x-show="submitted" x-transition class="bg-green-50 border border-green-200 text-green-700 p-6 rounded-lg text-center">
                        <svg class="w-12 h-12 mx-auto text-green-500 mb-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                        <h3 class="font-bold text-lg">Thank You!</h3>
                        <p class="mt-2">We have received your enquiry. A representative will contact you within 24 hours.</p>
                        <button @click="submitted = false" class="mt-4 text-sm text-green-600 underline hover:text-green-800">Send another message</button>
                    </div>

                    <!-- The Form -->
                    <form @submit.prevent="submitted = true" x-show="!submitted" class="space-y-6">
                        @csrf
                        <div>
                            <label for="name" class="block text-sm font-medium text-neutral-dark">Full Name *</label>
                            <input type="text" id="name" required placeholder="John Doe" 
                                   class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-secondary focus:ring-secondary py-3">
                        </div>

                        <div>
                            <label for="email" class="block text-sm font-medium text-neutral-dark">Email Address *</label>
                            <input type="email" id="email" required placeholder="you@example.com" 
                                   class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-secondary focus:ring-secondary py-3">
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label for="phone" class="block text-sm font-medium text-neutral-dark">Phone Number *</label>
                                <input type="tel" id="phone" required placeholder="+1 (555) 000-000" 
                                       class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-secondary focus:ring-secondary py-3">
                            </div>
                            <div>
                                <label for="country" class="block text-sm font-medium text-neutral-dark">Country</label>
                                <select id="country" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-secondary focus:ring-secondary py-3">
                                    <option>Select Country</option>
                                    <option>USA</option>
                                    <option>UK</option>
                                    <option>Canada</option>
                                    <option>Australia</option>
                                    <option>Bangladesh</option>
                                    <option>Nigeria</option>
                                    <option>Kenya</option>
                                    <option>UAE</option>
                                    <!-- Add more as needed -->
                                </select>
                            </div>
                        </div>

                        <div>
                            <label for="message" class="block text-sm font-medium text-neutral-dark">Message (Optional)</label>
                            <textarea id="message" rows="4" 
                                      class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-secondary focus:ring-secondary"></textarea>
                        </div>

                        <div class="flex justify-end">
                            <button type="submit" class="w-full md:w-auto bg-primary hover:bg-secondary text-white font-bold py-3 px-8 rounded-md transition-colors shadow-lg duration-300">
                                Submit Enquiry
                            </button>
                        </div>
                    </form>
                </div>

                <!-- Right Column: Contact Details -->
                <div class="space-y-8">
                    
                    <!-- Info Cards -->
                    <div class="bg-white p-6 rounded-xl shadow-sm border-l-4 border-secondary flex items-start gap-4">
                        <div class="p-3 bg-neutral-light rounded-full text-secondary">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                        </div>
                        <div>
                            <h3 class="font-bold text-primary text-lg">Call Us</h3>
                            <p class="text-neutral-grey mb-1">Available 24/7 for support</p>
                            <a href="tel:+918733025959" class="text-xl font-bold text-secondary hover:underline">+91 8733025959</a>
                        </div>
                    </div>

                    <div class="bg-white p-6 rounded-xl shadow-sm border-l-4 border-accent flex items-start gap-4">
                        <div class="p-3 bg-neutral-light rounded-full text-accent">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                        </div>
                        <div>
                            <h3 class="font-bold text-primary text-lg">Email Us</h3>
                            <p class="text-neutral-grey mb-1">For medical reports & quotes</p>
                            <a href="mailto:info@globalhealthwing.in" class="text-lg font-bold text-accent hover:underline break-all">info@globalhealthwing.in</a>
                        </div>
                    </div>

                    <div class="bg-white p-6 rounded-xl shadow-sm border-l-4 border-primary flex items-start gap-4">
                        <div class="p-3 bg-neutral-light rounded-full text-primary">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                        </div>
                        <div>
                            <h3 class="font-bold text-primary text-lg">Visit Us</h3>
                            <p class="text-neutral-grey">
                                Global HealthWing India<br>
                                New Delhi, India<br>
                                <span class="text-xs text-gray-400">(Full address to be updated)</span>
                            </p>
                        </div>
                    </div>

                    <!-- Optional: Social Links -->
                    <div class="pt-6">
                        <h3 class="font-heading font-semibold text-primary mb-4">Connect With Us</h3>
                        <div class="flex gap-4">
                            <a href="#" class="w-10 h-10 rounded bg-white shadow-sm flex items-center justify-center text-secondary hover:bg-secondary hover:text-white transition-all duration-300">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path></svg>
                            </a>
                            <a href="#" class="w-10 h-10 rounded bg-white shadow-sm flex items-center justify-center text-secondary hover:bg-secondary hover:text-white transition-all duration-300">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"></path></svg>
                            </a>
                            <a href="#" class="w-10 h-10 rounded bg-white shadow-sm flex items-center justify-center text-secondary hover:bg-secondary hover:text-white transition-all duration-300">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z"></path><circle cx="4" cy="4" r="2"></circle></svg>
                            </a>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </section>

@endsection