<!DOCTYPE html>
<html lang="en">

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
            <div class="main-navigation">
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
    {{-- <footer>
        {{ $footer }}
    </footer> --}}
</body>

</html>
