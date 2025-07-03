@props(['stars' => 0, 'name', 'heading', 'text', 'url'])
<div class="flex-row review-container">
    <div class="flex align-center gap-sm">
        {{-- Stars --}}
        @for ($i = 0; $i <= 5; $i++)
            <x-cake class="{{ $i <= $stars ? 'cake-icon-filled' : 'cake-icon' }}" />
        @endfor
    </div>
    <div>
        {{-- NAME --}}
        <p class="h6-font-size weight-medium mb-xs">{{ $name }} </p>
        {{-- Überschrift --}}
        <p class="h5-font-size weight-bold">{{ $heading }} </p>

    </div>
    {{-- Text --}}
    <p class="p-font-size">{{ $text }} </p>

    {{-- Bild --}}
    <img src={{ $url }} alt="Review Image">
</div>
