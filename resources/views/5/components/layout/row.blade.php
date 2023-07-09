@php
    $rowClass = 'row';
@endphp
    
@foreach ($attributes->whereStartsWith('nb-cols') as $key => $nbCol)
    @php
        $rowClass .= ' row-cols'.str_replace('nb-cols', '', $key).'-'.$nbCol
    @endphp
@endforeach

<div {{ $attributes->merge(['class' => $rowClass])->whereDoesntStartWith('nb-cols') }} >
    {{ $slot }}
</div>