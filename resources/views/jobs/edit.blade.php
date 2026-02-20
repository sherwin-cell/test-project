<x-layout>
    <x-slot:heading>
        Edit Job: {{ $job['title'] }}
    </x-slot:heading>

    <div class="max-w-2xl">
        <form method="POST" action="/jobs/{{ $job['id'] }}">
            @csrf
            @method('PATCH')
            <div class="space-y-12">
                <div class="border-b border-gray-900/10 pb-12">
                    <h2 class="text-base font-semibold leading-7 text-gray-900">Job Information</h2>
                    <p class="mt-1 text-sm leading-6 text-gray-600">Update the details of the job listing.</p>

                    <div class="mt-8 space-y-6">
                        <!-- Job Title -->
                        <div>
                            <x-form-label for="title">Job Title</x-form-label>
                            <div class="mt-2">
                                <x-form-input name="title" placeholder="Frontend Developer" value="{{ $job['title'] }}" />
                            </div>
                        </div>

                        <!-- Company -->
                        <div>
                            <x-form-label for="company">Company</x-form-label>
                            <div class="mt-2">
                                <x-form-input name="company" placeholder="Acme Corp" value="{{ $job['company'] }}" />
                            </div>
                        </div>

                        <!-- Location -->
                        <div>
                            <x-form-label for="location">Location</x-form-label>
                            <div class="mt-2">
                                <x-form-input name="location" placeholder="New York, NY" value="{{ $job['location'] }}" />
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Form Errors -->
                <x-form-error />
            </div>

            <div class="flex items-center justify-between gap-x-6 mt-8">
                <!-- Delete Button -->
                <button type="button" onclick="if(confirm('Are you sure you want to delete this job?')) { document.getElementById('deleteForm').submit(); }"
                    class="rounded-md bg-red-600 px-4 py-2 text-sm font-semibold text-white hover:bg-red-500 transition duration-200">
                    Delete Job
                </button>

                <!-- Update and Cancel Buttons -->
                <div class="flex items-center gap-x-4">
                    <button type="submit"
                        class="rounded-md bg-indigo-600 px-4 py-2 text-sm font-semibold text-white hover:bg-indigo-500 transition duration-200">
                        Update Job
                    </button>
                    <a href="/jobs" class="text-sm font-semibold leading-6 text-gray-900 hover:text-gray-700">
                        Cancel
                    </a>
                </div>
            </div>
        </form>

        <!-- Hidden Delete Form -->
        <form id="deleteForm" method="POST" action="/jobs/{{ $job->id }}" style="display: none;">
            @csrf
            @method('DELETE')
        </form>
    </div>
</x-layout>