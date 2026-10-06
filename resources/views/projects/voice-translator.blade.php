@extends('layouts.app')

@php
    $currentLocale = app()->getLocale();

    $homeUrl = $currentLocale === 'en'
        ? route('home')
        : route('localized.home', ['locale' => $currentLocale]);

    $canonicalUrl = $currentLocale === 'en'
        ? route('projects.voice-translator')
        : route('localized.projects.voice-translator', ['locale' => $currentLocale]);

    $hreflangEn = route('projects.voice-translator');
    $hreflangLt = route('localized.projects.voice-translator', ['locale' => 'lt']);
    $hreflangRu = route('localized.projects.voice-translator', ['locale' => 'ru']);
@endphp

@section('title', __('voice-translator.seo.title'))
@section('meta_description', __('voice-translator.seo.description'))

@section('canonical', $canonicalUrl)

@section('hreflang_en', $hreflangEn)
@section('hreflang_lt', $hreflangLt)
@section('hreflang_ru', $hreflangRu)
@section('hreflang_x_default', $hreflangEn)

@section('og_url', $canonicalUrl)
@section('og_type', 'article')

@section('content')

<section class="mx-auto max-w-7xl px-6 py-20 lg:px-8 lg:py-28">
    <div class="max-w-5xl">
        <a
            href="{{ $homeUrl }}#projects"
            class="text-sm text-neutral-400 transition hover:text-white"
        >
            {{ __('voice-translator.hero.back') }}
        </a>

        <p class="mt-12 text-sm font-medium uppercase tracking-[0.25em] text-orange-400">
            {{ __('voice-translator.hero.eyebrow') }}
        </p>

        <h1 class="mt-5 text-5xl font-semibold tracking-tight sm:text-6xl lg:text-8xl">
            {{ __('voice-translator.hero.name') }}
        </h1>

        <p class="mt-8 max-w-3xl text-lg leading-8 text-neutral-400 sm:text-xl">
            {{ __('voice-translator.hero.description') }}
        </p>

        <div class="mt-10 flex flex-wrap gap-4">
            <a
                href="https://github.com/AKV85/voice-translator"
                target="_blank"
                rel="noopener noreferrer"
                class="border border-white bg-white px-5 py-3 text-sm font-medium text-black transition hover:bg-neutral-200"
            >
                {{ __('voice-translator.hero.github') }}
            </a>

            <a
                href="https://voice.kotov.lt"
                target="_blank"
                rel="noopener noreferrer"
                class="border border-white/20 px-5 py-3 text-sm font-medium transition hover:border-white/50"
            >
                {{ __('voice-translator.hero.live') }}
            </a>
        </div>

        <div class="mt-16 grid gap-px border border-white/10 bg-white/10 sm:grid-cols-3">
            <div class="bg-neutral-950 p-6">
                <p class="text-xs uppercase tracking-[0.18em] text-neutral-600">
                    {{ __('voice-translator.hero.meta.type_label') }}
                </p>
                <p class="mt-3 text-sm text-neutral-300">
                    {{ __('voice-translator.hero.meta.type') }}
                </p>
            </div>

            <div class="bg-neutral-950 p-6">
                <p class="text-xs uppercase tracking-[0.18em] text-neutral-600">
                    {{ __('voice-translator.hero.meta.focus_label') }}
                </p>
                <p class="mt-3 text-sm text-neutral-300">
                    {{ __('voice-translator.hero.meta.focus') }}
                </p>
            </div>

            <div class="bg-neutral-950 p-6">
                <p class="text-xs uppercase tracking-[0.18em] text-neutral-600">
                    {{ __('voice-translator.hero.meta.status_label') }}
                </p>
                <p class="mt-3 text-sm text-orange-400">
                    {{ __('voice-translator.hero.meta.status') }}
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
                    {{ __('voice-translator.project.eyebrow') }}
                </p>

                <h2 class="mt-4 text-3xl font-semibold tracking-tight sm:text-4xl">
                    {{ __('voice-translator.project.title') }}
                </h2>
            </div>

            <div class="max-w-3xl space-y-6 text-lg leading-8 text-neutral-400">
                @foreach (trans('voice-translator.project.paragraphs') as $paragraph)
                    <p>{{ $paragraph }}</p>
                @endforeach
            </div>
        </div>
    </div>
</section>

