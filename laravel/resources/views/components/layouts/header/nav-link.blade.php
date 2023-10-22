@props([
    'route',
    'name'
])

@php
    $classes = Request::routeIs($route) ? 'text-pink-800' : 'hover:text-blue-500';
@endphp

<a href="{{ route($route) }}" {{ $attributes->merge(['class' => "text-sm font-medium text-slate-700 hover:text-slate-900 pr-8 {$classes}"]) }}>
    {{ $slot ? $name : $slot}}
</a>