@extends('layouts.app')

@section('title', 'About Us - Dimgent Technologies')

@section('content')
<!-- Hero Section -->
<section class="bg-gradient-to-br from-blue-600 to-blue-800 text-white py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center">
            <h1 class="text-4xl md:text-5xl font-bold mb-4">About Dimgent Technologies</h1>
            <p class="text-xl text-blue-100">Electronics Development Center in Minsk, Belarus</p>
        </div>
    </div>
</section>

<!-- Main Introduction -->
<section class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-4xl mx-auto">
            <div class="text-center mb-12">
                <p class="text-xl text-gray-700 leading-relaxed mb-6">
                    <strong>Dimgent Technologies</strong> is a group of specialists working in the sector of the development of electronic devices.
                </p>
                <p class="text-lg text-gray-600 mb-4">
                    Our company includes <strong>engineers</strong>, <strong>designers</strong>, and <strong>programmers</strong> dedicated to creating innovative electronic solutions.
                </p>
            </div>

            <div class="bg-blue-50 rounded-2xl p-8 md:p-12 mb-12">
                <h2 class="text-2xl font-bold text-gray-900 mb-4">Our Location</h2>
                <p class="text-lg text-gray-700">
                    Dimgent Technologies Development Center: <strong>Minsk, Belarus</strong>
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Experience & Approach -->
<section class="py-16 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid md:grid-cols-2 gap-12 mb-16">
            <div class="bg-white rounded-xl p-8 shadow-sm">
                <div class="text-blue-600 mb-4">
                    <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-4">20+ Years Experience</h3>
                <p class="text-gray-700">
                    Our specialists have been creating electronic devices for more than twenty years, bringing deep expertise to every project.
                </p>
            </div>

            <div class="bg-white rounded-xl p-8 shadow-sm">
                <div class="text-blue-600 mb-4">
                    <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"></path>
                    </svg>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-4">50+ Successful Projects</h3>
                <p class="text-gray-700">
                    We have developed and participated in the development of more than 50 projects over this time period.
                </p>
            </div>
        </div>

        <div class="max-w-4xl mx-auto">
            <h2 class="text-3xl font-bold text-gray-900 mb-6 text-center">Comprehensive Approach</h2>
            <p class="text-lg text-gray-700 leading-relaxed mb-8">
                Dimgent Technologies offers a comprehensive approach to the projects we work on. We can offer our clients both <strong>full-cycle electronic devices development</strong> (from concept to finished product) or carry out <strong>separate phases</strong> (developing the electric circuits of a device, software, drawings of printed circuit boards and so on).
            </p>
        </div>
    </div>
</section>

<!-- Our Aim -->
<section class="py-16 bg-gradient-to-br from-blue-600 to-blue-800 text-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-4xl mx-auto text-center">
            <h2 class="text-3xl md:text-4xl font-bold mb-8">Our Aim</h2>
            <div class="grid md:grid-cols-3 gap-6">
                <div class="bg-white/10 backdrop-blur rounded-xl p-6">
                    <div class="text-4xl mb-3">🎯</div>
                    <h3 class="font-semibold mb-2">Client Satisfaction</h3>
                    <p class="text-blue-100 text-sm">We want our clients to be fully satisfied with the results of our work</p>
                </div>

                <div class="bg-white/10 backdrop-blur rounded-xl p-6">
                    <div class="text-4xl mb-3">🤝</div>
                    <h3 class="font-semibold mb-2">Collaborative Process</h3>
                    <p class="text-blue-100 text-sm">We work with our clients until the product is exactly what they want it to be</p>
                </div>

                <div class="bg-white/10 backdrop-blur rounded-xl p-6">
                    <div class="text-4xl mb-3">💡</div>
                    <h3 class="font-semibold mb-2">Continuous Improvement</h3>
                    <p class="text-blue-100 text-sm">We offer ideas for changes and improvements to make the product even better</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Expertise Areas -->
