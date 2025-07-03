<div>


    <div class="card-navigation">
        {{-- Beachte die Livewire-Direktiven wire:click und :active --}}
        <x-preview-button :active="$currentTag == $pictureTags::Pie" wire:click="setTag('{{ getEnumValue($pictureTags::Pie) }}')">Torten</x-preview-button>
        <x-preview-button :active="$currentTag == $pictureTags::Cake" wire:click="setTag('{{ getEnumValue($pictureTags::Cake) }}')">Kuchen</x-preview-button>
        <x-preview-button :active="$currentTag == $pictureTags::Others" wire:click="setTag('{{ getEnumValue($pictureTags::Others) }}')">Kleingebäck</x-preview-button>
    </div>
   <div id="main-cards" class="flex j-c-center align-center preview">
        <button class="img-btn" id="prevPageBtn" wire:click="getPrevious()" @if(!$canGoPrevious) disabled @endif>
            <img class="btn-img" src="{{ asset('images/chevron-left.svg') }}"></button>

        <div class="picture-container">
            @forelse($pictures as $picture)
                <img class="picture" src="{{ asset($picture->url) }}" alt="{{ $picture->alt }}">
            @empty
                <p>Noch keine Bilder vorhanden.</p>
            @endforelse
        </div>

        <button class="img-btn" id="nextPageBtn" wire:click="getNext()" @if(!$canGoNext) disabled @endif>
            <img class="btn-img" src="{{ asset('images/chevron-right.svg') }}" /></button>
    </div>
</div>
