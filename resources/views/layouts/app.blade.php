<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Kursus bahasa Inggris bergaransi online dan offline. Tersedia kelas Speaking, Grammar dan TOEFL.">
    <title>@yield('title', 'Kursus Bahasa Inggris Bergaransi | Englishvit')</title>

    <!-- Fonts and Assets (Vite) -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon-16x16.png') }}">

    <!-- TailwindCSS via Vite -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
        .font-sora {
            font-family: 'Sora', sans-serif;
            letter-spacing: -0.03em;
        }
    </style>
    
    <!-- Vite (Tailwind, Alpine, Lottie) -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-white overflow-x-hidden w-full">

    {{-- navbar desktop (md ke atas) --}}
    @include('components.navbar-desktop')

    {{-- navbar mobile (di bawah md) --}}
    @include('components.navbar-mobile')

    <main>
        @yield('content')
    </main>

    {{-- footer akan ditambah nanti --}}
    @include('components.bottom-navbar')


</body>
</html>