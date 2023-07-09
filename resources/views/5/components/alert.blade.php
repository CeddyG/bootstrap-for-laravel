@props(['color' => 'info', 'message'])

<div {{ $attributes->merge(['class' => 'alert alert-'.$color]) }} role="alert">
    {{ $slot }}
</div>