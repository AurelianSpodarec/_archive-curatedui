@extends('web.inspiration.sites.layout')
@section('content')


    <div class="gap-8 columns-3">        
    @foreach ($components as $component)

        <x-card.component :props="$component" />

    @endforeach
    </div>

@endsection