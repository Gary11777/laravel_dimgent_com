@extends('layouts.app')

@section('content')
<!-- Hero Section -->
<section class="bg-gradient-to-br from-blue-600 to-blue-800 text-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20">
        <div class="text-center">
            <h1 class="text-4xl md:text-5xl font-bold mb-6">About Dimgent Technologies</h1>
            <p class="text-xl text-blue-100 max-w-3xl mx-auto">
                A leader in advanced geophysical instrumentation with over 15 years of innovation in magnetic sensing technology
            </p>
        </div>
    </div>
</section>

<!-- Our Story -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Our Story</h2>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <div>
                <p class="text-lg text-gray-600 mb-6 leading-relaxed">
                    Founded in 2008, Dimgent Technologies emerged from a vision to revolutionize geophysical surveying through advanced magnetic sensing technology. Our team of physicists, engineers, and geoscience experts combines decades of experience in instrument design and field applications.
                </p>
                <p class="text-lg text-gray-600 mb-6 leading-relaxed">
                    From our humble beginnings as a research-focused startup, we've grown into a globally recognized leader in magnetic instrumentation, serving clients across five continents and continuously pushing the boundaries of what's possible in geophysical surveying.
                </p>
                <div class="grid grid-cols-2 gap-6">
                    <div class="text-center">
                        <div class="text-3xl font-bold text-blue-600 mb-2">2008</div>
                        <p class="text-gray-600">Founded</p>
                    </div>
                    <div class="text-center">
                        <div class="text-3xl font-bold text-blue-600 mb-2">15+</div>
                        <p class="text-gray-600">Years Experience</p>
                    </div>
                </div>
            </div>
            <div class="bg-blue-50 rounded-lg p-8">
                <div class="space-y-6">
                    <div class="flex items-start">
                        <div class="flex items-center justify-center h-10 w-10 rounded-md bg-blue-600 text-white mr-4 flex-shrink-0">
                            <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-lg font-semibold text-gray-900 mb-2">Innovation-Driven</h3>
                            <p class="text-gray-600">Pioneering advances in magnetic sensing technology</p>
                        </div>
                    </div>
                    <div class="flex items-start">
                        <div class="flex items-center justify-center h-10 w-10 rounded-md bg-blue-600 text-white mr-4 flex-shrink-0">
                            <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-lg font-semibold text-gray-900 mb-2">Global Impact</h3>
                            <p class="text-gray-600">Serving clients across five continents</p>
                        </div>
                    </div>
                    <div class="flex items-start">
                        <div class="flex items-center justify-center h-10 w-10 rounded-md bg-blue-600 text-white mr-4 flex-shrink-0">
                            <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-lg font-semibold text-gray-900 mb-2">Proven Excellence</h3>
                            <p class="text-gray-600">500+ successful projects worldwide</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Core Values -->
<section class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Core Values</h2>
            <p class="text-xl text-gray-600">The principles that guide everything we do</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <div class="text-center">
                <div class="flex items-center justify-center h-16 w-16 rounded-full bg-blue-600 text-white mx-auto mb-4">
                    <svg class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                    </svg>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 mb-3">Innovation</h3>
                <p class="text-gray-600">Continuously pushing the boundaries of magnetic measurement technology</p>
            </div>

            <div class="text-center">
                <div class="flex items-center justify-center h-16 w-16 rounded-full bg-blue-600 text-white mx-auto mb-4">
                    <svg class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 mb-3">Precision</h3>
                <p class="text-gray-600">Uncompromising commitment to accuracy and reliability in every instrument</p>
            </div>

            <div class="text-center">
                <div class="flex items-center justify-center h-16 w-16 rounded-full bg-blue-600 text-white mx-auto mb-4">
                    <svg class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                    </svg>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 mb-3">Customer Focus</h3>
                <p class="text-gray-600">Delivering solutions that meet real-world survey challenges</p>
            </div>

            <div class="text-center">
                <div class="flex items-center justify-center h-16 w-16 rounded-full bg-blue-600 text-white mx-auto mb-4">
                    <svg class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                    </svg>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 mb-3">Scientific Excellence</h3>
                <p class="text-gray-600">Grounded in rigorous research and development methodology</p>
            </div>
        </div>
    </div>
</section>

