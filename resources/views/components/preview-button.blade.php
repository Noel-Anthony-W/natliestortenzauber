@props([
    'active' => false,
    'tag' => getEnumValue(App\PictureTags::Cake) ,
])
<button
    {{ $attributes->merge(['class' => $active ? 'nav-link-active' : 'preview-bg-transparent']) }}>{{ $slot }}</button>
