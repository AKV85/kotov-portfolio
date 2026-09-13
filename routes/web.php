<?php

use App\Http\Middleware\SetLocale;
use Illuminate\Support\Facades\Route;

Route::view('/', 'pages.home')
    ->name('home');

Route::view('/cv', 'pages.cv')
    ->name('cv');

Route::view('/projects/service-desk', 'projects.service-desk')
    ->name('projects.service-desk');

Route::prefix('{locale}')
    ->whereIn('locale', ['lt', 'ru'])
    ->middleware(SetLocale::class)
    ->group(function () {
        Route::view('/', 'pages.home')
            ->name('localized.home');

        Route::view('/cv', 'pages.cv')
            ->name('localized.cv');

        Route::view('/projects/service-desk', 'projects.service-desk')
            ->name('localized.projects.service-desk');
    });

Route::get('/sitemap.xml', function () {
    $urls = [
        route('home'),
        route('localized.home', ['locale' => 'lt']),
        route('localized.home', ['locale' => 'ru']),

        route('cv'),
        route('localized.cv', ['locale' => 'lt']),
        route('localized.cv', ['locale' => 'ru']),

        route('projects.service-desk'),
        route('localized.projects.service-desk', ['locale' => 'lt']),
        route('localized.projects.service-desk', ['locale' => 'ru']),
    ];

    return response()
        ->view('sitemap', compact('urls'))
        ->header('Content-Type', 'application/xml');
})->name('sitemap');
