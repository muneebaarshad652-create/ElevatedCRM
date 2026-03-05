<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>ElevatedCRM</title>

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased">
    <!-- Header -->
    <header class="fixed top-0 left-0 w-full bg-white backdrop-blur-md shadow-md z-50">
    <nav class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="flex h-16 justify-between items-center">
            <!-- Logo -->
            <div class="flex">
                <a href="{{ route('home') }}" class="text-2xl font-bold text-gray-800">
                    ElevatedCRM
                </a>
            </div>
            
            <!-- Navigation Links -->
            <div class="hidden sm:flex sm:space-x-8">
                <a href="{{ route('home') }}" class="text-gray-600 hover:text-gray-900 px-3 py-2 rounded-md transition">
                    Home
                </a>
                <a href="{{ route('about') }}" class="text-gray-600 hover:text-gray-900 px-3 py-2 rounded-md transition">
                    About
                </a>
                <a href="{{ route('services') }}" class="text-gray-600 hover:text-gray-900 px-3 py-2 rounded-md transition">
                    Services
                </a>
                <a href="{{ route('features') }}" class="text-gray-600 hover:text-gray-900 px-3 py-2 rounded-md transition">
                    Features
                </a>
                <a href="{{ route('contact') }}" class="text-gray-600 hover:text-gray-900 px-3 py-2 rounded-md transition">
                    Contact
                </a>
            </div>

            <!-- Auth Buttons -->
            <div class="hidden sm:flex sm:space-x-4">
                @guest
                    <a href="{{ route('register') }}" 
                       class="bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700 transition">
                        Sign Up
                    </a>
                    <a href="{{ route('login') }}" 
                       class="bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700 transition">
                        Login
                    </a>
                @else
                    <a href="{{ auth()->user()->role === 'admin' ? route('admin.dashboard') : route('customer.dashboard') }}" 
                       class="bg-blue-600 text-white px-3 py-2 rounded-md hover:bg-blue-700 transition">
                        Dashboardggg
                    </a>
                    <form method="POST" action="{{ route('logout') }}" class="inline">
                        @csrf
                        <button type="submit" 
                                class="bg-red-600 text-white px-3 py-2 rounded-md hover:bg-red-700 transition">
                            Logout
                        </button>
                    </form> 
                @endguest
            </div>
        </div>
    </nav>
</header>

<!-- Spacer to offset fixed header height -->
<div class="h-16"></div>


    <!-- Main Content -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white">
        <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div>
                    <h3 class="text-lg font-semibold mb-4">About Us</h3>
                    <p class="text-gray-300">Your trusted CRM solution for managing customer relationships effectively.</p>
                </div>
                <div>
                    <h3 class="text-lg font-semibold mb-4">Quick Links</h3>
                    <ul class="space-y-2">
                        <li><a href="{{ route('home') }}" class="text-gray-300 hover:text-white">Home</a></li>
                        <li><a href="{{ route('about') }}" class="text-gray-300 hover:text-white">About</a></li>
                        <li><a href="{{ route('services') }}" class="text-gray-300 hover:text-white">Services</a></li>
                        <li><a href="{{ route('contact') }}" class="text-gray-300 hover:text-white">Contact</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-lg font-semibold mb-4">Contact Info</h3>
                    <ul class="space-y-2 text-gray-300">
                        <li>Email: info@example.com</li>
                        <li>Phone: (123) 456-7890</li>
                        <li>Address: 123 CRM Street</li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-lg font-semibold mb-4">Follow Us</h3>
                    <div class="flex space-x-4">
                        <a href="#" class="text-gray-300 hover:text-white">
                            <span class="sr-only">Facebook</span>
                            <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24"><path d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z"/></svg>
                        </a>
                        <a href="#" class="text-gray-300 hover:text-white">
                            <span class="sr-only">Twitter</span>
                            <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24"><path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/></svg>
                        </a>
                        <a href="#" class="text-gray-300 hover:text-white">
                            <span class="sr-only">LinkedIn</span>
                            <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24"><path d="M4.98 3.5c0 1.381-1.11 2.5-2.48 2.5s-2.48-1.119-2.48-2.5c0-1.38 1.11-2.5 2.48-2.5s2.48 1.12 2.48 2.5zm.02 4.5h-5v16h5v-16zm7.982 0h-4.968v16h4.969v-8.399c0-4.67 6.029-5.052 6.029 0v8.399h4.988v-10.131c0-7.88-8.922-7.593-11.018-3.714v-2.155z"/></svg>
                        </a>
                    </div>
                </div>
            </div>
            <div class="mt-8 border-t border-gray-700 pt-8 text-center">
                <p class="text-gray-300">&copy; {{ date('Y') }} ElevatedCRM. All rights reserved.</p>
            </div>
        </div>
    </footer>
</body>
</html>