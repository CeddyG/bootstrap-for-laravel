<x-bs::forms.label :name="$name" :label="$label" />
<input type="email" {{ $attributes->class(['form-control', 'is-invalid' => $errors->has($name)]) }} id="{{ $name }}" name="{{ $name }}" value="{{ $value }}">

<x-bs::forms.error :name="$name" />