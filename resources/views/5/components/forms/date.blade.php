<x-forms.label :name="$name" :label="$label" />
<input type="date" {{ $attributes->class(['form-control', 'is-invalid' => $errors->has($name)]) }} id="{{ $name }}" name="{{ $name }}" value="{{ $value }}">

<x-forms.error :name="$name" />