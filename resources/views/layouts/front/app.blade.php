<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Pondok Pesantren Roudlotussalam</title>
        <link rel="icon" href="{{ asset('img/logo-ponpes.png') }}">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- Styles -->
        @livewireStyles
    </head>
    <body class="font-sans antialiased bg-gray-50">
        <x-banner />

        <div class="min-h-screen bg-gray-100">
            @include('layouts.front.navbar')
            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
            @include('layouts.front.footer')
        </div>

        @stack('modals')

        @livewireScripts

        @stack('scripts')
        
        <script>
            const menuToggle = document.getElementById('menu-toggle');
            const menuClose = document.getElementById('menu-close');
            const mobileMenu = document.getElementById('mobile-menu');
        
            menuToggle.addEventListener('click', () => {
                mobileMenu.classList.toggle('translate-x-full');
            });
        
            menuClose.addEventListener('click', () => {
                mobileMenu.classList.add('translate-x-full');
            });
        </script>
    </body>
</html>
