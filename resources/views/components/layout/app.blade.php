<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Evermore Mwase | IT Support & Applications</title>

    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>
<body>
    <header class="site-header">
        <a href="{{ url('/') }}" class="brand"><span class="brand-mark">EM</span><span>Evermore Mwase</span></a>
        <nav class="site-nav" aria-label="Primary navigation">
            <a href="#about">About</a><a href="#experience">Experience</a><a href="#skills">Skills</a><a href="#projects">Projects</a><a href="#contact">Contact</a>
        </nav>
    </header>

    <main>
        {{ $slot }}
    </main>

    @livewireScripts
</body>
</html>
