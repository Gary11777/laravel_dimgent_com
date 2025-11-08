@extends('layouts.app')

@section('title', 'Dimgent Technologies - Electronics Development')

@section('content')
<!-- Hero Section -->
<section class="bg-gradient-to-br from-blue-600 to-blue-800 text-white py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center">
            <h1 class="text-4xl md:text-6xl font-bold mb-6">Dimgent Technologies</h1>
            <p class="text-xl md:text-2xl mb-8 text-blue-100">Electronics Development</p>
            <p class="text-lg md:text-xl max-w-3xl mx-auto mb-10 text-blue-50">
                A group of specialists working in the development of electronic devices, offering full-cycle development from concept to finished product.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="{{ route('products') }}" class="bg-white text-blue-600 px-8 py-3 rounded-lg font-semibold hover:bg-blue-50 transition">
                    View Products
                </a>
                <a href="{{ route('contacts') }}" class="bg-blue-700 text-white px-8 py-3 rounded-lg font-semibold hover:bg-blue-600 transition border border-blue-500">
                    Contact Us
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Services Overview -->
<section class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">What We Do</h2>
            <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                We offer comprehensive electronic device development services tailored to your needs
            </p>
        </div>

        <div class="grid md:grid-cols-2 gap-8 mb-12">
            <div class="bg-blue-50 p-8 rounded-lg">
                <div class="text-blue-600 mb-4">
                    <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold mb-3 text-gray-900">Full-Cycle Development</h3>
                <p class="text-gray-700">
                    Complete electronic device development from initial concept through to finished product, including all design, prototyping, and testing phases.
                </p>
            </div>

            <div class="bg-blue-50 p-8 rounded-lg">
                <div class="text-blue-600 mb-4">
                    <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold mb-3 text-gray-900">Specialized Services</h3>
                <p class="text-gray-700">
                    Individual development phases including circuit design, software development, PCB layouts, and structural design as needed.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Development Areas -->
<section class="py-16 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Development Areas</h2>
        </div>

        <div class="grid md:grid-cols-3 gap-6">
            <div class="bg-white p-6 rounded-lg shadow-sm hover:shadow-md transition">
                <div class="text-blue-600 mb-3">
                    <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                    </svg>
                </div>
                <h3 class="font-semibold mb-2 text-gray-900">Specifications</h3>
                <p class="text-gray-600 text-sm">Technical specifications and requirements documentation</p>
            </div>

            <div class="bg-white p-6 rounded-lg shadow-sm hover:shadow-md transition">
                <div class="text-blue-600 mb-3">
                    <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                    </svg>
                </div>
                <h3 class="font-semibold mb-2 text-gray-900">Electric Circuits</h3>
                <p class="text-gray-600 text-sm">Circuit design and component selection</p>
            </div>

            <div class="bg-white p-6 rounded-lg shadow-sm hover:shadow-md transition">
                <div class="text-blue-600 mb-3">
                    <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path>
                    </svg>
                </div>
                <h3 class="font-semibold mb-2 text-gray-900">Software</h3>
                <p class="text-gray-600 text-sm">Embedded software and firmware development</p>
            </div>

            <div class="bg-white p-6 rounded-lg shadow-sm hover:shadow-md transition">
                <div class="text-blue-600 mb-3">
                    <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01"></path>
                    </svg>
                </div>
                <h3 class="font-semibold mb-2 text-gray-900">PCB Layouts</h3>
                <p class="text-gray-600 text-sm">Printed circuit board design and drawings</p>
            </div>

            <div class="bg-white p-6 rounded-lg shadow-sm hover:shadow-md transition">
                <div class="text-blue-600 mb-3">
                    <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path>
                    </svg>
                </div>
                <h3 class="font-semibold mb-2 text-gray-900">Structural Design</h3>
                <p class="text-gray-600 text-sm">Housing design and mechanical engineering</p>
            </div>

            <div class="bg-white p-6 rounded-lg shadow-sm hover:shadow-md transition">
                <div class="text-blue-600 mb-3">
                    <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path>
                    </svg>
                </div>
                <h3 class="font-semibold mb-2 text-gray-900">Prototyping</h3>
                <p class="text-gray-600 text-sm">Test models and prototype development</p>
            </div>
        </div>
    </div>
</section>

<!-- Featured Product -->
<section class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Featured Product</h2>
        </div>

        <div class="bg-gradient-to-br from-gray-50 to-blue-50 rounded-2xl p-8 md:p-12">
            <div class="grid md:grid-cols-2 gap-8 items-center">
                <div>
                    <h3 class="text-3xl font-bold text-gray-900 mb-4">Garand 101</h3>
                    <p class="text-xl text-blue-600 mb-6">High-Resolution Magnetometer-Gradiometer</p>
                    <p class="text-gray-700 mb-6">
                        Our flagship product - a cutting-edge magnetometer designed for archaeological research, environmental monitoring, forensic investigations, and more.
                    </p>
                    <a href="{{ route('products') }}" class="inline-flex items-center bg-blue-600 text-white px-6 py-3 rounded-lg font-semibold hover:bg-blue-700 transition">
                        Learn More
                        <svg class="ml-2 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>
                    </a>
                </div>
                <div>
                    <img src="{{ asset('images/products/main_photo_of_garand101.jpg') }}" alt="Garand 101 Magnetometer" class="rounded-lg shadow-lg">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Location -->
<section class="py-16 bg-gray-900 text-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center">
            <h2 class="text-3xl md:text-4xl font-bold mb-4">Development Center</h2>
            <p class="text-xl text-gray-300 mb-2">Minsk, Belarus</p>
            <p class="text-gray-400 mb-8">Serving an international audience</p>
            <a href="{{ route('contacts') }}" class="inline-flex items-center bg-blue-600 text-white px-8 py-3 rounded-lg font-semibold hover:bg-blue-700 transition">
                Get in Touch
            </a>
        </div>
    </div>
</section>
@endsection
