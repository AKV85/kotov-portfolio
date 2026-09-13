@extends('layouts.app')

@php
    $currentLocale = app()->getLocale();

    $homeUrl = $currentLocale === 'en'
        ? route('home')
        : route('localized.home', ['locale' => $currentLocale]);

    $canonicalUrl = $currentLocale === 'en'
        ? route('projects.service-desk')
        : route('localized.projects.service-desk', ['locale' => $currentLocale]);

    $hreflangEn = route('projects.service-desk');
    $hreflangLt = route('localized.projects.service-desk', ['locale' => 'lt']);
    $hreflangRu = route('localized.projects.service-desk', ['locale' => 'ru']);
@endphp

@section('title', __('service-desk.seo.title'))
@section('meta_description', __('service-desk.seo.description'))

@section('canonical', $canonicalUrl)

@section('hreflang_en', $hreflangEn)
@section('hreflang_lt', $hreflangLt)
@section('hreflang_ru', $hreflangRu)
@section('hreflang_x_default', $hreflangEn)

@section('og_url', $canonicalUrl)

@section('content')

<section class="mx-auto max-w-7xl px-6 py-20 lg:px-8 lg:py-28">
    <div class="max-w-5xl">

        <a
            href="{{ $homeUrl }}#projects"
            class="text-sm text-neutral-400 transition hover:text-white"
        >
            {{ __('service-desk.hero.back') }}
        </a>

        <p class="mt-12 text-sm font-medium uppercase tracking-[0.25em] text-orange-400">
            {{ __('service-desk.hero.eyebrow') }}
        </p>

        <h1 class="mt-5 text-5xl font-semibold tracking-tight sm:text-6xl lg:text-8xl">
            {{ __('service-desk.hero.name') }}
        </h1>

        <p class="mt-8 max-w-3xl text-lg leading-8 text-neutral-400 sm:text-xl">
            {{ __('service-desk.hero.description') }}
        </p>

        <div class="mt-10 flex flex-wrap gap-4">
            <a
                href="https://github.com/AKV85/service-desk"
                target="_blank"
                rel="noopener noreferrer"
                class="border border-white bg-white px-5 py-3 text-sm font-medium text-black transition hover:bg-neutral-200"
            >
                {{ __('service-desk.hero.github') }}
            </a>

            <a
                href="https://desk.kotov.lt"
                target="_blank"
                rel="noopener noreferrer"
                class="border border-white/20 px-5 py-3 text-sm font-medium transition hover:border-white/50"
            >
                {{ __('service-desk.hero.live') }}
            </a>
        </div>

        <div class="mt-16 grid gap-px border border-white/10 bg-white/10 sm:grid-cols-3">
            <div class="bg-neutral-950 p-6">
                <p class="text-xs uppercase tracking-[0.18em] text-neutral-600">
                    {{ __('service-desk.hero.meta.type_label') }}
                </p>

                <p class="mt-3 text-sm text-neutral-300">
                    {{ __('service-desk.hero.meta.type') }}
                </p>
            </div>

            <div class="bg-neutral-950 p-6">
                <p class="text-xs uppercase tracking-[0.18em] text-neutral-600">
                    {{ __('service-desk.hero.meta.focus_label') }}
                </p>

                <p class="mt-3 text-sm text-neutral-300">
                    {{ __('service-desk.hero.meta.focus') }}
                </p>
            </div>

            <div class="bg-neutral-950 p-6">
                <p class="text-xs uppercase tracking-[0.18em] text-neutral-600">
                    {{ __('service-desk.hero.meta.status_label') }}
                </p>

                <p class="mt-3 text-sm text-orange-400">
                    {{ __('service-desk.hero.meta.status') }}
                </p>
            </div>
        </div>

    </div>
</section>

<section class="border-t border-white/10">
    <div class="mx-auto max-w-7xl px-6 py-24 lg:px-8">

        <div class="grid gap-12 lg:grid-cols-[0.35fr_0.65fr]">

            <div>
                <p class="text-sm uppercase tracking-[0.2em] text-neutral-500">
                    {{ __('service-desk.project.eyebrow') }}
                </p>

                <h2 class="mt-4 text-3xl font-semibold tracking-tight sm:text-4xl">
                    {{ __('service-desk.project.title') }}
                </h2>
            </div>

            <div class="max-w-3xl space-y-6 text-lg leading-8 text-neutral-400">
                @foreach (trans('service-desk.project.paragraphs') as $paragraph)
                    <p>
                        {{ $paragraph }}
                    </p>
                @endforeach
            </div>

        </div>

    </div>
