@props(['href' => null, 'active' => false, 'disabled' => false])

<li {{ $attributes->class(['page-item', 'active' => $active, 'disabled' => $disabled]) }}>
    <a class="page-link" href="{{ $href }}">
        {{ $slot }}
    </a>
</li>