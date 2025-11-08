@extends('layouts.app')

@section('title', 'Projects - Dimgent Technologies')

@section('content')
<!-- Hero Section -->
<section class="bg-gradient-to-br from-blue-600 to-blue-800 text-white py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center">
            <h1 class="text-4xl md:text-5xl font-bold mb-4">Our Projects</h1>
            <p class="text-xl text-blue-100">Successful electronic device development across various industries</p>
        </div>
    </div>
</section>

<!-- Projects Overview -->
<section class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Systems -->
        <div class="mb-16">
            <h2 class="text-3xl font-bold text-gray-900 mb-8">Control Systems</h2>
            <div class="grid md:grid-cols-2 gap-8">
                <div class="bg-gradient-to-br from-blue-50 to-blue-100 rounded-xl p-8 hover:shadow-lg transition">
                    <div class="text-blue-600 mb-4">
                        <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7h12m0 0l-4-4m4 4l-4 4m0 6H4m0 0l4 4m-4-4l4-4"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-3">Remote Control Systems</h3>
                    <p class="text-gray-700">
                        Control rooms utilizing public telephone networks, GSM connections, and radio channels with frequencies up to 900 MHz
                    </p>
                    <div class="mt-4 text-sm text-gray-600">
                        <p class="font-semibold mb-2">Applications:</p>
                        <ul class="space-y-1">
                            <li>• Elevator systems</li>
                            <li>• Communal services (hydraulic lifting, engineering communications)</li>
                            <li>• Water intake systems</li>
                        </ul>
                    </div>
                </div>

                <div class="bg-gradient-to-br from-blue-50 to-blue-100 rounded-xl p-8 hover:shadow-lg transition">
                    <div class="text-blue-600 mb-4">
                        <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-3">Automated Testing Systems</h3>
                    <p class="text-gray-700">
                        Automated microelectronic circuits testers and electronic board testing systems for quality control and diagnostics
                    </p>
                </div>
            </div>
        </div>

        <!-- Tools -->
        <div class="mb-16">
            <h2 class="text-3xl font-bold text-gray-900 mb-8">Specialized Tools</h2>
            <div class="grid md:grid-cols-3 gap-6">
                <div class="bg-white border border-gray-200 rounded-lg p-6 hover:shadow-lg transition">
                    <div class="text-blue-600 mb-3">
                        <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"></path>
                        </svg>
                    </div>
                    <h3 class="font-semibold text-gray-900 mb-2">Testing Equipment</h3>
                    <p class="text-gray-600 text-sm">Testers for microelectronic circuits and electronic boards</p>
                </div>

                <div class="bg-white border border-gray-200 rounded-lg p-6 hover:shadow-lg transition">
                    <div class="text-blue-600 mb-3">
                        <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 21v-4m0 0V5a2 2 0 012-2h6.5l1 1H21l-3 6 3 6h-8.5l-1-1H5a2 2 0 00-2 2zm9-13.5V9"></path>
                        </svg>
                    </div>
                    <h3 class="font-semibold text-gray-900 mb-2">Archaeological Tools</h3>
                    <p class="text-gray-600 text-sm">Gradiometers and electronic probes for field work</p>
                </div>

                <div class="bg-white border border-gray-200 rounded-lg p-6 hover:shadow-lg transition">
                    <div class="text-blue-600 mb-3">
                        <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                        </svg>
                    </div>
                    <h3 class="font-semibold text-gray-900 mb-2">Remote Gauges</h3>
                    <p class="text-gray-600 text-sm">Remote-reading gauges to collect sensor information</p>
                </div>
            </div>
        </div>

        <!-- Consumer Technology -->
        <div class="mb-16">
            <h2 class="text-3xl font-bold text-gray-900 mb-8">Everyday Technology</h2>
            <div class="grid md:grid-cols-2 gap-6">
                <div class="bg-white border border-gray-200 rounded-lg p-6 hover:shadow-lg transition">
                    <div class="flex items-start gap-4">
                        <div class="text-blue-600 flex-shrink-0">
                            <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.536 8.464a5 5 0 010 7.072m2.828-9.9a9 9 0 010 12.728M5.586 15.536a5 5 0 001.414 1.414m0 0a9 9 0 0012.728 0"></path>
                            </svg>
                        </div>
                        <div>
                            <h3 class="font-semibold text-gray-900 mb-2">Wireless Headphones</h3>
                            <p class="text-gray-600 text-sm">Assistive listening devices for the hard of hearing and older persons</p>
                        </div>
                    </div>
                </div>

                <div class="bg-white border border-gray-200 rounded-lg p-6 hover:shadow-lg transition">
                    <div class="flex items-start gap-4">
                        <div class="text-blue-600 flex-shrink-0">
                            <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path>
                            </svg>
                        </div>
                        <div>
                            <h3 class="font-semibold text-gray-900 mb-2">Dimmers & Remote Controls</h3>
                            <p class="text-gray-600 text-sm">Lighting control systems with remote operation</p>
                        </div>
                    </div>
                </div>

                <div class="bg-white border border-gray-200 rounded-lg p-6 hover:shadow-lg transition md:col-span-2">
                    <div class="flex items-start gap-4">
                        <div class="text-blue-600 flex-shrink-0">
                            <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.111 16.404a5.5 5.5 0 017.778 0M12 20h.01m-7.08-7.071c3.904-3.905 10.236-3.905 14.141 0M1.394 9.393c5.857-5.857 15.355-5.857 21.213 0"></path>
                            </svg>
                        </div>
                        <div>
                            <h3 class="font-semibold text-gray-900 mb-2">Radio Extenders</h3>
                            <p class="text-gray-600 text-sm">Range extenders for electronic sensors, remote controls for garage gates, blinds, and other automated systems</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Medical Devices -->
        <div class="mb-16">
            <h2 class="text-3xl font-bold text-gray-900 mb-8">Medical Devices</h2>
            <div class="bg-gradient-to-br from-green-50 to-blue-50 rounded-xl p-8">
                <div class="flex items-start gap-4">
                    <div class="text-green-600 flex-shrink-0">
                        <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-xl font-semibold text-gray-900 mb-3">Pressure and Pulse Meters</h3>
                        <p class="text-gray-700">
                            Digital blood pressure monitors and pulse measurement devices for home and clinical use, featuring accurate readings and user-friendly interfaces
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Company Stats -->
<section class="py-16 bg-gradient-to-br from-blue-600 to-blue-800 text-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-bold mb-4">Dimgent Technologies</h2>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
            <div class="text-center">
                <div class="text-4xl font-bold mb-2">20+</div>
                <div class="text-blue-100">Years of Experience</div>
            </div>
            <div class="text-center">
                <div class="text-4xl font-bold mb-2">50+</div>
                <div class="text-blue-100">Successfully Completed Projects</div>
            </div>
            <div class="text-center">
                <div class="text-4xl font-bold mb-2">100%</div>
                <div class="text-blue-100">Guaranteed Quality</div>
            </div>
            <div class="text-center">
                <div class="text-4xl font-bold mb-2">Fast</div>
                <div class="text-blue-100">Short Turn-around Times</div>
            </div>
        </div>
    </div>
