<?php

namespace Tests\Feature;

use Tests\TestCase;

class LocalizationTest extends TestCase
{
    public function test_language_switch_route_updates_session_and_redirects(): void
    {
        $response = $this->get('/lang/en');
        $response->assertRedirect();
        $response->assertSessionHas('locale', 'en');

        $responseFr = $this->get('/lang/fr');
        $responseFr->assertRedirect();
        $responseFr->assertSessionHas('locale', 'fr');

        $responseInvalid = $this->get('/lang/es');
        $responseInvalid->assertStatus(404);
    }

    public function test_pages_render_in_english_with_session(): void
    {
        $routes = [
            '/' => 'Backend &amp; Blockchain Developer',
            '/a-propos' => 'About',
            '/projets' => 'My Projects',
            '/competences' => 'Technical Skills',
            '/certifications' => 'Certifications &amp; Credentials',
            '/experience' => 'Journey &amp; Experience',
            '/contact' => 'Contact',
        ];

        foreach ($routes as $uri => $expectedString) {
            $response = $this->withSession(['locale' => 'en'])->get($uri);
            $response->assertStatus(200);
            $response->assertSee($expectedString, false);
        }
    }

    public function test_pages_render_in_french_with_session(): void
    {
        $routes = [
            '/' => 'Développeur Backend &amp; Blockchain',
            '/a-propos' => 'À propos',
            '/projets' => 'Mes Projets',
            '/competences' => 'Compétences techniques',
            '/certifications' => 'Certifications &amp; distinctions',
            '/experience' => 'Parcours &amp; Expérience',
            '/contact' => 'Contact',
        ];

        foreach ($routes as $uri => $expectedString) {
            $response = $this->withSession(['locale' => 'fr'])->get($uri);
            $response->assertStatus(200);
            $response->assertSee($expectedString, false);
        }
    }
}
