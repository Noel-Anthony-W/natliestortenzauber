@props(['primary' => true])
<button {{  $attributes->merge(['class' => ($primary ? 'btn-primary' : 'btn-secondary')]) }}>
    {{ $slot }}
</button>