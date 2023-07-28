<div {{ $attributes->class([
        'spinner-'.$type,
        'spinner-'.$type.'-'.$size => !is_null($size),
        'text-'.$color
    ]) }} role="status">
    <span class="visually-hidden">Loading...</span>
</div>


