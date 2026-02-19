<x-layout>
    <x-slot:heading>
        Edit Job: {{ $job['title'] }}
    </x-slot:heading>

    <form method="POST" action="/jobs/{{ $job['id'] }}">
        @csrf
        @method('PATCH')
        <div class="space-y-12">
            <div class="border-b border-gray-900/10 pb-12">
                <h2 class="text-base font-semibold leading-7 text-gray-900">Job Information</h2>
                <p class="mt-1 text-sm leading-6 text-gray-600">Update the details of the job listing.</p>

                <!-- Job Title -->
                <div class="sm:col-span-4">
                    <label for="title" class="block text-sm font-medium text-gray-700">
                        Job Title
                    </label>
                    <div class="mt-1">
                        <input type="text" name="title" id="title" value="{{ $job['title'] }}"
                            placeholder="Frontend Developer"
                            class="block w-full rounded-md border border-gray-300 bg-white py-2 px-3 text-base text-gray-900 placeholder-gray-400 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" />
                    </div>
                </div>

                <!-- Company -->
                <div class="sm:col-span-4">
                    <label for="company" class="block text-sm font-medium text-gray-700">
                        Company
                    </label>
                    <div class="mt-1">
                        <input type="text" name="company" id="company" value="{{ $job['company'] }}"
                            placeholder="Acme Corp"
                            class="block w-full rounded-md border border-gray-300 bg-white py-2 px-3 text-base text-gray-900 placeholder-gray-400 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" />
                    </div>
                </div>

                <!-- Location -->
                <div class="sm:col-span-4">
                    <label for="location" class="block text-sm font-medium text-gray-700">
                        Location
                    </label>
                    <div class="mt-1">
                        <input type="text" name="location" id="location" value="{{ $job['location'] }}"
                            placeholder="New York, NY"
                            class="block w-full rounded-md border border-gray-300 bg-white py-2 px-3 text-base text-gray-900 placeholder-gray-400 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" />
                    </div>
                </div>
            </div>
        </div>

        <div class="flex items-center justify-between gap-x-6 mt-6">
            <!-- Left side: Delete -->
            <form method="POST" action="/jobs/{{ $job->id }}">
                @csrf
                @method('DELETE')
                <button type="submit"
                    class="rounded-md bg-red-600 px-3 py-2 text-sm font-semibold text-white hover:bg-red-500">
                    Delete
                </button>
            </form>

            <!-- Right side: Update + Cancel -->
            <div class="flex items-center gap-x-4">
                <!-- Update -->
                <form method="POST" action="/jobs/{{ $job->id }}">
                    @csrf
                    @method('PATCH')
                    <button type="submit"
                        class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white hover:bg-indigo-500">
                        Update
                    </button>
                </form>

                <!-- Cancel -->
                <a href="/jobs" class="text-sm font-semibold leading-6 text-gray-900">
                    Cancel
                </a>
            </div>
        </div>
    </form>
</x-layout>