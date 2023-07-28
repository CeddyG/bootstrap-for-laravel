<button {{ $attributes->class([
        'btn', 
        'btn-outline-'.$color   => $outline,
        'btn-'.$color           => !$outline,
        'btn-'.$size            => !is_null($size)
    ]) }} type="button">
    {{ $slot }}
</button>