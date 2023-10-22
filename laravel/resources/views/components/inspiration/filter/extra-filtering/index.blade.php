<div class="js-dropdown-wrap ml-6">
    <button class="js-dropdown-button  space-x-1 flex items-center justify-center w-full rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-sm font-medium text-gray-700 hover:bg-gray-50">
        <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"><path d="M20 3H4C3.447 3 3 3.447 3 4V6.59C3 7.113 3.213 7.627 3.583 7.997L9 13.414V21C9 21.347 9.18 21.668 9.475 21.851C9.635 21.95 9.817 22 10 22C10.153 22 10.306 21.965 10.447 21.895L14.447 19.895C14.786 19.725 15 19.379 15 19V13.414L20.417 7.997C20.787 7.627 21 7.113 21 6.59V4C21 3.447 20.553 3 20 3ZM13.293 12.293C13.105 12.48 13 12.734 13 13V18.382L11 19.382V13C11 12.734 10.895 12.48 10.707 12.293L5 6.59V5H19.001L19.003 6.583L13.293 12.293Z" fill="currentColor"></path></svg>
        <span>Filter</span>
    </button>

    <ul class="js-dropdown-menu invisible transition-opacity duration-150 ease-in-out opacity-0 z-10 bg-white shadow-2xl absolute w-[355px] right-0 top-[60px]">
    <div class="relative h-full">


        <div class="px-6 pb-[80px]">
        <div class="pb-20 h-[500px]  overflow-y-auto ">

            <div>
                <h3>Type</h3>
                <div class="grid grid-cols-2 gap-4">
                    <div class="bg-slate-400 text-white text-sm p-2 rounded-lg">eCommerce</div>
                    <div class="bg-slate-400 text-white text-sm p-2 rounded-lg">Brochure</div>
                    <div class="bg-slate-400 text-white text-sm p-2 rounded-lg">Application</div>
                    <div class="bg-slate-400 text-white text-sm p-2 rounded-lg">Landing Pages</div>
                </div> 
            </div>

            <div>
                <h3>Type</h3>
                <div class="grid grid-cols-2 gap-4">
                    <div class="bg-slate-400 text-white text-sm p-2 rounded-lg">eCommerce</div>
                    <div class="bg-slate-400 text-white text-sm p-2 rounded-lg">Brochure</div>
                    <div class="bg-slate-400 text-white text-sm p-2 rounded-lg">Application</div>
                    <div class="bg-slate-400 text-white text-sm p-2 rounded-lg">Landing Pages</div>
                </div> 
            </div>

            <div>
                <h3>Type</h3>
                <div class="grid grid-cols-2 gap-4">
                    <div class="bg-slate-400 text-white text-sm p-2 rounded-lg">eCommerce</div>
                    <div class="bg-slate-400 text-white text-sm p-2 rounded-lg">Brochure</div>
                    <div class="bg-slate-400 text-white text-sm p-2 rounded-lg">Application</div>
                    <div class="bg-slate-400 text-white text-sm p-2 rounded-lg">Landing Pages</div>
                </div> 
            </div>

            <div>
                <h3>Type</h3>
                <div class="grid grid-cols-2 gap-4">
                    <div class="bg-slate-400 text-white text-sm p-2 rounded-lg">eCommerce</div>
                    <div class="bg-slate-400 text-white text-sm p-2 rounded-lg">Brochure</div>
                    <div class="bg-slate-400 text-white text-sm p-2 rounded-lg">Application</div>
                    <div class="bg-slate-400 text-white text-sm p-2 rounded-lg">Landing Pages</div>
                </div> 
            </div>

            <div>
                <h3>Type</h3>
                <div class="grid grid-cols-2 gap-4">
                    <div class="bg-slate-400 text-white text-sm p-2 rounded-lg">eCommerce</div>
                    <div class="bg-slate-400 text-white text-sm p-2 rounded-lg">Brochure</div>
                    <div class="bg-slate-400 text-white text-sm p-2 rounded-lg">Application</div>
                    <div class="bg-slate-400 text-white text-sm p-2 rounded-lg">Landing Pages</div>
                </div> 
            </div>

            <div class="js-dropdown-wrap relative mr-4">
                <button class="js-dropdown-button flex items-center justify-center w-full rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-sm font-medium text-gray-700 hover:bg-gray-50">
                    <div class="w-5 h-5 mr-1 bg-blue-500 rounded-lg"></div>
                    <div>Blue #324528</div>
                </button>

                <div class="js-dropdown-menu origin-top-right absolute left-0 mt-2 w-56 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 focus:outline-none">
                    @foreach (App\Models\Site\SiteBrandColor::all() as $color)
                    <a class="flex items-center hover:bg-gray-50 py-2 px-2" href="pages?color={{ $color->name }}&{{ http_build_query(request()->except('color', 'page')) }}">
                        <span class="rounded-md h-5 w-5 mr-1" style="background-color: {{ $color->hex }};" class="block w-3 h-3 rounded-sm"></span>
                        <span>{{ $color->name }}</span>
                    </a>    
                    @endforeach
                </div>
            </div> 

        </div>
        </div>

        <div class="bg-slate-100 absolute bottom-0 left-0 p-6 right-0 border-t flex justify-between">
            <button>Reset</button>
            <button>Apply</button>
        </div>


    </div>
    </ul>
</div>