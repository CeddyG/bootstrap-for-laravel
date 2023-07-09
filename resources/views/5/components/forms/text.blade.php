@if(!$floatingLabel)
    <x-forms.label :name="$name" :label="$label" />
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
        <x-forms.label :name="$name" :label="$label" />
    </div>
@endif

<x-forms.error :name="$name" />