</section>

<section class="border-t border-white/10">
    <div class="mx-auto max-w-7xl px-6 py-24 lg:px-8">

        <div class="mb-12">
            <p class="text-sm uppercase tracking-[0.2em] text-neutral-500">
                {{ __('service-desk.core_backend.eyebrow') }}
            </p>

            <h2 class="mt-4 text-3xl font-semibold tracking-tight sm:text-4xl">
                {{ __('service-desk.core_backend.title') }}
            </h2>

            <p class="mt-6 max-w-3xl text-lg leading-8 text-neutral-400">
                {{ __('service-desk.core_backend.description') }}
            </p>
        </div>

        <div class="grid gap-px border border-white/10 bg-white/10 md:grid-cols-2">
            @foreach (trans('service-desk.core_backend.cards') as $card)
                <article class="bg-neutral-950 p-7 sm:p-8">
                    <p class="text-xs uppercase tracking-[0.18em] text-orange-400">
                        {{ $card['label'] }}
                    </p>

                    <h3 class="mt-4 text-xl font-medium text-white">
                        {{ $card['title'] }}
                    </h3>

                    <p class="mt-4 text-sm leading-7 text-neutral-400">
                        {{ $card['description'] }}
                    </p>
                </article>
            @endforeach
        </div>

    </div>
</section>

<section class="border-t border-white/10">
    <div class="mx-auto max-w-7xl px-6 py-24 lg:px-8">

        <div class="mb-12">
            <p class="text-sm uppercase tracking-[0.2em] text-neutral-500">
                {{ __('service-desk.audit.eyebrow') }}
            </p>

            <h2 class="mt-4 text-3xl font-semibold tracking-tight sm:text-4xl">
                {{ __('service-desk.audit.title') }}
            </h2>

            <p class="mt-6 max-w-3xl text-lg leading-8 text-neutral-400">
                {{ __('service-desk.audit.description') }}
            </p>
        </div>

        <div class="grid gap-8 lg:grid-cols-[0.55fr_0.45fr]">

            <div class="border border-white/10 p-7 sm:p-8">
                <p class="text-xs uppercase tracking-[0.18em] text-orange-400">
                    {{ __('service-desk.audit.history.label') }}
                </p>

                <h3 class="mt-4 text-2xl font-medium tracking-tight text-white">
                    {{ __('service-desk.audit.history.title') }}
                </h3>

                <p class="mt-5 text-base leading-7 text-neutral-400">
                    {{ __('service-desk.audit.history.paragraph_1') }}
                </p>

                <p class="mt-4 text-base leading-7 text-neutral-400">
                    {{ __('service-desk.audit.history.paragraph_2') }}
                </p>

                <div class="mt-8 border-t border-white/10 pt-6">
                    <p class="text-xs uppercase tracking-[0.18em] text-neutral-600">
                        {{ __('service-desk.audit.history.examples_label') }}
                    </p>

                    <div class="mt-5 space-y-4">
                        @foreach (trans('service-desk.audit.history.examples') as $example)
                            <div class="flex gap-3 text-sm leading-6 text-neutral-400">
                                <span class="text-orange-400">/</span>
                                <span>{{ $example }}</span>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

            <div class="grid gap-px border border-white/10 bg-white/10">
                @foreach (trans('service-desk.audit.cards') as $card)
                    <article class="bg-neutral-950 p-7 sm:p-8">
                        <p class="text-xs uppercase tracking-[0.18em] text-orange-400">
                            {{ $card['label'] }}
                        </p>

                        <h3 class="mt-4 text-xl font-medium text-white">
                            {{ $card['title'] }}
                        </h3>

                        <p class="mt-4 text-sm leading-7 text-neutral-400">
                            {{ $card['description'] }}
                        </p>
                    </article>
                @endforeach
            </div>

        </div>

    </div>
</section>

