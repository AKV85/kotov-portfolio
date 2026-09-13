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