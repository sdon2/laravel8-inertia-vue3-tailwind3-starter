<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title inertia>{{ config('app.name', 'Laravel') }}</title>

    <script>
        window.public_path = '{{ asset(null) }}';
    </script>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Scripts -->
    @routes
    <link rel="stylesheet" href="{{ asset(mix('assets/build/app.css')) }}">
    <script src="{{ asset(mix('assets/build/app.js')) }}" defer></script>
    @inertiaHead
</head>

<body class="font-sans antialiased dark">
    @inertia
</body>

</html>
