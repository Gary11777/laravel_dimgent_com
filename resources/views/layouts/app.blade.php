<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title ?? 'Dimgent Technologies' }}</title>
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=inter:300,400,500,600,700&display=swap" rel="stylesheet" />
    
    <!-- Vite Assets -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-50 text-gray-900" x-data="{ mobileMenuOpen: false }">
    <!-- Header Navigation -->
    <header class="bg-white shadow-sm border-b border-gray-200">
        <nav class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <!-- Logo -->
                <div class="flex-shrink-0">
                    <a href="/" class="flex items-center">
                        <img src="{{ asset('drafts/pics/logo.png') }}" alt="Dimgent Technologies" class="h-8 w-auto">
                    </a>
                </div>
                
                <!-- Desktop Navigation -->
                <div class="hidden md:block">
                    <div class="ml-10 flex items-baseline space-x-8">
                        <a href="/" class="{{ request()->is('/') ? 'text-blue-600 border-b-2 border-blue-600' : 'text-gray-700 hover:text-blue-600' }} px-3 py-2 text-sm font-medium transition-colors">Home</a>
                        <a href="/products" class="{{ request()->is('products') ? 'text-blue-600 border-b-2 border-blue-600' : 'text-gray-700 hover:text-blue-600' }} px-3 py-2 text-sm font-medium transition-colors">Products</a>
                        <a href="/services" class="{{ request()->is('services') ? 'text-blue-600 border-b-2 border-blue-600' : 'text-gray-700 hover:text-blue-600' }} px-3 py-2 text-sm font-medium transition-colors">Services</a>
                        <a href="/projects" class="{{ request()->is('projects') ? 'text-blue-600 border-b-2 border-blue-600' : 'text-gray-700 hover:text-blue-600' }} px-3 py-2 text-sm font-medium transition-colors">Projects</a>
                        <a href="/about" class="{{ request()->is('about') ? 'text-blue-600 border-b-2 border-blue-600' : 'text-gray-700 hover:text-blue-600' }} px-3 py-2 text-sm font-medium transition-colors">About</a>
                        <a href="/contacts" class="{{ request()->is('contacts') ? 'text-blue-600 border-b-2 border-blue-600' : 'text-gray-700 hover:text-blue-600' }} px-3 py-2 text-sm font-medium transition-colors">Contacts</a>
                    </div>
                </div>
                
                <!-- Mobile menu button -->
                <div class="md:hidden">
                    <button @click="mobileMenuOpen = !mobileMenuOpen" class="inline-flex items-center justify-center p-2 rounded-md text-gray-700 hover:text-blue-600 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-blue-500">
                        <svg class="h-6 w-6" x-show="!mobileMenuOpen" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                        <svg class="h-6 w-6" x-show="mobileMenuOpen" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
            </div>
            
            <!-- Mobile Navigation -->
            <div x-show="mobileMenuOpen" x-transition class="md:hidden">
                <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3">
                    <a href="/" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-blue-600 hover:bg-gray-50">Home</a>
                    <a href="/products" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-blue-600 hover:bg-gray-50">Products</a>
                    <a href="/services" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-blue-600 hover:bg-gray-50">Services</a>
                    <a href="/projects" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-blue-600 hover:bg-gray-50">Projects</a>
                    <a href="/about" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-blue-600 hover:bg-gray-50">About</a>
                    <a href="/contacts" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-blue-600 hover:bg-gray-50">Contacts</a>
                </div>
            </div>
        </nav>
    </header>

    <!-- Main Content -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white">
        <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <!-- Company Info -->
                <div class="col-span-1 md:col-span-2">
                    <div class="flex items-center mb-4">
                        <img src="{{ asset('drafts/pics/logo.png') }}" alt="Dimgent Technologies" class="h-8 w-auto">
                    </div>
                    <p class="text-gray-300 text-sm">
                        Dimgent Technologies is a leader in advanced geophysical instrumentation and magnetic survey solutions, providing cutting-edge magnetometer-gradiometer systems worldwide.
                    </p>
                </div>
                
                <!-- Quick Links -->
                <div>
                    <h3 class="text-sm font-semibold text-gray-100 tracking-wider uppercase mb-4">Quick Links</h3>
                    <ul class="space-y-2">
                        <li><a href="/products" class="text-gray-300 hover:text-white text-sm">Products</a></li>
                        <li><a href="/services" class="text-gray-300 hover:text-white text-sm">Services</a></li>
                        <li><a href="/projects" class="text-gray-300 hover:text-white text-sm">Projects</a></li>
                        <li><a href="/about" class="text-gray-300 hover:text-white text-sm">About Us</a></li>
                    </ul>
                </div>
                
                <!-- Contact -->
                <div>
                    <h3 class="text-sm font-semibold text-gray-100 tracking-wider uppercase mb-4">Contact</h3>
                    <ul class="space-y-2 text-sm text-gray-300">
                        <li>1234 Innovation Drive</li>
                        <li>Tech Valley, CA 94025</li>
                        <li>+1 (650) 555-0123</li>
                        <li><a href="mailto:info@dimgent.com" class="hover:text-white">info@dimgent.com</a></li>
                    </ul>
                </div>
            </div>
            
            <div class="mt-8 pt-8 border-t border-gray-800">
                <p class="text-center text-gray-400 text-sm">
                    &copy; {{ date('Y') }} Dimgent Technologies. All rights reserved.
                </p>
            </div>
        </div>
    </footer>
</body>
</html>
