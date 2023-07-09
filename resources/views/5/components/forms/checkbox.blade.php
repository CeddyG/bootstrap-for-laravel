<div class="form-check">
    <label class="form-check-label">
        <input type="checkbox" 
            {{ $attributes->class(['form-check-input', 'is-invalid' => $errors->has($name)]) }}
            name="{{ $name }}" 
            value="{{ $valueCheckbox }}"
            {{ $isChecked() ? 'checked' : '' }}>
        {{ $label }}
    </label>
</div>

<x-forms.error :name="$name" />