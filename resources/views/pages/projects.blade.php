@extends('layouts.app')

@section('content')
<!-- Hero Section -->
<section class="bg-gradient-to-br from-blue-600 to-blue-800 text-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20">
        <div class="text-center">
            <h1 class="text-4xl md:text-5xl font-bold mb-6">Projects</h1>
            <p class="text-xl text-blue-100 max-w-3xl mx-auto">
                Successful deployments worldwide across diverse applications and geographic regions
            </p>
        </div>
    </div>
</section>

<!-- Success Stories Overview -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Successful Deployments Worldwide</h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Dimgent Technologies has been instrumental in numerous successful geophysical projects across diverse applications
            </p>
        </div>

        <!-- Stats Overview -->
        <div class="grid grid-cols-2 md:grid-cols-4 gap-6 mb-16">
            <div class="text-center">
                <div class="text-3xl font-bold text-blue-600 mb-2">500+</div>
                <p class="text-gray-700">Projects Completed</p>
            </div>
            <div class="text-center">
                <div class="text-3xl font-bold text-blue-600 mb-2">50+</div>
                <p class="text-gray-700">Countries Served</p>
            </div>
            <div class="text-center">
                <div class="text-3xl font-bold text-blue-600 mb-2">15+</div>
                <p class="text-gray-700">Years of Experience</p>
            </div>
            <div class="text-center">
                <div class="text-3xl font-bold text-blue-600 mb-2">98%</div>
                <p class="text-gray-700">Client Satisfaction</p>
            </div>
        </div>
    </div>
</section>

<!-- Mineral Exploration Success Stories -->
<section class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Mineral Exploration Success Stories</h2>
        </div>

        <div class="space-y-12">
            <!-- Gold Deposit Discovery -->
            <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                <div class="md:flex">
                    <div class="md:w-1/3">
                        <div class="h-64 md:h-full bg-gradient-to-br from-yellow-400 to-yellow-600 flex items-center justify-center">
                            <svg class="h-16 w-16 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                    </div>
                    <div class="md:w-2/3 p-8">
                        <h3 class="text-2xl font-bold text-gray-900 mb-4">Gold Deposit Discovery, Western Australia</h3>
                        <div class="grid grid-cols-2 gap-4 mb-6 text-sm">
                            <div>
                                <span class="font-semibold text-gray-700">Client:</span>
                                <p class="text-gray-600">Major mining corporation</p>
                            </div>
                            <div>
                                <span class="font-semibold text-gray-700">Scope:</span>
                                <p class="text-gray-600">500 km² magnetic survey</p>
                            </div>
                            <div>
                                <span class="font-semibold text-gray-700">Equipment:</span>
                                <p class="text-gray-600">12 Garand-101 units</p>
                            </div>
                            <div>
                                <span class="font-semibold text-gray-700">Outcome:</span>
                                <p class="text-gray-600">3 new gold structures identified</p>
                            </div>
                        </div>
                        <p class="text-gray-600 mb-4">
                            Large-scale magnetic survey covering 500 km² with 12 Garand-101 units deployed simultaneously. The high-resolution data revealed three previously unknown gold-bearing structures that traditional surveys had missed.
                        </p>
                        <div class="bg-green-50 border border-green-200 rounded-lg p-4">
                            <p class="text-green-800 font-medium">Impact: Led to successful exploration drilling and significant resource estimation</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Rare Earth Element Survey -->
            <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                <div class="md:flex">
                    <div class="md:w-1/3">
                        <div class="h-64 md:h-full bg-gradient-to-br from-purple-400 to-purple-600 flex items-center justify-center">
                            <svg class="h-16 w-16 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l4.553 2.276A1 1 0 0021 18.382V7.618a1 1 0 00-.553-.894L15 4m0 13V4m0 0L9 7" />
                            </svg>
                        </div>
                    </div>
                    <div class="md:w-2/3 p-8">
                        <h3 class="text-2xl font-bold text-gray-900 mb-4">Rare Earth Element Survey, Canada</h3>
                        <div class="grid grid-cols-2 gap-4 mb-6 text-sm">
                            <div>
                                <span class="font-semibold text-gray-700">Client:</span>
                                <p class="text-gray-600">Junior exploration company</p>
                            </div>
                            <div>
                                <span class="font-semibold text-gray-700">Challenge:</span>
                                <p class="text-gray-600">Deep-penetrating survey in rugged terrain</p>
                            </div>
                            <div>
                                <span class="font-semibold text-gray-700">Solution:</span>
                                <p class="text-gray-600">Customized Garand-101 with extended battery</p>
                            </div>
                            <div>
                                <span class="font-semibold text-gray-700">Result:</span>
                                <p class="text-gray-600">Mapped anomalies to 500m depth</p>
                            </div>
                        </div>
                        <p class="text-gray-600 mb-4">
                            Deep-penetrating magnetic survey in challenging Canadian terrain required customized Garand-101 configuration with extended battery life. Successfully mapped complex magnetic anomalies to depths of 500 meters.
                        </p>
                        <div class="bg-green-50 border border-green-200 rounded-lg p-4">
                            <p class="text-green-800 font-medium">Success: Contributed to significant REE deposit discovery</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Archaeological Projects -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Archaeological & Cultural Heritage Projects</h2>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <!-- Ancient Settlement Mapping -->
            <div class="bg-gray-50 rounded-lg p-6">
                <div class="flex items-center mb-4">
                    <div class="flex items-center justify-center h-12 w-12 rounded-md bg-blue-600 text-white mr-4">
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900">Ancient Settlement Mapping</h3>
                </div>
                <p class="text-gray-600 mb-4">
                    <strong>Location:</strong> Mediterranean<br>
                    <strong>Client:</strong> National archaeological institute<br>
                    <strong>Application:</strong> High-resolution magnetic survey
                </p>
                <p class="text-gray-600 mb-4">
                    Sub-meter precision magnetic survey identified buried structures and occupation layers, enhancing understanding of ancient urban planning.
                </p>
                <div class="bg-blue-50 rounded-lg p-3">
                    <p class="text-blue-800 text-sm font-medium">Significance: Major archaeological discovery</p>
                </div>
            </div>

            <!-- Underwater Archaeology -->
            <div class="bg-gray-50 rounded-lg p-6">
                <div class="flex items-center mb-4">
                    <div class="flex items-center justify-center h-12 w-12 rounded-md bg-blue-600 text-white mr-4">
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900">Underwater Archaeology</h3>
                </div>
                <p class="text-gray-600 mb-4">
                    <strong>Location:</strong> Baltic Sea<br>
                    <strong>Client:</strong> Maritime heritage foundation<br>
                    <strong>Challenge:</strong> Marine environment survey
                </p>
                <p class="text-gray-600 mb-4">
                    Waterproof Garand-101 deployment with specialized sensors for magnetic survey in marine environment.
                </p>
                <div class="bg-blue-50 rounded-lg p-3">
                    <p class="text-blue-800 text-sm font-medium">Discovery: Historic shipwreck sites located</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Environmental Monitoring -->
