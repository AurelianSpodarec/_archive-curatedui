@extends('web.inspiration.layout')
@section('content')

    <x-container>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
    @foreach ($data as $site)

        <x-card.site :props="$site" />
        
    @endforeach
    </div>
    </x-container>

@endsection