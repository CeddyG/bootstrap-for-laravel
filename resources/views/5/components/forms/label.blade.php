@if($label)
    <label {{ $name ? 'for='.$name : '' }} {{ $attributes->class(['form-label', 'text-danger' => $errors->has($name)]) }}>
        {{ $label }}
    </label>
@endif