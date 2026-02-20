<x-layout>
    <x-slot:heading>
        Create Job Listing
    </x-slot:heading>

    <div class="max-w-2xl">
        <form method="POST" action="{{ route('jobs.store') }}">
            @csrf

            <div class="border-b border-gray-200 pb-8">
                <h2 class="text-lg font-semibold text-gray-900">Job Details</h2>
                <p class="mt-1 text-sm text-gray-600">
                    Provide the details for the job listing you want to create.
                </p>

                <div class="mt-8 space-y-6">

                    <div>
                        <x-form-label for="title">Job Title <span class="text-red-500">*</span></x-form-label>
                        <div class="mt-2">
                            <x-form-input name="title" placeholder="e.g., Senior Frontend Developer" value="{{ old('title') }}" />
                        </div>
                        <x-form-error />
                    </div>

                    <div>
                        <x-form-label for="company">Company <span class="text-red-500">*</span></x-form-label>
                        <div class="mt-2">
                            <x-form-input name="company" placeholder="e.g., Acme Corporation" value="{{ old('company') }}" />
                        </div>
                        <x-form-error />
                    </div>

                    <div>
                        <x-form-label for="location">Location <span class="text-red-500">*</span></x-form-label>
                        <div class="mt-2">
                            <x-form-input name="location" placeholder="e.g., San Francisco, CA" value="{{ old('location') }}" />
                        </div>
                        <x-form-error />
                    </div>

                </div>
            </div>

            <div class="flex justify-end gap-4 mt-8">
                <button type="button" onclick="window.location='{{ route('jobs.index') }}'"
                    class="rounded-md border border-gray-300 bg-white py-2 px-4 text-sm font-medium text-gray-700 hover:bg-gray-50 transition duration-200">
                    Cancel
                </button>

                <button type="submit"
                    class="rounded-md bg-indigo-600 py-2 px-4 text-sm font-medium text-white hover:bg-indigo-500 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition duration-200">
                    Create Job
                </button>
            </div>
        </form>
    </div>
</x-layout>
