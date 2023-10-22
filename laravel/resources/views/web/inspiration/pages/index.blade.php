@extends('web.inspiration.layout')
@section('content')

    <x-container>
    <div class="grid grid-cols-1 md:grid-cols-5 gap-6">
    @foreach ($data as $page)

        <x-card.page :props="$page" />

    @endforeach
    </div>
    </x-container>

 
    {{-- <section>
    @foreach ($pages as $page)
        <x-modal.site-page :props="$page" />
    @endforeach
    </section> --}}


@endsection