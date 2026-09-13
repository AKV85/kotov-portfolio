<?php

use App\Http\Middleware\SetLocale;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| English routes
|--------------------------------------------------------------------------
|
| English is the default language and does not use a locale prefix.
|
*/

Route::view('/', 'pages.home')
    ->name('home');

Route::view('/projects/service-desk', 'projects.service-desk')
    ->name('projects.service-desk');

/*
|--------------------------------------------------------------------------
| Localized routes
|--------------------------------------------------------------------------
|
| Lithuanian and Russian versions use explicit locale prefixes.
|
*/

Route::prefix('{locale}')
    ->whereIn('locale', ['lt', 'ru'])
    ->middleware(SetLocale::class)
    ->group(function () {
        Route::view('/', 'pages.home')
            ->name('localized.home');

        Route::view('/projects/service-desk', 'projects.service-desk')
            ->name('localized.projects.service-desk');
    });
