@props([
    'route',
    'name',
    'site'
])

@php
$classes = Request::routeIs($route) ? 'text-slate-700 bg-white' : 'text-slate-400  hover:bg-white/[0.12] hover:text-white';
@endphp

<a href="{{ route($route, $site->slug) }}" {{ $attributes->merge(['class' => "block text-center w-full rounded-lg px-6 py-2.5 text-sm font-medium leading-5 ring-white ring-opacity-60 ring-offset-2 ring-offset-pink-400 focus:outline-none focus:ring-2  {$classes}"]) }}>
{{ $slot ? $name : $slot}}
</a>

{{-- 
<a href="{{ route( 'site.show', $site->slug) }}" class="{{ Request::routeIs(route( 'site.show', $site->slug)) ? 'active' : '' }}">About</a>
block text-center w-full rounded-lg px-6 py-2.5 text-sm font-medium leading-5 text-slate-700 ring-white ring-opacity-60 ring-offset-2 ring-offset-pink-400 focus:outline-none focus:ring-2 bg-white shadow" abindex="0">About</a>
<a href="{{ route( 'site.index.pages', $site->slug) }}" class="block text-center w-full rounded-lg px-6 py-2.5 text-sm font-medium leading-5 text-slate-400 ring-white ring-opacity-60 ring-offset-2 ring-offset-pink-400 focus:outline-none focus:ring-2 hover:bg-white/[0.12] hover:text-white" tabindex="-1">Pages</a>
<a href="{{ route( 'site.index.pages', $site->slug) }}" class="block text-center w-full rounded-lg px-6 py-2.5 text-sm font-medium leading-5 text-slate-400 ring-white ring-opacity-60 ring-offset-2 ring-offset-pink-400 focus:outline-none focus:ring-2 hover:bg-white/[0.12] hover:text-white" tabindex="-1">Components</a>
<a href="{{ route( 'site.index.pages', $site->slug) }}" class="block text-center w-full rounded-lg px-6 py-2.5 text-sm font-medium leading-5 text-slate-400 ring-white ring-opacity-60 ring-offset-2 ring-offset-pink-400 focus:outline-none focus:ring-2 hover:bg-white/[0.12] hover:text-white" tabindex="-1">OG Images</a>
             --}}