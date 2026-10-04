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

@section('title', 'Voice Translator | Andrej Kotov')
@section(
    'meta_description',
    'Voice Translator is a production RU ↔ EN push-to-talk voice translation project with measurable speech, translation and text-to-speech pipelines.'
)

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
                ← Back to projects
            </a>

            <p class="mt-12 text-sm font-medium uppercase tracking-[0.25em] text-orange-400">
                Production Project
            </p>

            <h1 class="mt-5 text-5xl font-semibold tracking-tight sm:text-6xl lg:text-8xl">
                Voice Translator
            </h1>

            <p class="mt-8 max-w-3xl text-lg leading-8 text-neutral-400 sm:text-xl">
                RU ↔ EN push-to-talk voice translation with benchmark-driven pipeline selection,
                browser latency measurement and a production deployment.
            </p>
        </div>
    </section>
@endsection
