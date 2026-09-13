@extends('layouts.app')

@section('title', 'Andrej Kotov | PHP / Laravel Backend Developer')

@section('content')

    <section class="mx-auto flex min-h-[calc(100vh-81px)] max-w-7xl items-center px-6 py-20 lg:px-8">
        <div class="max-w-5xl">

            <p class="mb-6 text-sm font-medium uppercase tracking-[0.25em] text-orange-400">
                PHP / Laravel Backend Developer
            </p>

            <h1 class="max-w-4xl text-5xl font-semibold tracking-tight sm:text-6xl lg:text-8xl">
                Andrej Kotov
            </h1>

            <p class="mt-8 max-w-3xl text-lg leading-8 text-neutral-400 sm:text-xl">
                I build production backend applications, APIs and integrations
                with PHP, Laravel and relational databases.
            </p>

            <p class="mt-4 max-w-3xl text-base leading-7 text-neutral-500 sm:text-lg">
                My work focuses on business logic, integrations, SQL,
                maintainability and reliable production systems.
            </p>

            <div class="mt-10 flex flex-wrap gap-4">
                <a
                    href="#projects"
                    class="border border-white bg-white px-5 py-3 text-sm font-medium text-black transition hover:bg-neutral-200"
                >
                    View projects
                </a>

                <a
                    href="#contact"
                    class="border border-white/20 px-5 py-3 text-sm font-medium transition hover:border-white/50"
                >
                    Contact
                </a>
            </div>

        </div>
    </section>

    <section id="projects" class="border-t border-white/10">
        <div class="mx-auto max-w-7xl px-6 py-24 lg:px-8">

            <div class="mb-12">
                <p class="text-sm uppercase tracking-[0.2em] text-neutral-500">
                    01 / Selected Projects
                </p>

                <h2 class="mt-4 text-3xl font-semibold tracking-tight sm:text-4xl">
                    Projects
                </h2>
            </div>

            <article class="border border-white/10 bg-white/[0.02]">
                <div class="grid gap-10 p-7 sm:p-9 lg:grid-cols-[1.4fr_0.6fr] lg:p-12">

                    <div>
                        <div class="flex flex-wrap items-center gap-4">
                            <h3 class="text-2xl font-semibold tracking-tight sm:text-3xl">
                                Service Desk
                            </h3>

                            <span class="border border-orange-400/30 px-2.5 py-1 text-xs uppercase tracking-wider text-orange-400">
                                Production project
                            </span>
                        </div>

                        <p class="mt-6 max-w-3xl text-base leading-7 text-neutral-400 sm:text-lg">
                            A production-ready service desk application built with Laravel,
                            focused on ticket workflows, permissions, integrations,
                            notifications and maintainable backend architecture.
                        </p>

                        <div class="mt-8 flex flex-wrap gap-2">
                            @foreach ([
                                'PHP',
                                'Laravel',
                                'MySQL',
                                'Redis',
                                'Docker',
                                'REST API',
                                'Pest',
                            ] as $technology)
                                <span class="border border-white/10 px-3 py-1.5 text-xs text-neutral-400">
                                    {{ $technology }}
                                </span>
                            @endforeach
                        </div>

                        <div class="mt-10 flex flex-wrap gap-6 text-sm">
                            <a
                                href="{{ route('projects.service-desk') }}"
                                class="font-medium text-white underline decoration-white/20 underline-offset-4 transition hover:decoration-orange-400"
                            >
                                View case study
                            </a>

                            <a
                                href="https://github.com/AKV85/service-desk"
                                target="_blank"
                                rel="noopener noreferrer"
                                class="text-neutral-400 transition hover:text-white"
                            >
                                GitHub
                            </a>
                        </div>
                    </div>

                    <div class="border-t border-white/10 pt-8 lg:border-l lg:border-t-0 lg:pl-10 lg:pt-0">
                        <dl class="space-y-8">

                            <div>
                                <dt class="text-xs uppercase tracking-[0.18em] text-neutral-600">
                                    Type
                                </dt>

                                <dd class="mt-2 text-sm leading-6 text-neutral-300">
                                    Service management platform
                                </dd>
                            </div>

                            <div>
                                <dt class="text-xs uppercase tracking-[0.18em] text-neutral-600">
                                    Focus
                                </dt>

                                <dd class="mt-2 text-sm leading-6 text-neutral-300">
                                    Backend architecture, workflows,
                                    integrations and APIs
                                </dd>
                            </div>

                            <div>
                                <dt class="text-xs uppercase tracking-[0.18em] text-neutral-600">
                                    Status
                                </dt>

                                <dd class="mt-2 text-sm text-orange-400">
                                    Completed
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
                        02 / About
                    </p>

                    <h2 class="mt-4 text-3xl font-semibold tracking-tight sm:text-4xl">
                        About
                    </h2>
                </div>

                <div class="max-w-3xl space-y-6 text-lg leading-8 text-neutral-400">
                    <p>
                        I am a PHP / Laravel backend developer working on production
                        systems in the logistics industry.
                    </p>

                    <p>
                        I specialize in maintaining and improving existing applications,
                        implementing new backend functionality, optimizing SQL queries
                        and investigating production issues.
                    </p>

                    <p>
                        I am comfortable working with existing codebases and legacy
                        systems, understanding how they behave in production, finding
                        the root cause of problems and implementing practical changes
                        without breaking existing processes.
                    </p>
                </div>

            </div>

        </div>
    </section>

    <section id="experience" class="border-t border-white/10">
        <div class="mx-auto max-w-7xl px-6 py-24 lg:px-8">

            <div class="mb-12">
                <p class="text-sm uppercase tracking-[0.2em] text-neutral-500">
                    03 / Experience
                </p>

                <h2 class="mt-4 text-3xl font-semibold tracking-tight sm:text-4xl">
                    Experience
                </h2>
            </div>

            <div class="grid gap-8 border-t border-white/10 pt-8 lg:grid-cols-[0.35fr_0.65fr]">

                <div>
                    <p class="text-lg font-medium text-white">
                        PHP / Laravel Backend Developer
                    </p>

                    <p class="mt-2 text-sm text-neutral-400">
                        UAB Vlantana · Klaipėda, Lithuania
                    </p>

                    <p class="mt-1 text-sm text-neutral-500">
                        Nov 2023 — Present
                    </p>
                </div>

                <div>
                    <p class="max-w-3xl text-base leading-7 text-neutral-400">
                        Development and maintenance of production backend systems
                        used in logistics operations.
                    </p>

                    <p class="mt-4 max-w-3xl text-base leading-7 text-neutral-400">
                        My work includes implementing new backend functionality,
                        maintaining legacy PHP / Laravel applications, optimizing
                        MySQL and Microsoft SQL Server queries, working with
                        integrations, automated jobs, reporting and production
                        issue investigation.
                    </p>

                    <div class="mt-8 grid gap-3 sm:grid-cols-2">
                        @foreach ([
                            'Backend feature development',
                            'Legacy PHP / Laravel maintenance',
                            'MySQL / MS SQL optimization',
                            'REST API integrations',
                            'Automated jobs and notifications',
                            'Testing with Pest',
                            'Production monitoring and debugging',
                            'PDF / Excel / Word reporting',
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
                    04 / Technologies
                </p>

                <h2 class="mt-4 text-3xl font-semibold tracking-tight sm:text-4xl">
                    Technologies
                </h2>
            </div>

            <div class="grid gap-px border border-white/10 bg-white/10 md:grid-cols-2 lg:grid-cols-4">

                @foreach ([
                    [
                        'title' => 'Backend',
                        'items' => [
                            'PHP',
                            'Laravel',
                            'REST API',
                        ],
                    ],
                    [
                        'title' => 'Data',
                        'items' => [
                            'MySQL',
                            'Microsoft SQL Server',
                            'Redis',
                        ],
                    ],
                    [
                        'title' => 'Engineering',
                        'items' => [
                            'Docker',
                            'Git',
                            'Laravel Sail',
                            'Linux',
                        ],
                    ],
                    [
                        'title' => 'Quality',
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
                        05 / Contact
                    </p>

                    <h2 class="mt-4 text-3xl font-semibold tracking-tight sm:text-4xl">
                        Contact
                    </h2>
                </div>

                <div>
                    <p class="max-w-2xl text-lg leading-8 text-neutral-400">
                        Open to freelance and remote PHP / Laravel backend development
                        opportunities, including existing applications, legacy systems
                        and database-heavy projects.
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
                            Email
                        </a>
                    </div>
                </div>

            </div>

        </div>
    </section>

@endsection