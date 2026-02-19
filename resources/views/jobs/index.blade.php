<x-layout>
    <x-slot:heading>
        Job Listings
    </x-slot:heading>

    <div class="grid gap-6 md:grid-cols-2 lg:grid-cols-3">
        @foreach($jobs as $job)
            <div class="bg-white shadow-md rounded-lg overflow-hidden hover:shadow-lg transition duration-300 flex flex-col">
                <!-- Optional Image -->
                <a href="/jobs/{{ $job->id }}">
                    <img class="w-full h-40 object-cover" src="{{ $job->image ?? '/images/default-job.jpg' }}" alt="{{ $job->title }}">
                </a>

                <div class="p-6 flex-1 flex flex-col justify-between text-center">
                    <!-- Trending Badge -->
                    <span class="inline-flex items-center bg-blue-100 text-blue-800 text-xs font-medium px-2 py-1 rounded-full mb-3">
                        <svg class="w-3 h-3 me-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.122 17.645a7.185 7.185 0 0 1-2.656 2.495 7.06 7.06 0 0 1-3.52.853 6.617 6.617 0 0 1-3.306-.718 6.73 6.73 0 0 1-2.54-2.266c-2.672-4.57.287-8.846.887-9.668A4.448 4.448 0 0 0 8.07 6.31 4.49 4.49 0 0 0 7.997 4c1.284.965 6.43 3.258 5.525 10.631 1.496-1.136 2.7-3.046 2.846-6.216 1.43 1.061 3.985 5.462 1.754 9.23Z"/>
                        </svg>
                        Trending
                    </span>

                    <!-- Job Info -->
                    <a href="/jobs/{{ $job->id }}">
                        <h5 class="mt-1 mb-2 text-xl font-semibold text-gray-800 hover:text-blue-500">
                            {{ $job->title }}
                        </h5>
                    </a>
                    <p class="text-gray-600 text-sm mb-1"><strong>Company:</strong> {{ $job->company }}</p>
                    <p class="text-gray-600 text-sm mb-1"><strong>Location:</strong> {{ $job->location }}</p>
                    @if($job->employer)
                        <p class="text-gray-600 text-sm mb-3"><strong>Employer:</strong> {{ $job->employer->name }}</p>
                    @endif

                    <!-- Read More Button -->
                    <a href="/jobs/{{ $job->id }}" class="inline-flex items-center justify-center text-white bg-blue-600 hover:bg-blue-700 font-medium rounded-lg text-sm px-4 py-2 transition duration-200">
                        Read more
                        <svg class="w-4 h-4 ms-1.5 rtl:rotate-180 -me-0.5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 12H5m14 0-4 4m4-4-4-4"/>
                        </svg>
                    </a>
                </div>
            </div>
        @endforeach

        <div class="col-span-full">
            {{ $jobs->links() }}
        </div>
    </div>
</x-layout>
