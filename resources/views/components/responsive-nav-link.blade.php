@props(['active'])

@php
$classes = ($active ?? false)
            ? 'block w-full pl-3 pr-4 py-2 border-l-4 border-lime-500 text-left text-base font-medium text-gray-900 bg-lime-50 focus:outline-none focus:text-lime-800 focus:bg-lime-100 focus:border-lime-700 transition duration-150 ease-in-out'
            : 'block w-full pl-3 pr-4 py-2 border-l-4 border-transparent text-left text-base font-medium text-lime-100 hover:text-emerald-800 hover:bg-lime-50 hover:border-lime-300 focus:outline-none focus:text-gray-800 focus:bg-gray-50 focus:border-gray-300 transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
