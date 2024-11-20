<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-theme="dark">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title inertia>{{ config('app.name', 'RipBee') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/simplebar/6.2.7/simplebar.css" />

        <!-- Scripts -->
        @routes
        @vite(['resources/js/app.ts', 'resources/js/scripts/main.ts', "resources/js/Pages/{$page['component']}.vue"])
        @inertiaHead
        <script src="https://cdnjs.cloudflare.com/ajax/libs/apexcharts/3.53.0/apexcharts.min.js"></script>
        <script src="assets/js/pages/dashboards/ecommerce.js"></script>
        <script src="assets/js/components/table.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/simplebar/6.2.7/simplebar.min.js"></script>
        <script>
            const theme = localStorage.getItem('theme') || 'dark';
            document.documentElement.setAttribute('data-theme', theme);
        </script>
    </head>
    <body class="font-sans antialiased">
        @inertia
    </body>
</html>
