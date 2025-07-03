@props(['prictures' => [], 'class' => ''])
<div class="{{ $class }}">
    @forelse($prictures as $picture)
            <img src="{{ asset($picture->url) }}" alt="{{ $picture->alt }}">                 
    @empty        
            <p>Noch keine Bilder vorhanden.</p>
    @endforelse
</div>