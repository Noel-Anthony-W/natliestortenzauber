@props(['active' => false])
<a {{ $attributes->merge(['class' => $active ? 'nav-link-active' : '']) }}>{{ $slot }}</a>
