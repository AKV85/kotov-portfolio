@extends('layouts.app')

@section('title', __('cv.title'))

@section('content')

@php
    $githubUrl = 'https://github.com/AKV85';
    $linkedinUrl = 'https://www.linkedin.com/in/andrej-kotov-09664a21b';
    $email = 'a.kotov.laknojus@gmail.com';
@endphp

<section class="border-b border-white/10">
    <div class="mx-auto max-w-7xl px-6 py-20 sm:py-24 lg:px-8 lg:py-28">
        <div class="max-w-4xl">
            <p class="text-sm font-medium uppercase tracking-[0.2em] text-orange-400">
                {{ __('cv.hero.eyebrow') }}
            </p>

            <h1 class="mt-5 text-4xl font-semibold tracking-tight text-white sm:text-5xl lg:text-6xl">
                {{ __('cv.hero.name') }}
            </h1>

            <p class="mt-5 text-xl text-neutral-300 sm:text-2xl">
                {{ __('cv.hero.role') }}
            </p>

            <p class="mt-8 max-w-3xl text-base leading-8 text-neutral-400 sm:text-lg">
                {{ __('cv.hero.summary') }}
            </p>

            <div class="mt-10 flex flex-wrap gap-x-6 gap-y-4 text-sm font-medium">
                <a
                    href="{{ $githubUrl }}"
                    target="_blank"
                    rel="noopener noreferrer"
                    class="text-neutral-300 transition hover:text-white"
                >
                    {{ __('cv.hero.github') }}
                    <span aria-hidden="true">↗</span>
                </a>

                <a
                    href="{{ $linkedinUrl }}"
                    target="_blank"
                    rel="noopener noreferrer"
                    class="text-neutral-300 transition hover:text-white"
                >
                    {{ __('cv.hero.linkedin') }}
                    <span aria-hidden="true">↗</span>
                </a>

                <a
                    href="mailto:{{ $email }}"
                    class="text-neutral-300 transition hover:text-white"
                >
                    {{ __('cv.hero.email') }}
                </a>
            </div>
        </div>
    </div>
</section>

<section class="border-b border-white/10">
    <div class="mx-auto max-w-7xl px-6 py-20 sm:py-24 lg:px-8">
        <div class="grid gap-12 lg:grid-cols-[280px_minmax(0,1fr)] lg:gap-16">
            <div>
                <p class="text-sm font-medium uppercase tracking-[0.2em] text-orange-400">
                    {{ __('cv.experience.eyebrow') }}
                </p>

                <h2 class="mt-4 text-3xl font-semibold tracking-tight text-white">
                    {{ __('cv.experience.title') }}
                </h2>
            </div>

            <div class="space-y-12">
                @foreach (trans('cv.experience.items') as $job)
                    <article @class([
                        'border-white/10',
                        'border-b pb-12' => ! $loop->last,
                    ])>
                        <div class="flex flex-col gap-3 sm:flex-row sm:items-start sm:justify-between sm:gap-8">
                            <div>
                                <h3 class="text-xl font-semibold text-white">
                                    {{ $job['role'] }}
                                </h3>

                                <p class="mt-1 text-neutral-300">
                                    {{ $job['company'] }}
                                </p>

                                @if (! empty($job['location']))
                                    <p class="mt-1 text-sm text-neutral-500">
                                        {{ $job['location'] }}
                                    </p>
                                @endif
                            </div>

                            <p class="shrink-0 text-sm text-neutral-500">
                                {{ $job['period'] }}
                            </p>
                        </div>

                        <p class="mt-6 max-w-3xl leading-7 text-neutral-400">
                            {{ $job['description'] }}
                        </p>

                        <ul class="mt-6 space-y-3">
                            @foreach ($job['responsibilities'] as $responsibility)
                                <li class="flex gap-3 text-sm leading-6 text-neutral-400 sm:text-base">
                                    <span class="mt-2 h-1.5 w-1.5 shrink-0 rounded-full bg-orange-400"></span>

                                    <span>
                                        {{ $responsibility }}
                                    </span>
                                </li>
                            @endforeach
                        </ul>
                    </article>
                @endforeach
            </div>
        </div>
    </div>
</section>

<section class="border-b border-white/10">
    <div class="mx-auto max-w-7xl px-6 py-20 sm:py-24 lg:px-8">
        <div class="grid gap-12 lg:grid-cols-[280px_minmax(0,1fr)] lg:gap-16">
            <div>
                <p class="text-sm font-medium uppercase tracking-[0.2em] text-orange-400">
                    {{ __('cv.skills.eyebrow') }}
                </p>

                <h2 class="mt-4 text-3xl font-semibold tracking-tight text-white">
                    {{ __('cv.skills.title') }}
                </h2>
            </div>

            <div class="grid gap-px border border-white/10 bg-white/10 md:grid-cols-2">
                @foreach (trans('cv.skills.groups') as $group)
                    <article
                        @class([
                            'bg-neutral-950 p-7 sm:p-8',
                            'md:col-span-2' => $loop->last && $loop->count % 2 !== 0,
                        ])
                    >
                        <h3 class="text-lg font-semibold text-white">
                            {{ $group['title'] }}
                        </h3>

                        <ul class="mt-5 flex flex-wrap gap-2">
                            @foreach ($group['items'] as $item)
                                <li class="border border-white/10 px-3 py-1.5 text-sm text-neutral-400">
                                    {{ $item }}
                                </li>
                            @endforeach
                        </ul>
                    </article>
                @endforeach
            </div>
        </div>
    </div>