<section class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Environmental Monitoring Applications</h2>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <div class="bg-white rounded-lg shadow-lg p-6">
                <h3 class="text-xl font-semibold text-gray-900 mb-4">Contamination Site Assessment</h3>
                <div class="mb-4">
                    <span class="inline-block px-3 py-1 text-sm font-semibold text-green-800 bg-green-100 rounded-full">Industrial Zone</span>
                </div>
                <p class="text-gray-600 mb-4">
                    Detection of buried metallic waste and contamination through detailed magnetic gradient mapping for environmental consulting firm.
                </p>
                <div class="border-t pt-4">
                    <h4 class="font-semibold text-gray-900 mb-2">Project Details:</h4>
                    <ul class="space-y-1 text-sm text-gray-600">
                        <li>• Comprehensive site characterization</li>
                        <li>• Remediation planning support</li>
                        <li>• Regulatory compliance documentation</li>
                    </ul>
                </div>
            </div>

            <div class="bg-white rounded-lg shadow-lg p-6">
                <h3 class="text-xl font-semibold text-gray-900 mb-4">Pipeline Integrity Monitoring</h3>
                <div class="mb-4">
                    <span class="inline-block px-3 py-1 text-sm font-semibold text-blue-800 bg-blue-100 rounded-full">Energy Infrastructure</span>
                </div>
                <p class="text-gray-600 mb-4">
                    Continuous monitoring of pipeline corrosion and stress using permanent Garand-101 installations along critical sections.
                </p>
                <div class="border-t pt-4">
                    <h4 class="font-semibold text-gray-900 mb-2">Benefits:</h4>
                    <ul class="space-y-1 text-sm text-gray-600">
                        <li>• Early detection of integrity issues</li>
                        <li>• Preventive maintenance scheduling</li>
                        <li>• Enhanced safety monitoring</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Research Collaborations -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Research & Academic Collaborations</h2>
        </div>

        <div class="space-y-8">
            <div class="bg-gradient-to-r from-blue-50 to-indigo-50 rounded-lg p-8">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8 items-center">
                    <div class="md:col-span-2">
                        <h3 class="text-2xl font-bold text-gray-900 mb-4">Volcanic Activity Study, Pacific Rim</h3>
                        <p class="text-gray-600 mb-4">
                            <strong>Client:</strong> University geology department<br>
                            <strong>Research:</strong> Monitoring magnetic changes associated with volcanic activity<br>
                            <strong>Duration:</strong> 3-year continuous monitoring program
                        </p>
                        <p class="text-gray-600">
                            Long-term deployment of Garand-101 systems for continuous monitoring of magnetic field variations associated with volcanic activity, contributing to improved eruption prediction models.
                        </p>
                    </div>
                    <div class="text-center">
                        <div class="bg-white rounded-lg p-6 shadow-sm">
                            <div class="text-3xl font-bold text-blue-600 mb-2">3 Years</div>
                            <p class="text-gray-600">Continuous Monitoring</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="bg-gradient-to-r from-green-50 to-emerald-50 rounded-lg p-8">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8 items-center">
                    <div class="md:col-span-2">
                        <h3 class="text-2xl font-bold text-gray-900 mb-4">Tectonic Research, East African Rift</h3>
                        <p class="text-gray-600 mb-4">
                            <strong>Client:</strong> International geophysical research consortium<br>
                            <strong>Scope:</strong> Large-scale magnetic survey for crustal structure analysis<br>
                            <strong>Integration:</strong> Combined with seismic data
                        </p>
                        <p class="text-gray-600">
                            High-resolution magnetic mapping integrated with seismic data for advanced understanding of rift system evolution and crustal structure.
                        </p>
                    </div>
                    <div class="text-center">
                        <div class="bg-white rounded-lg p-6 shadow-sm">
                            <div class="text-3xl font-bold text-green-600 mb-2">Multi-data</div>
                            <p class="text-gray-600">Integration Study</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Government Projects -->
