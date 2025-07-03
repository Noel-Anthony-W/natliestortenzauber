<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Natalias Tortenzauber' }}</title>
    @vite(['resources/css/main.scss', 'resources/js/app.js'])
</head>

<body>
    <header>
        <nav>
            <div>
                <a href="{{ route('home') }}">
                    <img class="logo" src="{{ asset('images/logo.jpg') }}" alt="Natalias Tortenzauber Logo">
                </a>
            </div>
            <div class="main-navigation flex">
                <x-nav-link :active="request()->is('/')" href="{{ route('home') }}">Start</x-nav-link>
                <x-nav-link :active="request()->is('order')" href="{{ route('order') }}">Bestellen</x-nav-link>
                <x-nav-link :active="request()->is('contact')" href="{{ route('contact') }}">Kontakt</x-nav-link>
                <x-nav-link :active="request()->is('about')" href="{{ route('about') }}">Über mich</x-nav-link>
                <x-nav-link :active="request()->is('reviews')" href="{{ route('reviews') }}">Bewertungen</x-nav-link>
            </div>
        </nav>
    </header>
    <main>
        {{ $slot }}
    </main>
    
     <footer>
        <div class="footer-container">
            <div class="footer-links">
                <a class="footer-link" href="{{ route('home') }}">Startseite</a>
                <a class="footer-link" href="{{ route('order') }}">Bestellen</a>
                <a class="footer-link" href="{{ route('contact') }}">Kontakt</a>
                <a class="footer-link" href="{{ route('about') }}">Über mich</a>
                <a class="footer-link" href="{{ route('reviews') }}">Bewertungen</a>
            </div>
            <div class="footer-socials">
                <a class="img-btn" href="https://www.instagram.com/natalia_donhauser/" aria-label="Facebook"><img  class="hw-3" src="{{ asset('images/facebook.svg') }}" alt="Facebook"></a>
                <a class="img-btn" href="https://www.instagram.com/natalia_donhauser/" aria-label="Instagram"><img class="hw-3" src="{{ asset('images/instagram.svg') }}" alt="Instagram"></a>
            </div>
        </div>
        <p>&copy; {{ date('Y') }} Natalia's Tortenzauber. Alle Rechte vorbehalten.</p>
    </footer>
</body>

</html>
