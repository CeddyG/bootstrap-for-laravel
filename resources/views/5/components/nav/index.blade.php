<ul {{ $attributes->class(['nav', 'nav-tabs' => $tabs, 'nav-pills' => $pills, 'nav-fill' => $fill, 'nav-justified' => $justified]) }}>
    {{ $slot }}
</ul>