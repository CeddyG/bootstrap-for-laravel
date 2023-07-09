@props(['color' => 'info'])

<span {{ $attributes->merge(['class' => 'badge bg-'.$color]) }}>
    {{ $slot }}
</span>