<?php

namespace Tests\Feature;

use Tests\TestCase;

class SeoTest extends TestCase
{
    public function test_english_home_has_correct_seo_metadata(): void
    {
        $response = $this->get('/');

        $response
            ->assertOk()
            ->assertSee('<title>Andrej Kotov | PHP / Laravel Backend Developer</title>', false)
            ->assertSee('rel="canonical"', false)
            ->assertSee('href="http://localhost"', false)
            ->assertSee('hreflang="en"', false)
            ->assertSee('hreflang="lt"', false)
            ->assertSee('hreflang="ru"', false)
            ->assertSee('hreflang="x-default"', false)
            ->assertSee('property="og:title"', false)
            ->assertSee('property="og:description"', false)
            ->assertSee('property="og:url"', false)
            ->assertSee('property="og:locale"', false)
            ->assertSee('content="en_US"', false)
            ->assertSee('name="twitter:card"', false)
            ->assertSee('name="twitter:title"', false)
            ->assertSee('name="twitter:description"', false);
    }

    public function test_lithuanian_home_has_correct_locale_metadata(): void
    {
        $response = $this->get('/lt');

        $response
            ->assertOk()
            ->assertSee('<html lang="lt">', false)
            ->assertSee('<title>Andrej Kotov | PHP / Laravel Backend programuotojas</title>', false)
            ->assertSee('href="http://localhost/lt"', false)
            ->assertSee('content="lt_LT"', false);
    }

    public function test_russian_home_has_correct_locale_metadata(): void
    {
        $response = $this->get('/ru');

        $response
            ->assertOk()
            ->assertSee('<html lang="ru">', false)
            ->assertSee('<title>Andrej Kotov | PHP / Laravel Backend-разработчик</title>', false)
            ->assertSee('href="http://localhost/ru"', false)
            ->assertSee('content="ru_RU"', false);
    }

    public function test_cv_pages_have_locale_aware_canonical_urls(): void
    {
        $this->get('/cv')
            ->assertOk()
            ->assertSee('<title>CV | Andrej Kotov | PHP / Laravel Backend Developer</title>', false)
            ->assertSee('href="http://localhost/cv"', false);

        $this->get('/lt/cv')
            ->assertOk()
            ->assertSee('<title>CV | Andrej Kotov | PHP / Laravel Backend programuotojas</title>', false)
            ->assertSee('href="http://localhost/lt/cv"', false)
            ->assertSee('content="lt_LT"', false);

        $this->get('/ru/cv')
            ->assertOk()
            ->assertSee('<title>Резюме | Andrej Kotov | PHP / Laravel Backend-разработчик</title>', false)
            ->assertSee('href="http://localhost/ru/cv"', false)
            ->assertSee('content="ru_RU"', false);
    }

    public function test_service_desk_pages_have_locale_aware_canonical_urls(): void
    {
        $this->get('/projects/service-desk')
            ->assertOk()
            ->assertSee('<title>Service Desk Case Study | Andrej Kotov</title>', false)
            ->assertSee('href="http://localhost/projects/service-desk"', false);

        $this->get('/lt/projects/service-desk')
            ->assertOk()
            ->assertSee('<title>Service Desk projekto analizė | Andrej Kotov</title>', false)
            ->assertSee('href="http://localhost/lt/projects/service-desk"', false)
            ->assertSee('content="lt_LT"', false);

        $this->get('/ru/projects/service-desk')
            ->assertOk()
            ->assertSee('<title>Service Desk: разбор проекта | Andrej Kotov</title>', false)
            ->assertSee('href="http://localhost/ru/projects/service-desk"', false)
            ->assertSee('content="ru_RU"', false);
    }

    public function test_sitemap_contains_all_public_localized_pages(): void
    {
        $response = $this->get('/sitemap.xml');

        $response
            ->assertOk()
            ->assertHeader('Content-Type', 'application/xml')
            ->assertSee('<loc>http://localhost</loc>', false)
            ->assertSee('<loc>http://localhost/lt</loc>', false)
            ->assertSee('<loc>http://localhost/ru</loc>', false)
            ->assertSee('<loc>http://localhost/cv</loc>', false)
            ->assertSee('<loc>http://localhost/lt/cv</loc>', false)
            ->assertSee('<loc>http://localhost/ru/cv</loc>', false)
            ->assertSee('<loc>http://localhost/projects/service-desk</loc>', false)
            ->assertSee('<loc>http://localhost/lt/projects/service-desk</loc>', false)
            ->assertSee('<loc>http://localhost/ru/projects/service-desk</loc>', false);
    }

    public function test_robots_file_exists_and_references_production_sitemap(): void
    {
        $path = public_path('robots.txt');

        $this->assertFileExists($path);

        $contents = file_get_contents($path);

        $this->assertStringContainsString('User-agent: *', $contents);
        $this->assertStringContainsString('Allow: /', $contents);
        $this->assertStringContainsString(
            'Sitemap: https://kotov.lt/sitemap.xml',
            $contents
        );
    }

    public function test_favicon_exists_and_is_not_empty(): void
    {
        $path = public_path('favicon.ico');

        $this->assertFileExists($path);
        $this->assertGreaterThan(0, filesize($path));
    }
}
