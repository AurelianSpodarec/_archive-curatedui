<x-container>
<div class="flex justify-between mb-8 relative">


    <div class="flex">
        <span class="text-3xl font-bold mr-3">Component:</span><span class="text-2xl">{{ request()->segment(count(request()->segments())) }}</span>
    </div>


    <div class="flex ">
        {{-- type --}}
        <div class="js-dropdown-wrap shrink-0 ml-2 relative inline-block text-left">
            <button class="js-dropdown-button inline-flex justify-center w-full rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-sm font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-100 focus:ring-indigo-500">Type: All</button>
            <div class="js-dropdown-menu origin-top-right absolute left-0 mt-2 w-56 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 focus:outline-none">
                <a href="" class="block px-4 py-2 text-sm text-gray-700">Brochure</a>
                <a href="" class="block px-4 py-2 text-sm text-gray-700">Ecommerce</a>
                <a href="" class="block px-4 py-2 text-sm text-gray-700">WebApplication</a>
                <a href="" class="block px-4 py-2 text-sm text-gray-700">Saas</a>
            </div>
        </div>

        <div class="js-dropdown-wrap shrink-0 ml-2 relative inline-block text-left">
            <button class="js-dropdown-button inline-flex justify-center w-full rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-sm font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-100 focus:ring-indigo-500">Device: Desktop</button>
            <div class="js-dropdown-menu origin-top-right absolute left-0 mt-2 w-56 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 focus:outline-none">
                <a href="" class="block px-4 py-2 text-sm text-gray-700">Desktop</a>
                <a href="" class="block px-4 py-2 text-sm text-gray-700">Mobile</a>
            </div>
        </div>

        <div class="js-dropdown-wrap shrink-0 ml-2 relative inline-block text-left">
            <button class="js-dropdown-button inline-flex justify-center w-full rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-sm font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-100 focus:ring-indigo-500">Mode: Light</button>
            <div class="js-dropdown-menu origin-top-right absolute left-0 mt-2 w-56 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 focus:outline-none">
                <a href="" class="block px-4 py-2 text-sm text-gray-700">Dark Mode</a>
                <a href="" class="block px-4 py-2 text-sm text-gray-700">Light Mode</a>
            </div>
        </div>

        <div class="js-dropdown-wrap shrink-0 ml-2 relative inline-block text-left z-10">
            <button class="js-dropdown-button inline-flex justify-center w-full rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-sm font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-100 focus:ring-indigo-500">
                Color: <span style="background-color: orange;" class="w-3 h-3 rounded-sm"></span> blue
            </button>
            <div class="js-dropdown-menu origin-top-right absolute left-0 mt-2 w-56 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 focus:outline-none">
                {{-- @foreach (App\Models\BrandColor::all() as $color)
                    <li class="flex px-4 py-2 text-sm text-gray-700"><span style="background-color: {{ $color->hex }};" class="block w-3 h-3 rounded-sm"></span>{{ $color->name }}</li>
                @endforeach --}}
            </div>
        </div>

        


        <nav class="js-dropdown-wrap shrink-0 ml-2 flex mb-12 w-full">

            <div class="js-dropdown-button cursor-pointer inline-block space-y-2">
                <div class="w-8 h-0.5 bg-gray-600"></div>
                <div class="w-8 h-0.5 bg-gray-600"></div>
                <div class="w-8 h-0.5 bg-gray-600"></div>
            </div>
        {{--  --}}
            
            {{-- <ul class="grid mt-4 gap-2">
                <a class="bg-gray-100 hover:bg-gray-200 rounded-md p-2 flex items-center justify-between w-full text-sm font-medium text-gray-700 hover:text-gray-900" >
                {{ $componentCategory->name }}
                </a>
            </ul> --}}

            <ul class="js-dropdown-menu invisible transition-opacity duration-150 ease-in-out opacity-0 z-10 bg-white shadow-2xl p-8 absolute right-0 overflow-y-auto max-h-[500px] max-w-[1100px] top-[60px]">
                <li class="">
                    <h5 class="font-bold mb-2">General</h5>
                    <ul class="grid grid-cols-5 gap-3">
                    @foreach(\App\Models\componentCategory::all() as $componentCategory)
                    {{-- href="{{ url('components/' . $componentCategory->slug) }} --}}
                        <x-inspiration.filter.inspiration-item
                            url="{{ 'components/' . $componentCategory->slug }}"
                            thumbnail="https://dodropshipping.com/wp-content/uploads/2020/08/stripe-homepage-1024x563.png"
                            name="{{ $componentCategory->name }}"
                        />
                     
                    @endforeach 
                    </ul>
                </li>
            </ul><!-- /sub-menu -->
    
        {{-- --}}
        </nav>
    </div>

    

</div>
</x-container>