</section>

<!-- What We Provide -->
<section class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-4xl mx-auto">
            <h2 class="text-3xl font-bold text-gray-900 mb-8 text-center">What We Can Provide</h2>
            
            <div class="space-y-4">
                <div class="flex items-start gap-3">
                    <svg class="w-6 h-6 text-blue-600 flex-shrink-0 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                    </svg>
                    <p class="text-gray-700">The full cycle of electronic devices development (from concept to finished product)</p>
                </div>
                <div class="flex items-start gap-3">
                    <svg class="w-6 h-6 text-blue-600 flex-shrink-0 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                    </svg>
                    <p class="text-gray-700">Provision of individual phases of development</p>
                </div>
                <div class="flex items-start gap-3">
                    <svg class="w-6 h-6 text-blue-600 flex-shrink-0 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                    </svg>
                    <p class="text-gray-700">Completion of uncompleted projects which have already been started</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA -->
<section class="py-16 bg-gray-900 text-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-3xl md:text-4xl font-bold mb-4">Have a Project in Mind?</h2>
        <p class="text-xl text-gray-300 mb-8 max-w-2xl mx-auto">
            Let's discuss how we can help you develop your next electronic device
        </p>
        <a href="{{ route('contacts') }}" class="inline-flex items-center bg-blue-600 text-white px-8 py-3 rounded-lg font-semibold hover:bg-blue-700 transition">
            Get Started
        </a>
    </div>
</section>
@endsection
