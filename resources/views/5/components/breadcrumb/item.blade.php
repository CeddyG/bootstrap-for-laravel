<li {{ $attributes->class(['breadcrumb-item', 'active' => $current]) }} @if($current)aria-current="page"@endif>
    {{ $slot }}
</li>