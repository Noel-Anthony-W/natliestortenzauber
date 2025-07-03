<x-layout>
    @section('title', 'Natalias Tortenzauber - Startseite')
    <section id="hero">
        <div id="cta" class="hero">
            <div class="hero-cta">
                <div>
                    <h1 class="h1-font-size mb-xs weight-bold">Torten die für magische Momente Sorgen</h1>
                    <h2 class="weight-medium h4-font-size mt-md">Verwöhne dich mit Kuchen, Torten und Kleingebäck,
                        die mit Liebe von Hand gebacken werden.</h2>
                </div>

                <div class="hero-buttons">
                    <x-button href="{{ route('order') }}" class="h5-font-size">Jetzt Bestellen</x-button>
                    <x-button href="{{ route('order') }}" class="h5-font-size" :primary="false">Kuchen
                        entdecken</x-button>
                </div>
            </div>
            <div class="hero-image">
                <img src="{{ asset('images/hero.svg') }}" alt="Hero Image" >
            </div>
    </section>
    <section id="discover-cakes">
        <div>
            <h3 class="h2-font-size mb-lg ">Entdecke meine Vielfalt</h3>

            <div class="card-container">
                {{-- TODO:  Add preview of cakes and correct link --}}
                {{-- <a class="card-link-overlay" href="{{ route('order') }}" aria-label="Explore variety details">
                </a> --}}
                <div class="card-content bg-primary-light">
                    <!-- TODO: Add Preview for Cakes-->
                    <livewire:cake-picture-gallery :pictures="$pictures" />
                </div>
            </div>
        </div>
    </section>
    <section id="reviews">
        <div class="flex j-c-center align-center flex-grow reviews">
            <div class="flex-row j-c-center align-center flex-grow">
                <h3 class="h2-font-size h-center"> Andere sind auch überzeugt</h3>
                <div class="reviews">
                    @foreach ($reviews as $review)
                        {{-- TODO: ersetzen sobald datenbankmodel erstellt ist --}}
                        <x-review-card :stars="$review['stars']" :name="$review['name']" :heading="$review['heading']" :text="$review['text']"
                            :url="$review['image_url']" />
                    @endforeach
                </div>
            </div>
        </div>
    </section>
<section id="drive">    
    <script defer src="https://maps.googleapis.com/maps/api/js?key={{ config('services.maps.api_key') }}&callback=console.debug&libraries=maps,marker&v=beta">
    </script>
        <div >
            <h3 class="h2-font-size h-center">Mein Standort</h3>
            <div class="flex flex-grow">
               
                <div class="flex-grow h-40" >
                    <gmp-map class="map-size-25" center="49.4403,11.8633" zoom="8" map-id="DEMO_MAP_ID">
                          <gmp-advanced-marker position="49.4403,11.8633" title="My location"></gmp-advanced-marker>
                    </gmp-map>
                </div>
            </div>
            <p>Genauere Standort daten gibt es bei einer <a class="a-link" href="{{ route('order') }}">Bestellung</a></p>
        </div>
</section>
</x-layout>
