@props([ 'props '])


<li>
<a href="{{ route('pages.index', $props->slug), http_build_query(request()->except('page', 'page')) }}">
<div class="h-12 overflow-hidden relative">

    <div class="absolute top-0 right-0 bottom-0 left-0">
        <div class="absolute top-0 right-0 bottom-0 left-0">
            {{-- <img class="w-full h-full left-0 absolute object-cover" src="{{ $props->thumbnail }}" alt="{{ $props->name }}" loading="lazy" /> --}}
        </div>
        <span class="ease-in duration-150 rounded absolute top-0 right-0 bottom-0 left-0 bg-black/50 hover:bg-pink-600">
        <div class="relative h-full w-full flex align-middle">
            <span class="m-auto text-white font-bold">{{ $props->name }}</span>
        </div>
        </span>
    </div>

</div>
</a>
</li>