<div>
    <footer class="flex">
        <div class="flex">
            <div class="flex-row flex-grow">
                <a href="{{ route('home') }}">Startseite</a>
                <a href="{{ route('order') }}">Bestellen</a>
                <a href="{{ route('about') }}">Über mich</a>
                <a href="{{ route('contact') }}">Kontakt</a>
            </div>
            <div class="flex">
                <button class="img-btn" href="#" aria-label="Facebook"><img  class="hw-4" src="{{ asset('images/facebook.svg') }}" alt="Facebook"></button>
                <button class="img-btn" href="#" aria-label="Instagram"><img class="hw-4" src="{{ asset('images/instagram.svg') }}" alt="Instagram"></button>
            </div>
        </div>
        <p>&copy; {{ date('Y') }} Natalia's Tortenzauber. Alle Rechte vorbehalten.</p>
    </footer>
</div>