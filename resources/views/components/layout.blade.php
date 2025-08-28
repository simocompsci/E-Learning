<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @vite('resources/js/app.js')
    <title>{{ $title ?? 'E-Learning Platform' }}</title>
    <!-- Favicon -->
    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
    <!-- Additional Styles -->
    @stack('styles')
</head>
<body class="min-h-screen bg-gray-50 font-sans antialiased">
    <!-- Header -->
    <header class="w-full">
        {{ $header ?? '' }}
    </header>

    <!-- Main Content -->
    <main>
        {{ $slot }}
    </main>

    <!-- Footer -->
    <footer class="w-full">
        {{ $footer ?? '' }}
    </footer>

    <!-- Scripts -->
    @stack('scripts')
</body>
</html>