@if(!$floatingLabel)
    <x-bs::forms.label :name="$name" :label="$label" />
@else    
    <div class="form-floating">
@endif

<textarea rows="3"
    {{ $attributes->class(['form-control', 'is-invalid' => $errors->has($name)]) }} 
    id="{{ $name }}" 
    name="{{ $name }}"
    {{ $floatingLabel && !$attributes->has('placeholder') ? 'placeholder='.$label : '' }}>{{ $value }}</textarea>

@if($floatingLabel)
        <x-bs::forms.label :name="$name" :label="$label" />
    </div>
@endif

<x-bs::forms.error :name="$name" />