@props([
    'class' => ""
])

<div {{ $attributes->merge(['class' => 'mx-auto max-w-10xl px-4 sm:px-6 lg:px-8 ' . $class]) }} >
    {{ $slot }}
</div>