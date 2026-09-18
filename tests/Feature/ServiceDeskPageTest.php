<?php

namespace Tests\Feature;

use Tests\TestCase;

class ServiceDeskPageTest extends TestCase
{
    public function test_english_service_desk_page_is_available(): void
    {
        $response = $this->get('/projects/service-desk');

        $response
            ->assertOk()
            ->assertSee('Service Desk')
            ->assertSee('The Project')
            ->assertSee('Core Backend')
            ->assertSee('Integrations')
            ->assertSee('AI Integration')
            ->assertSee('Testing & Reliability')
            ->assertSee('Production & Deployment')
            ->assertSee('Technology Stack')
            ->assertSee('315')
            ->assertSee('979');
    }

    public function test_lithuanian_service_desk_page_is_available(): void
    {
        $response = $this->get('/lt/projects/service-desk');

        $response
            ->assertOk()
            ->assertSee('Service Desk')
            ->assertSee('315')
            ->assertSee('979');
    }

    public function test_russian_service_desk_page_is_available(): void
    {
        $response = $this->get('/ru/projects/service-desk');

        $response
            ->assertOk()
            ->assertSee('Service Desk')
            ->assertSee('315')
            ->assertSee('979');
    }

    public function test_english_service_desk_language_switcher_preserves_current_page(): void
    {
        $response = $this->get('/projects/service-desk');

        $response
            ->assertOk()
            ->assertSee(route('projects.service-desk'), false)
            ->assertSee(
                route('localized.projects.service-desk', ['locale' => 'lt']),
                false
            )
            ->assertSee(
                route('localized.projects.service-desk', ['locale' => 'ru']),
                false
            );
    }

    public function test_lithuanian_service_desk_language_switcher_preserves_current_page(): void
    {
        $response = $this->get('/lt/projects/service-desk');

        $response
            ->assertOk()
            ->assertSee(route('projects.service-desk'), false)
            ->assertSee(
                route('localized.projects.service-desk', ['locale' => 'lt']),
                false
            )
            ->assertSee(
                route('localized.projects.service-desk', ['locale' => 'ru']),
                false
            );
    }

    public function test_russian_service_desk_language_switcher_preserves_current_page(): void
    {
        $response = $this->get('/ru/projects/service-desk');

        $response
            ->assertOk()
            ->assertSee(route('projects.service-desk'), false)
            ->assertSee(
                route('localized.projects.service-desk', ['locale' => 'lt']),
                false
            )
            ->assertSee(
                route('localized.projects.service-desk', ['locale' => 'ru']),
                false
            );
    }

    public function test_service_desk_navigation_returns_to_locale_aware_home(): void
    {
        $this->get('/projects/service-desk')
            ->assertOk()
            ->assertSee(route('home'), false);

        $this->get('/lt/projects/service-desk')
            ->assertOk()
            ->assertSee(
                route('localized.home', ['locale' => 'lt']),
                false
            );

        $this->get('/ru/projects/service-desk')
            ->assertOk()
            ->assertSee(
                route('localized.home', ['locale' => 'ru']),
                false
            );
    }
}
