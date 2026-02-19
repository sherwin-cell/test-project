<x-layout>
    <x-slot:heading>
        Create Job Listing
    </x-slot:heading>

    <form method="POST" action="/jobs">
        @csrf

        <div class="border-b border-gray-200 pb-8">
            <h2 class="text-lg font-semibold text-gray-900">Job Details</h2>
            <p class="mt-1 text-sm text-gray-600">
                Provide the details for the job listing you want to create.
            </p>

            <div class="mt-6 grid grid-cols-1 gap-y-6 gap-x-6 sm:grid-cols-6">

                <!-- Job Title -->
                <div class="sm:col-span-4">
                    <label for="title" class="block text-sm font-medium text-gray-700">
                        Job Title
                    </label>
                    <div class="mt-1">
                        <input type="text" name="title" id="title"  placeholder="Frontend Developer"
                            class="block w-full rounded-md border border-gray-300 bg-white py-2 px-3 text-base text-gray-900 placeholder-gray-400 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" />
                    </div>
                </div>

                <!-- Company -->
                <div class="sm:col-span-4">
                    <label for="company" class="block text-sm font-medium text-gray-700">
                        Company
                    </label>
                    <div class="mt-1">
                        <input type="text" name="company" id="company"  placeholder="Acme Corp"
                            class="block w-full rounded-md border border-gray-300 bg-white py-2 px-3 text-base text-gray-900 placeholder-gray-400 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" />
                    </div>
                </div>

                <!-- Location -->
                <div class="sm:col-span-4">
                    <label for="location" class="block text-sm font-medium text-gray-700">
                        Location
                    </label>
                    <div class="mt-1">
                        <input type="text" name="location" id="location"  placeholder="New York, NY"
                            class="block w-full rounded-md border border-gray-300 bg-white py-2 px-3 text-base text-gray-900 placeholder-gray-400 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" />
                    </div>
                </div>

            </div>
        </div>
        <div class="mt-10">
            @if ($errors->any())
                <div class="mb-4">
                    <ul class="list-disc list-inside text-sm text-red-600">
                        @foreach ($errors->all() as $error)
                            <li class="text-red-500 italic">{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>

        </div>

        <div class="flex justify-end gap-4">
            <button type="button"
                class="rounded-md border border-gray-300 bg-white py-2 px-4 text-sm font-medium text-gray-700 hover:bg-gray-50">
                Cancel
            </button>

            <button type="submit"
                class="rounded-md bg-indigo-600 py-2 px-4 text-sm font-medium text-white hover:bg-indigo-500 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                Save Job
            </button>
        </div>
    </form>
</x-layout>