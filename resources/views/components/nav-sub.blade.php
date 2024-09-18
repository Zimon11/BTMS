@props(['active'])
@php
$classes = ($active ?? false)
            ? 'inline-flex items-center p-5 border-solid border-2 border-blue-900 rounded-2xl  text-md font-medium leading-5 text-blue-900 dark:text-blue-900 focus:outline-none focus:border-indigo-700 transition duration-150 ease-in-out'
            : 'inline-flex items-center p-5 text-md font-medium leading-5 text-blue-900 dark:text-gray-400 hover:text-blue-500 dark:hover:text-gray-300 hover:border-gray-300 dark:hover:border-gray-700 focus:outline-none focus:text-gray-700 dark:focus:text-gray-300 focus:border-gray-300 dark:focus:border-gray-700 transition duration-150 ease-in-out transform ';
@endphp


<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>

