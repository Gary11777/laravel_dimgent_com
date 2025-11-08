@extends('layouts.app')

@section('title', 'Products')

@section('content')
<!-- Hero Section -->
<section class="bg-gradient-to-br from-blue-600 via-blue-700 to-blue-900 text-white py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h1 class="text-4xl md:text-5xl font-bold mb-4">Our Products</h1>
        <p class="text-xl text-blue-100">Advanced geophysical instrumentation solutions</p>
    </div>
</section>

<!-- Products Section -->
<section class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Garand-101 Product -->
        <div class="bg-white rounded-2xl shadow-xl overflow-hidden mb-12">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                <!-- Product Image -->
                <div class="bg-gray-100 flex items-center justify-center p-8">
                    <img src="{{ asset('images/main_photo_of_garand101.jpg') }}" 
                         alt="Garand-101 Magnetometer-Gradiometer" 
                         class="max-w-full h-auto rounded-lg shadow-md">
                </div>
                
                <!-- Product Details -->
                <div class="p-8 lg:p-12">
                    <h2 class="text-3xl font-bold mb-4 text-gray-900">Garand-101 Magnetometer-Gradiometer</h2>
                    <p class="text-lg text-gray-600 mb-6">
                        Our flagship magnetometer-gradiometer system, designed for high-precision magnetic field measurements. This advanced instrument combines cutting-edge sensor technology with robust field deployment capabilities.
                    </p>
                    
                    <div class="mb-8">
                        <h3 class="text-xl font-semibold mb-4 text-gray-900">Key Features</h3>
                        <ul class="space-y-2 text-gray-700">
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-blue-600 mr-2 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                </svg>
                                High sensitivity magnetic field detection
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-blue-600 mr-2 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                </svg>
                                Dual-sensor gradiometer configuration
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-blue-600 mr-2 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                </svg>
                                Portable and field-ready design
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-blue-600 mr-2 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                </svg>
                                Real-time data acquisition and processing
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-blue-600 mr-2 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                </svg>
                                Advanced noise filtering and signal processing
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-blue-600 mr-2 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                </svg>
                                Durable construction for harsh environments
                            </li>
                        </ul>
                    </div>
                    
                    <div class="mb-8">
                        <h3 class="text-xl font-semibold mb-4 text-gray-900">Applications</h3>
                        <div class="flex flex-wrap gap-2">
                            <span class="px-4 py-2 bg-blue-100 text-blue-800 rounded-full text-sm font-medium">Mineral Exploration</span>
                            <span class="px-4 py-2 bg-blue-100 text-blue-800 rounded-full text-sm font-medium">Archaeological Surveys</span>
                            <span class="px-4 py-2 bg-blue-100 text-blue-800 rounded-full text-sm font-medium">Environmental Monitoring</span>
                            <span class="px-4 py-2 bg-blue-100 text-blue-800 rounded-full text-sm font-medium">Geological Mapping</span>
                            <span class="px-4 py-2 bg-blue-100 text-blue-800 rounded-full text-sm font-medium">Pipeline Inspection</span>
                        </div>
                    </div>
                    
                    <a href="{{ route('contacts') }}" class="bg-blue-600 text-white px-8 py-3 rounded-lg font-semibold hover:bg-blue-700 transition-colors inline-block">
                        Request Information
                    </a>
                </div>
            </div>
        </div>
        
        <!-- Additional Content -->
        <div class="prose prose-lg max-w-none">
            {!! nl2br(e($content)) !!}
        </div>
    </div>
</section>
@endsection
