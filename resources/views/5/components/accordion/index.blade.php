<div {{ $attributes->class(['accordion', 'accordion-flush' => $flush])->merge(['id' => $idAccordion ?: null]) }}>
    {{ $slot }}
</div>