<?php

namespace Tests\Feature;

use Tests\TestCase;

class HomePageTest extends TestCase
{
    public function test_english_home_page_is_available(): void
    {
        $response = $this->get('/');

        $response
            ->assertOk()
            ->assertSee('Andrej Kotov')
            ->assertSee('PHP / Laravel Backend Developer')
            ->assertSee('About')
            ->assertSee('Experience')
            ->assertSee('Technologies')
            ->assertSee('Selected Projects')
            ->assertSee('Service Desk')
            ->assertSee('Contact');
    }

    public function test_lithuanian_home_page_is_available(): void
    {
        $response = $this->get('/lt');

        $response
            ->assertOk()
            ->assertSee('Andrej Kotov')
            ->assertSee('PHP / Laravel Backend programuotojas')
            ->assertSee('Service Desk');
    }

    public function test_russian_home_page_is_available(): void
    {
        $response = $this->get('/ru');

        $response
            ->assertOk()
            ->assertSee('Andrej Kotov')
            ->assertSee('PHP / Laravel Backend-разработчик')
            ->assertSee('Service Desk');
    }

    public function test_home_language_switcher_preserves_home_page(): void
    {
        $response = $this->get('/');

        $response
            ->assertOk()
            ->assertSee(route('home'), false)
            ->assertSee(
                route('localized.home', ['locale' => 'lt']),
                false
            )
            ->assertSee(
                route('localized.home', ['locale' => 'ru']),
                false
            );
    }

    public function test_lithuanian_home_contains_locale_aware_navigation_links(): void
    {
        $response = $this->get('/lt');

        $response
            ->assertOk()
            ->assertSee(
                route('localized.home', ['locale' => 'lt']),
                false
            )
            ->assertSee(
                route('localized.cv', ['locale' => 'lt']),
                false
            )
            ->assertSee(
                route('localized.projects.service-desk', ['locale' => 'lt']),
                false
            );
    }

    public function test_russian_home_contains_locale_aware_navigation_links(): void
    {
        $response = $this->get('/ru');

        $response
            ->assertOk()
            ->assertSee(
                route('localized.home', ['locale' => 'ru']),
                false
            )
            ->assertSee(
                route('localized.cv', ['locale' => 'ru']),
                false
            )
            ->assertSee(
                route('localized.projects.service-desk', ['locale' => 'ru']),
                false
            );
    }

    public function test_unsupported_locale_returns_not_found(): void
    {
        $this->get('/de')
            ->assertNotFound();
    }
}
