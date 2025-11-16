@extends('layouts.app')

@section('content')
<!-- Hero Section -->
<section class="bg-gradient-to-br from-blue-600 to-blue-800 text-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20">
        <div class="text-center">
            <h1 class="text-4xl md:text-5xl font-bold mb-6">Products</h1>
            <p class="text-xl text-blue-100 max-w-3xl mx-auto">
                Advanced magnetic sensing technology for professional geophysical surveys and research applications
            </p>
        </div>
    </div>
</section>

<!-- Garand-101 Main Section -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Garand-101 Magnetometer-Gradiometer</h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                State-of-the-art magnetometer-gradiometer designed for professional geophysical surveys and research applications
            </p>
        </div>
        
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center mb-20">
            <div>
                <img src="{{ asset('drafts/pics/main_photo_of_garand101.jpg') }}" alt="Garand-101 Magnetometer-Gradiometer" class="rounded-lg shadow-lg">
            </div>
            
            <div>
                <h3 class="text-2xl font-bold text-gray-900 mb-6">Key Features</h3>
                <ul class="space-y-4 text-gray-700">
                    <li class="flex items-start">
                        <svg class="h-5 w-5 text-blue-600 mr-3 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                        </svg>
                        <span><strong>Dual-sensor gradiometer configuration</strong> for superior noise rejection</span>
                    </li>
                    <li class="flex items-start">
                        <svg class="h-5 w-5 text-blue-600 mr-3 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                        </svg>
                        <span><strong>Ultra-high sensitivity</strong> with resolution better than 0.001 nT</span>
                    </li>
                    <li class="flex items-start">
                        <svg class="h-5 w-5 text-blue-600 mr-3 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                        </svg>
                        <span><strong>Portable design</strong> weighing only 2.3 kg</span>
                    </li>
                    <li class="flex items-start">
                        <svg class="h-5 w-5 text-blue-600 mr-3 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                        </svg>
                        <span><strong>Long battery life</strong> – up to 12 hours continuous operation</span>
                    </li>
                    <li class="flex items-start">
                        <svg class="h-5 w-5 text-blue-600 mr-3 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                        </svg>
                        <span><strong>Weather-resistant construction</strong> for field deployment</span>
                    </li>
                    <li class="flex items-start">
                        <svg class="h-5 w-5 text-blue-600 mr-3 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                        </svg>
                        <span><strong>Real-time data display</strong> with integrated GPS positioning</span>
                    </li>
                </ul>
            </div>
        </div>

        <!-- Technical Specifications -->
        <div class="mb-20">
            <h3 class="text-2xl font-bold text-gray-900 mb-8 text-center">Technical Specifications</h3>
            <div class="bg-gray-50 rounded-lg p-8">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <div>
                        <h4 class="font-semibold text-gray-900 mb-4">Measurement Specifications</h4>
                        <dl class="space-y-3">
                            <div class="flex justify-between">
                                <dt class="text-gray-600">Sensor Type:</dt>
                                <dd class="font-medium">Fluxgate magnetometer</dd>
                            </div>
                            <div class="flex justify-between">
                                <dt class="text-gray-600">Measurement Range:</dt>
                                <dd class="font-medium">±100,000 nT</dd>
                            </div>
                            <div class="flex justify-between">
                                <dt class="text-gray-600">Gradient Measurement:</dt>
                                <dd class="font-medium">Up to 10,000 nT/m</dd>
                            </div>
                            <div class="flex justify-between">
                                <dt class="text-gray-600">Accuracy:</dt>
                                <dd class="font-medium">±0.1 nT (absolute), ±0.01 nT (gradient)</dd>
                            </div>
                            <div class="flex justify-between">
                                <dt class="text-gray-600">Sampling Rate:</dt>
                                <dd class="font-medium">10 Hz continuous</dd>
                            </div>
                        </dl>
                    </div>
                    
                    <div>
                        <h4 class="font-semibold text-gray-900 mb-4">Physical Specifications</h4>
                        <dl class="space-y-3">
                            <div class="flex justify-between">
                                <dt class="text-gray-600">Weight:</dt>
                                <dd class="font-medium">2.3 kg</dd>
                            </div>
                            <div class="flex justify-between">
                                <dt class="text-gray-600">Operating Temperature:</dt>
                                <dd class="font-medium">-40°C to +70°C</dd>
                            </div>
                            <div class="flex justify-between">
                                <dt class="text-gray-600">Battery Life:</dt>
                                <dd class="font-medium">Up to 12 hours</dd>
                            </div>
                            <div class="flex justify-between">
                                <dt class="text-gray-600">Data Storage:</dt>
                                <dd class="font-medium">Internal 32 GB, USB export</dd>
                            </div>
                            <div class="flex justify-between">
                                <dt class="text-gray-600">Environmental Rating:</dt>
                                <dd class="font-medium">IP67 (weather resistant)</dd>
                            </div>
                        </dl>
                    </div>
                </div>
            </div>
        </div>

        <!-- Applications -->
        <div class="mb-20">
            <h3 class="text-2xl font-bold text-gray-900 mb-8 text-center">Applications</h3>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <div class="bg-blue-50 rounded-lg p-6">
                    <div class="flex items-center mb-3">
                        <svg class="h-8 w-8 text-blue-600 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l4.553 2.276A1 1 0 0021 18.382V7.618a1 1 0 00-.553-.894L15 4m0 13V4m0 0L9 7" />
                        </svg>
                        <h4 class="font-semibold text-gray-900">Mineral Exploration</h4>
                    </div>
                    <p class="text-gray-600 text-sm">Mining surveys and resource identification with high precision magnetic mapping</p>
                </div>
                
                <div class="bg-blue-50 rounded-lg p-6">
                    <div class="flex items-center mb-3">
                        <svg class="h-8 w-8 text-blue-600 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                        </svg>
                        <h4 class="font-semibold text-gray-900">Archaeological Investigations</h4>
                    </div>
                    <p class="text-gray-600 text-sm">Detection of buried structures and artifacts for cultural heritage studies</p>
                </div>
                
                <div class="bg-blue-50 rounded-lg p-6">
                    <div class="flex items-center mb-3">
                        <svg class="h-8 w-8 text-blue-600 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        <h4 class="font-semibold text-gray-900">Environmental Monitoring</h4>
                    </div>
                    <p class="text-gray-600 text-sm">Contamination studies and environmental impact assessments</p>
                </div>
                
                <div class="bg-blue-50 rounded-lg p-6">
                    <div class="flex items-center mb-3">
                        <svg class="h-8 w-8 text-blue-600 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                        </svg>
                        <h4 class="font-semibold text-gray-900">Geological Research</h4>
                    </div>
                    <p class="text-gray-600 text-sm">Academic research and geological mapping applications</p>
                </div>
                
                <div class="bg-blue-50 rounded-lg p-6">
                    <div class="flex items-center mb-3">
                        <svg class="h-8 w-8 text-blue-600 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        <h4 class="font-semibold text-gray-900">Pipeline Detection</h4>
                    </div>
                    <p class="text-gray-600 text-sm">Pipeline and cable detection for infrastructure projects</p>
                </div>
                
                <div class="bg-blue-50 rounded-lg p-6">
                    <div class="flex items-center mb-3">
                        <svg class="h-8 w-8 text-blue-600 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                        </svg>
                        <h4 class="font-semibold text-gray-900">UXO Detection</h4>
                    </div>
                    <p class="text-gray-600 text-sm">Unexploded ordnance detection and clearance operations</p>
                </div>
            </div>
        </div>

        <!-- Package Includes -->
        <div class="mb-20">
            <h3 class="text-2xl font-bold text-gray-900 mb-8 text-center">Package Includes</h3>
            <div class="bg-gray-50 rounded-lg p-8">
                <ul class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <li class="flex items-center text-gray-700">
                        <svg class="h-5 w-5 text-green-600 mr-3" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                        </svg>
                        Garand-101 sensor unit with protective case
                    </li>
                    <li class="flex items-center text-gray-700">
                        <svg class="h-5 w-5 text-green-600 mr-3" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                        </svg>
                        Data acquisition tablet with specialized software
                    </li>
                    <li class="flex items-center text-gray-700">
                        <svg class="h-5 w-5 text-green-600 mr-3" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                        </svg>
                        Rechargeable battery pack and charger
                    </li>
                    <li class="flex items-center text-gray-700">
                        <svg class="h-5 w-5 text-green-600 mr-3" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                        </svg>
                        Calibration certificate and user manual
                    </li>
                    <li class="flex items-center text-gray-700">
                        <svg class="h-5 w-5 text-green-600 mr-3" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                        </svg>
                        Transportation case with custom foam inserts
                    </li>
                </ul>
            </div>
        </div>

        <!-- Support & Training -->
        <div class="mb-20">
            <h3 class="text-2xl font-bold text-gray-900 mb-8 text-center">Support & Training</h3>
            <div class="bg-blue-50 rounded-lg p-8 text-center">
                <p class="text-lg text-gray-700 mb-6">
                    Comprehensive training programs and technical support ensure optimal deployment and data interpretation for all applications.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="/services" class="inline-flex items-center justify-center px-6 py-3 border border-transparent text-base font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700 transition-colors">
                        View Training Programs
                    </a>
                    <a href="/contacts" class="inline-flex items-center justify-center px-6 py-3 border border-blue-600 text-base font-medium rounded-md text-blue-600 bg-white hover:bg-blue-50 transition-colors">
                        Request Technical Support
                    </a>
                </div>
            </div>
        </div>

        <!-- Product Gallery -->
        <div class="mb-20">
            <h3 class="text-2xl font-bold text-gray-900 mb-8 text-center">Product Gallery</h3>
            <div x-data="{ currentImage: 0 }" class="relative">
                <!-- Main Image Display -->
                <div class="mb-6">
                    <img :src="images[currentImage]" alt="Garand-101 Product View" class="w-full rounded-lg shadow-lg">
                </div>
                
                <!-- Thumbnail Navigation -->
                <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-6 gap-4">
                    <template x-for="(image, index) in images" :key="index">
                        <button @click="currentImage = index" 
                                :class="currentImage === index ? 'ring-2 ring-blue-600' : ''"
                                class="rounded-lg overflow-hidden hover:opacity-80 transition-opacity">
                            <img :src="image" :alt="'Garand-101 View ' + (index + 1)" class="w-full h-20 object-cover">
                        </button>
                    </template>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Custom Solutions CTA -->
