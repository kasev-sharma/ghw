<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Global HealthWing India')</title>
    <meta name="description" content="@yield('description', 'Affordable Healthcare Beyond Borders')">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    <!-- Alpine.js -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.13.3/dist/cdn.min.js"></script>

    <style>[x-cloak] { display: none !important; }</style>
</head>
<body class="font-body text-neutral-dark bg-white antialiased" 
      x-data="{ 
          mobileMenuOpen: false, 
          contactScrollSubject: '',
          consultationModalOpen: false 
      }"></body>
    <!-- Header / Nav -->
    @include('layouts.navigation')

    <!-- Page Content -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    @include('layouts.footer')

</body>
</html>