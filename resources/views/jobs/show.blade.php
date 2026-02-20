<x-layout>
    <x-slot:heading>
        Job Details
    </x-slot:heading>
    
    <div class="max-w-3xl">
        <div class="bg-white shadow-md rounded-lg overflow-hidden">
            <div class="px-6 py-8 border-b border-gray-200">
                <h1 class="text-3xl font-bold text-gray-900">{{ $job->title }}</h1>
                
                <div class="mt-6 space-y-4">
                    <div class="flex items-center">
                        <span class="text-sm font-medium text-gray-500 w-24">Company:</span>
                        <span class="text-lg text-gray-900">{{ $job->company }}</span>
                    </div>
                    
                    <div class="flex items-center">
                        <span class="text-sm font-medium text-gray-500 w-24">Location:</span>
                        <span class="text-lg text-gray-900">{{ $job->location }}</span>
                    </div>
                    
                    @if($job->employer)
                        <div class="flex items-center">
                            <span class="text-sm font-medium text-gray-500 w-24">Posted by:</span>
                            <span class="text-lg text-gray-900">{{ $job->employer->name }}</span>
                        </div>
                    @endif
                    
                    <div class="flex items-center pt-2">
                        <span class="text-sm font-medium text-gray-500 w-24">Posted:</span>
                        <span class="text-lg text-gray-900">{{ $job->created_at->format('M d, Y') }}</span>
                    </div>
                </div>
            </div>

            <div class="px-6 py-6 flex justify-end gap-4">
                <a href="/jobs" class="rounded-md border border-gray-300 bg-white py-2 px-4 text-sm font-medium text-gray-700 hover:bg-gray-50 transition duration-200">
                    Back to Jobs
                </a>
                
                <a href="/jobs/{{ $job->id }}/edit" class="rounded-md bg-indigo-600 py-2 px-4 text-sm font-medium text-white hover:bg-indigo-500 transition duration-200">
                    Edit Job
                </a>
            </div>
        </div>
    </div>

</x-layout>