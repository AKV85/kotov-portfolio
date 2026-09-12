@extends('layouts.app')

@section('title', 'Andrej Kotov | Backend Developer')

@section('content')

    <section
        class="mx-auto flex min-h-[calc(100vh-81px)] max-w-7xl items-center px-6 py-20 lg:px-8"
    >
        <div class="max-w-4xl">

            <p
                class="mb-6 text-sm font-medium uppercase tracking-[0.25em] text-orange-400"
            >
                Backend Developer
            </p>

            <h1
                class="text-5xl font-semibold tracking-tight sm:text-6xl lg:text-8xl"
            >
                Andrej Kotov
            </h1>

            <p
                class="mt-6 max-w-2xl text-lg leading-8 text-neutral-400 sm:text-xl"
            >
                I build production backend applications, APIs and integrations
                with PHP and Laravel.
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

    <section
        id="projects"
        class="border-t border-white/10"
    >
        <div class="mx-auto max-w-7xl px-6 py-24 lg:px-8">

            <p class="text-sm text-neutral-500">
                01 / Selected Projects
            </p>

            <h2 class="mt-4 text-3xl font-semibold">
                Projects
            </h2>

        </div>
    </section>

    <section
        id="about"
        class="border-t border-white/10"
    >
        <div class="mx-auto max-w-7xl px-6 py-24 lg:px-8">

            <p class="text-sm text-neutral-500">
                02 / About
            </p>

            <h2 class="mt-4 text-3xl font-semibold">
                About
            </h2>

        </div>
    </section>

    <section
        id="contact"
        class="border-t border-white/10"
    >
        <div class="mx-auto max-w-7xl px-6 py-24 lg:px-8">

            <p class="text-sm text-neutral-500">
                03 / Contact
            </p>

            <h2 class="mt-4 text-3xl font-semibold">
                Contact
            </h2>

        </div>
    </section>

@endsection