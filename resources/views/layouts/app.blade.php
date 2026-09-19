<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    @php
        $ogLocales = [
            'en' => 'en_US',
            'lt' => 'lt_LT',
            'ru' => 'ru_RU',
        ];

        $ogLocale = $ogLocales[app()->getLocale()] ?? 'en_US';
        $ogImage = asset('images/og/portfolio.png');
    @endphp
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'Andrej Kotov | Backend Developer')</title>

    <meta
        name="description"
        content="@yield('meta_description', 'PHP / Laravel Backend Developer portfolio of Andrej Kotov.')"
    >

    <link
        rel="canonical"
        href="@yield('canonical', url()->current())"
    >

    @hasSection('hreflang_en')
        <link rel="alternate" hreflang="en" href="@yield('hreflang_en')">
    @endif

    @hasSection('hreflang_lt')
        <link rel="alternate" hreflang="lt" href="@yield('hreflang_lt')">
    @endif

    @hasSection('hreflang_ru')
        <link rel="alternate" hreflang="ru" href="@yield('hreflang_ru')">
    @endif

    @hasSection('hreflang_x_default')
        <link rel="alternate" hreflang="x-default" href="@yield('hreflang_x_default')">
    @endif

    <meta
        property="og:title"
        content="@yield('og_title', trim($__env->yieldContent('title', 'Andrej Kotov | Backend Developer')))"
    >

    <meta
        property="og:description"
        content="@yield('og_description', trim($__env->yieldContent('meta_description', 'PHP / Laravel Backend Developer portfolio of Andrej Kotov.')))"
    >

    <meta
        property="og:url"
        content="@yield('og_url', url()->current())"
    >

    <meta
        property="og:type"
        content="@yield('og_type', 'website')"
    >

    <meta
        property="og:locale"
        content="{{ $ogLocale }}"
    >

    <meta
        property="og:image"
        content="{{ $ogImage }}"
    >

    <meta
        property="og:image:width"
        content="1200"
    >

    <meta
        property="og:image:height"
        content="630"
    >

    <meta
        property="og:image:alt"
        content="Andrej Kotov - PHP / Laravel Backend Developer"
    >

    <meta
        name="twitter:card"
        content="summary_large_image"
    >

    <meta
        name="twitter:title"
        content="@yield('twitter_title', trim($__env->yieldContent('title', 'Andrej Kotov | Backend Developer')))"
    >

    <meta
        name="twitter:description"
        content="@yield('twitter_description', trim($__env->yieldContent('meta_description', 'PHP / Laravel Backend Developer portfolio of Andrej Kotov.')))"
    >

    <meta
        name="twitter:image"
        content="{{ $ogImage }}"
    >

    <link rel="icon" href="/favicon.ico">

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