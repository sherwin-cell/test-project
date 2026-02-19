<a href="{{ $attributes->get('href') }}"
   {{ $attributes->merge([
       'class' => 'inline-flex items-center px-4 py-2 text-sm font-medium text-white bg-indigo-600 rounded hover:bg-indigo-500'
   ]) }}>
    {{ $slot }}
</a>
