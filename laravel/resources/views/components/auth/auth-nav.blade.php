@props([
    'text',
    'url',
    'urlText'
])

<nav class="flex justify-end grow-0">
    <p class="p-8">
        {{ $text }} <a class="text-pink-500" href="{{ url($url) }}">{{ $urlText }}</a>
    </p>
</nav>