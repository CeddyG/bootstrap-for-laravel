<div class="form-check">
    <label class="form-check-label">
        <input type="radio" 
            {{ $attributes->class(['form-check-input', 'is-invalid' => $errors->has($name)]) }}
            name="{{ $name }}" 
            value="{{ $valueRadio }}"
            {{ $isChecked() ? 'checked' : '' }}>
        {{ $label }}
    </label>
</div>

<x-forms.error :name="$name" />