<?php

namespace App\Tests\Controller;

use App\Entity\User;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class ProfileControllerTest extends WebTestCase
{
    public function testIndex()
    {
        $client = static::createClient();

        // Simuler la connexion d'un utilisateur
        $user = $this->createMockUser();
        $client->loginUser($user);

        $crawler = $client->request('GET', '/profile');

        $this->assertResponseIsSuccessful();
        $this->assertSelectorTextContains('h1', 'Profile');
        $this->assertSelectorTextContains('p', 'Nom : ' . $user->getName());
        $this->assertSelectorTextContains('p', 'Prénom : ' . $user->getFirstname());
        $this->assertSelectorTextContains('p', 'Email : ' . $user->getEmail());
    }

    private function createMockUser()
    {
        $user = new User();
        $reflection = new \ReflectionClass($user);
        $property = $reflection->getProperty('id');
        $property->setAccessible(true);
        $property->setValue($user, 1);

        $user->setEmail('test@example.com');
        $user->setRoles(['ROLE_USER']);
        $user->setPassword('password');
        $user->setName('TestName');
        $user->setFirstname('TestFirstname');

        return $user;
    }
}
