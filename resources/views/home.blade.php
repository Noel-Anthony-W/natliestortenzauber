<x-layout>
    @section('title', 'Natalias Tortenzauber - Startseite')
    <section id="hero">
        <div id="cta" class="hero">
            <div class="hero-cta">
                <div>
                    <h1 class="h1">Torten die für</h1>
                    <h1 class="h1 offset-2rem">Magische Momente Sorgen</h1>
                </div>
                <h2>Hier finden Sie die besten Torten für jeden Anlass!</h2>

                <div class="hero-buttons">
                    <x-button href="{{ route('order') }}" >Jetzt Bestellen</x-button>
                    <x-button href="{{ route('order') }}" :primary="false">Kuchen entdecken</x-button>                    
                </div>
            </div>
            <div class="hero-image">
                <img src="{{ asset('images/hero.jpg') }}" alt="Hero Image" class="hero-img">
        </div>
    </section>
<section>    
    <div>
        <h2 class="h2">Entdecke meine Vielfalt</h2>
        <a>

        </a>
    </div>

</section>

</x-layout>