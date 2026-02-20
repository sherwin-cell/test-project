<x-layout>
    <x-slot:heading>
        Dashboard
    </x-slot:heading>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
        <!-- Welcome Card -->
        <div class="md:col-span-3 bg-gradient-to-br from-indigo-500 to-indigo-600 text-white rounded-lg shadow-md p-6">
            <h2 class="text-2xl font-bold mb-2">Welcome back, {{ Auth::user()->name }}!</h2>
            <p class="text-indigo-100">Here's your dashboard overview.</p>
        </div>

        <!-- Stats Card 1 -->
        <div class="bg-white rounded-lg shadow-md p-6">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-gray-600 text-sm font-medium">Your Job Listings</p>
                    <p class="text-3xl font-bold text-gray-900 mt-2">0</p>
                </div>
                <div class="bg-indigo-100 p-3 rounded-lg">
                    <svg class="w-6 h-6 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                </div>
            </div>
        </div>

        <!-- Stats Card 2 -->
        <div class="bg-white rounded-lg shadow-md p-6">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-gray-600 text-sm font-medium">Profile Views</p>
                    <p class="text-3xl font-bold text-gray-900 mt-2">0</p>
                </div>
                <div class="bg-blue-100 p-3 rounded-lg">
                    <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                    </svg>
                </div>
            </div>
        </div>

        <!-- Stats Card 3 -->
        <div class="bg-white rounded-lg shadow-md p-6">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-gray-600 text-sm font-medium">Applications</p>
                    <p class="text-3xl font-bold text-gray-900 mt-2">0</p>
                </div>
                <div class="bg-green-100 p-3 rounded-lg">
                    <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"/>
                    </svg>
                </div>
            </div>
        </div>
    </div>

    <!-- Quick Actions -->
    <div class="bg-white rounded-lg shadow-md p-6 mb-8">
        <h3 class="text-lg font-semibold text-gray-900 mb-4">Quick Actions</h3>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <a href="{{ route('jobs.create') }}" class="flex items-center p-4 border border-indigo-200 rounded-lg hover:bg-indigo-50 transition-colors">
                <div class="flex-shrink-0">
                    <svg class="w-6 h-6 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"/>
                    </svg>
                </div>
                <div class="ml-4">
                    <p class="font-medium text-gray-900">Post a Job</p>
                    <p class="text-sm text-gray-500">Create a new job listing</p>
                </div>
            </a>

            <a href="{{ route('jobs.index') }}" class="flex items-center p-4 border border-blue-200 rounded-lg hover:bg-blue-50 transition-colors">
                <div class="flex-shrink-0">
                    <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                    </svg>
                </div>
                <div class="ml-4">
                    <p class="font-medium text-gray-900">Browse Jobs</p>
                    <p class="text-sm text-gray-500">View all available jobs</p>
                </div>
            </a>
        </div>
    </div>

    <!-- Recent Activity -->
    <div class="bg-white rounded-lg shadow-md p-6">
        <h3 class="text-lg font-semibold text-gray-900 mb-4">Recent Activity</h3>
        <div class="text-center py-8">
            <p class="text-gray-500">No recent activity yet</p>
        </div>
    </div>
</x-layout>
