<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job Board - Find Your Dream Job</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-50">
    <nav class="bg-white shadow">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="flex h-16 items-center justify-between">
                <!-- Logo -->
                <div class="flex items-center">
                    <img src="https://i.pinimg.com/1200x/66/dd/d0/66ddd0a43433943549bd2beb9cec5273.jpg" alt="Logo"
                        class="size-8" />
                    <span class="ml-3 text-xl font-bold text-gray-900">JobBoard</span>
                </div>

                <!-- Navigation Links -->
                <div class="hidden md:flex items-center gap-8">
                    <a href="/" class="text-gray-600 hover:text-gray-900">Home</a>
                    <a href="/jobs" class="text-gray-600 hover:text-gray-900">Browse Jobs</a>
                    <a href="/contact" class="text-gray-600 hover:text-gray-900">Contact</a>
                </div>

                <!-- Auth Buttons -->
                <div class="flex items-center gap-4">
                    <a href="{{ route('login') }}" class="text-gray-600 hover:text-gray-900 px-3 py-2 text-sm font-medium">
                        Login
                    </a>
                    <a href="{{ route('register') }}" class="bg-indigo-600 hover:bg-indigo-700 text-white px-4 py-2 rounded-lg text-sm font-medium transition-colors">
                        Sign Up
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="relative bg-gradient-to-br from-indigo-600 to-indigo-800 text-white py-20 md:py-32">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 text-center">
            <h1 class="text-4xl md:text-6xl font-bold mb-6">Find Your Dream Job</h1>
            <p class="text-xl md:text-2xl text-indigo-100 mb-8 max-w-2xl mx-auto">
                Discover opportunities from top companies and take the next step in your career.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="/jobs" class="bg-white text-indigo-600 hover:bg-gray-100 px-8 py-3 rounded-lg font-semibold transition-colors">
                    Browse Jobs
                </a>
                <a href="{{ route('register') }}" class="bg-indigo-500 hover:bg-indigo-400 text-white px-8 py-3 rounded-lg font-semibold transition-colors border border-indigo-400">
                    Get Started
                </a>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="py-20 bg-white">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl font-bold text-center text-gray-900 mb-12">Why Choose Us?</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Feature 1 -->
                <div class="text-center">
                    <div class="flex justify-center mb-4">
                        <div class="bg-indigo-100 p-4 rounded-lg">
                            <svg class="w-8 h-8 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                            </svg>
                        </div>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-900 mb-2">Thousands of Jobs</h3>
                    <p class="text-gray-600">Browse through a vast collection of job listings from top companies.</p>
                </div>

                <!-- Feature 2 -->
                <div class="text-center">
                    <div class="flex justify-center mb-4">
                        <div class="bg-indigo-100 p-4 rounded-lg">
                            <svg class="w-8 h-8 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-900 mb-2">Quick Apply</h3>
                    <p class="text-gray-600">Apply to jobs with just a few clicks. Get hired faster.</p>
                </div>

                <!-- Feature 3 -->
                <div class="text-center">
                    <div class="flex justify-center mb-4">
                        <div class="bg-indigo-100 p-4 rounded-lg">
                            <svg class="w-8 h-8 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192l-3.536 3.536M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5-4a2 2 0 11-4 0 2 2 0 014 0z"></path>
                            </svg>
                        </div>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-900 mb-2">Tailored Matches</h3>
                    <p class="text-gray-600">Get job recommendations based on your skills and preferences.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="bg-indigo-600 text-white py-16">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl font-bold mb-6">Ready to Start Your Career Journey?</h2>
            <p class="text-xl text-indigo-100 mb-8">Sign up today and get access to exclusive job listings.</p>
            <a href="{{ route('register') }}" class="bg-white text-indigo-600 hover:bg-gray-100 px-8 py-3 rounded-lg font-semibold transition-colors inline-block">
                Create Account Now
            </a>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-800 text-gray-300 py-12">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8 mb-8">
                <div>
                    <h4 class="font-semibold text-white mb-4">About</h4>
                    <ul class="space-y-2">
                        <li><a href="#" class="hover:text-white">About Us</a></li>
                        <li><a href="#" class="hover:text-white">Blog</a></li>
                        <li><a href="#" class="hover:text-white">Press</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-semibold text-white mb-4">For Job Seekers</h4>
                    <ul class="space-y-2">
                        <li><a href="/jobs" class="hover:text-white">Browse Jobs</a></li>
                        <li><a href="#" class="hover:text-white">Career Advice</a></li>
                        <li><a href="#" class="hover:text-white">Salary Guide</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-semibold text-white mb-4">For Employers</h4>
                    <ul class="space-y-2">
                        <li><a href="#" class="hover:text-white">Post a Job</a></li>
                        <li><a href="#" class="hover:text-white">Pricing</a></li>
                        <li><a href="#" class="hover:text-white">Enterprise</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-semibold text-white mb-4">Legal</h4>
                    <ul class="space-y-2">
                        <li><a href="#" class="hover:text-white">Privacy Policy</a></li>
                        <li><a href="#" class="hover:text-white">Terms of Service</a></li>
                        <li><a href="/contact" class="hover:text-white">Contact</a></li>
                    </ul>
                </div>
            </div>
            <div class="border-t border-gray-700 pt-8 text-center">
                <p>&copy; 2026 JobBoard. All rights reserved.</p>
            </div>
        </div>
    </footer>
</body>
</html>