<section class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Our Expertise</h2>
            <p class="text-lg text-gray-600 max-w-3xl mx-auto">
                We have experience in various areas of electronic devices development, software development and circuitry design
            </p>
        </div>

        <div class="grid md:grid-cols-2 gap-6">
            <div class="bg-gray-50 rounded-lg p-6">
                <h3 class="font-semibold text-gray-900 mb-3 flex items-center gap-2">
                    <span class="text-blue-600">•</span>
                    Embedded Systems
                </h3>
                <p class="text-gray-600 text-sm">Devices and embedded systems using microcontrollers and microprocessors</p>
            </div>

            <div class="bg-gray-50 rounded-lg p-6">
                <h3 class="font-semibold text-gray-900 mb-3 flex items-center gap-2">
                    <span class="text-blue-600">•</span>
                    Analog Electronics
                </h3>
                <p class="text-gray-600 text-sm">Analog electronic devices and signal processing</p>
            </div>

            <div class="bg-gray-50 rounded-lg p-6">
                <h3 class="font-semibold text-gray-900 mb-3 flex items-center gap-2">
                    <span class="text-blue-600">•</span>
                    Digital Electronics
                </h3>
                <p class="text-gray-600 text-sm">Logical systems, programmable logical matrices, embedded systems</p>
            </div>

            <div class="bg-gray-50 rounded-lg p-6">
                <h3 class="font-semibold text-gray-900 mb-3 flex items-center gap-2">
                    <span class="text-blue-600">•</span>
                    Telemechanics
                </h3>
                <p class="text-gray-600 text-sm">Telemetry and remote controls using infrared, radio channels, Wi-Fi, Bluetooth, GSM</p>
            </div>

            <div class="bg-gray-50 rounded-lg p-6">
                <h3 class="font-semibold text-gray-900 mb-3 flex items-center gap-2">
                    <span class="text-blue-600">•</span>
                    Signal Processing
                </h3>
                <p class="text-gray-600 text-sm">Systems to digitize analog and speech signals</p>
            </div>

            <div class="bg-gray-50 rounded-lg p-6">
                <h3 class="font-semibold text-gray-900 mb-3 flex items-center gap-2">
                    <span class="text-blue-600">•</span>
                    Firmware Development
                </h3>
                <p class="text-gray-600 text-sm">Software for various microcontrollers</p>
            </div>

            <div class="bg-gray-50 rounded-lg p-6">
                <h3 class="font-semibold text-gray-900 mb-3 flex items-center gap-2">
                    <span class="text-blue-600">•</span>
                    PCB Design
                </h3>
                <p class="text-gray-600 text-sm">Designs for printed circuit boards</p>
            </div>

            <div class="bg-gray-50 rounded-lg p-6">
                <h3 class="font-semibold text-gray-900 mb-3 flex items-center gap-2">
                    <span class="text-blue-600">•</span>
                    Power Electronics
                </h3>
                <p class="text-gray-600 text-sm">Signal monitors for three-phase power circuits</p>
            </div>

            <div class="bg-gray-50 rounded-lg p-6">
                <h3 class="font-semibold text-gray-900 mb-3 flex items-center gap-2">
                    <span class="text-blue-600">•</span>
                    Specialized Instruments
                </h3>
                <p class="text-gray-600 text-sm">Magnetic ferroprobe gauges (gradiometers) and electronic soil probes</p>
            </div>

            <div class="bg-gray-50 rounded-lg p-6">
                <h3 class="font-semibold text-gray-900 mb-3 flex items-center gap-2">
                    <span class="text-blue-600">•</span>
                    Robotics
                </h3>
                <p class="text-gray-600 text-sm">Robotic systems and automation</p>
            </div>

            <div class="bg-gray-50 rounded-lg p-6">
                <h3 class="font-semibold text-gray-900 mb-3 flex items-center gap-2">
                    <span class="text-blue-600">•</span>
                    Test Equipment
                </h3>
                <p class="text-gray-600 text-sm">Automated systems to measure microchips and hardware devices</p>
            </div>
        </div>
    </div>
</section>

<!-- Our Philosophy -->
<section class="py-16 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-4xl mx-auto">
            <h2 class="text-3xl font-bold text-gray-900 mb-8 text-center">Our Philosophy</h2>
            
            <div class="space-y-6 mb-12">
                <div class="bg-white rounded-lg p-6 shadow-sm">
                    <h3 class="font-semibold text-gray-900 mb-2">Projects of All Sizes</h3>
                    <p class="text-gray-700">
                        We are happy to work on both large and small projects, for big or small enterprises.
                    </p>
                </div>

                <div class="bg-white rounded-lg p-6 shadow-sm">
                    <h3 class="font-semibold text-gray-900 mb-2">Cost-Effective Solutions</h3>
                    <p class="text-gray-700">
                        We strive to ensure the lowest cost of the products we develop by careful selection of components (maintaining the balance between cost and quality).
                    </p>
                </div>

                <div class="bg-white rounded-lg p-6 shadow-sm">
                    <h3 class="font-semibold text-gray-900 mb-2">Main Advantages</h3>
                    <p class="text-gray-700">
                        The main reasons to choose us are <strong>cost-effectiveness</strong>, <strong>quick turn-around times</strong>, and <strong>high quality</strong>!
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- What We Offer -->
<section class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid md:grid-cols-2 gap-12">
            <div>
                <h2 class="text-3xl font-bold text-gray-900 mb-6">We Can Provide</h2>
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

            <div>
                <h2 class="text-3xl font-bold text-gray-900 mb-6">Dimgent Technologies Is</h2>
                <div class="space-y-4">
                    <div class="flex items-start gap-3">
                        <span class="text-blue-600 font-bold flex-shrink-0">✓</span>
                        <p class="text-gray-700">More than 20 years of experience</p>
                    </div>
                    <div class="flex items-start gap-3">
                        <span class="text-blue-600 font-bold flex-shrink-0">✓</span>
                        <p class="text-gray-700">More than 50 successfully completed projects</p>
                    </div>
                    <div class="flex items-start gap-3">
                        <span class="text-blue-600 font-bold flex-shrink-0">✓</span>
                        <p class="text-gray-700">Experienced specialists</p>
                    </div>
                    <div class="flex items-start gap-3">
                        <span class="text-blue-600 font-bold flex-shrink-0">✓</span>
                        <p class="text-gray-700">Guaranteed quality</p>
                    </div>
                    <div class="flex items-start gap-3">
                        <span class="text-blue-600 font-bold flex-shrink-0">✓</span>
                        <p class="text-gray-700">Short turn-around times</p>
                    </div>
                    <div class="flex items-start gap-3">
                        <span class="text-blue-600 font-bold flex-shrink-0">✓</span>
                        <p class="text-gray-700">Cost effective</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA -->
<section class="py-16 bg-gradient-to-br from-gray-900 to-blue-900 text-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-3xl md:text-4xl font-bold mb-4">Ready to Work Together?</h2>
        <p class="text-xl text-gray-300 mb-8 max-w-2xl mx-auto">
            Let's discuss how our experience and expertise can benefit your next project
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="{{ route('contacts') }}" class="inline-flex items-center justify-center bg-blue-600 text-white px-8 py-3 rounded-lg font-semibold hover:bg-blue-700 transition">
                Contact Us
            </a>
            <a href="{{ route('services') }}" class="inline-flex items-center justify-center bg-white text-gray-900 px-8 py-3 rounded-lg font-semibold hover:bg-gray-100 transition">
                Our Services
            </a>
        </div>
    </div>
</section>
@endsection
