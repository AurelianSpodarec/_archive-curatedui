@props(['site'])
 
<x-layouts.main>

    <x-container>
    <div class="mb-12">

        <div class="flex items-center text-gray-900 mb-6">
            <img class="mr-4 rounded-3xl w-32 h-32 object-cover" src="{{ $site->logo }}" alt="{{ $site->name }} logo">
            
            <div class="flex flex-col">
                <h1 class="text-4xl font-bold">{{ $site->name }}</h1>
                <span>{{ $site->description }}</span>
            </div>
        </div>

    </div>
    </x-container>


    <x-container>   
    <div class="flex">
    
        <div>
            <nav class="flex space-x-4" aria-label="Tabs">
                <a href="{{ url('sites/' . $site->slug . '/website/pages') }}" class="bg-indigo-100 text-indigo-700 px-3 py-2 font-medium text-sm rounded-md" aria-current="page" x-state-description="undefined: &quot;bg-indigo-100 text-indigo-700&quot;, undefined: &quot;text-gray-500 hover:text-gray-700&quot;">
                    Pages
                </a>
                <a href="{{ url('sites/' . $site->slug . '/website/og-images') }}" class="text-gray-500 hover:text-gray-700 px-3 py-2 font-medium text-sm rounded-md" x-state:on="Current" x-state:off="Default" x-state-description="Current: &quot;bg-indigo-100 text-indigo-700&quot;, Default: &quot;text-gray-500 hover:text-gray-700&quot;">
                    OG Images
                </a>
                <a href="{{ url('sites/' . $site->slug . '/website/components') }}" class="text-gray-500 hover:text-gray-700 px-3 py-2 font-medium text-sm rounded-md" x-state-description="undefined: &quot;bg-indigo-100 text-indigo-700&quot;, undefined: &quot;text-gray-500 hover:text-gray-700&quot;">
                    Components
                </a>
            </nav>
        </div>

    </div>
    </x-container>


    <x-container>
    <div>

        {{ $slot }}

    </div>
    </x-container>


</x-layouts.main>