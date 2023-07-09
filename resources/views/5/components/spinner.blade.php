@props(['color' => 'info', 'type'=>'border', 'size' => null]) 

@php
    $spinnerClass = 'spinner-'.$type.($size ? ' spinner-'.$type. '-'.$size : '').' text-'.$color
@endphp

<div {{ $attributes->merge(['class' => $spinnerClass]) }} role="status">
    <span class="visually-hidden">Loading...</span>
</div>