<!-- Leadership Team -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Leadership Team</h2>
            <p class="text-xl text-gray-600">Expertise driving technological advancement and customer success</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="text-center">
                <div class="w-32 h-32 bg-gray-300 rounded-full mx-auto mb-4"></div>
                <h3 class="text-xl font-semibold text-gray-900 mb-2">Dr. Michael Chen</h3>
                <p class="text-blue-600 font-medium mb-2">Chief Executive Officer</p>
                <p class="text-gray-600 text-sm">Ph.D. in Geophysics with 20+ years in magnetic instrumentation</p>
            </div>

            <div class="text-center">
                <div class="w-32 h-32 bg-gray-300 rounded-full mx-auto mb-4"></div>
                <h3 class="text-xl font-semibold text-gray-900 mb-2">Sarah Johnson</h3>
                <p class="text-blue-600 font-medium mb-2">Chief Technology Officer</p>
                <p class="text-gray-600 text-sm">Expert in sensor design and signal processing algorithms</p>
            </div>

            <div class="text-center">
                <div class="w-32 h-32 bg-gray-300 rounded-full mx-auto mb-4"></div>
                <h3 class="text-xl font-semibold text-gray-900 mb-2">Robert Martinez</h3>
                <p class="text-blue-600 font-medium mb-2">VP Business Development</p>
                <p class="text-gray-600 text-sm">Global market expansion and strategic partnerships</p>
            </div>
        </div>
    </div>
</section>

<!-- Research & Development -->
<section class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Research & Development</h2>
            <p class="text-xl text-gray-600">Active R&D programs focused on advancing magnetic sensing technology</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
            <div>
                <h3 class="text-2xl font-bold text-gray-900 mb-6">Our Research Focus</h3>
                <div class="space-y-4">
                    <div class="flex items-start">
                        <div class="flex items-center justify-center h-8 w-8 rounded-md bg-blue-600 text-white mr-4 flex-shrink-0">
                            <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <div>
                            <h4 class="font-semibold text-gray-900 mb-1">Advanced Sensor Materials</h4>
                            <p class="text-gray-600">Developing next-generation materials for enhanced sensitivity</p>
                        </div>
                    </div>

                    <div class="flex items-start">
                        <div class="flex items-center justify-center h-8 w-8 rounded-md bg-blue-600 text-white mr-4 flex-shrink-0">
                            <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <div>
                            <h4 class="font-semibold text-gray-900 mb-1">Noise Reduction Algorithms</h4>
                            <p class="text-gray-600">Advanced signal processing for improved data quality</p>
                        </div>
                    </div>

                    <div class="flex items-start">
                        <div class="flex items-center justify-center h-8 w-8 rounded-md bg-blue-600 text-white mr-4 flex-shrink-0">
                            <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <div>
                            <h4 class="font-semibold text-gray-900 mb-1">Portable Instrumentation</h4>
                            <p class="text-gray-600">Field-rugged designs for challenging environments</p>
                        </div>
                    </div>

                    <div class="flex items-start">
                        <div class="flex items-center justify-center h-8 w-8 rounded-md bg-blue-600 text-white mr-4 flex-shrink-0">
                            <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <div>
                            <h4 class="font-semibold text-gray-900 mb-1">Survey Workflow Integration</h4>
                            <p class="text-gray-600">Seamless integration with modern survey workflows</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="bg-blue-50 rounded-lg p-8">
                <h3 class="text-2xl font-bold text-gray-900 mb-4">Research Partnerships</h3>
                <p class="text-gray-600 mb-6">
                    We actively collaborate with leading academic institutions and research organizations worldwide to advance the field of magnetic sensing.
                </p>
                <div class="space-y-3">
                    <div class="flex items-center text-gray-700">
                        <svg class="h-5 w-5 text-blue-600 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                        </svg>
                        <span>University research programs</span>
                    </div>
                    <div class="flex items-center text-gray-700">
                        <svg class="h-5 w-5 text-blue-600 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                        </svg>
                        <span>Government research initiatives</span>
                    </div>
                    <div class="flex items-center text-gray-700">
                        <svg class="h-5 w-5 text-blue-600 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                        </svg>
                        <span>Industry consortia collaborations</span>
                    </div>
                </div>
                <div class="mt-6">
                    <a href="/services" class="inline-flex items-center justify-center px-6 py-3 border border-transparent text-base font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700 transition-colors">
                        Learn About Research Opportunities
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Quality Assurance -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Quality Assurance</h2>
            <p class="text-xl text-gray-600">Rigorous testing and calibration for uncompromising quality</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="text-center">
                <div class="flex items-center justify-center h-16 w-16 rounded-full bg-green-600 text-white mx-auto mb-4">
                    <svg class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 mb-3">Rigorous Testing</h3>
                <p class="text-gray-600">All instruments undergo comprehensive testing protocols to ensure they meet the highest standards of accuracy and reliability</p>
            </div>

            <div class="text-center">
                <div class="flex items-center justify-center h-16 w-16 rounded-full bg-green-600 text-white mx-auto mb-4">
                    <svg class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                    </svg>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 mb-3">Certified Calibration</h3>
                <p class="text-gray-600">Professional calibration services with traceable standards and certification documentation</p>
            </div>

            <div class="text-center">
                <div class="flex items-center justify-center h-16 w-16 rounded-full bg-green-600 text-white mx-auto mb-4">
                    <svg class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 mb-3">Field-Ready Reliability</h3>
                <p class="text-gray-600">Designed and tested for demanding field conditions with proven performance in challenging environments</p>
            </div>
        </div>
    </div>
