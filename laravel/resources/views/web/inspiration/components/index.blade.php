@extends('web.inspiration.layout')
@section('content')

    <x-container>
    <section class="gap-6 columns-4">       

        @foreach ($data as $component)
            <x-card.component :props="$component" />
        @endforeach
    
    </section>
    </x-container>

@endsection


