<x-layout>
    <x-slot:heading>
        Job
    </x-slot:heading>
    <h1 class="font-bold text-lg">{{ $job['title'] }}</h1>
    <p>Company: {{ $job['company'] }}</p>
    <p>Location: {{ $job['location'] }}</p>

</x-layout>