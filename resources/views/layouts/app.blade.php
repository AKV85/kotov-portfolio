<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'Andrej Kotov | Backend Developer')</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="min-h-screen bg-neutral-950 text-neutral-100 antialiased">
    <div class="min-h-screen">
        <x-header />

        <main>
            @yield('content')
        </main>

        <x-footer />
    </div>
</body>
</html>