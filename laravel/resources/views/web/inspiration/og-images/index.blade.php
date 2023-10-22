@extends('web.inspiration.layout')
@section('content')
 
    <x-container>
    <section class="gap-6 columns-3"> 

        @foreach ($data as $ogimage )
            <x-card.ogimage :props="$ogimage"/>
        @endforeach

    </section>
    </x-container>

@endsection