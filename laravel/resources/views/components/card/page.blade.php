@props([ 'props' ])

{{-- TODO: Add icon that allows uer to open this on a new page, isntead of just a modal --}}

@if($props->imageVariations->first())
<div>
<article class="js-site-page group relative cursor-pointer border rounded-xl h-[400px] border-gray-200 overflow-hidden">

    
    <img src="{{ asset($props->imageVariations->first()->getFirstMediaUrl('image')) }}" class="js-image bg-cover w-full object-cover group-hover:scale-105 transition-transform"/>


    <div class="absolute top-3 right-3 transition invisible group-hover:visible">
    <button aria-label="White button" type="button" class="flex content-center items-center justify-center text-center px-2.5 py-1.5 border border-gray-300 shadow-sm text-xs font-medium rounded text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-brand-500 rounded-lg fav-button">
        
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" strokeWidth="2" class="w-4 h-4 text-red-500 fav-1">
            <path strokeLinecap="round" strokeLinejoin="round" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
        </svg>
        {{-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-4 h-4 text-red-500 fav-2">
            <path fill-rule="evenodd" d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" clipRule="evenodd"></path>
        </svg> --}}

    </button>
    </div>

    <div class="absolute bottom-5 left-0 right-0 text-center invisible group-hover:visible">
        <div class="bg-white rounded-lg inline-block px-2 py-1 border text-sm">{{ $props->categoryPage->name }}</div>
    </div>

</article>

<div class="text-center mt-3">
<div class="font-semibold text-slate-700 text-lg">
    {{  $props->site->name }}
     - {{ $props->name}}
</div>


</div>
</div>
@endif