@props([ 'props' ])

<article>
    {{-- <img class="mb-2 rounded-lg" src="{{ $props->image }}" alt="{{ $props->image }} OG Image" /> --}}
    <img class="mb-2 rounded-lg" src="https://assets.website-files.com/6040ba28127600ad9182e1be/61ee132afc4bd10268904196_luma.jpg" alt="{{ $props->image }} OG Image" />

    <header class="flex items-center">
        <img class="w-6 mr-2" src="{{ $props->logo }}" alt="{{ $props->name }} Logo" />
        <span class="font-semibold">{{ $props->name }}</span>
        <span class="sr-only">{{ $props->name }}</span>
    </header>
</article>