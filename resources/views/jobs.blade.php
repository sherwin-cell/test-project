<x-layout>
    <x-slot:heading>
        Job Listings
    </x-slot:heading>

    <div class="grid gap-6 md:grid-cols-2 lg:grid-cols-3">
        @foreach($jobs as $job)
            <div class="bg-white shadow-md rounded-lg p-5 hover:shadow-lg transition duration-300">
                <a href="/jobs/{{ $job['id'] }}" class="block">
                    <h2 class="text-lg font-bold text-gray-800 hover:text-blue-500">
                        {{ $job['title'] }}
                    </h2>
                    <p class="text-gray-600 mt-1">
                        <strong>Company:</strong> {{ $job['company'] }}
                    </p>
                    <p class="text-gray-600">
                        <strong>Location:</strong> {{ $job['location'] }}
                    </p>
                    @if($job->employer)
                        <p class="text-gray-600 mt-2">
                            <strong>Employer:</strong> {{ $job->employer->name }}
                        </p>
                    @endif
                </a>
            </div>
        @endforeach
        <div>
            {{ $jobs->links() }}
        </div>
    </div>
</x-layout>
