<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'AgriVision Garut')</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <header class="site-header">
        <h1>AgriVision Kabupaten Garut</h1>
        <p>Sistem Deteksi Hama Tanaman Berbasis Computer Vision</p>
    </header>

    @include('partials.navbar')

    <main class="container">
        @yield('content')
    </main>

    <footer class="site-footer">
        <p>&copy; 2026 AgriVision – Kelompok Tani Makmur Kabupaten Garut</p>
    </footer>

    <script src="{{ asset('js/app.js') }}"></script>
    @stack('scripts')
</body>
</html>
