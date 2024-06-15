<?php

namespace App\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class AccueilControllerTest extends WebTestCase
{
    public function testIndex()
    {
        $client = static::createClient();
        $crawler = $client->request('GET', '/');

        $this->assertResponseIsSuccessful();
        $this->assertSelectorTextContains('h1', 'Bienvenue sur Notre Site d\'Événements');
    }

    public function testControllerName()
    {
        $client = static::createClient();
        $crawler = $client->request('GET', '/');

        $this->assertResponseIsSuccessful();
        // Si vous voulez vérifier que "AccueilController" est mentionné quelque part dans le body,
        // modifiez cette ligne pour vérifier une chaîne pertinente.
        $this->assertSelectorTextContains('body', 'Découvrez et participez à nos événements passionnants.');
    }
}
