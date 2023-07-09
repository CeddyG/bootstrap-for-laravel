@php
    $colClass = 'col';
@endphp
    
@foreach ($attributes->whereStartsWith('order') as $key => $order)
    @php
        $colClass .= ' order'.str_replace('order', '', $key).'-'.$order
    @endphp
@endforeach
    
@foreach ($attributes->whereStartsWith('size') as $key => $size)
    @php
        $colClass .= ' col'.str_replace('size', '', $key).'-'.$size
    @endphp
@endforeach
    
@foreach ($attributes->whereStartsWith('offset') as $key => $offset)
    @php
        $colClass .= ' offset'.str_replace('offset', '', $key).'-'.$offset
    @endphp
@endforeach

<div {{ $attributes->merge(['class' => $colClass])
        ->whereDoesntStartWith('order')
        ->whereDoesntStartWith('size')
        ->whereDoesntStartWith('offset') }} >
    {{ $slot }}
</div>