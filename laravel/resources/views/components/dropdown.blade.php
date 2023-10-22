@props([
    'button'
])

{{-- <div class="js-dropdown-wrap relative inline-block text-left">
    <button class="js-dropdown-button inline-flex justify-center w-full rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-sm font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-100 focus:ring-indigo-500">Type</button>
    <div class="js-dropdown-menu origin-top-right absolute right-0 mt-2 w-56 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 focus:outline-none">
        {{ $slot }}
    </div>
</div>
 --}}

<div class="js-dropdown-wrap">
    <button class="js-dropdown-button">{{ $button }}</button>
    <div class="js-dropdown-menu">
        {{ $slot }}
    </div>
</div>