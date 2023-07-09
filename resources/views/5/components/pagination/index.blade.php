@props(['size'=> null])

<nav aria-label="Page navigation">
    <ul {{ $attributes->class(['pagination', 'pagination-'.$size => !is_null($size)]) }}>
        {{ $slot }}
    </ul>
</nav>