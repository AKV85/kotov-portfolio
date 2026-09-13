<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'pages.home')->name('home');

Route::view('/projects/service-desk', 'projects.service-desk')
    ->name('projects.service-desk');
