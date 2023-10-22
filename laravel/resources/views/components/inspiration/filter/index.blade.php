<section class="flex relative mt-12 mb-12">
<div class="flex justify-between items-center w-full">
        

    {{-- TODO: on mobile dropdown --}}
    <x-inspiration.filter.filter-menu.index />
    {{-- <div>
        <div class="w-full max-w-md px-2 py-16 sm:px-0">
            <button type="button" style="position:absolute;width:1px;height:1px;padding:0;margin:-1px;overflow:hidden;clip:rect(0, 0, 0, 0);white-space:nowrap;border-width:0;display:none"></button>
            <div class="flex space-x-1 rounded-xl bg-pink-900/20 p-1" role="tablist" aria-orientation="horizontal">
                <button class="w-full rounded-lg px-6 py-2.5 text-sm font-medium leading-5 text-pink-700 ring-white ring-opacity-60 ring-offset-2 ring-offset-pink-400 focus:outline-none focus:ring-2 bg-white shadow" id="headlessui-tabs-tab-:R2q:" role="tab" type="button" aria-selected="true" tabindex="0" aria-controls="headlessui-tabs-panel-:R1l6:">Recent</button>
                <button class="w-full rounded-lg px-6 py-2.5 text-sm font-medium leading-5 text-slate-500 ring-white ring-opacity-60 ring-offset-2 ring-offset-pink-400 focus:outline-none focus:ring-2 text-black hover:bg-white/[0.12] hover:text-slate-700" id="headlessui-tabs-tab-:R4q:" role="tab" type="button" aria-selected="false" tabindex="-1">Popular</button>
                <button class="w-full rounded-lg px-6 py-2.5 text-sm font-medium leading-5 text-slate-500 ring-white ring-opacity-60 ring-offset-2 ring-offset-pink-400 focus:outline-none focus:ring-2 text-black hover:bg-white/[0.12] hover:text-slate-700" id="headlessui-tabs-tab-:R6q:" role="tab" type="button" aria-selected="false" tabindex="-1">Trending</button>
            </div>
            
         </div>
    </div> --}}

    <div class="flex">
      
        {{-- TODO: on mobile, should go inside the filter with all  --}}
        <x-inspiration.filter.device-switcher.index />
        <div class="hidden sm:block mx-6 lg:mx-4 w-px h-full bg-gray-200"></div>
        <x-inspiration.filter.theme-switcher.index />

        {{-- <x-inspiration.filter.extra-filtering.index /> --}}
    </div>
    

</div>
</section>





            
        
 
            
 
            {{-- <div>
                @if(request('theme') === 'light' || !request('theme') ) 
                    <li class="border-2 mr-4 bg-white rounded-lg block px-4 py-2 text-sm text-gray-700">
                    <a class="group flex items-center cursor-pointer" href="pages?theme=dark&{{ http_build_query(request()->except('theme', 'page')) }}">
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
                    </li>
                @elseif(request('theme') === 'dark')
                    <li class="border-2 mr-4 bg-white rounded-lg block px-4 py-2 text-sm text-gray-700">
                    <a class="group flex items-center cursor-pointer" href="pages?theme=light&{{ http_build_query(request()->except('theme', 'page')) }}">
                    
                        <svg class="transition ease-in-out duration-150 group-hover:hidden w-6 h-6 mr-2" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                            <path d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278z"></path>
                            <path d="M10.794 3.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387a1.734 1.734 0 0 0-1.097 1.097l-.387 1.162a.217.217 0 0 1-.412 0l-.387-1.162A1.734 1.734 0 0 0 9.31 6.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387a1.734 1.734 0 0 0 1.097-1.097l.387-1.162zM13.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732l-.774-.258a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L13.863.1z"></path>
                        </svg>
                        <svg class="transition ease-in-out duration-150 group-hover:block hidden w-6 h-6 mr-2" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                            <path d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278zM4.858 1.311A7.269 7.269 0 0 0 1.025 7.71c0 4.02 3.279 7.276 7.319 7.276a7.316 7.316 0 0 0 5.205-2.162c-.337.042-.68.063-1.029.063-4.61 0-8.343-3.714-8.343-8.29 0-1.167.242-2.278.681-3.286z"></path>
                            <path d="M10.794 3.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387a1.734 1.734 0 0 0-1.097 1.097l-.387 1.162a.217.217 0 0 1-.412 0l-.387-1.162A1.734 1.734 0 0 0 9.31 6.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387a1.734 1.734 0 0 0 1.097-1.097l.387-1.162zM13.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732l-.774-.258a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L13.863.1z"></path>
                        </svg> 
                        Dark
                    </a>
                    </li>
                @endif
            </div> --}}

          
            {{-- <div class="relative flex origin-top-right border rounded-l-lg rounded-r-lg rounded-md shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none">
                    
                <div class="border-2  rounded-l-lg border-pink-600 bg-pink-200 flex px-4 py-1 text-sm text-gray-700">
                <a href="pages?device=mobile&{{ http_build_query(request()->except('device', 'page')) }}">
                
                    <div class="h-6 w-6 cursor-pointer p-1">
                        <svg class="w-full h-full" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M14.004 0H5.996A1.996 1.996 0 0 0 4 1.996v16.007C4 19.106 4.894 20 5.996 20h8.007A1.997 1.997 0 0 0 16 18.004V1.996A1.996 1.996 0 0 0 14.004 0zM10 19c-.69 0-1.25-.447-1.25-1s.56-1 1.25-1 1.25.447 1.25 1-.56 1-1.25 1zm4-3H6V2h8v14z"></path></svg>
                        <span class="sr-only">Mobile View</span> 
                    </div> 
                </a>
                </div>
                <div class="flex px-4 py-1 text-sm text-gray-700">
                <a href="pages?device=desktop&{{ http_build_query(request()->except('device', 'page')) }}">
                    <div class="h-6 w-6 cursor-pointer p-1">
                        <svg class="w-full h-full" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                            <path d="M13.5 3a.5.5 0 0 1 .5.5V11H2V3.5a.5.5 0 0 1 .5-.5h11zm-11-1A1.5 1.5 0 0 0 1 3.5V12h14V3.5A1.5 1.5 0 0 0 13.5 2h-11zM0 12.5h16a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 12.5z"></path>
                        </svg>
                        <span class="sr-only">Desktop View</span> 
                    </div>
                </a>
                </div>
            </div> --}}



        {{-- <div class="js-dropdown-wrap relative">
            <button class="js-dropdown-button flex items-center justify-center w-full rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-sm font-medium text-gray-700 hover:bg-gray-50">
                <div>Device: 
                    @if(request('device') === 'mobile') 
                    Mobile
                    @else
                    Desktop
                    @endif
                </div>
            </button>
            <div class="js-dropdown-menu origin-top-right absolute left-0 mt-2 w-56 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 focus:outline-none">
                    
                <li class="flex px-4 py-2 text-sm text-gray-700">
                <a href="pages?device=mobile&{{ http_build_query(request()->except('device', 'page')) }}">
                    Mobile
                </a>
                </li>
                <li class="flex px-4 py-2 text-sm text-gray-700">
                <a href="pages?device=desktop&{{ http_build_query(request()->except('device', 'page')) }}">
                    Desktop
                </a>
                </li>
            </div>
        </div> --}}