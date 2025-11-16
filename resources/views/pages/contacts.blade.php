@extends('layouts.app')

@section('content')
<!-- Hero Section -->
<section class="bg-gradient-to-br from-blue-600 to-blue-800 text-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20">
        <div class="text-center">
            <h1 class="text-4xl md:text-5xl font-bold mb-6">Contact Dimgent Technologies</h1>
            <p class="text-xl text-blue-100 max-w-3xl mx-auto">
                We're here to help with your geophysical survey needs. Reach out to our team for product information, technical support, or project consultations.
            </p>
        </div>
    </div>
</section>

<!-- Contact Information -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Get in Touch</h2>
            <p class="text-xl text-gray-600">Multiple ways to reach our expert team</p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            <!-- Headquarters -->
            <div class="lg:col-span-2">
                <div class="bg-gray-50 rounded-lg p-8">
                    <h3 class="text-2xl font-bold text-gray-900 mb-6">Headquarters</h3>
                    <div class="space-y-6">
                        <div>
                            <h4 class="font-semibold text-gray-900 mb-3">Dimgent Technologies</h4>
                            <p class="text-gray-600">1234 Innovation Drive<br>Tech Valley, CA 94025<br>United States</p>
                        </div>

                        <!-- Sales & General Inquiries -->
                        <div>
                            <h4 class="font-semibold text-gray-900 mb-3">Sales & General Inquiries</h4>
                            <div class="space-y-2 text-gray-600">
                                <div class="flex items-center">
                                    <svg class="h-5 w-5 text-blue-600 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                                    </svg>
                                    <span>+1 (650) 555-0123</span>
                                </div>
                                <div class="flex items-center">
                                    <svg class="h-5 w-5 text-blue-600 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                    </svg>
                                    <a href="mailto:sales@dimgent.com" class="hover:text-blue-600">sales@dimgent.com</a>
                                </div>
                                <div class="flex items-center">
                                    <svg class="h-5 w-5 text-blue-600 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                    <span>Monday - Friday, 8:00 AM - 6:00 PM PST</span>
                                </div>
                            </div>
                        </div>

                        <!-- Technical Support -->
                        <div>
                            <h4 class="font-semibold text-gray-900 mb-3">Technical Support</h4>
                            <div class="space-y-2 text-gray-600">
                                <div class="flex items-center">
                                    <svg class="h-5 w-5 text-blue-600 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                                    </svg>
                                    <span>+1 (650) 555-0124</span>
                                </div>
                                <div class="flex items-center">
                                    <svg class="h-5 w-5 text-blue-600 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                    </svg>
                                    <a href="mailto:support@dimgent.com" class="hover:text-blue-600">support@dimgent.com</a>
                                </div>
                                <div class="flex items-center">
                                    <svg class="h-5 w-5 text-green-600 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                    <span>24/7 emergency support available</span>
                                </div>
                            </div>
                        </div>

                        <!-- Research Collaboration -->
                        <div>
                            <h4 class="font-semibold text-gray-900 mb-3">Research Collaboration</h4>
                            <div class="space-y-2 text-gray-600">
                                <div class="flex items-center">
                                    <svg class="h-5 w-5 text-blue-600 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                    </svg>
                                    <a href="mailto:research@dimgent.com" class="hover:text-blue-600">research@dimgent.com</a>
                                </div>
                                <div class="flex items-center">
                                    <svg class="h-5 w-5 text-blue-600 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                    </svg>
                                    <span>Contact: Dr. Sarah Chen, Research Director</span>
                                </div>
                            </div>
                        </div>

                        <!-- Calibration Services -->
                        <div>
                            <h4 class="font-semibold text-gray-900 mb-3">Calibration Services</h4>
                            <div class="space-y-2 text-gray-600">
                                <div class="flex items-center">
                                    <svg class="h-5 w-5 text-blue-600 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                    </svg>
                                    <a href="mailto:calibration@dimgent.com" class="hover:text-blue-600">calibration@dimgent.com</a>
                                </div>
                                <div class="flex items-center">
                                    <svg class="h-5 w-5 text-blue-600 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                    <span>Standard 5 business days, Express 2 business days</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Quick Contact Form -->
            <div>
                <div class="bg-blue-50 rounded-lg p-8">
                    <h3 class="text-2xl font-bold text-gray-900 mb-6">Quick Contact</h3>
                    <form class="space-y-4">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Name</label>
                            <input type="text" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Email</label>
                            <input type="email" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Subject</label>
                            <select class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                                <option>Product Information</option>
                                <option>Technical Support</option>
                                <option>Service Inquiry</option>
                                <option>Research Collaboration</option>
                                <option>Other</option>
                            </select>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Message</label>
                            <textarea rows="4" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"></textarea>
                        </div>
                        <button type="submit" class="w-full bg-blue-600 text-white py-2 px-4 rounded-md hover:bg-blue-700 transition-colors font-medium">
                            Send Message
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Regional Offices -->
<section class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Regional Offices</h2>
            <p class="text-xl text-gray-600">Local support and expertise in your region</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <!-- European Office -->
            <div class="bg-white rounded-lg shadow-lg p-6">
                <div class="flex items-center mb-4">
                    <div class="flex items-center justify-center h-12 w-12 rounded-md bg-blue-600 text-white mr-4">
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900">European Office</h3>
                </div>
                <div class="space-y-3 text-gray-600">
                    <p><strong>Dimgent Technologies Europe</strong></p>
                    <p>Kaiserstraße 45<br>10115 Berlin, Germany</p>
                    <div class="flex items-center">
                        <svg class="h-5 w-5 text-blue-600 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                        </svg>
                        <span>+49 30 12345678</span>
                    </div>
                    <div class="flex items-center">
                        <svg class="h-5 w-5 text-blue-600 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                        </svg>
                        <a href="mailto:europe@dimgent.com" class="hover:text-blue-600">europe@dimgent.com</a>
                    </div>
                </div>
            </div>

            <!-- Asia-Pacific Office -->
            <div class="bg-white rounded-lg shadow-lg p-6">
                <div class="flex items-center mb-4">
                    <div class="flex items-center justify-center h-12 w-12 rounded-md bg-blue-600 text-white mr-4">
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900">Asia-Pacific Office</h3>
                </div>
                <div class="space-y-3 text-gray-600">
                    <p><strong>Dimgent Technologies APAC</strong></p>
                    <p>Level 15, 123 Orchard Road<br>Singapore 238874</p>
                    <div class="flex items-center">
                        <svg class="h-5 w-5 text-blue-600 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                        </svg>
                        <span>+65 6234 5678</span>
                    </div>
                    <div class="flex items-center">
                        <svg class="h-5 w-5 text-blue-600 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                        </svg>
                        <a href="mailto:apac@dimgent.com" class="hover:text-blue-600">apac@dimgent.com</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Response Times -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Response Times</h2>
            <p class="text-xl text-gray-600">We're committed to timely responses</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            <div class="text-center bg-blue-50 rounded-lg p-6">
                <div class="text-3xl font-bold text-blue-600 mb-2">24h</div>
                <p class="text-gray-700 font-medium">Sales Inquiries</p>
            </div>
            <div class="text-center bg-green-50 rounded-lg p-6">
                <div class="text-3xl font-bold text-green-600 mb-2">4h</div>
                <p class="text-gray-700 font-medium">Technical Support</p>
                <p class="text-sm text-gray-600">(1h urgent)</p>
            </div>
            <div class="text-center bg-yellow-50 rounded-lg p-6">
                <div class="text-3xl font-bold text-yellow-600 mb-2">48h</div>
                <p class="text-gray-700 font-medium">General Questions</p>
            </div>
            <div class="text-center bg-purple-50 rounded-lg p-6">
                <div class="text-3xl font-bold text-purple-600 mb-2">72h</div>
                <p class="text-gray-700 font-medium">Research Collaboration</p>
            </div>
        </div>
    </div>