<section class="border-t border-white/10">
    <div class="mx-auto max-w-7xl px-6 py-24 lg:px-8">

        <div class="mb-12">
            <p class="text-sm uppercase tracking-[0.2em] text-neutral-500">
                {{ __('service-desk.integrations.eyebrow') }}
            </p>

            <h2 class="mt-4 text-3xl font-semibold tracking-tight sm:text-4xl">
                {{ __('service-desk.integrations.title') }}
            </h2>

            <p class="mt-6 max-w-3xl text-lg leading-8 text-neutral-400">
                {{ __('service-desk.integrations.description') }}
            </p>
        </div>

        <div class="grid gap-px border border-white/10 bg-white/10 md:grid-cols-2">
            @foreach (trans('service-desk.integrations.cards') as $card)
                <article class="bg-neutral-950 p-7 sm:p-8">
                    <p class="text-xs uppercase tracking-[0.18em] text-orange-400">
                        {{ $card['label'] }}
                    </p>

                    <h3 class="mt-4 text-xl font-medium text-white">
                        {{ $card['title'] }}
                    </h3>

                    <p class="mt-4 text-sm leading-7 text-neutral-400">
                        {{ $card['description'] }}
                    </p>
                </article>
            @endforeach
        </div>

    </div>
</section>

<section class="border-t border-white/10">
    <div class="mx-auto max-w-7xl px-6 py-24 lg:px-8">

        <div class="grid gap-12 lg:grid-cols-[0.35fr_0.65fr]">

            <div>
                <p class="text-sm uppercase tracking-[0.2em] text-neutral-500">
                    {{ __('service-desk.ai.eyebrow') }}
                </p>

                <h2 class="mt-4 text-3xl font-semibold tracking-tight sm:text-4xl">
                    {{ __('service-desk.ai.title') }}
                </h2>
            </div>

            <div>
                <p class="max-w-3xl text-lg leading-8 text-neutral-400">
                    {{ __('service-desk.ai.paragraph_1') }}
                </p>

                <p class="mt-6 max-w-3xl text-lg leading-8 text-neutral-400">
                    {{ __('service-desk.ai.paragraph_2') }}
                </p>
            </div>

        </div>

        <div class="mt-14 grid gap-px border border-white/10 bg-white/10 md:grid-cols-2">
            @foreach (trans('service-desk.ai.cards') as $card)
                <article class="bg-neutral-950 p-7 sm:p-8">
                    <p class="text-xs uppercase tracking-[0.18em] text-orange-400">
                        {{ $card['label'] }}
                    </p>

                    <h3 class="mt-4 text-xl font-medium text-white">
                        {{ $card['title'] }}
                    </h3>

                    <p class="mt-4 text-sm leading-7 text-neutral-400">
                        {{ $card['description'] }}
                    </p>
                </article>
            @endforeach
        </div>

        <div class="mt-8 border border-white/10 p-7 sm:p-8">
            <p class="text-xs uppercase tracking-[0.18em] text-neutral-600">
                {{ __('service-desk.ai.principle_label') }}
            </p>

            <p class="mt-4 max-w-4xl text-xl leading-8 text-neutral-300">
                {{ __('service-desk.ai.principle') }}
            </p>
        </div>

    </div>
</section>

