<x-forms.label :name="$name" :label="$label" />
<select {{ $attributes->class(['form-select', 'is-invalid' => $errors->has($name)]) }} id="{{ $name }}" name="{{ $name }}">
    @foreach ($options as $optValue => $option)
    <option {{ $isSelected($optValue) ? 'selected="selected"' : '' }} value="{{ $optValue }}">
        {{ $option }}
    </option>
    @endforeach
</select>

<x-forms.error :name="$name" />