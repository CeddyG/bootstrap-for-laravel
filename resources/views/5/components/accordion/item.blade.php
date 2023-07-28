@props([
    'heading',
    'collapse',
])

@aware(['idAccordion', 'alwaysOpen'])

<div {{ $attributes->merge(['class' => 'accordion-item']) }}>
    <h2 {{ $heading->attributes->class(['accordion-header']) }}>
        <button @class(['accordion-button', 'collapsed' => $show]) type="button" data-bs-toggle="collapse" data-bs-target="#{{ $id }}" aria-expanded="true" aria-controls="{{ $id }}">
            {{ $heading }}
        </button>
    </h2>
    <div {{ $collapse->attributes->class(['accordion-collapse collapse', 'show' => $show]) }} id="{{ $id }}" @if(!$alwaysOpen)data-bs-parent="#{{ $idAccordion }}"@endif>
        <div class="accordion-body">
            {{ $collapse }}
        </div>
    </div>
</div>