</section>

<section class="border-b border-white/10">
    <div class="mx-auto max-w-7xl px-6 py-20 sm:py-24 lg:px-8">
        <div class="grid gap-12 lg:grid-cols-2 lg:gap-16">
            <div>
                <p class="text-sm font-medium uppercase tracking-[0.2em] text-orange-400">
                    {{ __('cv.education.eyebrow') }}
                </p>

                <h2 class="mt-4 text-3xl font-semibold tracking-tight text-white">
                    {{ __('cv.education.title') }}
                </h2>

                <div class="mt-8 space-y-8">
                    @foreach (trans('cv.education.items') as $item)
                        <article @class([
                            'border-white/10',
                            'border-b pb-8' => ! $loop->last,
                        ])>
                            <h3 class="text-lg font-semibold text-white">
                                {{ $item['name'] }}
                            </h3>

                            <p class="mt-1 text-neutral-300">
                                {{ $item['program'] }}
                            </p>

                            <p class="mt-4 leading-7 text-neutral-400">
                                {{ $item['details'] }}
                            </p>
                        </article>
                    @endforeach
                </div>
            </div>

            <div>
                <p class="text-sm font-medium uppercase tracking-[0.2em] text-orange-400">
                    {{ __('cv.languages.eyebrow') }}
                </p>

                <h2 class="mt-4 text-3xl font-semibold tracking-tight text-white">
                    {{ __('cv.languages.title') }}
                </h2>

                <div class="mt-8 border border-white/10">
                    @foreach (trans('cv.languages.items') as $language)
                        <div
                            @class([
                                'flex items-center justify-between gap-6 px-6 py-5',
                                'border-b border-white/10' => ! $loop->last,
                            ])
                        >
                            <span class="font-medium text-neutral-200">
                                {{ $language['language'] }}
                            </span>

                            <span class="text-sm text-neutral-500">
                                {{ $language['level'] }}
                            </span>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>

<section class="border-b border-white/10">
    <div class="mx-auto max-w-7xl px-6 py-20 sm:py-24 lg:px-8">
        <div class="grid gap-12 lg:grid-cols-[280px_minmax(0,1fr)] lg:gap-16">
            <div>
                <p class="text-sm font-medium uppercase tracking-[0.2em] text-orange-400">
                    {{ __('cv.earlier_experience.eyebrow') }}
                </p>

                <h2 class="mt-4 text-3xl font-semibold tracking-tight text-white">
                    {{ __('cv.earlier_experience.title') }}
                </h2>
            </div>

            <div class="max-w-3xl space-y-5 text-base leading-8 text-neutral-400">
                @foreach (trans('cv.earlier_experience.paragraphs') as $paragraph)
                    <p>
                        {{ $paragraph }}
                    </p>
                @endforeach
            </div>
        </div>
    </div>
</section>

<section>
    <div class="mx-auto max-w-7xl px-6 py-20 sm:py-24 lg:px-8">
        <div class="max-w-4xl">
            <p class="text-sm font-medium uppercase tracking-[0.2em] text-orange-400">
                {{ __('cv.contact.eyebrow') }}
            </p>

            <h2 class="mt-4 text-3xl font-semibold tracking-tight text-white sm:text-4xl">
                {{ __('cv.contact.title') }}
            </h2>

            <p class="mt-6 max-w-3xl text-base leading-8 text-neutral-400 sm:text-lg">
                {{ __('cv.contact.description') }}
            </p>

            <div class="mt-10 flex flex-wrap gap-x-6 gap-y-4 text-sm font-medium">
                <a
                    href="mailto:{{ $email }}"
                    class="text-neutral-300 transition hover:text-white"
                >
                    {{ __('cv.contact.email') }}
                </a>

                <a
                    href="{{ $linkedinUrl }}"
                    target="_blank"
                    rel="noopener noreferrer"
                    class="text-neutral-300 transition hover:text-white"
                >
                    {{ __('cv.contact.linkedin') }}
                    <span aria-hidden="true">↗</span>
                </a>

                <a
                    href="{{ $githubUrl }}"
                    target="_blank"
                    rel="noopener noreferrer"
                    class="text-neutral-300 transition hover:text-white"
                >
                    {{ __('cv.contact.github') }}
                    <span aria-hidden="true">↗</span>
                </a>
            </div>
        </div>
    </div>
</section>

@endsection