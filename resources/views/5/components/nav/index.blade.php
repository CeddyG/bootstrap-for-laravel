@props(['tabs' => false, 'pills' => false, 'fill' => false, 'justified' => false])

<ul {{ $attributes->class(['nav', 'nav-tabs' => $tabs, 'nav-pills' => $pills, 'nav-fill' => $fill, 'nav-justified' => $justified]) }}>
    {{ $slot }}
</ul>