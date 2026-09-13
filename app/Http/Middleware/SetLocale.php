<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class SetLocale
{
    private const SUPPORTED_LOCALES = [
        'lt',
        'ru',
    ];

    public function handle(Request $request, Closure $next): Response
    {
        $locale = $request->route('locale');

        if (! in_array($locale, self::SUPPORTED_LOCALES, true)) {
            abort(404);
        }

        app()->setLocale($locale);

        return $next($request);
    }
}
