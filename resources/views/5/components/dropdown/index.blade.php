<div {{ $attributes->merge(['class' => 'dropdown']) }}>
    <button {{ $heading->attributes->class([
        'dropdown-toggle btn', 
        'btn-outline-'.$color => $outline, 
        'btn-'.$color => !$outline, 
        'btn-'.$size => !is_null($size)]) 
    }} type="button" data-bs-toggle="dropdown" aria-expanded="false">
        {{ $heading }}
    </button>
    <x-bs::dropdown.menu>
        {{ $slot }}
    </x-bs::dropdown.menu>
</div>