<section class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Government & Infrastructure Projects</h2>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <div class="bg-white rounded-lg shadow-lg p-6">
                <div class="flex items-center mb-4">
                    <div class="flex items-center justify-center h-12 w-12 rounded-md bg-purple-600 text-white mr-4">
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l4.553 2.276A1 1 0 0021 18.382V7.618a1 1 0 00-.553-.894L15 4m0 13V4m0 0L9 7" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900">National Geological Survey</h3>
                </div>
                <p class="text-gray-600 mb-4">
                    <strong>Client:</strong> National geological survey organization<br>
                    <strong>Scale:</strong> Nationwide magnetic mapping<br>
                    <strong>Equipment:</strong> Fleet of 50+ Garand-101 systems
                </p>
                <p class="text-gray-600 mb-4">
                    Multi-year deployment program creating complete national magnetic anomaly database for geological research and resource management.
                </p>
                <div class="flex items-center text-purple-600 font-medium">
                    <svg class="h-5 w-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                    </svg>
                    National-scale achievement
                </div>
            </div>

            <div class="bg-white rounded-lg shadow-lg p-6">
                <div class="flex items-center mb-4">
                    <div class="flex items-center justify-center h-12 w-12 rounded-md bg-purple-600 text-white mr-4">
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900">Urban Infrastructure Planning</h3>
                </div>
                <p class="text-gray-600 mb-4">
                    <strong>Client:</strong> Municipal planning department<br>
                    <strong>Application:</strong> Subsurface utility mapping<br>
                    <strong>Challenge:</strong> Complex urban electromagnetic environment
                </p>
                <p class="text-gray-600 mb-4">
                    Advanced noise filtering and signal processing enabled reliable subsurface mapping for urban development planning.
                </p>
                <div class="flex items-center text-purple-600 font-medium">
                    <svg class="h-5 w-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                    </svg>
                    Urban innovation success
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Project Methodology -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Our Proven Methodology</h2>
            <p class="text-xl text-gray-600">Ensuring successful project outcomes every time</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-6 gap-6">
            <div class="text-center">
                <div class="flex items-center justify-center h-16 w-16 rounded-full bg-blue-600 text-white mx-auto mb-4">
                    <span class="text-xl font-bold">1</span>
                </div>
                <h3 class="font-semibold text-gray-900 mb-2">Requirements Analysis</h3>
                <p class="text-sm text-gray-600">Detailed consultation to understand project objectives</p>
            </div>

            <div class="text-center">
                <div class="flex items-center justify-center h-16 w-16 rounded-full bg-blue-600 text-white mx-auto mb-4">
                    <span class="text-xl font-bold">2</span>
                </div>
                <h3 class="font-semibold text-gray-900 mb-2">Survey Design</h3>
                <p class="text-sm text-gray-600">Customized data acquisition strategies</p>
            </div>

            <div class="text-center">
                <div class="flex items-center justify-center h-16 w-16 rounded-full bg-blue-600 text-white mx-auto mb-4">
                    <span class="text-xl font-bold">3</span>
                </div>
                <h3 class="font-semibold text-gray-900 mb-2">Equipment Configuration</h3>
                <p class="text-sm text-gray-600">Optimized sensor setup for specific applications</p>
            </div>

            <div class="text-center">
                <div class="flex items-center justify-center h-16 w-16 rounded-full bg-blue-600 text-white mx-auto mb-4">
                    <span class="text-xl font-bold">4</span>
                </div>
                <h3 class="font-semibold text-gray-900 mb-2">Field Deployment</h3>
                <p class="text-sm text-gray-600">Professional setup and ongoing support</p>
            </div>

            <div class="text-center">
                <div class="flex items-center justify-center h-16 w-16 rounded-full bg-blue-600 text-white mx-auto mb-4">
                    <span class="text-xl font-bold">5</span>
                </div>
                <h3 class="font-semibold text-gray-900 mb-2">Data Processing</h3>
                <p class="text-sm text-gray-600">Advanced analysis and interpretation</p>
            </div>

            <div class="text-center">
                <div class="flex items-center justify-center h-16 w-16 rounded-full bg-blue-600 text-white mx-auto mb-4">
                    <span class="text-xl font-bold">6</span>
                </div>
                <h3 class="font-semibold text-gray-900 mb-2">Reporting</h3>
                <p class="text-sm text-gray-600">Comprehensive documentation and recommendations</p>
            </div>
        </div>
    </div>
