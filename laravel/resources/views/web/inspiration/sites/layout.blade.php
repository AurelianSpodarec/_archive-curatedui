<x-layouts.main>

    <div class="relative bg-center mb-20" style="background: url('{{ $site->thumbnail }}'); background-position: center center; ">

        <div class="lg:z-10 opacity-80 absolute top-0 right-0 bottom-0 left-0 bg-[#101523]"></div>

        <x-container>
        <div class="relative h-full py-12 lg:py-20 ">

            <div class="lg:flex lg:justify-between mb-12 z-20 relative">
                <div class="flex items-center text-gray-900 mb-6">
                    <img class="mr-4 rounded-3xl w-16 h-16 lg:w-28 lg:h-28 object-cover" src="{{ $site->logo }}" alt="{{ $site->name }} logo">
                    <div class="flex flex-col">
                        <h1 class="text-2xl lg:text-4xl text-white font-bold">{{ $site->name }}</h1>
                        <span>{{ $site->description }}</span>
                        <span class="text-white">eCommerce - Real Estate</span>
                    </div>
                </div>

                <div class="flex">
                    <div>
                        <span class="block text-white font-bold lg:text-right">Website</span>
                        <a class="text-blue-300" href="https://stripe.com">https://stripe.com</a>
                    </div>
                </div>
            </div><!-- end -->

          
            <div class="lg:absolute lg:bottom-0 lg:z-20 left-0 right-0">
            <div class="w-full max-w-xl px-2 pb-10 sm:px-0">
                <nav class="lg:flex space-x-1 rounded-xl bg-slate-900/60 p-1.5" role="tablist" aria-orientation="horizontal"> 
                    <x-inspiration.site.nav-link name="About" route="site.show" :site="$site" />
                    <x-inspiration.site.nav-link name="Pages" route="site.index.pages" :site="$site" />
                    <x-inspiration.site.nav-link name="Components" route="site.index.components" :site="$site" />
                    <x-inspiration.site.nav-link name="OG Images" route="site.index.og-images" :site="$site" />
                </nav>
            </div>
            </div>

        </div>
        </x-container>
        
    </div><!-- end -->


    <x-container>
    <div>
        @yield('content')
    </div>
    </x-container>


</x-layouts.main>