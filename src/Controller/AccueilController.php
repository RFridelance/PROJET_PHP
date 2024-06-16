<?php

namespace App\Controller;

use App\Entity\Event;
use Doctrine\ORM\EntityManagerInterface;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class AccueilController extends AbstractController
{
    #[Route('/', name: 'app_accueil')]
    public function index(EntityManagerInterface $entityManager,PaginatorInterface $paginator): Response
    {
        // Si l'utilisateur est connecté, récupérez tous les événements
        if ($this->getUser()) {
            $query = $entityManager->getRepository(Event::class)->createQueryBuilder('e')
                ->orderBy('e.Date', 'DESC')
                ->getQuery();
        } else {
            // Sinon, récupérez seulement les événements publics
            $query = $entityManager->getRepository(Event::class)->createQueryBuilder('e')
                ->where('e.public = true')
                ->orderBy('e.Date', 'DESC')
                ->getQuery();
        }

        // Paginer les résultats
        $events = $paginator->paginate(
            $query,
            1,
            5 // Nombre d'éléments par page
        );

        return $this->render('accueil/index.html.twig', [
            'events' => $events,
        ]);
    }
}
