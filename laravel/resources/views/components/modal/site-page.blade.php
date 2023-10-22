@props(['props'])
{{-- {{ $props->id }}
{{ $props->site_id }}


{{ $props->site_variation_id}} --}}

<div data-id="{{ $props->site_id }}" class="js-site-page-modal fixed hidden z-10 py-10 inset-0 overflow-y-auto">

    <div class="js-site-page-modal-bg fixed top-0 right-0 bottom-0 left-0 z-10 w-full" style="backdrop-filter: blur(4px); background-color: rgba(31,40,55,.6)!important;"></div>


    <div class="w-[80%] z-20 mx-auto relative bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all">

        <header class="flex justify-between items-center p-6">

            <div class="flex items-center">
                <img class="rounded-lg h-16 mr-2" src="https://b.stripecdn.com/site-srv/assets/img/v3/jobs_v2/thumbnails/stripe-6398a2d21ec3dcc6ee147a058b46de3624e50178e38541d0177b8cddeb845f87.jpg" />
                <span class="flex font-bold text-3xl">Stripe</span>
                <span class="sr-only">Stripe</span>
            </div>

            <div class="flex">

                <div class="flex">
                    <div class="h-12 w-12 cursor-pointer p-3 bg-gray-100 ">
                        <svg class="w-full h-full" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                            <path d="M13.5 3a.5.5 0 0 1 .5.5V11H2V3.5a.5.5 0 0 1 .5-.5h11zm-11-1A1.5 1.5 0 0 0 1 3.5V12h14V3.5A1.5 1.5 0 0 0 13.5 2h-11zM0 12.5h16a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 12.5z"></path>
                        </svg>
                        <span class="sr-only">Desktop View</span> 
                    </div>
                    <div class="h-12 w-12 cursor-pointer p-3">
                        <svg class="w-full h-full" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M14.004 0H5.996A1.996 1.996 0 0 0 4 1.996v16.007C4 19.106 4.894 20 5.996 20h8.007A1.997 1.997 0 0 0 16 18.004V1.996A1.996 1.996 0 0 0 14.004 0zM10 19c-.69 0-1.25-.447-1.25-1s.56-1 1.25-1 1.25.447 1.25 1-.56 1-1.25 1zm4-3H6V2h8v14z"></path></svg>
                        <span class="sr-only">Mobile View</span> 
                    </div>
                </div>
                |
                <div>
                    <div class="h-12 w-12 cursor-pointer p-3">
                    <svg class="w-full h-full" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                        <g>
                            <path fill="none" d="M0 0h24v24H0z"></path>
                            <path fill-rule="nonzero" d="M10 7a7 7 0 0 0 12 4.9v.1c0 5.523-4.477 10-10 10S2 17.523 2 12 6.477 2 12 2h.1A6.979 6.979 0 0 0 10 7zm-6 5a8 8 0 0 0 15.062 3.762A9 9 0 0 1 8.238 4.938 7.999 7.999 0 0 0 4 12z"></path>
                        </g>
                    </svg>
                    </div>

                    <div class="hidden">
                    <svg class="w-full h-full" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                        <g>
                            <path fill="none" d="M0 0h24v24H0z"></path>
                            <path d="M11.38 2.019a7.5 7.5 0 1 0 10.6 10.6C21.662 17.854 17.316 22 12.001 22 6.477 22 2 17.523 2 12c0-5.315 4.146-9.661 9.38-9.981z"></path>
                        </g>
                    </svg>
                    </div>
                </div>

            </div>

        </header>

        <section>

            @foreach($props->allImages as $variation)
                <img src="{{ $variation->image }}" />
            @endforeach

        </section>

    </div>
</div>