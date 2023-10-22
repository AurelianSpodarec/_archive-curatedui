<div class="flex">
            
    <div class="flex space-x-2 items-center mr-6">
        <x-inspiration.filter.filter-menu.item name="Sites" route="site.index" />
        <x-inspiration.filter.filter-menu.item name="Pages" route="pages.index" />
        <x-inspiration.filter.filter-menu.item name="Components" route="components.index" />
        <x-inspiration.filter.filter-menu.item name="OG Images" route="og-images.index" />
    </div>


    @if(Route::currentRouteName() === "pages.index" || Route::currentRouteName() === "components.index")
    <div class="js-dropdown-wrap">
{{-- 
        <button class="js-dropdown-button flex items-center justify-center w-full rounded-2xl border border-gray-300 shadow-sm  py-2 px-5 bg-white text-sm font-medium text-gray-700 hover:bg-gray-50">
            <div class="flex items-center">
                <div>All Pages</div>
                <svg class="w-6 h-6" focusable="false" aria-hidden="true" viewBox="0 0 24 24" data-testid="ArrowDropDownIcon"><path d="M7 10l5 5 5-5z"></path></svg>
            </div>
        </button> --}}

        <button class="js-dropdown-button inline-flex w-full justify-center rounded-md bg-black bg-opacity-20 px-4 py-2 text-sm font-medium text-white hover:bg-opacity-30 focus:outline-none focus-visible:ring-2 focus-visible:ring-white focus-visible:ring-opacity-75" id="headlessui-menu-button-:R6:" type="button" aria-haspopup="true" aria-expanded="false">
            Options
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" class="ml-2 -mr-1 h-5 w-5 text-violet-200 hover:text-violet-100">
                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clipRule="evenodd"></path>
            </svg>
        </button>

        <div class="js-dropdown-menu invisible transition-opacity duration-150 ease-in-out opacity-0 z-10 bg-white shadow-2xl p-8 absolute left-0 right-0 overflow-y-auto max-h-[500px] top-[60px]">
            <div class="">
                <h5 class="font-bold mb-2">General</h5>
                <ul class="grid grid-cols-6 gap-4">
                @foreach(\App\Models\Site\SiteCategoryPage::all() as $categoryPage)
                <x-inspiration.filter.inspiration-item :props="$categoryPage" />
                    {{-- <x-inspiration.filter.inspiration-item
                        url="{{ $categoryPage->name }}"
                        thumbnail="https://dodropshipping.com/wp-content/uploads/2020/08/stripe-homepage-1024x563.png"
                        name="{{ $categoryPage->name }}"
                    /> --}}
                @endforeach 
                </ul>
            </div>
        </div>

    </div>
    @endif


</div>