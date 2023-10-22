@php
    $device = request('device');
@endphp

<div class="inline-flex flex-wrap items-center justify-center w-auto p-1 bg-white border rounded space-x-1">
    <x-inspiration.filter.device-switcher.item
        url="mobile"
        name="Mobile"
        icon="mobile"
        :active="$device === 'mobile'"
    />
    <x-inspiration.filter.device-switcher.item
        url="desktop"
        name="Desktop"
        icon="desktop"
        :active="$device === 'desktop'"
    />
</div>