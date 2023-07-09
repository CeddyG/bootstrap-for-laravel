@props(['color' => 'primary', 'value'])

<button {{ $attributes->merge(['class' => 'btn btn-'.$color]) }} type="submit">{{ $value }}</button>