@props(['name', 'icon', 'url', 'active'])


{{-- {{ dd()}} --}}
<a href="{{ Request::getPathInfo() }}?device={{ $url, http_build_query(request()->except('device', 'page')) }}"  {{ $attributes->class(['w-8 h-8 rounded flex items-center justify-center focus:outline-none hover:bg-slate-100', 
	'bg-slate-100 text-slate-700' => $active,
	'text-slate-300' => !$active
]) }}>
    @if($icon === 'mobile')
        <span class="sr-only">Switch to desktop theme</span>
        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M10.6666 1.3335H5.33331C4.19998 1.3335 3.33331 2.20016 3.33331 3.3335V12.6668C3.33331 13.8002 4.19998 14.6668 5.33331 14.6668H10.6666C11.8 14.6668 12.6666 13.8002 12.6666 12.6668V3.3335C12.6666 2.20016 11.8 1.3335 10.6666 1.3335ZM7.99998 12.0002C7.59998 12.0002 7.33331 11.7335 7.33331 11.3335C7.33331 10.9335 7.59998 10.6668 7.99998 10.6668C8.39998 10.6668 8.66665 10.9335 8.66665 11.3335C8.66665 11.7335 8.39998 12.0002 7.99998 12.0002Z" fill="currentColor"></path>
        </svg>
    @else
        <span class="sr-only">Switch to mobile theme</span>
        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M12.6667 2H3.33334C2.20001 2 1.33334 2.86667 1.33334 4V9.33333C1.33334 10.4667 2.20001 11.3333 3.33334 11.3333H7.33334V12.6667H4.66668C4.26668 12.6667 4.00001 12.9333 4.00001 13.3333C4.00001 13.7333 4.26668 14 4.66668 14H11.3333C11.7333 14 12 13.7333 12 13.3333C12 12.9333 11.7333 12.6667 11.3333 12.6667H8.66668V11.3333H12.6667C13.8 11.3333 14.6667 10.4667 14.6667 9.33333V4C14.6667 2.86667 13.8 2 12.6667 2Z" fill="currentColor"></path>
        </svg>
    @endif
</a>