<x-bs::forms.label :name="$name" :label="$label" />
<input type="range" {{ $attributes->class(['form-range', 'is-invalid' => $errors->has($name)]) }} id="{{ $name }}" name="{{ $name }}" value="{{ $value }}">

<x-bs::forms.error :name="$name" />