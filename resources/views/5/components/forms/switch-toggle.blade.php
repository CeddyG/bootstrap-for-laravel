<div class="form-check form-switch">
    <label class="form-check-label">
        <input type="checkbox"
            role="switch"
            {{ $attributes->class(['form-check-input', 'is-invalid' => $errors->has($name)]) }}
            name="{{ $name }}"
            {{ $isChecked() ? 'checked' : '' }}>
        {{ $label }}
    </label>
</div>

<x-forms.error :name="$name" />