<nav class="bg-white border-b border-gray-100">
    <div class="container mx-auto p-4 text-center">
    <header 
    class="fixed w-full top-0 z-50 transition-all duration-300 bg-white"
    :class="{ 'shadow-md py-2': sticky, 'py-4 shadow-sm': !sticky }"
    x-data="{ sticky: false }"
    @scroll.window="sticky = (window.pageYOffset > 50)">
    
    <div class="container mx-auto px-4 md:px-6">
        <div class="flex items-center justify-between">
            
            <!-- Logo Section -->
            <a href="{{ route('home') }}" class="flex items-center gap-2 group">
                <!-- Placeholder Logo (Replace src with your actual logo later) -->
                <div class="h-10 w-10 rounded-full border-2 border-primary flex items-center justify-center text-secondary font-bold text-xs overflow-hidden">
                    <span class="sr-only">GHW</span>
                    <svg class="w-6 h-6 text-secondary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                </div>
                <div class="flex flex-col">
                    <span class="text-xl font-heading font-bold text-primary leading-tight">Global HealthWing</span>
                    <span class="text-[10px] text-neutral-grey tracking-wider uppercase">India</span>
                </div>
            </a>

            <!-- Desktop Menu -->
            <nav class="hidden md:flex items-center gap-8">
                <a href="{{ route('home') }}" 
                   class="text-sm font-semibold transition-colors duration-200 {{ request()->routeIs('home') ? 'text-secondary' : 'text-primary hover:text-secondary' }}">
                   Home
                </a>
                <a href="{{ route('about') }}" 
                   class="text-sm font-semibold transition-colors duration-200 {{ request()->routeIs('about') ? 'text-secondary' : 'text-primary hover:text-secondary' }}">
                   About Us
                </a>
                <a href="{{ route('contact') }}" 
                   class="text-sm font-semibold transition-colors duration-200 {{ request()->routeIs('contact') ? 'text-secondary' : 'text-primary hover:text-secondary' }}">
                   Contact Us
                </a>
                
                <!-- CTA Button (Desktop) -->
                <a href="{{ route('contact') }}" class="bg-primary hover:bg-secondary text-white text-sm font-semibold py-2.5 px-6 rounded-md transition-colors duration-300 shadow-lg shadow-primary/20">
                    Get Consultation
                </a>
            </nav>

            <!-- Mobile Hamburger Button -->
            <button @click="mobileMenuOpen = !mobileMenuOpen" class="md:hidden text-primary focus:outline-none">
                <svg x-show="!mobileMenuOpen" class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path></svg>
                <svg x-show="mobileMenuOpen" x-cloak class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
            </button>
        </div>
    </div>

    <!-- Mobile Menu (Dropdown) -->
    <div x-show="mobileMenuOpen" 
         x-transition:enter="transition ease-out duration-200"
         x-transition:enter-start="opacity-0 -translate-y-2"
         x-transition:enter-end="opacity-100 translate-y-0"
         x-transition:leave="transition ease-in duration-150"
         x-transition:leave-start="opacity-100 translate-y-0"
         x-transition:leave-end="opacity-0 -translate-y-2"
         x-cloak
         class="md:hidden absolute top-full left-0 w-full bg-white border-t border-gray-100 shadow-lg">
        
        <div class="flex flex-col p-4 space-y-4">
            <a href="{{ route('home') }}" class="block text-base font-semibold text-primary hover:text-secondary">Home</a>
            <a href="{{ route('about') }}" class="block text-base font-semibold text-primary hover:text-secondary">About Us</a>
            <a href="{{ route('contact') }}" class="block text-base font-semibold text-primary hover:text-secondary">Contact Us</a>
            <a href="{{ route('contact') }}" class="block text-center bg-primary text-white py-3 rounded-md font-semibold">Get Consultation</a>
        </div>
    </div>
</header>

<!-- Spacer to prevent content from hiding behind fixed header -->
<div class="h-20"></div>
    </div>
</nav>