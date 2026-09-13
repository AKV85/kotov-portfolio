<?php

namespace Tests\Feature;

use Tests\TestCase;

class CvPageTest extends TestCase
{
    public function test_english_cv_page_is_available(): void
    {
        $response = $this->get('/cv');

        $response
            ->assertOk()
            ->assertSee('Andrej Kotov')
            ->assertSee('PHP / Laravel Backend Developer')
            ->assertSee('Professional Experience')
            ->assertSee('UAB Vlantana');
    }

    public function test_lithuanian_cv_page_is_available(): void
    {
        $response = $this->get('/lt/cv');

        $response
            ->assertOk()
            ->assertSee('Andrej Kotov')
            ->assertSee('PHP / Laravel Backend programuotojas')
            ->assertSee('Profesinė patirtis')
            ->assertSee('UAB Vlantana');
    }

    public function test_russian_cv_page_is_available(): void
    {
        $response = $this->get('/ru/cv');

        $response
            ->assertOk()
            ->assertSee('Andrej Kotov')
            ->assertSee('PHP / Laravel Backend-разработчик')
            ->assertSee('Профессиональный опыт')
            ->assertSee('UAB Vlantana');
    }

    public function test_cv_language_switcher_preserves_current_page(): void
    {
        $response = $this->get('/cv');

        $response
            ->assertOk()
            ->assertSee(route('cv'), false)
            ->assertSee(
                route('localized.cv', ['locale' => 'lt']),
                false
            )
            ->assertSee(
                route('localized.cv', ['locale' => 'ru']),
                false
            );
    }

    public function test_lithuanian_cv_language_switcher_preserves_current_page(): void
    {
        $response = $this->get('/lt/cv');

        $response
            ->assertOk()
            ->assertSee(route('cv'), false)
            ->assertSee(
                route('localized.cv', ['locale' => 'lt']),
                false
            )
            ->assertSee(
                route('localized.cv', ['locale' => 'ru']),
                false
            );
    }

    public function test_russian_cv_language_switcher_preserves_current_page(): void
    {
        $response = $this->get('/ru/cv');

        $response
            ->assertOk()
            ->assertSee(route('cv'), false)
            ->assertSee(
                route('localized.cv', ['locale' => 'lt']),
                false
            )
            ->assertSee(
                route('localized.cv', ['locale' => 'ru']),
                false
            );
    }

    public function test_home_pages_contain_locale_aware_cv_link(): void
    {
        $this->get('/')
            ->assertOk()
            ->assertSee(route('cv'), false);

        $this->get('/lt')
            ->assertOk()
            ->assertSee(
                route('localized.cv', ['locale' => 'lt']),
                false
            );

        $this->get('/ru')
            ->assertOk()
            ->assertSee(
                route('localized.cv', ['locale' => 'ru']),
                false
            );
    }
}
