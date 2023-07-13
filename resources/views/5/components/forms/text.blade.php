@if(!$floatingLabel)
    <x-bs::forms.label :name="$name" :label="$label" />
@else    
    <div class="form-floating">
@endif

<input type="text" 
    {{ $attributes->class(['form-control', 'is-invalid' => $errors->has($name)]) }} 
    id="{{ $name }}" 
    name="{{ $name }}" 
    value="{{ $value }}"
    {{ $floatingLabel && !$attributes->has('placeholder') ? 'placeholder='.$label : '' }}>

@if($floatingLabel)
        <x-bs::forms.label :name="$name" :label="$label" />
    </div>
@endif

<x-bs::forms.error :name="$name" />