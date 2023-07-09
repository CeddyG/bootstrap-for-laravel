@props(['flush' => false, 'numbered' => false])

<ul {{ $attributes->class(['list-group', 'list-group-flush' => $flush, 'list-group-numbered' => $numbered]) }}>
    {{ $slot }}
</ul>