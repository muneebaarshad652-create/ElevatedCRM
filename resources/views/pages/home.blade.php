@extends('layouts.app')

@section('content')
    <div class="relative overflow-hidden bg-gray-50">
        <div class="relative pt-6 pb-16 sm:pb-24">
            <main class="mx-auto mt-16 max-w-7xl px-4 sm:mt-24">
                <div class="text-center">
                    <h1 class="text-4xl font-bold tracking-tight text-gray-900 sm:text-5xl md:text-6xl">
                        <span class="block">Welcome to</span>
                        <span class="block text-blue-600">Our CRM Solution</span>
                    </h1>
                    <p class="mx-auto mt-3 max-w-md text-base text-gray-500 sm:text-lg md:mt-5 md:max-w-3xl md:text-xl">
                        Streamline your customer relationships with our powerful CRM platform. Manage customer data, track interactions, and improve customer satisfaction.
                    </p>
                    <div class="mx-auto mt-5 max-w-md sm:flex sm:justify-center md:mt-8">
                        <div class="rounded-md shadow">
                            <a href="{{ route('register') }}" class="flex w-full items-center justify-center rounded-md border border-transparent bg-blue-600 px-8 py-3 text-base font-medium text-white hover:bg-blue-700 md:py-4 md:px-10 md:text-lg">
                                Get Started
                            </a>
                        </div>
                        <div class="mt-3 rounded-md shadow sm:mt-0 sm:ml-3">
                            <a href="{{ route('login') }}" class="flex w-full items-center justify-center rounded-md border border-transparent bg-white px-8 py-3 text-base font-medium text-blue-600 hover:bg-gray-50 md:py-4 md:px-10 md:text-lg">
                                Sign In
                            </a>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
    <h2 class="text-base text-center font-semibold leading-7 text-blue-600">Why Choose Us</h2>

    
   <!-- Features Section -->
    <div id="features" class="py-16 bg-gray-50 sm:py-24">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="max-w-3xl mx-auto text-center">
                <h2 class="text-3xl font-extrabold text-gray-900 sm:text-4xl">
                    Everything you need to manage your customers
                </h2>
                <p class="mt-4 text-lg text-gray-500">
                    Powerful features designed to help you build stronger customer relationships and grow your business.
                </p>
            </div>
            <div class="mt-16">
                <div class="grid grid-cols-1 gap-8 sm:grid-cols-2 lg:grid-cols-3">
                    <!-- Feature 1 -->
                    <div class="pt-6">
                        <div class="flow-root bg-white rounded-lg px-6 pb-8 shadow-sm">
                            <div class="-mt-6">
                                <div class="inline-flex items-center justify-center p-3 bg-blue-500 rounded-md shadow-lg">
                                    <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197m13.5-9a2.5 2.5 0 11-5 0 2.5 2.5 0 015 0z" />
                                    </svg>
                                </div>
                                <h3 class="mt-8 text-lg font-medium text-gray-900 tracking-tight">Customer Management</h3>
                                <p class="mt-5 text-base text-gray-500">
                                    Efficiently manage customer data, interactions, and history all in one place with our intuitive interface.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Feature 2 -->
                    <div class="pt-6">
                        <div class="flow-root bg-white rounded-lg px-6 pb-8 shadow-sm">
                            <div class="-mt-6">
                                <div class="inline-flex items-center justify-center p-3 bg-blue-500 rounded-md shadow-lg">
                                    <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z" />
                                    </svg>
                                </div>
                                <h3 class="mt-8 text-lg font-medium text-gray-900 tracking-tight">Support System</h3>
                                <p class="mt-5 text-base text-gray-500">
                                    Built-in support ticket system to handle customer inquiries efficiently and improve response times.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Feature 3 -->
                    <div class="pt-6">
                        <div class="flow-root bg-white rounded-lg px-6 pb-8 shadow-sm">
                            <div class="-mt-6">
                                <div class="inline-flex items-center justify-center p-3 bg-blue-500 rounded-md shadow-lg">
                                    <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                                    </svg>
                                </div>
                                <h3 class="mt-8 text-lg font-medium text-gray-900 tracking-tight">Analytics & Reporting</h3>
                                <p class="mt-5 text-base text-gray-500">
                                    Powerful analytics and reporting to track customer interactions and business growth with customizable dashboards.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Feature 4 -->
                    <div class="pt-6">
                        <div class="flow-root bg-white rounded-lg px-6 pb-8 shadow-sm">
                            <div class="-mt-6">
                                <div class="inline-flex items-center justify-center p-3 bg-blue-500 rounded-md shadow-lg">
                                    <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                                    </svg>
                                </div>
                                <h3 class="mt-8 text-lg font-medium text-gray-900 tracking-tight">Sales Automation</h3>
                                <p class="mt-5 text-base text-gray-500">
                                    Automate your sales processes with workflow automation, lead scoring, and pipeline management.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Feature 5 -->
                    <div class="pt-6">
                        <div class="flow-root bg-white rounded-lg px-6 pb-8 shadow-sm">
                            <div class="-mt-6">
                                <div class="inline-flex items-center justify-center p-3 bg-blue-500 rounded-md shadow-lg">
                                    <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 10-9.78 2.096A4.001 4.001 0 003 15z" />
                                    </svg>
                                </div>
                                <h3 class="mt-8 text-lg font-medium text-gray-900 tracking-tight">Cloud Integration</h3>
                                <p class="mt-5 text-base text-gray-500">
                                    Seamlessly integrate with your favorite tools and services through our robust API and pre-built connectors.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Feature 6 -->
                    <div class="pt-6">
                        <div class="flow-root bg-white rounded-lg px-6 pb-8 shadow-sm">
                            <div class="-mt-6">
                                <div class="inline-flex items-center justify-center p-3 bg-blue-500 rounded-md shadow-lg">
                                    <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                                    </svg>
                                </div>
                                <h3 class="mt-8 text-lg font-medium text-gray-900 tracking-tight">Security First</h3>
                                <p class="mt-5 text-base text-gray-500">
                                    Enterprise-grade security with encryption, role-based access control, and compliance with industry standards.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

     

    <!-- Testimonials Section -->
    <div class="bg-white py-16 sm:py-24">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="max-w-3xl mx-auto text-center">
                <h2 class="text-3xl font-extrabold text-gray-900">Trusted by Businesses Worldwide</h2>
                <p class="mt-4 text-lg text-gray-500">See what our customers are saying about ElevatedCRM</p>
            </div>
            <div class="mt-16 grid gap-8 lg:grid-cols-3">
                <!-- Testimonial 1 -->
                <div class="bg-gray-50 p-8 rounded-lg">
                    <div class="flex items-center">
                        <div class="flex-shrink-0">
                            <img class="h-12 w-12 rounded-full" src="https://images.unsplash.com/photo-1494790108755-2616b612b786?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="Sarah Johnson">
                        </div>
                        <div class="ml-4">
                            <h4 class="text-lg font-bold text-gray-900">Sarah Johnson</h4>
                            <p class="text-blue-600">CEO, TechSolutions Inc.</p>
                        </div>
                    </div>
                    <p class="mt-4 text-gray-600">
                        "ElevatedCRM transformed how we manage customer relationships. Our team's productivity increased by 40% within the first month!"
                    </p>
                </div>

                <!-- Testimonial 2 -->
                <div class="bg-gray-50 p-8 rounded-lg">
                    <div class="flex items-center">
                        <div class="flex-shrink-0">
                            <img class="h-12 w-12 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="Michael Chen">
                        </div>
                        <div class="ml-4">
                            <h4 class="text-lg font-bold text-gray-900">Michael Chen</h4>
                            <p class="text-blue-600">Sales Director, GlobalRetail</p>
                        </div>
                    </div>
                    <p class="mt-4 text-gray-600">
                        "The analytics and reporting features gave us insights we never had before. We've improved our conversion rates by 25%."
                    </p>
                </div>

                <!-- Testimonial 3 -->
                <div class="bg-gray-50 p-8 rounded-lg">
                    <div class="flex items-center">
                        <div class="flex-shrink-0">
                            <img class="h-12 w-12 rounded-full" src="https://images.unsplash.com/photo-1580489944761-15a19d654956?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="Emily Rodriguez">
                        </div>
                        <div class="ml-4">
                            <h4 class="text-lg font-bold text-gray-900">Emily Rodriguez</h4>
                            <p class="text-blue-600">Customer Success Manager, ServicePro</p>
                        </div>
                    </div>
                    <p class="mt-4 text-gray-600">
                        "The support system integration has cut our response times in half. Our customer satisfaction scores have never been higher."
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection