@props([
    'active' => false,
])
<button
    {{ $attributes->merge(['class' => $active ? 'nav-link-active' : 'preview-bg-transparent']) }}>{{ $slot }}</button>
