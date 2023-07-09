@props([
    'value'     => 0, 
    'valueMin'  => 0, 
    'valueMax'  => 0, 
    'color'     => null, 
    'striped'   => false, 
    'animated'  => false
])

@aware(['stacked' => false])

@if(!$stacked)
<div {{ $attributes->class(['progress']) }}>
@endif
    <div @class(['progress-bar', 'bg-'.$color => !is_null($color), 'progress-bar-striped' => $striped, 'progress-bar-animated' => $animated]) 
        style="width: {{ $value }}%"
        role="progressbar" 
        aria-valuenow="{{ $value }}" 
        aria-valuemin="{{ $valueMin }}" 
        aria-valuemax="{{ $valueMax }}"
        >
        {{ $slot }}
    </div>
@if(!$stacked)
</div>
@endif


