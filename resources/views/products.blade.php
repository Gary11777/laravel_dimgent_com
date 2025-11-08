@extends('layouts.app')

@section('title', 'Products - Dimgent Technologies')

@section('content')
<!-- Hero Section -->
<section class="bg-gradient-to-br from-blue-600 to-blue-800 text-white py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center">
            <h1 class="text-4xl md:text-5xl font-bold mb-4">Our Products</h1>
            <p class="text-xl text-blue-100">Innovative electronic solutions</p>
        </div>
    </div>
</section>

<!-- Product Detail -->
<section class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Product Header -->
        <div class="text-center mb-12">
            <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">Garand 101</h2>
            <p class="text-2xl text-blue-600 font-semibold mb-2">High-Resolution Fluxgate Magnetometer</p>
            <p class="text-xl text-gray-700 italic">"Magnetic detection can be easy and convenient!"</p>
        </div>

        <!-- Main Image -->
        <div class="mb-12">
            <img src="{{ asset('images/products/main_photo_of_garand101.jpg') }}" 
                 alt="Garand 101 Magnetometer" 
                 class="w-full max-w-4xl mx-auto rounded-2xl shadow-2xl">
        </div>

        <!-- Overview -->
        <div class="max-w-4xl mx-auto mb-16">
            <div class="bg-blue-50 rounded-xl p-8 md:p-12">
                <h3 class="text-2xl font-bold text-gray-900 mb-6">Overview</h3>
                <p class="text-lg text-gray-700 leading-relaxed mb-6">
                    <strong>Garand 101</strong> is a high-resolution fluxgate magnetometer-gradiometer designed to measure disruptions in the Earth's magnetic field caused by ferromagnetic objects. It provides reliable detection of metals such as iron, steel, and nickel.
                </p>
                <p class="text-lg text-gray-700 leading-relaxed">
                    The device is designed for <strong>one-person operation</strong>, being <strong>lightweight</strong>, <strong>user-friendly</strong>, <strong>reliable</strong>, and <strong>low-cost</strong>.
                </p>
            </div>
        </div>

        <!-- Target Areas -->
        <div class="mb-16">
            <h3 class="text-3xl font-bold text-gray-900 mb-8 text-center">Target Areas</h3>
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                <div class="bg-white border border-gray-200 rounded-lg p-6 hover:shadow-lg transition">
                    <div class="text-blue-600 mb-3">
                        <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path>
                        </svg>
                    </div>
                    <h4 class="font-semibold text-gray-900 mb-2">Archaeological Research</h4>
                    <p class="text-gray-600 text-sm">Detect buried artifacts and historical remains</p>
                </div>

                <div class="bg-white border border-gray-200 rounded-lg p-6 hover:shadow-lg transition">
                    <div class="text-blue-600 mb-3">
                        <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <h4 class="font-semibold text-gray-900 mb-2">Environmental Monitoring</h4>
                    <p class="text-gray-600 text-sm">Track environmental magnetic anomalies</p>
                </div>

                <div class="bg-white border border-gray-200 rounded-lg p-6 hover:shadow-lg transition">
                    <div class="text-blue-600 mb-3">
                        <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                        </svg>
                    </div>
                    <h4 class="font-semibold text-gray-900 mb-2">Forensic Investigations</h4>
                    <p class="text-gray-600 text-sm">Locate buried metallic evidence</p>
                </div>

                <div class="bg-white border border-gray-200 rounded-lg p-6 hover:shadow-lg transition">
                    <div class="text-blue-600 mb-3">
                        <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <h4 class="font-semibold text-gray-900 mb-2">Geological Studies</h4>
                    <p class="text-gray-600 text-sm">Analyze subsurface geological structures</p>
                </div>

                <div class="bg-white border border-gray-200 rounded-lg p-6 hover:shadow-lg transition">
                    <div class="text-blue-600 mb-3">
                        <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                        </svg>
                    </div>
                    <h4 class="font-semibold text-gray-900 mb-2">Civil Engineering</h4>
                    <p class="text-gray-600 text-sm">Detect underground utilities and structures</p>
                </div>

                <div class="bg-white border border-gray-200 rounded-lg p-6 hover:shadow-lg transition">
                    <div class="text-blue-600 mb-3">
                        <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                        </svg>
                    </div>
                    <h4 class="font-semibold text-gray-900 mb-2">Peace-time Military Applications</h4>
                    <p class="text-gray-600 text-sm">Non-combat detection and surveying</p>
                </div>
            </div>
        </div>

        <!-- Key Technology -->
        <div class="bg-gradient-to-br from-blue-600 to-blue-800 text-white rounded-2xl p-8 md:p-12 mb-16">
            <h3 class="text-3xl font-bold mb-6 text-center">Key Technology</h3>
            <p class="text-lg text-blue-50 leading-relaxed mb-6">
                Garand 101 implements a <strong>new magnetic field measurement technology</strong> that:
            </p>
            <div class="grid md:grid-cols-3 gap-6">
                <div class="bg-white/10 backdrop-blur rounded-lg p-6">
                    <h4 class="font-semibold mb-2">Reduces Energy</h4>
                    <p class="text-blue-100 text-sm">Lower energy consumption and lighter device weight</p>
                </div>
                <div class="bg-white/10 backdrop-blur rounded-lg p-6">
                    <h4 class="font-semibold mb-2">Simplifies Design</h4>
                    <p class="text-blue-100 text-sm">Easier construction and maintenance</p>
                </div>
                <div class="bg-white/10 backdrop-blur rounded-lg p-6">
                    <h4 class="font-semibold mb-2">Increases Runtime</h4>
                    <p class="text-blue-100 text-sm">Extended operating time in the field</p>
                </div>
            </div>
        </div>

        <!-- Advantages -->
        <div class="mb-16">
            <h3 class="text-3xl font-bold text-gray-900 mb-8 text-center">Advantages Over Other Magnetometers</h3>
            <div class="grid md:grid-cols-2 gap-6 max-w-5xl mx-auto">
                <div class="flex gap-4">
                    <div class="flex-shrink-0 w-8 h-8 bg-blue-600 text-white rounded-full flex items-center justify-center font-bold">1</div>
                    <div>
                        <h4 class="font-semibold text-gray-900 mb-1">Innovative Technology</h4>
                        <p class="text-gray-600">New magnetic field measurement technology</p>
                    </div>
                </div>

                <div class="flex gap-4">
                    <div class="flex-shrink-0 w-8 h-8 bg-blue-600 text-white rounded-full flex items-center justify-center font-bold">2</div>
                    <div>
                        <h4 class="font-semibold text-gray-900 mb-1">Fully Digital</h4>
                        <p class="text-gray-600">Improved noise stability during operation</p>
                    </div>
                </div>

                <div class="flex gap-4">
                    <div class="flex-shrink-0 w-8 h-8 bg-blue-600 text-white rounded-full flex items-center justify-center font-bold">3</div>
                    <div>
                        <h4 class="font-semibold text-gray-900 mb-1">User-Friendly Interface</h4>
                        <p class="text-gray-600">Easy visualization system for object detection</p>
                    </div>
                </div>

                <div class="flex gap-4">
                    <div class="flex-shrink-0 w-8 h-8 bg-blue-600 text-white rounded-full flex items-center justify-center font-bold">4</div>
                    <div>
                        <h4 class="font-semibold text-gray-900 mb-1">Reliable & Robust</h4>
                        <p class="text-gray-600">Durable design for field conditions</p>
                    </div>
                </div>

                <div class="flex gap-4">
                    <div class="flex-shrink-0 w-8 h-8 bg-blue-600 text-white rounded-full flex items-center justify-center font-bold">5</div>
                    <div>
                        <h4 class="font-semibold text-gray-900 mb-1">Expanded Detection Area</h4>
                        <p class="text-gray-600">Optimized design solutions</p>
                    </div>
                </div>

                <div class="flex gap-4">
                    <div class="flex-shrink-0 w-8 h-8 bg-blue-600 text-white rounded-full flex items-center justify-center font-bold">6</div>
                    <div>
                        <h4 class="font-semibold text-gray-900 mb-1">Plug-and-Play</h4>
                        <p class="text-gray-600">Ready to use out of the box</p>
                    </div>
                </div>

                <div class="flex gap-4">
                    <div class="flex-shrink-0 w-8 h-8 bg-blue-600 text-white rounded-full flex items-center justify-center font-bold">7</div>
                    <div>
                        <h4 class="font-semibold text-gray-900 mb-1">Affordable Price</h4>
                        <p class="text-gray-600">Cost-effective solution</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Photo Gallery -->
        <div class="mb-16" x-data="{ selectedImage: '{{ asset('images/products/main_photo_of_garand101.jpg') }}' }">
            <h3 class="text-3xl font-bold text-gray-900 mb-8 text-center">Product Gallery</h3>
            
            <!-- Main Display -->
            <div class="mb-6">
                <img :src="selectedImage" alt="Garand 101" class="w-full max-w-4xl mx-auto rounded-xl shadow-lg">
            </div>

            <!-- Thumbnails -->
            <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-5 gap-4 max-w-5xl mx-auto">
                <button @click="selectedImage = '{{ asset('images/products/main_photo_of_garand101.jpg') }}'" 
                        class="aspect-square rounded-lg overflow-hidden hover:ring-4 ring-blue-600 transition">
                    <img src="{{ asset('images/products/main_photo_of_garand101.jpg') }}" alt="Garand 101" class="w-full h-full object-cover">
                </button>
                <button @click="selectedImage = '{{ asset('images/products/photo_garand101_5.jpg') }}'" 
                        class="aspect-square rounded-lg overflow-hidden hover:ring-4 ring-blue-600 transition">
                    <img src="{{ asset('images/products/photo_garand101_5.jpg') }}" alt="Garand 101" class="w-full h-full object-cover">
                </button>
                <button @click="selectedImage = '{{ asset('images/products/photo_garand101_6.jpg') }}'" 
                        class="aspect-square rounded-lg overflow-hidden hover:ring-4 ring-blue-600 transition">
                    <img src="{{ asset('images/products/photo_garand101_6.jpg') }}" alt="Garand 101" class="w-full h-full object-cover">
                </button>
                <button @click="selectedImage = '{{ asset('images/products/photo_garand101_7.jpg') }}'" 
                        class="aspect-square rounded-lg overflow-hidden hover:ring-4 ring-blue-600 transition">
                    <img src="{{ asset('images/products/photo_garand101_7.jpg') }}" alt="Garand 101" class="w-full h-full object-cover">
                </button>
                <button @click="selectedImage = '{{ asset('images/products/photo_garand101_8.jpg') }}'" 
                        class="aspect-square rounded-lg overflow-hidden hover:ring-4 ring-blue-600 transition">
                    <img src="{{ asset('images/products/photo_garand101_8.jpg') }}" alt="Garand 101" class="w-full h-full object-cover">
                </button>
                <button @click="selectedImage = '{{ asset('images/products/photo_garand101_10.jpg') }}'" 
                        class="aspect-square rounded-lg overflow-hidden hover:ring-4 ring-blue-600 transition">
                    <img src="{{ asset('images/products/photo_garand101_10.jpg') }}" alt="Garand 101" class="w-full h-full object-cover">
                </button>
                <button @click="selectedImage = '{{ asset('images/products/photo_garand101_11.jpg') }}'" 
                        class="aspect-square rounded-lg overflow-hidden hover:ring-4 ring-blue-600 transition">
                    <img src="{{ asset('images/products/photo_garand101_11.jpg') }}" alt="Garand 101" class="w-full h-full object-cover">
                </button>
                <button @click="selectedImage = '{{ asset('images/products/photo_garand101_12_2.jpg') }}'" 
                        class="aspect-square rounded-lg overflow-hidden hover:ring-4 ring-blue-600 transition">
                    <img src="{{ asset('images/products/photo_garand101_12_2.jpg') }}" alt="Garand 101" class="w-full h-full object-cover">
                </button>
                <button @click="selectedImage = '{{ asset('images/products/bag_2_forest.jpg') }}'" 
                        class="aspect-square rounded-lg overflow-hidden hover:ring-4 ring-blue-600 transition">
                    <img src="{{ asset('images/products/bag_2_forest.jpg') }}" alt="Garand 101 Bag" class="w-full h-full object-cover">
                </button>
            </div>
        </div>

        <!-- More Information -->
        <div class="bg-gray-50 rounded-xl p-8 md:p-12 text-center">
            <h3 class="text-2xl font-bold text-gray-900 mb-4">More Information</h3>
            <p class="text-gray-700 mb-6">
                Visit the dedicated product website for detailed specifications and documentation
            </p>
            <a href="http://www.gradiometr.com" target="_blank" rel="noopener" class="inline-flex items-center bg-blue-600 text-white px-8 py-3 rounded-lg font-semibold hover:bg-blue-700 transition">
                Visit www.gradiometr.com
                <svg class="ml-2 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path>
                </svg>
            </a>
        </div>
    </div>
</section>
@endsection
