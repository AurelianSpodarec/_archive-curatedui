@props([
    'name',
    'route'
])

@php
    $classes = Request::routeIs($route) ? ' border-slate-400 text-slate-500 ' : 'border-slate-100 text-slate-400/80 hover:text-slate-400 hover:border-slate-200';
@endphp

<div {{ $attributes->merge([ "class"=> "border-2 bg-gray-200 transition rounded-lg font-medium {$classes}" ]) }}>
    <a class="block text-sm py-2 px-5" href="{{ route($route) }}">{{ $slot ? $name : $slot}}</a>
</div>