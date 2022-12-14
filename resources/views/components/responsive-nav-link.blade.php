@props(['active'])

@php
$classes = ($active ?? false)
            ? 'block pl-3 pr-4 py-2 border-l-4 border-sky-600 text-sm font-bold bg-sky-50 hover:text-sky-600 focus:outline-none focus:text-sky-600 focus:bg-sky-50 focus:border-sky-600 transition duration-150 ease-in-out'
            : 'block pl-3 pr-4 py-2 border-l-4 border-transparent text-sm font-bold bg-sky-50 hover:text-sky-600 hover:border-gray-300 focus:outline-none focus:text-gray-800 focus:bg-gray-50 focus:border-gray-300 transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
