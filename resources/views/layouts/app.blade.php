<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'TangoExpress')</title>
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased">
    <div class="min-h-screen bg-gray-100 dark:bg-gray-900">
        @include('layouts.navigation')
        <!-- Page Content -->
        <div class="contentt">
            @yield('content')
        </div>

    </div>
    <!-- Footer -->
    <footer class="footer bg-dark text-white text-center py-3">
        <div class="container-footer">
            <p class="p-footer">&copy; 2025 TanGoExpress. Tous droits réservés.</p>
            <div class="social-links">
                <a href="https://wa.me/216674435215" target="_blank" class="social-icon">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/6/6b/WhatsApp.svg" alt="WhatsApp" class="social-icon-img">
                </a>
                <a href="https://www.facebook.com/TanGoExpress" target="_blank" class="social-icon">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/5/51/Facebook_f_logo_%282019%29.svg" alt="Facebook" class="social-icon-img">
                </a>
                <a href="https://www.instagram.com/luxe__prestige" target="_blank" class="social-icon">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/9/95/Instagram_logo_2022.svg" alt="Instagram" class="social-icon-img">
                </a>
            </div>
        </div>
    </footer>
</body>
</html>