<section class="border-t border-white/10">
    <div class="mx-auto max-w-7xl px-6 py-24 lg:px-8">
        <div class="grid gap-12 lg:grid-cols-[0.42fr_0.58fr]">
            <div>
                <p class="text-sm uppercase tracking-[0.2em] text-orange-400">
                    {{ __('voice-translator.persik.eyebrow') }}
                </p>

                <h2 class="mt-4 text-3xl font-semibold tracking-tight sm:text-4xl">
                    {{ __('voice-translator.persik.title') }}
                </h2>

                <p class="mt-6 text-lg leading-8 text-neutral-400">
                    {{ __('voice-translator.persik.paragraph_1') }}
                </p>

                <p class="mt-6 text-lg leading-8 text-neutral-400">
                    {{ __('voice-translator.persik.paragraph_2') }}
                </p>
            </div>

            <div class="space-y-6">
                <div class="border border-white/10 p-7 sm:p-8">
                    <p class="text-xs uppercase tracking-[0.18em] text-neutral-600">
                        {{ __('voice-translator.persik.first_label') }}
                    </p>

                    <p class="mt-5 font-mono text-sm text-neutral-300">
                        {{ __('voice-translator.persik.first_input') }}
                    </p>

                    <div class="my-4 text-orange-400">↓</div>

                    <p class="font-mono text-sm text-white">
                        {{ __('voice-translator.persik.first_output') }}
                    </p>
                </div>

                <div class="grid gap-px border border-white/10 bg-white/10 sm:grid-cols-2">
                    <div class="bg-neutral-950 p-6">
                        <p class="text-xs uppercase tracking-[0.18em] text-neutral-600">
                            {{ __('voice-translator.persik.context_label') }}
                        </p>

                        <p class="mt-4 font-mono text-sm leading-6 text-neutral-300">
                            {{ __('voice-translator.persik.context_input') }}
                        </p>

                        <p class="mt-4 text-sm text-orange-400">
                            {{ __('voice-translator.persik.context_result') }}
                        </p>
                    </div>

                    <div class="bg-neutral-950 p-6">
                        <p class="text-xs uppercase tracking-[0.18em] text-neutral-600">
                            {{ __('voice-translator.persik.translation_label') }}
                        </p>

                        <p class="mt-4 font-mono text-sm text-neutral-300">
                            {{ __('voice-translator.persik.translation_input') }}
                        </p>

                        <div class="my-4 text-orange-400">↓</div>

                        <p class="font-mono text-sm text-white">
                            {{ __('voice-translator.persik.translation_output') }}
                        </p>
                    </div>
                </div>

                <div class="border border-orange-400/20 bg-orange-400/[0.03] p-7 sm:p-8">
                    <p class="text-base leading-7 text-neutral-300">
                        {{ __('voice-translator.persik.conclusion') }}
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="border-t border-white/10">
    <div class="mx-auto max-w-7xl px-6 py-24 lg:px-8">
        <div class="mb-12">
            <p class="text-sm uppercase tracking-[0.2em] text-neutral-500">
                {{ __('voice-translator.pipeline.eyebrow') }}
            </p>

            <h2 class="mt-4 text-3xl font-semibold tracking-tight sm:text-4xl">
                {{ __('voice-translator.pipeline.title') }}
            </h2>

            <p class="mt-6 max-w-3xl text-lg leading-8 text-neutral-400">
                {{ __('voice-translator.pipeline.description') }}
            </p>
        </div>

        <div class="grid gap-px border border-white/10 bg-white/10 md:grid-cols-2">
            @foreach (trans('voice-translator.pipeline.steps') as $step)
                <article class="bg-neutral-950 p-7 sm:p-8">
                    <p class="text-xs uppercase tracking-[0.18em] text-orange-400">
                        {{ $step['label'] }}
                    </p>

                    <h3 class="mt-4 text-xl font-medium text-white">
                        {{ $step['title'] }}
                    </h3>

                    <p class="mt-4 text-sm leading-7 text-neutral-400">
                        {{ $step['description'] }}
                    </p>
                </article>
            @endforeach
        </div>

        <div class="mt-8 border border-white/10 p-7 sm:p-8">
            <p class="text-xs uppercase tracking-[0.18em] text-neutral-600">
                {{ __('voice-translator.pipeline.production_label') }}
            </p>

            <p class="mt-4 max-w-4xl text-xl leading-8 text-neutral-300">
                {{ __('voice-translator.pipeline.production') }}
            </p>
        </div>
    </div>
</section>

