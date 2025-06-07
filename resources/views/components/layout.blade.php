<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Natalias Tortenzauber' }}</title>
    {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="{{ route('home') }}">Home</a></li>
                <li><a href="{{ route('about') }}">About</a></li>
                <li><a href="{{ route('contact') }}">Contact</a></li>
            </ul>
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