<form {{ $attributes }}>
    @if ($realMethod)
        @method($realMethod)
    @endif
    
    @csrf
    {{ $slot }}
</form>