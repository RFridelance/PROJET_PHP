<?php
// src/Controller/EventController.php

namespace App\Controller;

use App\Entity\Event;
use App\Form\EventType;
use Doctrine\ORM\EntityManagerInterface;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\User\UserInterface;

class EventController extends AbstractController
{
    #[Route('/event/new', name: 'app_event_new')]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $event = new Event();
        $form = $this->createForm(EventType::class, $event);

        $form->handleRequest($request);

        if ($form->isSubmitted()) {
            if ($form->isValid()) {
                $entityManager->persist($event);
                $entityManager->flush();

                return $this->redirectToRoute('app_event_list');
            } else {
                $this->addFlash('danger', 'Le formulaire contient des erreurs. Veuillez les corriger.');
            }
        }

        return $this->render('event/new.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    #[Route('/events', name: 'app_event_list')]
    public function list(Request $request, EntityManagerInterface $entityManager, PaginatorInterface $paginator): Response
    {
        // Si l'utilisateur est connecté, récupérez tous les événements
        if ($this->getUser()) {
            $query = $entityManager->getRepository(Event::class)->createQueryBuilder('e')
                ->orderBy('e.Date', 'DESC') // Ordonner par date DESC ou une autre colonne appropriée
                ->getQuery();
        } else {
            // Sinon, récupérez seulement les événements publics
            $query = $entityManager->getRepository(Event::class)->createQueryBuilder('e')
                ->where('e.public = true')
                ->orderBy('e.Date', 'DESC') // Ordonner par date DESC ou une autre colonne appropriée
                ->getQuery();
        }

        // Paginer les résultats
        $events = $paginator->paginate(
            $query,
            $request->query->getInt('page', 1), // Récupérer le numéro de la page à afficher
            2 // Nombre d'éléments par page
        );

        return $this->render('event/list.html.twig', [
            'events' => $events,
        ]);
    }

    #[Route('/inscriptions', name: 'app_inscriptions')]
    public function inscriptions(UserInterface $user): Response
    {
        $events = $user->getEvents();

        return $this->render('event/inscriptions.html.twig', [
            'events' => $events,
        ]);
    }
}