</section>

<!-- Global Presence -->
<section class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Global Presence</h2>
            <p class="text-xl text-gray-600">Serving clients worldwide with local support and expertise</p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <div>
                <div class="space-y-6">
                    <div class="flex items-start">
                        <div class="flex items-center justify-center h-12 w-12 rounded-md bg-blue-600 text-white mr-4 flex-shrink-0">
                            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-lg font-semibold text-gray-900 mb-2">Headquarters</h3>
                            <p class="text-gray-600">North America with state-of-the-art R&D facilities and manufacturing center</p>
                        </div>
                    </div>

                    <div class="flex items-start">
                        <div class="flex items-center justify-center h-12 w-12 rounded-md bg-blue-600 text-white mr-4 flex-shrink-0">
                            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-lg font-semibold text-gray-900 mb-2">Regional Offices</h3>
                            <p class="text-gray-600">Strategic locations in Europe and Asia-Pacific for local support and service</p>
                        </div>
                    </div>

                    <div class="flex items-start">
                        <div class="flex items-center justify-center h-12 w-12 rounded-md bg-blue-600 text-white mr-4 flex-shrink-0">
                            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-lg font-semibold text-gray-900 mb-2">Distribution Network</h3>
                            <p class="text-gray-600">Qualified partners and distributors providing local expertise and support</p>
                        </div>
                    </div>

                    <div class="flex items-start">
                        <div class="flex items-center justify-center h-12 w-12 rounded-md bg-blue-600 text-white mr-4 flex-shrink-0">
                            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-lg font-semibold text-gray-900 mb-2">Client Base</h3>
                            <p class="text-gray-600">From academic research institutions to major mining corporations across five continents</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="bg-blue-50 rounded-lg p-8">
                <h3 class="text-2xl font-bold text-gray-900 mb-6">By the Numbers</h3>
                <div class="grid grid-cols-2 gap-6">
                    <div class="text-center">
                        <div class="text-3xl font-bold text-blue-600 mb-2">50+</div>
                        <p class="text-gray-700">Countries Served</p>
                    </div>
                    <div class="text-center">
                        <div class="text-3xl font-bold text-blue-600 mb-2">500+</div>
                        <p class="text-gray-700">Projects Completed</p>
                    </div>
                    <div class="text-center">
                        <div class="text-3xl font-bold text-blue-600 mb-2">24/7</div>
                        <p class="text-gray-700">Global Support</p>
                    </div>
                    <div class="text-center">
                        <div class="text-3xl font-bold text-blue-600 mb-2">98%</div>
                        <p class="text-gray-700">Client Satisfaction</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-20 bg-gray-900 text-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-3xl md:text-4xl font-bold mb-4">Join Our Journey</h2>
        <p class="text-xl text-gray-300 mb-8 max-w-2xl mx-auto">
            Discover how Dimgent Technologies can support your geophysical survey needs with our innovative magnetic sensing solutions
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="/contacts" class="inline-flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-blue-600 bg-white hover:bg-blue-50 transition-colors">
                Contact Us
            </a>
            <a href="/products" class="inline-flex items-center justify-center px-8 py-3 border border-white text-base font-medium rounded-md text-white hover:bg-white hover:text-blue-600 transition-colors">
                Explore Our Products
            </a>
        </div>
    </div>
</section>
@endsection