</section>

<!-- Client Testimonials -->
<section class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Client Testimonials</h2>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <div class="bg-white rounded-lg shadow-lg p-6">
                <div class="flex items-center mb-4">
                    <svg class="h-5 w-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                    </svg>
                    <svg class="h-5 w-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                    </svg>
                    <svg class="h-5 w-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                    </svg>
                    <svg class="h-5 w-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                    </svg>
                    <svg class="h-5 w-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                    </svg>
                </div>
                <blockquote class="text-gray-700 italic mb-4">
                    "The Garand-101 system exceeded our expectations in both sensitivity and reliability. It has become our standard equipment for mineral exploration surveys."
                </blockquote>
                <p class="text-gray-900 font-semibold">Senior Geophysicist</p>
                <p class="text-gray-600 text-sm">Major Mining Company</p>
            </div>

            <div class="bg-white rounded-lg shadow-lg p-6">
                <div class="flex items-center mb-4">
                    <svg class="h-5 w-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                    </svg>
                    <svg class="h-5 w-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                    </svg>
                    <svg class="h-5 w-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                    </svg>
                    <svg class="h-5 w-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                    </svg>
                    <svg class="h-5 w-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                    </svg>
                </div>
                <blockquote class="text-gray-700 italic mb-4">
                    "Dimgent Technologies' technical support and training programs were invaluable to our research team's success."
                </blockquote>
                <p class="text-gray-900 font-semibold">Research Director</p>
                <p class="text-gray-600 text-sm">University Geophysics Department</p>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-20 bg-gray-900 text-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-3xl md:text-4xl font-bold mb-4">Ready to Add Your Success Story?</h2>
        <p class="text-xl text-gray-300 mb-8 max-w-2xl mx-auto">
            Contact our project team to discuss your specific requirements and discover how we can contribute to your project success
        </p>
        <a href="/contacts" class="inline-flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-blue-600 bg-white hover:bg-blue-50 transition-colors">
            Start Your Project
        </a>
    </div>
</section>
@endsection
