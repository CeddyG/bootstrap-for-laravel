@php
    $containerClass = 'container'.(isset($size) ? '-'.$size : '');
@endphp

<div {{ $attributes->merge(['class' => $containerClass])->whereDoesntStartWith('size') }}>
    {{ $slot }}
</div>