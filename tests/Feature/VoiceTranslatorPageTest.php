<?php

namespace Tests\Feature;

use Tests\TestCase;

class VoiceTranslatorPageTest extends TestCase
{
    public function test_english_voice_translator_page_is_available(): void
    {
        $response = $this->get('/projects/voice-translator');

        $response
            ->assertOk()
            ->assertSee('Voice Translator')
            ->assertSee('The Cat That Started the R&D Department')
            ->assertSee('Production Pipeline')
            ->assertSee('Engineering Lab')
            ->assertSee('Benchmarking')
            ->assertSee('93.33%')
            ->assertSee('1701 ms')
            ->assertSee('1677 ms')
            ->assertSee('Peach')
            ->assertSee('Public Demo')
            ->assertSee('Current Limitations')
            ->assertSee('Technology Stack');
    }

    public function test_lithuanian_voice_translator_page_is_available(): void
    {
        $this->get('/lt/projects/voice-translator')
            ->assertOk()
            ->assertSee('Voice Translator');
    }

    public function test_russian_voice_translator_page_is_available(): void
    {
        $this->get('/ru/projects/voice-translator')
            ->assertOk()
            ->assertSee('Voice Translator');
    }

    public function test_voice_translator_language_switcher_preserves_current_project(): void
    {
        $response = $this->get('/projects/voice-translator');

        $response
            ->assertOk()
            ->assertSee(route('projects.voice-translator'), false)
            ->assertSee(
                route('localized.projects.voice-translator', ['locale' => 'lt']),
                false
            )
            ->assertSee(
                route('localized.projects.voice-translator', ['locale' => 'ru']),
                false
            );
    }

    public function test_voice_translator_navigation_returns_to_locale_aware_home(): void
    {
        $this->get('/projects/voice-translator')
            ->assertOk()
            ->assertSee(route('home'), false);

        $this->get('/lt/projects/voice-translator')
            ->assertOk()
            ->assertSee(
                route('localized.home', ['locale' => 'lt']),
                false
            );

        $this->get('/ru/projects/voice-translator')
            ->assertOk()
            ->assertSee(
                route('localized.home', ['locale' => 'ru']),
                false
            );
    }

    public function test_voice_translator_screenshots_exist(): void
    {
        foreach ([
            'public-demo-desktop.png',
            'public-demo-mobile.png',
            'live-lab-run.png',
            'live-lab-comparison.png',
        ] as $file) {
            $path = public_path("images/projects/voice-translator/{$file}");

            $this->assertFileExists($path);
            $this->assertGreaterThan(0, filesize($path));
        }
    }
}
