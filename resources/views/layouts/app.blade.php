<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Dimgent Technologies - Electronics Development')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased bg-white text-gray-900">
    <!-- Navigation -->
    <nav class="bg-white shadow-sm sticky top-0 z-50" x-data="{ mobileMenuOpen: false }">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <!-- Logo -->
                <div class="flex-shrink-0">
                    <a href="{{ route('home') }}" class="flex items-center">
                        <img src="{{ asset('images/logo.png') }}" alt="Dimgent Technologies" class="h-10 w-auto">
                    </a>
                </div>

                <!-- Desktop Navigation -->
                <div class="hidden md:flex md:items-center md:space-x-8">
                    <a href="{{ route('home') }}" class="text-gray-700 hover:text-blue-600 px-3 py-2 text-sm font-medium transition {{ request()->routeIs('home') ? 'text-blue-600' : '' }}">
                        Home
                    </a>
                    <a href="{{ route('products') }}" class="text-gray-700 hover:text-blue-600 px-3 py-2 text-sm font-medium transition {{ request()->routeIs('products') ? 'text-blue-600' : '' }}">
                        Products
                    </a>
                    <a href="{{ route('services') }}" class="text-gray-700 hover:text-blue-600 px-3 py-2 text-sm font-medium transition {{ request()->routeIs('services') ? 'text-blue-600' : '' }}">
                        Services
                    </a>
                    <a href="{{ route('projects') }}" class="text-gray-700 hover:text-blue-600 px-3 py-2 text-sm font-medium transition {{ request()->routeIs('projects') ? 'text-blue-600' : '' }}">
                        Projects
                    </a>
                    <a href="{{ route('contacts') }}" class="text-gray-700 hover:text-blue-600 px-3 py-2 text-sm font-medium transition {{ request()->routeIs('contacts') ? 'text-blue-600' : '' }}">
                        Contacts
                    </a>
                    <a href="{{ route('about') }}" class="text-gray-700 hover:text-blue-600 px-3 py-2 text-sm font-medium transition {{ request()->routeIs('about') ? 'text-blue-600' : '' }}">
                        About
                    </a>
                </div>

                <!-- Mobile menu button -->
                <div class="md:hidden">
                    <button @click="mobileMenuOpen = !mobileMenuOpen" type="button" class="text-gray-700 hover:text-blue-600 focus:outline-none focus:text-blue-600">
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path x-show="!mobileMenuOpen" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                            <path x-show="mobileMenuOpen" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile Navigation -->
        <div x-show="mobileMenuOpen" 
             x-transition:enter="transition ease-out duration-200"
             x-transition:enter-start="opacity-0 transform scale-95"
             x-transition:enter-end="opacity-100 transform scale-100"
             x-transition:leave="transition ease-in duration-150"
             x-transition:leave-start="opacity-100 transform scale-100"
             x-transition:leave-end="opacity-0 transform scale-95"
             class="md:hidden">
            <div class="px-2 pt-2 pb-3 space-y-1 bg-white shadow-lg">
                <a href="{{ route('home') }}" class="block px-3 py-2 text-base font-medium text-gray-700 hover:text-blue-600 hover:bg-gray-50 rounded-md {{ request()->routeIs('home') ? 'text-blue-600 bg-gray-50' : '' }}">
                    Home
                </a>
                <a href="{{ route('products') }}" class="block px-3 py-2 text-base font-medium text-gray-700 hover:text-blue-600 hover:bg-gray-50 rounded-md {{ request()->routeIs('products') ? 'text-blue-600 bg-gray-50' : '' }}">
                    Products
                </a>
                <a href="{{ route('services') }}" class="block px-3 py-2 text-base font-medium text-gray-700 hover:text-blue-600 hover:bg-gray-50 rounded-md {{ request()->routeIs('services') ? 'text-blue-600 bg-gray-50' : '' }}">
                    Services
                </a>
                <a href="{{ route('projects') }}" class="block px-3 py-2 text-base font-medium text-gray-700 hover:text-blue-600 hover:bg-gray-50 rounded-md {{ request()->routeIs('projects') ? 'text-blue-600 bg-gray-50' : '' }}">
                    Projects
                </a>
                <a href="{{ route('contacts') }}" class="block px-3 py-2 text-base font-medium text-gray-700 hover:text-blue-600 hover:bg-gray-50 rounded-md {{ request()->routeIs('contacts') ? 'text-blue-600 bg-gray-50' : '' }}">
                    Contacts
                </a>
                <a href="{{ route('about') }}" class="block px-3 py-2 text-base font-medium text-gray-700 hover:text-blue-600 hover:bg-gray-50 rounded-md {{ request()->routeIs('about') ? 'text-blue-600 bg-gray-50' : '' }}">
                    About
                </a>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Company Info -->
                <div>
                    <img src="{{ asset('images/logo.png') }}" alt="Dimgent Technologies" class="h-10 w-auto mb-4 brightness-0 invert">
                    <p class="text-gray-400 text-sm">
                        Electronics Development<br>
                        Minsk, Belarus
                    </p>
                </div>

                <!-- Quick Links -->
                <div>
                    <h3 class="text-lg font-semibold mb-4">Quick Links</h3>
                    <ul class="space-y-2 text-gray-400 text-sm">
                        <li><a href="{{ route('home') }}" class="hover:text-white transition">Home</a></li>
                        <li><a href="{{ route('products') }}" class="hover:text-white transition">Products</a></li>
                        <li><a href="{{ route('services') }}" class="hover:text-white transition">Services</a></li>
                        <li><a href="{{ route('projects') }}" class="hover:text-white transition">Projects</a></li>
                        <li><a href="{{ route('contacts') }}" class="hover:text-white transition">Contacts</a></li>
                        <li><a href="{{ route('about') }}" class="hover:text-white transition">About Us</a></li>
                    </ul>
                </div>

                <!-- Contact Info -->
                <div>
                    <h3 class="text-lg font-semibold mb-4">Contact Us</h3>
                    <p class="text-gray-400 text-sm">
                        For inquiries, please visit our<br>
                        <a href="{{ route('contacts') }}" class="text-blue-400 hover:text-blue-300 transition">Contact page</a>
                    </p>
                </div>
            </div>

            <div class="border-t border-gray-800 mt-8 pt-8 text-center text-gray-400 text-sm">
                <p>&copy; {{ date('Y') }} Dimgent Technologies. All rights reserved.</p>
            </div>
        </div>
    </footer>
</body>
</html>
