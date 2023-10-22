<x-inspiration.layout>


    <div class="gap-6 columns-4">        
    @foreach ($components as $component)

        <x-card.component :props="$component" />
        
    @endforeach
    </div>

    
</x-inspiration.layout>