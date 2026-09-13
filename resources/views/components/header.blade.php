@php
    $currentRoute = request()->route()?->getName();

    $isProject = in_array($currentRoute, [
        'projects.service-desk',
        'localized.projects.service-desk',
    ], true);

    $currentLocale = app()->getLocale();

    $homeUrl = $currentLocale === 'en'
        ? route('home')
        : route('localized.home', ['locale' => $currentLocale]);

    $localeUrls = [
        'en' => $isProject
            ? route('projects.service-desk')
            : route('home'),

        'lt' => $isProject
            ? route('localized.projects.service-desk', ['locale' => 'lt'])
            : route('localized.home', ['locale' => 'lt']),

        'ru' => $isProject
            ? route('localized.projects.service-desk', ['locale' => 'ru'])
            : route('localized.home', ['locale' => 'ru']),
    ];
@endphp

<header
    x-data="{ open: false }"
    class="border-b border-white/10"
>
    <div class="mx-auto flex max-w-7xl items-center justify-between px-6 py-5 lg:px-8">

        <a
            href="{{ $homeUrl }}"
            class="text-xl font-semibold tracking-tight"
        >
            KOTOV<span class="text-orange-400">_</span>
        </a>

        <nav class="hidden items-center gap-8 md:flex">
            <a
                href="{{ $homeUrl }}#projects"
                class="text-sm text-neutral-300 transition hover:text-white"
            >
                {{ __('common.navigation.projects') }}
            </a>

            <a
                href="{{ $homeUrl }}#experience"
                class="text-sm text-neutral-300 transition hover:text-white"
            >
                {{ __('common.navigation.experience') }}
            </a>

            <a
                href="{{ $homeUrl }}#about"
                class="text-sm text-neutral-300 transition hover:text-white"
            >
                {{ __('common.navigation.about') }}
            </a>

            <a
                href="{{ $homeUrl }}#contact"
                class="text-sm text-neutral-300 transition hover:text-white"
            >
                {{ __('common.navigation.contact') }}
            </a>

            <div class="flex items-center gap-3 text-xs text-neutral-400">
                @foreach (['en' => 'EN', 'lt' => 'LT', 'ru' => 'RU'] as $locale => $label)
                    <a
                        href="{{ $localeUrls[$locale] }}"
                        @class([
                            'transition hover:text-white',
                            'text-white' => $currentLocale === $locale,
                        ])
                    >
                        {{ $label }}
                    </a>
                @endforeach
            </div>
        </nav>

        <button
            type="button"
            class="text-sm text-neutral-300 md:hidden"
            @click="open = !open"
            :aria-expanded="open.toString()"
            aria-label="Toggle navigation"
        >
            <span x-show="!open">
                {{ __('common.navigation.menu') }}
            </span>

            <span
                x-show="open"
                x-cloak
            >
                {{ __('common.navigation.close') }}
            </span>
        </button>
    </div>

    <div
        x-show="open"
        x-cloak
        class="border-t border-white/10 md:hidden"
    >
        <nav class="mx-auto flex max-w-7xl flex-col gap-5 px-6 py-6">
            <a
                href="{{ $homeUrl }}#projects"
                class="text-neutral-300"
                @click="open = false"
            >
                {{ __('common.navigation.projects') }}
            </a>

            <a
                href="{{ $homeUrl }}#experience"
                class="text-neutral-300"
                @click="open = false"
            >
                {{ __('common.navigation.experience') }}
            </a>

            <a
                href="{{ $homeUrl }}#about"
                class="text-neutral-300"
                @click="open = false"
            >
                {{ __('common.navigation.about') }}
            </a>

            <a
                href="{{ $homeUrl }}#contact"
                class="text-neutral-300"
                @click="open = false"
            >
                {{ __('common.navigation.contact') }}
            </a>

            <div class="flex gap-4 pt-2 text-sm text-neutral-400">
                @foreach (['en' => 'EN', 'lt' => 'LT', 'ru' => 'RU'] as $locale => $label)
                    <a
                        href="{{ $localeUrls[$locale] }}"
                        @class([
                            'transition hover:text-white',
                            'text-white' => $currentLocale === $locale,
                        ])
                        @click="open = false"
                    >
                        {{ $label }}
                    </a>
                @endforeach
            </div>
        </nav>
    </div>
</header>