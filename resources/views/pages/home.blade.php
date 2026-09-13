@extends('layouts.app')

@section('title', __('home.title'))

@section('content')

    <section class="mx-auto flex min-h-[calc(100vh-81px)] max-w-7xl items-center px-6 py-20 lg:px-8">
        <div class="max-w-5xl">

            <p class="mb-6 text-sm font-medium uppercase tracking-[0.25em] text-orange-400">
                {{ __('home.hero.role') }}
            </p>

            <h1 class="max-w-4xl text-5xl font-semibold tracking-tight sm:text-6xl lg:text-8xl">
                {{ __('home.hero.name') }}
            </h1>

            <p class="mt-8 max-w-3xl text-lg leading-8 text-neutral-400 sm:text-xl">
                {{ __('home.hero.description') }}
            </p>

            <p class="mt-4 max-w-3xl text-base leading-7 text-neutral-500 sm:text-lg">
                {{ __('home.hero.focus') }}
            </p>

            <div class="mt-10 flex flex-wrap gap-4">
                <a
                    href="#projects"
                    class="border border-white bg-white px-5 py-3 text-sm font-medium text-black transition hover:bg-neutral-200"
                >
                    {{ __('home.hero.view_projects') }}
                </a>

                <a
                    href="#contact"
                    class="border border-white/20 px-5 py-3 text-sm font-medium transition hover:border-white/50"
                >
                    {{ __('home.hero.contact') }}
                </a>
            </div>

        </div>
    </section>

    <section id="projects" class="border-t border-white/10">
        <div class="mx-auto max-w-7xl px-6 py-24 lg:px-8">

            <div class="mb-12">
                <p class="text-sm uppercase tracking-[0.2em] text-neutral-500">
                    {{ __('home.projects.eyebrow') }}
                </p>

                <h2 class="mt-4 text-3xl font-semibold tracking-tight sm:text-4xl">
                    {{ __('home.projects.title') }}
                </h2>
            </div>

            <article class="border border-white/10 bg-white/[0.02]">
                <div class="grid gap-10 p-7 sm:p-9 lg:grid-cols-[1.4fr_0.6fr] lg:p-12">

                    <div>
                        <div class="flex flex-wrap items-center gap-4">
                            <h3 class="text-2xl font-semibold tracking-tight sm:text-3xl">
                                {{ __('home.projects.service_desk.title') }}
                            </h3>

                            <span class="border border-orange-400/30 px-2.5 py-1 text-xs uppercase tracking-wider text-orange-400">
                                {{ __('home.projects.service_desk.status_label') }}
                            </span>
                        </div>

                        <p class="mt-6 max-w-3xl text-base leading-7 text-neutral-400 sm:text-lg">
                            {{ __('home.projects.service_desk.description') }}
                        </p>

                        <div class="mt-8 flex flex-wrap gap-2">
                            @foreach ([
                                'PHP',
                                'Laravel',
                                'MySQL',
                                'Redis',
                                'Docker',
                                'REST API',
                            ] as $technology)
                                <span class="border border-white/10 px-3 py-1.5 text-xs text-neutral-400">
                                    {{ $technology }}
                                </span>
                            @endforeach
                        </div>

                        <div class="mt-10 flex flex-wrap gap-6 text-sm">
                            <a
                                href="{{ app()->getLocale() === 'en'
                                    ? route('projects.service-desk')
                                    : route('localized.projects.service-desk', ['locale' => app()->getLocale()]) }}"
                                class="font-medium text-white underline decoration-white/20 underline-offset-4 transition hover:decoration-orange-400"
                            >
                                {{ __('home.projects.service_desk.view_case_study') }}
                            </a>

                            <a
                                href="https://github.com/AKV85/service-desk"
                                target="_blank"
                                rel="noopener noreferrer"
                                class="text-neutral-400 transition hover:text-white"
                            >
                                {{ __('home.projects.service_desk.github') }}
                            </a>
                        </div>
                    </div>

                    <div class="border-t border-white/10 pt-8 lg:border-l lg:border-t-0 lg:pl-10 lg:pt-0">
                        <dl class="space-y-8">

                            <div>
                                <dt class="text-xs uppercase tracking-[0.18em] text-neutral-600">
                                    {{ __('home.projects.service_desk.type_label') }}
                                </dt>

                                <dd class="mt-2 text-sm leading-6 text-neutral-300">
                                    {{ __('home.projects.service_desk.type') }}
                                </dd>
                            </div>

                            <div>
                                <dt class="text-xs uppercase tracking-[0.18em] text-neutral-600">
                                    {{ __('home.projects.service_desk.focus_label') }}
                                </dt>

                                <dd class="mt-2 text-sm leading-6 text-neutral-300">
                                    {{ __('home.projects.service_desk.focus') }}
                                </dd>
                            </div>

                            <div>
                                <dt class="text-xs uppercase tracking-[0.18em] text-neutral-600">
                                    {{ __('home.projects.service_desk.status_title') }}
                                </dt>

                                <dd class="mt-2 text-sm text-orange-400">
                                    {{ __('home.projects.service_desk.status') }}
                                </dd>
                            </div>

                        </dl>
                    </div>

                </div>
            </article>

        </div>
    </section>

    <section id="about" class="border-t border-white/10">
        <div class="mx-auto max-w-7xl px-6 py-24 lg:px-8">

            <div class="grid gap-12 lg:grid-cols-[0.4fr_0.6fr]">

                <div>
                    <p class="text-sm uppercase tracking-[0.2em] text-neutral-500">
                        {{ __('home.about.eyebrow') }}
                    </p>

                    <h2 class="mt-4 text-3xl font-semibold tracking-tight sm:text-4xl">
                        {{ __('home.about.title') }}
                    </h2>
                </div>

                <div class="max-w-3xl space-y-6 text-lg leading-8 text-neutral-400">
                    <p>
                        {{ __('home.about.paragraph_1') }}
                    </p>

                    <p>
                        {{ __('home.about.paragraph_2') }}
                    </p>

                    <p>
                        {{ __('home.about.paragraph_3') }}
                    </p>
                </div>

            </div>

        </div>
    </section>

    <section id="experience" class="border-t border-white/10">
        <div class="mx-auto max-w-7xl px-6 py-24 lg:px-8">

            <div class="mb-12">
                <p class="text-sm uppercase tracking-[0.2em] text-neutral-500">
                    {{ __('home.experience.eyebrow') }}
                </p>

                <h2 class="mt-4 text-3xl font-semibold tracking-tight sm:text-4xl">
                    {{ __('home.experience.title') }}
                </h2>
            </div>

            <div class="grid gap-8 border-t border-white/10 pt-8 lg:grid-cols-[0.35fr_0.65fr]">

                <div>
                    <p class="text-lg font-medium text-white">
                        {{ __('home.experience.role') }}
                    </p>

                    <p class="mt-2 text-sm text-neutral-400">
                        {{ __('home.experience.company') }}
                    </p>

                    <p class="mt-1 text-sm text-neutral-500">
                        {{ __('home.experience.period') }}
                    </p>
                </div>

                <div>
                    <p class="max-w-3xl text-base leading-7 text-neutral-400">
                        {{ __('home.experience.description_1') }}
                    </p>

                    <p class="mt-4 max-w-3xl text-base leading-7 text-neutral-400">
                        {{ __('home.experience.description_2') }}
                    </p>

                    <div class="mt-8 grid gap-3 sm:grid-cols-2">
                        @foreach ([
                            __('home.experience.items.backend_features'),
                            __('home.experience.items.legacy'),
                            __('home.experience.items.sql'),
                            __('home.experience.items.api'),
                            __('home.experience.items.jobs'),
                            __('home.experience.items.testing'),
                            __('home.experience.items.monitoring'),
                            __('home.experience.items.reporting'),
                        ] as $item)
                            <div class="flex gap-3 text-sm text-neutral-400">
                                <span class="text-orange-400">/</span>
                                <span>{{ $item }}</span>
                            </div>
                        @endforeach
                    </div>
                </div>

            </div>

        </div>
    </section>

    <section id="technologies" class="border-t border-white/10">
        <div class="mx-auto max-w-7xl px-6 py-24 lg:px-8">

            <div class="mb-12">
                <p class="text-sm uppercase tracking-[0.2em] text-neutral-500">
                    {{ __('home.technologies.eyebrow') }}
                </p>

                <h2 class="mt-4 text-3xl font-semibold tracking-tight sm:text-4xl">
                    {{ __('home.technologies.title') }}
                </h2>
            </div>

            <div class="grid gap-px border border-white/10 bg-white/10 md:grid-cols-2 lg:grid-cols-4">

                @foreach ([
                    [
                        'title' => __('home.technologies.groups.backend'),
                        'items' => [
                            'PHP',
                            'Laravel',
                            'REST API',
                        ],
                    ],
                    [
                        'title' => __('home.technologies.groups.data'),
                        'items' => [
                            'MySQL',
                            'Microsoft SQL Server',
                            'Redis',
                        ],
                    ],
                    [
                        'title' => __('home.technologies.groups.engineering'),
                        'items' => [
                            'Docker',
                            'Git',
                            'Laravel Sail',
                            'Linux',
                        ],
                    ],
                    [
                        'title' => __('home.technologies.groups.quality'),
                        'items' => [
                            'Pest',
                            'PHPUnit',
                            'Xdebug',
                            'CI',
                        ],
                    ],
                ] as $group)
                    <div class="bg-neutral-950 p-7 sm:p-8">
                        <h3 class="text-xs uppercase tracking-[0.2em] text-orange-400">
                            {{ $group['title'] }}
                        </h3>

                        <ul class="mt-6 space-y-3">
                            @foreach ($group['items'] as $technology)
                                <li class="text-base text-neutral-300">
                                    {{ $technology }}
                                </li>
                            @endforeach
                        </ul>
                    </div>
                @endforeach

            </div>

        </div>
    </section>

    <section id="contact" class="border-t border-white/10">
        <div class="mx-auto max-w-7xl px-6 py-24 lg:px-8">

            <div class="grid gap-12 lg:grid-cols-[0.4fr_0.6fr]">

                <div>
                    <p class="text-sm uppercase tracking-[0.2em] text-neutral-500">
                        {{ __('home.contact.eyebrow') }}
                    </p>

                    <h2 class="mt-4 text-3xl font-semibold tracking-tight sm:text-4xl">
                        {{ __('home.contact.title') }}
                    </h2>
                </div>

                <div>
                    <p class="max-w-2xl text-lg leading-8 text-neutral-400">
                        {{ __('home.contact.description') }}
                    </p>

                    <div class="mt-10 flex flex-wrap gap-x-8 gap-y-4">
                        <a
                            href="https://github.com/AKV85"
                            target="_blank"
                            rel="noopener noreferrer"
                            class="text-base text-white underline decoration-white/20 underline-offset-4 transition hover:decoration-orange-400"
                        >
                            GitHub
                        </a>

                        <a
                            href="https://www.linkedin.com/in/andrej-kotov-09664a21b"
                            target="_blank"
                            rel="noopener noreferrer"
                            class="text-base text-white underline decoration-white/20 underline-offset-4 transition hover:decoration-orange-400"
                        >
                            LinkedIn
                        </a>

                        <a
                            href="mailto:a.kotov.laknojus@gmail.com"
                            class="text-base text-white underline decoration-white/20 underline-offset-4 transition hover:decoration-orange-400"
                        >
                            {{ __('home.contact.email') }}
                        </a>
                    </div>
                </div>

            </div>

        </div>
    </section>

@endsection