</section>

<!-- Emergency Support -->
<section class="py-20 bg-red-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center">
            <div class="inline-flex items-center justify-center h-16 w-16 rounded-full bg-red-600 text-white mb-4">
                <svg class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                </svg>
            </div>
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Emergency Support</h2>
            <p class="text-xl text-gray-600 mb-8 max-w-2xl mx-auto">
                For urgent technical issues affecting active surveys, we're available 24/7
            </p>
            <div class="bg-white rounded-lg shadow-lg p-8 max-w-md mx-auto">
                <div class="space-y-4">
                    <div class="flex items-center justify-center">
                        <svg class="h-6 w-6 text-red-600 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                        </svg>
                        <span class="text-2xl font-bold text-red-600">+1 (650) 555-0199</span>
                    </div>
                    <div class="flex items-center justify-center">
                        <svg class="h-6 w-6 text-red-600 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                        </svg>
                        <a href="mailto:emergency@dimgent.com" class="text-lg text-red-600 hover:text-red-700">emergency@dimgent.com</a>
                    </div>
                    <p class="text-sm text-gray-600">Response within 1 hour, 24/7 availability</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Social Media -->
<section class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Connect With Us</h2>
            <p class="text-xl text-gray-600">Follow our latest updates and insights</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="text-center bg-white rounded-lg shadow-lg p-6">
                <div class="flex items-center justify-center h-12 w-12 rounded-full bg-blue-600 text-white mx-auto mb-4">
                    <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/>
                    </svg>
                </div>
                <h3 class="text-lg font-semibold text-gray-900 mb-2">LinkedIn</h3>
                <p class="text-gray-600 mb-4">Professional updates and company news</p>
                <a href="https://linkedin.com/company/dimgent-technologies" class="text-blue-600 hover:text-blue-700 font-medium">Follow Us</a>
            </div>

            <div class="text-center bg-white rounded-lg shadow-lg p-6">
                <div class="flex items-center justify-center h-12 w-12 rounded-full bg-blue-400 text-white mx-auto mb-4">
                    <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/>
                    </svg>
                </div>
                <h3 class="text-lg font-semibold text-gray-900 mb-2">Twitter</h3>
                <p class="text-gray-600 mb-4">Real-time updates and industry insights</p>
                <a href="https://twitter.com/dimgenttech" class="text-blue-400 hover:text-blue-500 font-medium">Follow Us</a>
            </div>

            <div class="text-center bg-white rounded-lg shadow-lg p-6">
                <div class="flex items-center justify-center h-12 w-12 rounded-full bg-green-600 text-white mx-auto mb-4">
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                    </svg>
                </div>
                <h3 class="text-lg font-semibold text-gray-900 mb-2">ResearchGate</h3>
                <p class="text-gray-600 mb-4">Academic publications and research</p>
                <a href="https://researchgate.net/institution/dimgent-technologies" class="text-green-600 hover:text-green-700 font-medium">Follow Us</a>
            </div>
        </div>
    </div>
