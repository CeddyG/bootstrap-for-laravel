@aware(['dropdown' => false])
@props(['disabled' => false, 'active' => false])

<a 
    {{ $attributes->class(['nav-link', 'active' => $active, 'dropdown-toggle' => $dropdown, 'disabled' => $disabled]) }} 
    {!! $dropdown ? 'role="button" data-bs-toggle="dropdown" aria-expanded="false"' : '' !!}
    {!! $active ? 'aria-current="page"' : '' !!}
    >
    {{ $slot }}
</a>