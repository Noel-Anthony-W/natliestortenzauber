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
                <img src="{{ asset('images/hero.svg') }}" alt="Hero Image" class="hero-img">
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
                    <div class="card-navigation">
                        <x-preview-button :active="true">Torten</x-preview-button>
                        <x-preview-button :active="false">Kuchen</x-preview-button>
                        <x-preview-button :active="false">Kleingebäck</x-preview-button>
                    </div>

                    <div id="main-cards" class="flex j-c-center align-center  preview">
                        <button class="img-btn">
                            <img class="hw-4" src="{{ asset('images/chevron-left.svg') }}"></button>
                        <div class="flex gap-lg">
                            <div class="filler"> d</div>
                            <div class="filler"> d</div>
                            <div class="filler"> d</div>
                        </div>
                        <button class="img-btn">
                            <img class="hw-4" src="{{ asset('images/chevron-right.svg') }}" /></button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="reviews">
        <div class="flex j-c-center align-center flex-grow">
            <div class="flex-row j-c-center align-center flex-grow">
                <h3 class="h2-font-size h-center"> Andere sind auch überzeugt</h3>
                <div class="flex j-c-center align-center gap-xl flex-grow">
                    @foreach ($reviews as $review)
                        {{-- TODO: ersetzen sobald datenbankmodel erstellt ist --}}
                        <x-review-card :stars="$review['stars']" :name="$review['name']" :heading="$review['heading']" :text="$review['text']"
                            :url="$review['image_url']" />
                    @endforeach
                </div>
            </div>
        </div>
    </section>
</x-layout>
