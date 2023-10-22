@props([ 'props' ])

<article>
<a href="{{ route('site.show', $props->slug) }}">

    <div class="flex justify-between items-center  my-2 py-2">
        <div class="flex">
            <img class="object-cover h-14 w-14 rounded-lg mr-5" src="{{ $props->logo }}" />
            {{-- <div style="background-color: {{ $props->color->hex }}" class="h-8 w-8"></div> --}}
            <div>
                <span class="flex font-bold text-3xl">{{ $props->name }}</span>
                {{-- <span>{{ $props->description }}</span> --}}
            </div>
        </div>
        {{-- <div>
            Add
        </div> --}}
    </div>

    {{-- <div class="grid grid-cols-2 gap-4 overflow-hidden">
        <img class="w-full  rounded-lg h-[350px] object-cover" src="{{ $props->thumbnail }}" alt="{{ $props->name }} Thumbnail"/>
        <img class="w-full  rounded-lg h-[350px] object-cover" src="{{ $props->thumbnail }}" alt="{{ $props->name }} Thumbnail"/>
    </div> --}}

</a>
</article>