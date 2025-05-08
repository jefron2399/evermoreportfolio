<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Evermore's Portfolio</title>
    {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}

    {{-- <link rel="stylesheet" href="{{ asset('css/custom.css') }}"> --}}

    <link rel="stylesheet" href="{{ secure_asset('css/custom.css') }}">
    @livewireStyles
</head>
<body class="bg-gray-900 text-white">
    <header class="flex justify-between items-center p-6 bg-gray-800">
        <h1 class="text-3xl font-bold">Evermore's Portfolio</h1>
        <nav>
            <a href="#about" class="mx-4 hover:text-gray-400">About</a>
            <a href="#skills" class="mx-4 hover:text-gray-400">Skills</a>
            <a href="#projects" class="mx-4 hover:text-gray-400">Projects</a>
            <a href="#contact" class="mx-4 hover:text-gray-400">Contact</a>
        </nav>
    </header>

    <main>
        {{ $slot }}
    </main>

    @livewireScripts
</body>
</html>