@props([
    'href' => null,
    'type' => 'primary',
    'size' => 'md'
])

@php
    $baseClasses = 'inline-flex items-center justify-center font-semibold rounded-md transition duration-200';
    
    $typeClasses = match($type) {
        'primary' => 'bg-indigo-600 text-white hover:bg-indigo-500 focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2',
        'secondary' => 'bg-white border border-gray-300 text-gray-700 hover:bg-gray-50 focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2',
        'danger' => 'bg-red-600 text-white hover:bg-red-500 focus:ring-2 focus:ring-red-500 focus:ring-offset-2',
        default => 'bg-indigo-600 text-white hover:bg-indigo-500 focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2',
    };
    
    $sizeClasses = match($size) {
        'sm' => 'px-3 py-1.5 text-sm',
        'md' => 'px-4 py-2 text-sm',
        'lg' => 'px-6 py-3 text-base',
        default => 'px-4 py-2 text-sm',
    };
    
    $classes = "$baseClasses $typeClasses $sizeClasses";
@endphp

@if($href)
    <a href="{{ $href }}" {{ $attributes->merge(['class' => $classes]) }}>
        {{ $slot }}
    </a>
@else
    <button type="button" {{ $attributes->merge(['class' => $classes]) }}>
        {{ $slot }}
    </button>
@endif