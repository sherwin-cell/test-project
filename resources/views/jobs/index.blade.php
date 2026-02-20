<x-layout>
    <x-slot:heading>
        Job Listings
    </x-slot:heading>

    <div class="grid gap-6 md:grid-cols-2 lg:grid-cols-3">
        @foreach($jobs as $job)
            <div class="bg-white shadow-md rounded-lg overflow-hidden hover:shadow-lg transition-shadow duration-300 flex flex-col h-full">
                <!-- Job Header -->
                <div class="relative bg-gradient-to-r from-indigo-500 to-indigo-600 h-32 flex items-end p-4">
                    <span class="inline-flex items-center bg-blue-100 text-blue-800 text-xs font-semibold px-2.5 py-1 rounded-full">
                        <svg class="w-3 h-3 me-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.122 17.645a7.185 7.185 0 0 1-2.656 2.495 7.06 7.06 0 0 1-3.52.853 6.617 6.617 0 0 1-3.306-.718 6.73 6.73 0 0 1-2.54-2.266c-2.672-4.57.287-8.846.887-9.668A4.448 4.448 0 0 0 8.07 6.31 4.49 4.49 0 0 0 7.997 4c1.284.965 6.43 3.258 5.525 10.631 1.496-1.136 2.7-3.046 2.846-6.216 1.43 1.061 3.985 5.462 1.754 9.23Z"/>
                        </svg>
                        Trending
                    </span>
                </div>

                <!-- Content -->
                <div class="p-6 flex-1 flex flex-col justify-between">
                    <div>
                        <a href="/jobs/{{ $job->id }}">
                            <h3 class="text-lg font-semibold text-gray-900 hover:text-indigo-600 transition-colors duration-200">
                                {{ $job->title }}
                            </h3>
                        </a>
                        
                        <div class="mt-4 space-y-2">
                            <p class="text-gray-600 text-sm">
                                <span class="font-medium">Company:</span> {{ $job->company }}
                            </p>
                            <p class="text-gray-600 text-sm">
                                <span class="font-medium">Location:</span> {{ $job->location }}
                            </p>
                            @if($job->employer)
                                <p class="text-gray-600 text-sm">
                                    <span class="font-medium">Posted by:</span> {{ $job->employer->name }}
                                </p>
                            @endif
                        </div>
                    </div>

                    <!-- Action Button -->
                    <a href="/jobs/{{ $job->id }}" class="mt-6 inline-flex items-center justify-center w-full text-white bg-indigo-600 hover:bg-indigo-700 font-medium rounded-lg text-sm px-4 py-2.5 transition-colors duration-200">
                        View Details
                        <svg class="w-4 h-4 ms-1.5 rtl:rotate-180" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 12H5m14 0-4 4m4-4-4-4"/>
                        </svg>
                    </a>
                </div>
            </div>
        @endforeach
    </div>

    <!-- Pagination -->
    <div class="mt-8">
        {{ $jobs->links() }}
    </div>
</x-layout>
