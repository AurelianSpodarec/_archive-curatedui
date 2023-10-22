@extends('web.inspiration.sites.layout')
@section('content')

{{-- <section class="grid grid-cols-5 gap-4"> --}}


    {{-- <aside class="col-span-1">
        <h3 class="font-bold text-xl mb-8 lg:mb-3  text-slate-900">Page Sections</h3>
        <div>
            <ul class="space-y-6 lg:space-y-2 border-l border-slate-100">
                @foreach ($pages as $page)
                <li class="block border-l pl-4 -ml-px border-transparent hover:border-slate-400 text-slate-700 hover:text-slate-900">{{ $page->name }}</li>
                 @endforeach
            </ul>
        </div>

    </aside>


    <div class="col-span-4">

        <div class="flex justify-between mb-8">


            <div class="mt-1 flex rounded-md shadow-sm">
                <div class="relative flex items-stretch flex-grow focus-within:z-10">
                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                        <svg class="h-5 w-5 text-gray-400" x-description="Heroicon name: solid/users" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path d="M9 6a3 3 0 11-6 0 3 3 0 016 0zM17 6a3 3 0 11-6 0 3 3 0 016 0zM12.93 17c.046-.327.07-.66.07-1a6.97 6.97 0 00-1.5-4.33A5 5 0 0119 16v1h-6.07zM6 11a5 5 0 015 5v1H1v-1a5 5 0 015-5z"></path>
                        </svg>
                        </div>
                        
                        <input type="email" name="email" id="email" class="focus:ring-indigo-500 focus:border-indigo-500 block w-full rounded-none rounded-l-md pl-10 sm:text-sm border-gray-300" placeholder="John Smith">
                    </div>

                    <button type="button" class="-ml-px relative inline-flex items-center space-x-2 px-4 py-2 border border-gray-300 text-sm font-medium rounded-r-md text-gray-700 bg-gray-50 hover:bg-gray-100 focus:outline-none focus:ring-1 focus:ring-indigo-500 focus:border-indigo-500">
                    
                    <svg class="h-5 w-5 text-gray-400" x-description="Heroicon name: solid/sort-ascending" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path d="M3 3a1 1 0 000 2h11a1 1 0 100-2H3zM3 7a1 1 0 000 2h5a1 1 0 000-2H3zM3 11a1 1 0 100 2h4a1 1 0 100-2H3zM13 16a1 1 0 102 0v-5.586l1.293 1.293a1 1 0 001.414-1.414l-3-3a1 1 0 00-1.414 0l-3 3a1 1 0 101.414 1.414L13 10.414V16z"></path>
                    </svg>
                    <span>Sort</span>
                </button>
            </div>


            <div class="flex">
                <div class="flex origin-top-right border rounded-l-lg rounded-r-lg rounded-md shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none">
                        
                    <div class="border-2  rounded-l-lg border-pink-600 bg-pink-200 flex px-4 py-1 text-sm text-gray-700">
                    <a href="pages?device=mobile&amp;">
                    
                        <div class="h-6 w-6 cursor-pointer p-1">
                            <svg class="w-full h-full" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M14.004 0H5.996A1.996 1.996 0 0 0 4 1.996v16.007C4 19.106 4.894 20 5.996 20h8.007A1.997 1.997 0 0 0 16 18.004V1.996A1.996 1.996 0 0 0 14.004 0zM10 19c-.69 0-1.25-.447-1.25-1s.56-1 1.25-1 1.25.447 1.25 1-.56 1-1.25 1zm4-3H6V2h8v14z"></path></svg>
                            <span class="sr-only">Mobile View</span> 
                        </div> 
                    </a>
                    </div>
                    <div class="flex px-4 py-1 text-sm text-gray-700">
                    <a href="pages?device=desktop&amp;">
                        <div class="h-6 w-6 cursor-pointer p-1">
                            <svg class="w-full h-full" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                <path d="M13.5 3a.5.5 0 0 1 .5.5V11H2V3.5a.5.5 0 0 1 .5-.5h11zm-11-1A1.5 1.5 0 0 0 1 3.5V12h14V3.5A1.5 1.5 0 0 0 13.5 2h-11zM0 12.5h16a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 12.5z"></path>
                            </svg>
                            <span class="sr-only">Desktop View</span> 
                        </div>
                    </a>
                    </div>

                </div>
                <div class="px-3">|</div>
                <a class="group flex items-center cursor-pointer" href="pages?theme=dark&amp;device=desktop">
                    <svg viewBox="0 0 24 24" fill="none" strokeWidth="2" strokeLinecap="round" strokeLinejoin="round" class="transition ease-in-out duration-150 group-hover:hidden w-6 h-6 mr-2">
                        <path d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" class="fill-sky-400/20 stroke-sky-500"></path>
                        <path d="M12 4v1M17.66 6.344l-.828.828M20.005 12.004h-1M17.66 17.664l-.828-.828M12 20.01V19M6.34 17.664l.835-.836M3.995 12.004h1.01M6 6l.835.836" class="stroke-sky-500"></path>
                    </svg>
                    <svg viewBox="0 0 24 24" fill="none" strokeWidth="2" strokeLinecap="round" strokeLinejoin="round" class="transition ease-in-out duration-150 group-hover:block hidden w-6 h-6 mr-2">
                        <path d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" class="fill-sky-400/20 stroke-stone-500"></path>
                        <path d="M12 4v1M17.66 6.344l-.828.828M20.005 12.004h-1M17.66 17.664l-.828-.828M12 20.01V19M6.34 17.664l.835-.836M3.995 12.004h1.01M6 6l.835.836" class="stroke-stone-500"></path>
                    </svg>
                    Light
                </a>
            </div>

        </div> --}}

        <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
        @foreach ($pages as $page)
            <x-card.page :props="$page" />
        @endforeach
        </div>
{{-- Index: Founders, brand colors, short description about what they do, some pictures, anad whatever --}}
    </div>

@endsection