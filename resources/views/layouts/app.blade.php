<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Kursus bahasa Inggris bergaransi online dan offline. Tersedia kelas Speaking, Grammar dan TOEFL.">
    <title>@yield('title', 'Kursus Bahasa Inggris Bergaransi | Englishvit')</title>

    <!-- Google Fonts: Inter & Sora -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Sora:wght@100..800&display=swap" rel="stylesheet">

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
</head>
<body class="bg-white">

    {{-- navbar desktop (md ke atas) --}}
    @include('components.navbar-desktop')

    {{-- navbar mobile (di bawah md) --}}
    @include('components.navbar-mobile')

    <main>
        @yield('content')
    </main>

    {{-- footer akan ditambah nanti --}}

</body>
</html>