<section class="border-t border-white/10">
    <div class="mx-auto max-w-7xl px-6 py-24 lg:px-8">

        <div class="mb-12">
            <p class="text-sm uppercase tracking-[0.2em] text-neutral-500">
                {{ __('service-desk.testing.eyebrow') }}
            </p>

            <h2 class="mt-4 text-3xl font-semibold tracking-tight sm:text-4xl">
                {{ __('service-desk.testing.title') }}
            </h2>

            <p class="mt-6 max-w-3xl text-lg leading-8 text-neutral-400">
                {{ __('service-desk.testing.description') }}
            </p>
        </div>

        <div class="grid gap-px border border-white/10 bg-white/10 sm:grid-cols-3">

            <div class="bg-neutral-950 p-7 sm:p-8">
                <p class="text-xs uppercase tracking-[0.18em] text-neutral-600">
                    {{ __('service-desk.testing.metrics.tests_label') }}
                </p>

                <p class="mt-4 text-4xl font-semibold tracking-tight text-white">
                    315
                </p>

                <p class="mt-3 text-sm text-neutral-400">
                    {{ __('service-desk.testing.metrics.tests') }}
                </p>
            </div>

            <div class="bg-neutral-950 p-7 sm:p-8">
                <p class="text-xs uppercase tracking-[0.18em] text-neutral-600">
                    {{ __('service-desk.testing.metrics.assertions_label') }}
                </p>

                <p class="mt-4 text-4xl font-semibold tracking-tight text-white">
                    979
                </p>

                <p class="mt-3 text-sm text-neutral-400">
                    {{ __('service-desk.testing.metrics.assertions') }}
                </p>
            </div>

            <div class="bg-neutral-950 p-7 sm:p-8">
                <p class="text-xs uppercase tracking-[0.18em] text-neutral-600">
                    {{ __('service-desk.testing.metrics.pipeline_label') }}
                </p>

                <p class="mt-4 text-4xl font-semibold tracking-tight text-orange-400">
                    CI
                </p>

                <p class="mt-3 text-sm text-neutral-400">
                    {{ __('service-desk.testing.metrics.pipeline') }}
                </p>
            </div>

        </div>

        <div class="mt-8 grid gap-px border border-white/10 bg-white/10 md:grid-cols-2">
            @foreach (trans('service-desk.testing.cards') as $card)
                <article
                    @class([
                        'bg-neutral-950 p-7 sm:p-8',
                        'md:col-span-2' => $loop->last,
                    ])
                >
                    <p class="text-xs uppercase tracking-[0.18em] text-orange-400">
                        {{ $card['label'] }}
                    </p>

                    <h3 class="mt-4 text-xl font-medium text-white">
                        {{ $card['title'] }}
                    </h3>

                    <p class="mt-4 text-sm leading-7 text-neutral-400">
                        {{ $card['description'] }}
                    </p>
                </article>
            @endforeach
        </div>

        <div class="mt-8 border border-white/10 p-7 sm:p-8">
            <p class="text-xs uppercase tracking-[0.18em] text-neutral-600">
                {{ __('service-desk.testing.verification_label') }}
            </p>

            <p class="mt-4 max-w-4xl text-xl leading-8 text-neutral-300">
                {{ __('service-desk.testing.verification') }}
            </p>
        </div>

    </div>
</section>

<section class="border-t border-white/10">
    <div class="mx-auto max-w-7xl px-6 py-24 lg:px-8">

        <div class="mb-12">
            <p class="text-sm uppercase tracking-[0.2em] text-neutral-500">
                {{ __('service-desk.production.eyebrow') }}
            </p>

            <h2 class="mt-4 text-3xl font-semibold tracking-tight sm:text-4xl">
                {{ __('service-desk.production.title') }}
            </h2>

            <p class="mt-6 max-w-3xl text-lg leading-8 text-neutral-400">
                {{ __('service-desk.production.description') }}
            </p>
        </div>

        <div class="grid gap-px border border-white/10 bg-white/10 md:grid-cols-2">
            @foreach (trans('service-desk.production.cards') as $card)
                <article class="bg-neutral-950 p-7 sm:p-8">
                    <p class="text-xs uppercase tracking-[0.18em] text-orange-400">
                        {{ $card['label'] }}
                    </p>

                    <h3 class="mt-4 text-xl font-medium text-white">
                        {{ $card['title'] }}
                    </h3>

                    <p class="mt-4 text-sm leading-7 text-neutral-400">
                        {{ $card['description'] }}
                    </p>
                </article>
            @endforeach
        </div>

        <div class="mt-8 border border-white/10 p-7 sm:p-8">
            <p class="text-xs uppercase tracking-[0.18em] text-neutral-600">
                {{ __('service-desk.production.setup_label') }}
            </p>

            <p class="mt-4 max-w-4xl text-xl leading-8 text-neutral-300">
                {{ __('service-desk.production.setup') }}
            </p>
        </div>

    </div>
</section>

