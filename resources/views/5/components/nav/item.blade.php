@props(['dropdown' => false])

<li {{ $attributes->class(['nav-item', 'dropdown' => $dropdown]) }}>
    {{ $slot }}
</li>