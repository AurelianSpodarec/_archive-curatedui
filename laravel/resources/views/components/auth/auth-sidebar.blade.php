@props([
    'image',
    'imageALT'
])

<aside class="w-0 md:w-[850px] hidden lg:block relative ">
    <img class="absolute z-10 top-10 left-10 h-12 w-auto" src="https://tailwindui.com/img/logos/workflow-mark-indigo-600.svg" alt="Workflow">
    <img class="absolute inset-0 h-full w-full object-cover" src="{{ $image }}" alt="{{ $imageALT }}">        
</aside>