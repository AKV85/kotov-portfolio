<?php

namespace Tests\Feature;

use Tests\TestCase;

class VoiceTranslatorPageTest extends TestCase
{
    public function test_english_voice_translator_page_is_available(): void
    {
        $this->get('/projects/voice-translator')
            ->assertOk()
            ->assertSee('Voice Translator');
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
}
