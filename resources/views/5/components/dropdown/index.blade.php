@props(['color' => 'info', 'outline' => false, 'size' => null])

@php
    $btnClass = 'dropdown-toggle btn btn-'.($outline ? 'outline-' : '').$color.(is_null($size) ? '' : ' btn-'.$size);
@endphp

<div {{ $attributes->merge(['class' => 'dropdown']) }}>
    <button {{ $heading->attributes->merge(['class' => $btnClass]) }} type="button" data-bs-toggle="dropdown" aria-expanded="false">
        {{ $heading }}
    </button>
    <x-dropdown.menu>
        {{ $slot }}
    </x-dropdown.menu>
</div>