<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\Planet;
use App\Models\Crew;
use App\Models\Technology;

class RouteTest extends TestCase
{
    public function testRoutes(): void
    {

        // 🟢 Force Laravel à utiliser la langue française
        app()->setLocale('fr');


        // 🪐 Données de test avec valeurs fixes
        // Doit correspondre à ce qu'il y a dans : // 🌐 Tableau des routes à tester (Plus Bas)
        $planet = Planet::factory()->create([
            'subtitle_fr' => 'systeme solaire',
            'name_fr' => 'Lune',
            'description_fr' => "Voyez notre planète comme vous ne l'avez jamais vue auparavant. Un parfait voyage de détente pour vous aider à prendre du recul et revenir requinqué. Pendant que vous y êtes, plongez-vous dans l'histoire en visitant les sites d'atterrissage de Luna 2 et Apollo 11.",
            'distance_fr' => '2500 km',
            'duration_fr' => '4 Jours',
        ]);

        $crew = Crew::factory()->create([
            'fonction_fr' => 'Commandant de bord',
            'description_fr' => 'Dirige la mission avec précision et sang-froid.',
            'meet_fr' => 'Rencontrez notre commandant',
        ]);

        $technology = Technology::factory()->create([
            'description_fr' => 'Propulsion de nouvelle génération.',
            'subtitle_fr' =>    'Technologie',
            'launcher_fr' =>  'Plateforme',
            'starships_fr' => 'Lanceur X',
        ]);

        // Voici mes routes, ce qu'il y a en chaine de caratère doit correspondre à ce qu'il a dans : // 🪐 Données de test avec valeurs fixes
        // 🌐 Tableau des routes à tester
        $routes = [
            ['/Space/Planets/space', 'Accueil'],
            ['/Space/Planets/', 'choisissez votre destination'],
            ['/Space/Crew/', 'Crew'],
            ['/Space/Technologies/', 'Technologies'],
            ["/Space/Planets/{$planet->id}", [
                'Voyez notre planète comme vous ne l\'avez jamais vue auparavant. Un parfait voyage de détente pour vous aider à prendre du recul et revenir requinqué. Pendant que vous y êtes, plongez-vous dans l\'histoire en visitant les sites d\'atterrissage de Luna 2 et Apollo 11.',
                'Lune',
                '2500 km',
                '4 Jours'
            ]],
            ["/Space/Crew/{$crew->id}", [
                'Commandant de bord',
                'Dirige la mission avec précision et sang-froid.',
                'Rencontrez notre commandant'
            ]],

            ["/Space/Starships/{$technology->id}", [
                'Propulsion de nouvelle génération.',
                'Technologie',
                'Plateforme',
                'Lanceur X'
            ]],
        ];

        // 🧪 Boucle de test
        foreach ($routes as [$url, $expectedTexts]) {
            $response = $this->get($url);

            $response->assertStatus(200, "❌ La route {$url} ne retourne pas un code 200.");

            // dump($response->getContent());

            foreach ((array) $expectedTexts as $text) {
                $this->assertStringContainsString($text, html_entity_decode($response->getContent()), "❌ Le contenu de {$url} ne contient pas '{$text}'.");
            }
        }
    }
}
