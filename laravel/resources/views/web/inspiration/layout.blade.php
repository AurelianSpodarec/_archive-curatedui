<x-layouts.main>
 
    <x-container>
        <x-inspiration.filter.index />
    </x-container>

    @yield('content')

    {{-- {{ dd( Route::current())}} --}}
    <div>
    {{ $data->links() }}
    </div>

</x-layouts.main>