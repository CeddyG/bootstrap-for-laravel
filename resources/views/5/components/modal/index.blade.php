@isset($button)
    @php
        $btnClass = 'btn btn-'.($button->attributes['outline'] ? 'outline-' : '').($button->attributes['color'] ?: 'info').($button->attributes['size'] ? ' btn-'.$button->attributes['size'] : '');
    @endphp

    <button {{ $button->attributes->merge(['class' => $btnClass])->filter(fn ($value, $key) => $key != 'outline' && $key != 'color' && $key != 'size') }} type="button" data-bs-toggle="modal" data-bs-target="#{{ $attributes->get('id') }}">
        {{ $button }}
    </button>
@endisset

<div {{ $attributes->class(['modal fade']) }} tabindex="-1" aria-hidden="true">
    <div @class([
        'modal-dialog', 
        'modal-dialog-scrollable'                       => $dialogScrollable,
        'modal-dialog-centered'                         => $centered,
        'modal-'.$size                                  => isset($size),
        'modal-fullscreen'                              => $fullscreen,
        'modal-fullscreen-'.$fullscreenBelow.'-down'    => isset($fullscreenBelow)
    ])>
        <div class="modal-content">
            {{ $slot }}
        </div>
    </div>
</div>