</section>

<!-- Newsletter -->
<section class="py-20 bg-blue-600 text-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center">
            <h2 class="text-3xl md:text-4xl font-bold mb-4">Stay Updated</h2>
            <p class="text-xl text-blue-100 mb-8 max-w-2xl mx-auto">
                Subscribe to our monthly newsletter for product updates, technical articles, and research collaboration opportunities
            </p>
            <form class="max-w-md mx-auto flex gap-4">
                <input type="email" placeholder="Enter your email" class="flex-1 px-4 py-3 rounded-md text-gray-900 focus:outline-none focus:ring-2 focus:ring-white">
                <button type="submit" class="px-6 py-3 bg-white text-blue-600 rounded-md hover:bg-blue-50 transition-colors font-medium">
                    Subscribe
                </button>
            </form>
        </div>
    </div>
</section>

<!-- Visit Us -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Visit Us</h2>
            <p class="text-xl text-gray-600">Schedule a facility tour or product demonstration</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="text-center">
                <div class="flex items-center justify-center h-16 w-16 rounded-full bg-blue-600 text-white mx-auto mb-4">
                    <svg class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 15l-2 5L9 9l11 4-5 2z" />
                    </svg>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 mb-3">Product Demonstrations</h3>
                <p class="text-gray-600">Hands-on time with Garand-101 and our other products</p>
            </div>

            <div class="text-center">
                <div class="flex items-center justify-center h-16 w-16 rounded-full bg-blue-600 text-white mx-auto mb-4">
                    <svg class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                    </svg>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 mb-3">Technical Training</h3>
                <p class="text-gray-600">On-site training sessions for your team</p>
            </div>

            <div class="text-center">
                <div class="flex items-center justify-center h-16 w-16 rounded-full bg-blue-600 text-white mx-auto mb-4">
                    <svg class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z" />
                    </svg>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 mb-3">Research Collaboration</h3>
                <p class="text-gray-600">Meet with our R&D team to discuss partnerships</p>
            </div>
        </div>

        <div class="text-center mt-12">
            <a href="/contacts" class="inline-flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700 transition-colors">
                Schedule Your Visit
            </a>
        </div>
    </div>
</section>
@endsection