<section class="border-t border-white/10">
    <div class="mx-auto max-w-7xl px-6 py-24 lg:px-8">
        <div class="grid gap-14 lg:grid-cols-[0.48fr_0.52fr]">
            <div>
                <p class="text-sm uppercase tracking-[0.2em] text-neutral-500">
                    {{ __('voice-translator.lab.eyebrow') }}
                </p>

                <h2 class="mt-4 text-3xl font-semibold tracking-tight sm:text-4xl">
                    {{ __('voice-translator.lab.title') }}
                </h2>

                <p class="mt-6 text-lg leading-8 text-neutral-400">
                    {{ __('voice-translator.lab.description') }}
                </p>

                <div class="mt-10 grid gap-px border border-white/10 bg-white/10 sm:grid-cols-2">
                    @foreach (trans('voice-translator.lab.cards') as $card)
                        <article class="bg-neutral-950 p-6">
                            <p class="text-xs uppercase tracking-[0.18em] text-orange-400">
                                {{ $card['label'] }}
                            </p>

                            <h3 class="mt-3 text-lg font-medium text-white">
                                {{ $card['title'] }}
                            </h3>

                            <p class="mt-3 text-sm leading-6 text-neutral-400">
                                {{ $card['description'] }}
                            </p>
                        </article>
                    @endforeach
                </div>
            </div>

            <div class="self-start border border-white/10 bg-white/[0.02] p-3 sm:p-4">
                <img
                    src="{{ asset('images/projects/voice-translator/live-lab-run.png') }}"
                    alt="{{ __('voice-translator.lab.screenshot_alt') }}"
                    class="h-auto w-full"
                    loading="lazy"
                >
            </div>
        </div>
    </div>
</section>