<section class="border-t border-white/10">
    <div class="mx-auto max-w-7xl px-6 py-24 lg:px-8">

        <div class="mb-12">
            <p class="text-sm uppercase tracking-[0.2em] text-neutral-500">
                {{ __('service-desk.stack.eyebrow') }}
            </p>

            <h2 class="mt-4 text-3xl font-semibold tracking-tight sm:text-4xl">
                {{ __('service-desk.stack.title') }}
            </h2>

            <p class="mt-6 max-w-3xl text-lg leading-8 text-neutral-400">
                {{ __('service-desk.stack.description') }}
            </p>
        </div>

        <div class="grid gap-px border border-white/10 bg-white/10 sm:grid-cols-2 lg:grid-cols-4">

            <div class="bg-neutral-950 p-7">
                <p class="text-xs uppercase tracking-[0.18em] text-orange-400">
                    {{ __('service-desk.stack.groups.backend') }}
                </p>

                <div class="mt-5 space-y-3 text-sm text-neutral-300">
                    <p>PHP</p>
                    <p>Laravel</p>
                    <p>REST API</p>
                    <p>Laravel Sanctum</p>
                </div>
            </div>

            <div class="bg-neutral-950 p-7">
                <p class="text-xs uppercase tracking-[0.18em] text-orange-400">
                    {{ __('service-desk.stack.groups.data') }}
                </p>

                <div class="mt-5 space-y-3 text-sm text-neutral-300">
                    <p>MySQL</p>
                    <p>Eloquent ORM</p>
                    <p>{{ __('service-desk.stack.data_items.migrations') }}</p>
                    <p>{{ __('service-desk.stack.data_items.storage') }}</p>
                </div>
            </div>

            <div class="bg-neutral-950 p-7">
                <p class="text-xs uppercase tracking-[0.18em] text-orange-400">
                    {{ __('service-desk.stack.groups.integrations') }}
                </p>

                <div class="mt-5 space-y-3 text-sm text-neutral-300">
                    <p>Jira</p>
                    <p>GitHub</p>
                    <p>OpenAI</p>
                    <p>Groq</p>
                    <p>Resend</p>
                </div>
            </div>

            <div class="bg-neutral-950 p-7">
                <p class="text-xs uppercase tracking-[0.18em] text-orange-400">
                    {{ __('service-desk.stack.groups.engineering') }}
                </p>

                <div class="mt-5 space-y-3 text-sm text-neutral-300">
                    <p>PHPUnit</p>
                    <p>Laravel Pint</p>
                    <p>Docker</p>
                    <p>Laravel Sail</p>
                    <p>CI</p>
                </div>
            </div>

        </div>

    </div>
</section>

<section class="border-t border-white/10">
    <div class="mx-auto max-w-7xl px-6 py-24 lg:px-8">

        <div class="grid gap-12 lg:grid-cols-[0.35fr_0.65fr]">

            <div>
                <p class="text-sm uppercase tracking-[0.2em] text-neutral-500">
                    {{ __('service-desk.result.eyebrow') }}
                </p>

                <h2 class="mt-4 text-3xl font-semibold tracking-tight sm:text-4xl">
                    {{ __('service-desk.result.title') }}
                </h2>
            </div>

            <div class="max-w-3xl">

                <p class="text-lg leading-8 text-neutral-400">
                    {{ __('service-desk.result.paragraph_1') }}
                </p>

                <p class="mt-6 text-lg leading-8 text-neutral-400">
                    {{ __('service-desk.result.paragraph_2') }}
                </p>

                <div class="mt-10 grid gap-px border border-white/10 bg-white/10 sm:grid-cols-2">
                    @foreach (trans('service-desk.result.items') as $item)
                        <div class="bg-neutral-950 p-6">
                            <p class="text-sm text-neutral-300">
                                {{ $item }}
                            </p>
                        </div>
                    @endforeach
                </div>

                <div class="mt-12 flex flex-wrap gap-4">
                    <a
                        href="https://github.com/AKV85/service-desk"
                        target="_blank"
                        rel="noopener noreferrer"
                        class="border border-white bg-white px-5 py-3 text-sm font-medium text-black transition hover:bg-neutral-200"
                    >
                        {{ __('service-desk.result.source') }}
                    </a>

                    <a
                        href="https://desk.kotov.lt"
                        target="_blank"
                        rel="noopener noreferrer"
                        class="border border-white/20 px-5 py-3 text-sm font-medium transition hover:border-white/50"
                    >
                        {{ __('service-desk.result.live') }}
                    </a>

                    <a
                        href="{{ $homeUrl }}#projects"
                        class="px-5 py-3 text-sm text-neutral-400 transition hover:text-white"
                    >
                        {{ __('service-desk.result.back') }}
                    </a>
                </div>

            </div>

        </div>

    </div>
</section>

@endsection