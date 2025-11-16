@extends('layouts.app')

@section('content')
<!-- Hero Section -->
<section class="bg-gradient-to-br from-blue-600 to-blue-800 text-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-24">
        <div class="text-center">
            <h1 class="text-4xl md:text-6xl font-bold mb-6">
                Welcome to Dimgent Technologies
            </h1>
            <p class="text-xl md:text-2xl text-blue-100 mb-8 max-w-3xl mx-auto">
                A leader in advanced geophysical instrumentation and magnetic survey solutions
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="/products" class="inline-flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-blue-600 bg-white hover:bg-blue-50 transition-colors">
                    Explore Products
                </a>
                <a href="/contacts" class="inline-flex items-center justify-center px-8 py-3 border border-white text-base font-medium rounded-md text-white hover:bg-white hover:text-blue-600 transition-colors">
                    Contact Us
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Who We Are -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Who We Are</h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Dimgent Technologies specializes in the design, development, and manufacturing of high-precision magnetometer-gradiometer systems for scientific research, mineral exploration, and environmental monitoring.
            </p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="text-center">
                <div class="flex items-center justify-center h-12 w-12 rounded-md bg-blue-600 text-white mx-auto mb-4">
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </div>
                <h3 class="text-lg font-semibold text-gray-900 mb-2">Precision Engineering</h3>
                <p class="text-gray-600">State-of-the-art sensor technology with unmatched accuracy and reliability</p>
            </div>
            
            <div class="text-center">
                <div class="flex items-center justify-center h-12 w-12 rounded-md bg-blue-600 text-white mx-auto mb-4">
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                    </svg>
                </div>
                <h3 class="text-lg font-semibold text-gray-900 mb-2">Innovation Driven</h3>
                <p class="text-gray-600">Continuous research and development to push technological boundaries</p>
            </div>
            
            <div class="text-center">
                <div class="flex items-center justify-center h-12 w-12 rounded-md bg-blue-600 text-white mx-auto mb-4">
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </div>
                <h3 class="text-lg font-semibold text-gray-900 mb-2">Global Presence</h3>
                <p class="text-gray-600">Serving clients across five continents with localized support</p>
            </div>
        </div>
    </div>
</section>

<!-- Mission -->
<section class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-3xl mx-auto text-center">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">Our Mission</h2>
            <p class="text-xl text-gray-600 leading-relaxed">
                To provide cutting-edge magnetic sensing technology that enables accurate, reliable, and efficient geophysical investigations worldwide.
            </p>
        </div>
    </div>
</section>

<!-- Key Highlights -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Key Highlights</h2>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <div class="bg-blue-50 rounded-lg p-6">
                <div class="text-3xl font-bold text-blue-600 mb-2">15+</div>
                <p class="text-gray-700">Years of Experience</p>
            </div>
            
            <div class="bg-blue-50 rounded-lg p-6">
                <div class="text-3xl font-bold text-blue-600 mb-2">100%</div>
                <p class="text-gray-700">Proprietary Technology</p>
            </div>
            
            <div class="bg-blue-50 rounded-lg p-6">
                <div class="text-3xl font-bold text-blue-600 mb-2">50+</div>
                <p class="text-gray-700">Global Clients</p>
            </div>
            
            <div class="bg-blue-50 rounded-lg p-6">
                <div class="text-3xl font-bold text-blue-600 mb-2">24/7</div>
                <p class="text-gray-700">Technical Support</p>
            </div>
        </div>
    </div>
</section>

<!-- Latest Innovation -->
<section class="py-20 bg-gradient-to-r from-blue-600 to-blue-800 text-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-bold mb-4">Latest Innovation: Garand-101</h2>
            <p class="text-xl text-blue-100 mb-8">
                Our flagship magnetometer-gradiometer represents the pinnacle of magnetic survey technology
            </p>
        </div>
        
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <div>
                <img src="{{ asset('drafts/pics/main_photo_of_garand101.jpg') }}" alt="Garand-101 Magnetometer-Gradiometer" class="rounded-lg shadow-lg">
            </div>
            
            <div>
                <h3 class="text-2xl font-bold mb-4">Unprecedented Accuracy & Ease of Use</h3>
                <ul class="space-y-3 text-blue-100">
                    <li class="flex items-start">
                        <svg class="h-5 w-5 text-blue-300 mr-2 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                        </svg>
                        <span>Ultra-high sensitivity with resolution better than 0.001 nT</span>
                    </li>
                    <li class="flex items-start">
                        <svg class="h-5 w-5 text-blue-300 mr-2 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                        </svg>
                        <span>Portable design weighing only 2.3 kg</span>
                    </li>
                    <li class="flex items-start">
                        <svg class="h-5 w-5 text-blue-300 mr-2 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                        </svg>
                        <span>Long battery life – up to 12 hours continuous operation</span>
                    </li>
                    <li class="flex items-start">
                        <svg class="h-5 w-5 text-blue-300 mr-2 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                        </svg>
                        <span>Real-time data display with integrated GPS positioning</span>
                    </li>
                </ul>
                
                <div class="mt-8">
                    <a href="/products" class="inline-flex items-center justify-center px-6 py-3 border border-transparent text-base font-medium rounded-md text-blue-600 bg-white hover:bg-blue-50 transition-colors">
                        Learn More About Garand-101
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-20 bg-gray-900 text-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-3xl md:text-4xl font-bold mb-4">Ready to Transform Your Geophysical Surveys?</h2>
        <p class="text-xl text-gray-300 mb-8 max-w-2xl mx-auto">
            Contact us today to learn more about our innovative magnetic sensing solutions and how they can enhance your survey capabilities.
        </p>
        <a href="/contacts" class="inline-flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-blue-600 bg-white hover:bg-blue-50 transition-colors">
            Get Started Today
        </a>
    </div>
</section>
@endsection