<section class="border-t border-white/10">
    <div class="mx-auto max-w-7xl px-6 py-24 lg:px-8">
        <div class="mb-12">
            <p class="text-sm uppercase tracking-[0.2em] text-neutral-500">
                {{ __('voice-translator.benchmark.eyebrow') }}
            </p>

            <h2 class="mt-4 text-3xl font-semibold tracking-tight sm:text-4xl">
                {{ __('voice-translator.benchmark.title') }}
            </h2>

            <p class="mt-6 max-w-3xl text-lg leading-8 text-neutral-400">
                {{ __('voice-translator.benchmark.description') }}
            </p>
        </div>

        <div class="grid gap-px border border-white/10 bg-white/10 sm:grid-cols-3">
            <div class="bg-neutral-950 p-7 sm:p-8">
                <p class="text-xs uppercase tracking-[0.18em] text-neutral-600">
                    {{ __('voice-translator.benchmark.quality_label') }}
                </p>
                <p class="mt-4 text-4xl font-semibold tracking-tight text-white">
                    {{ __('voice-translator.benchmark.quality_value') }}
                </p>
            </div>

            <div class="bg-neutral-950 p-7 sm:p-8">
                <p class="text-xs uppercase tracking-[0.18em] text-neutral-600">
                    {{ __('voice-translator.benchmark.ru_audio_label') }}
                </p>
                <p class="mt-4 text-4xl font-semibold tracking-tight text-white">
                    {{ __('voice-translator.benchmark.ru_audio_value') }}
                </p>
            </div>

            <div class="bg-neutral-950 p-7 sm:p-8">
                <p class="text-xs uppercase tracking-[0.18em] text-neutral-600">
                    {{ __('voice-translator.benchmark.en_audio_label') }}
                </p>
                <p class="mt-4 text-4xl font-semibold tracking-tight text-orange-400">
                    {{ __('voice-translator.benchmark.en_audio_value') }}
                </p>
            </div>
        </div>

        <div class="mt-8 overflow-x-auto border border-white/10">
            <table class="min-w-full text-left text-sm">
                <thead class="border-b border-white/10 text-xs uppercase tracking-[0.14em] text-neutral-600">
                    <tr>
                        <th class="px-5 py-4 font-medium">
                            {{ __('voice-translator.benchmark.table.profile') }}
                        </th>
                        <th class="px-5 py-4 font-medium">
                            {{ __('voice-translator.benchmark.table.ru_quality') }}
                        </th>
                        <th class="px-5 py-4 font-medium">
                            {{ __('voice-translator.benchmark.table.en_quality') }}
                        </th>
                        <th class="px-5 py-4 font-medium">
                            {{ __('voice-translator.benchmark.table.ru_audio') }}
                        </th>
                        <th class="px-5 py-4 font-medium">
                            {{ __('voice-translator.benchmark.table.en_audio') }}
                        </th>
                    </tr>
                </thead>

                <tbody class="divide-y divide-white/10 text-neutral-300">
                    @foreach (trans('voice-translator.benchmark.table.rows') as $row)
                        <tr>
                            <td class="whitespace-nowrap px-5 py-4 font-medium text-white">
                                {{ $row['profile'] }}
                            </td>
                            <td class="whitespace-nowrap px-5 py-4">{{ $row['ru_quality'] }}</td>
                            <td class="whitespace-nowrap px-5 py-4">{{ $row['en_quality'] }}</td>
                            <td class="whitespace-nowrap px-5 py-4">{{ $row['ru_audio'] }}</td>
                            <td class="whitespace-nowrap px-5 py-4">{{ $row['en_audio'] }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="mt-8 grid gap-8 lg:grid-cols-[0.48fr_0.52fr]">
            <div class="border border-white/10 p-7 sm:p-8">
                <p class="text-xs uppercase tracking-[0.18em] text-orange-400">
                    {{ __('voice-translator.benchmark.decision_label') }}
                </p>

                <p class="mt-4 text-lg leading-8 text-neutral-300">
                    {{ __('voice-translator.benchmark.decision') }}
                </p>
            </div>

            <div class="border border-white/10 bg-white/[0.02] p-3 sm:p-4">
                <img
                    src="{{ asset('images/projects/voice-translator/live-lab-comparison.png') }}"
                    alt="{{ __('voice-translator.benchmark.screenshot_alt') }}"
                    class="h-auto w-full"
                    loading="lazy"
                >
            </div>
        </div>
    </div>
</section>

<section class="border-t border-white/10">
    <div class="mx-auto max-w-7xl px-6 py-24 lg:px-8">
        <div class="mb-12">
            <p class="text-sm uppercase tracking-[0.2em] text-neutral-500">
                {{ __('voice-translator.demo.eyebrow') }}
            </p>

            <h2 class="mt-4 text-3xl font-semibold tracking-tight sm:text-4xl">
                {{ __('voice-translator.demo.title') }}
            </h2>

            <p class="mt-6 max-w-3xl text-lg leading-8 text-neutral-400">
                {{ __('voice-translator.demo.description') }}
            </p>
        </div>

        <div class="grid gap-px border border-white/10 bg-white/10 md:grid-cols-2">
            @foreach (trans('voice-translator.demo.cards') as $card)
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

        <div class="mt-10 grid items-start gap-8 lg:grid-cols-[1fr_0.42fr]">
            <div class="border border-white/10 bg-white/[0.02] p-3 sm:p-4">
                <img
                    src="{{ asset('images/projects/voice-translator/public-demo-desktop.png') }}"
                    alt="{{ __('voice-translator.demo.desktop_alt') }}"
                    class="h-auto w-full"
                    loading="lazy"
                >
            </div>

            <div class="mx-auto w-full max-w-sm border border-white/10 bg-white/[0.02] p-3 sm:p-4">
                <img
                    src="{{ asset('images/projects/voice-translator/public-demo-mobile.png') }}"
                    alt="{{ __('voice-translator.demo.mobile_alt') }}"
                    class="h-auto w-full"
                    loading="lazy"
                >
            </div>
        </div>
    </div>
</section>

<section class="border-t border-white/10">
    <div class="mx-auto max-w-7xl px-6 py-24 lg:px-8">
        <div class="mb-12">
            <p class="text-sm uppercase tracking-[0.2em] text-neutral-500">
                {{ __('voice-translator.production.eyebrow') }}
            </p>

            <h2 class="mt-4 text-3xl font-semibold tracking-tight sm:text-4xl">
                {{ __('voice-translator.production.title') }}
            </h2>

            <p class="mt-6 max-w-3xl text-lg leading-8 text-neutral-400">
                {{ __('voice-translator.production.description') }}
            </p>
        </div>

        <div class="grid gap-px border border-white/10 bg-white/10 md:grid-cols-2">
            @foreach (trans('voice-translator.production.cards') as $card)
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
                {{ __('voice-translator.production.setup_label') }}
            </p>

            <p class="mt-4 max-w-4xl text-xl leading-8 text-neutral-300">
                {{ __('voice-translator.production.setup') }}
            </p>
        </div>
    </div>
</section>

<section class="border-t border-white/10">
    <div class="mx-auto max-w-7xl px-6 py-24 lg:px-8">
        <div class="grid gap-12 lg:grid-cols-[0.35fr_0.65fr]">
            <div>
                <p class="text-sm uppercase tracking-[0.2em] text-neutral-500">
                    {{ __('voice-translator.limitations.eyebrow') }}
                </p>

                <h2 class="mt-4 text-3xl font-semibold tracking-tight sm:text-4xl">
                    {{ __('voice-translator.limitations.title') }}
                </h2>
            </div>

            <div>
                <p class="max-w-3xl text-lg leading-8 text-neutral-400">
                    {{ __('voice-translator.limitations.description') }}
                </p>

                <div class="mt-10 grid gap-px border border-white/10 bg-white/10 sm:grid-cols-2">
                    @foreach (trans('voice-translator.limitations.items') as $item)
                        <div class="bg-neutral-950 p-6">
                            <p class="text-sm leading-6 text-neutral-300">
                                {{ $item }}
                            </p>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>

<section class="border-t border-white/10">
    <div class="mx-auto max-w-7xl px-6 py-24 lg:px-8">
        <div class="mb-12">
            <p class="text-sm uppercase tracking-[0.2em] text-neutral-500">
                {{ __('voice-translator.stack.eyebrow') }}
            </p>

            <h2 class="mt-4 text-3xl font-semibold tracking-tight sm:text-4xl">
                {{ __('voice-translator.stack.title') }}
            </h2>

            <p class="mt-6 max-w-3xl text-lg leading-8 text-neutral-400">
                {{ __('voice-translator.stack.description') }}
            </p>
        </div>

        <div class="grid gap-px border border-white/10 bg-white/10 sm:grid-cols-2 lg:grid-cols-4">
            <div class="bg-neutral-950 p-7">
                <p class="text-xs uppercase tracking-[0.18em] text-orange-400">
                    {{ __('voice-translator.stack.groups.application') }}
                </p>
                <div class="mt-5 space-y-3 text-sm text-neutral-300">
                    <p>PHP 8.4</p>
                    <p>Laravel 13</p>
                    <p>Blade</p>
                    <p>Vite</p>
                </div>
            </div>

            <div class="bg-neutral-950 p-7">
                <p class="text-xs uppercase tracking-[0.18em] text-orange-400">
                    {{ __('voice-translator.stack.groups.speech') }}
                </p>
                <div class="mt-5 space-y-3 text-sm text-neutral-300">
                    <p>Google Speech-to-Text</p>
                    <p>DeepL</p>
                    <p>OpenAI TTS</p>
                    <p>WebM audio</p>
                </div>
            </div>

            <div class="bg-neutral-950 p-7">
                <p class="text-xs uppercase tracking-[0.18em] text-orange-400">
                    {{ __('voice-translator.stack.groups.data') }}
                </p>
                <div class="mt-5 space-y-3 text-sm text-neutral-300">
                    <p>MySQL</p>
                    <p>WebSockets</p>
                    <p>Persisted Lab runs</p>
                    <p>Browser timing metrics</p>
                </div>
            </div>

            <div class="bg-neutral-950 p-7">
                <p class="text-xs uppercase tracking-[0.18em] text-orange-400">
                    {{ __('voice-translator.stack.groups.engineering') }}
                </p>
                <div class="mt-5 space-y-3 text-sm text-neutral-300">
                    <p>Docker</p>
                    <p>Laravel Sail</p>
                    <p>PHPStan</p>
                    <p>Laravel Pint</p>
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
                    {{ __('voice-translator.result.eyebrow') }}
                </p>

                <h2 class="mt-4 text-3xl font-semibold tracking-tight sm:text-4xl">
                    {{ __('voice-translator.result.title') }}
                </h2>
            </div>

            <div class="max-w-3xl">
                <p class="text-lg leading-8 text-neutral-400">
                    {{ __('voice-translator.result.paragraph_1') }}
                </p>

                <p class="mt-6 text-lg leading-8 text-neutral-400">
                    {{ __('voice-translator.result.paragraph_2') }}
                </p>

                <div class="mt-10 grid gap-px border border-white/10 bg-white/10 sm:grid-cols-2">
                    @foreach (trans('voice-translator.result.items') as $item)
                        <div class="bg-neutral-950 p-6">
                            <p class="text-sm text-neutral-300">
                                {{ $item }}
                            </p>
                        </div>
                    @endforeach
                </div>

                <div class="mt-12 flex flex-wrap gap-4">
                    <a
                        href="https://github.com/AKV85/voice-translator"
                        target="_blank"
                        rel="noopener noreferrer"
                        class="border border-white bg-white px-5 py-3 text-sm font-medium text-black transition hover:bg-neutral-200"
                    >
                        {{ __('voice-translator.result.source') }}
                    </a>

                    <a
                        href="https://voice.kotov.lt"
                        target="_blank"
                        rel="noopener noreferrer"
                        class="border border-white/20 px-5 py-3 text-sm font-medium transition hover:border-white/50"
                    >
                        {{ __('voice-translator.result.live') }}
                    </a>

                    <a
                        href="{{ $homeUrl }}#projects"
                        class="px-5 py-3 text-sm text-neutral-400 transition hover:text-white"
                    >
                        {{ __('voice-translator.result.back') }}
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
