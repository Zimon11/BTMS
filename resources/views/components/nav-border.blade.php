@props(['active', 'hasActiveSub' => false])

@php
$classes = ($active || $hasActiveSub)
    ? 'h-full px-1 pt-4 pb-6 bg-blue-900 rounded-r-xl'
    : '';
@endphp

<span {{ $attributes->merge(['class' => $classes]) }}>
    {{$slot}}
</span>
