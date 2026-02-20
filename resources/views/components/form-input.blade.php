@props([
    'name',
    'type' => 'text',
    'placeholder' => '',
    'value' => null
])

<input
    type="{{ $type }}"
    name="{{ $name }}"
    id="{{ $name }}"
    placeholder="{{ $placeholder }}"
    value="{{ old($name, $value) }}"
    {{ $attributes->merge([
        'class' => 'block w-full rounded-md border border-gray-300 bg-white py-2 px-3 text-base text-gray-900 placeholder-gray-400 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm'
    ]) }}
/>
