<nav {{ $attributes->merge(['class' => 'navbar navbar-expand-lg bg-light navbar-light']) }}>
    <div class="container-fluid">
        @isset($brand)
            <a class="navbar-brand" href="{{ $brand->attributes['url'] ?? '' }}">{{ $brand }}</a>
        @endisset
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#{{ $id }}" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="{{ $id }}">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                {{ $slot }}
            </ul>
        </div>
    </div>
</nav>