<section class="py-20 bg-gray-900 text-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-3xl md:text-4xl font-bold mb-4">Custom Solutions</h2>
        <p class="text-xl text-gray-300 mb-8 max-w-2xl mx-auto">
            We also develop customized magnetic sensing systems for specialized applications. Contact our engineering team to discuss your specific requirements.
        </p>
        <a href="/contacts" class="inline-flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-blue-600 bg-white hover:bg-blue-50 transition-colors">
            Discuss Custom Requirements
        </a>
    </div>
</section>

<script>
document.addEventListener('alpine:init', () => {
    Alpine.data('gallery', () => ({
        images: [
            '{{ asset("drafts/pics/main_photo_of_garand101.jpg") }}',
            '{{ asset("drafts/pics/photo_garand101_5.jpg") }}',
            '{{ asset("drafts/pics/photo_garand101_6.jpg") }}',
            '{{ asset("drafts/pics/photo_garand101_7.jpg") }}',
            '{{ asset("drafts/pics/photo_garand101_8.jpg") }}',
            '{{ asset("drafts/pics/photo_garand101_10.jpg") }}',
            '{{ asset("drafts/pics/photo_garand101_11.jpg") }}',
            '{{ asset("drafts/pics/photo_garand101_12_2.jpg") }}'
        ],
        currentImage: 0
    }))
})
</script>
@endsection
