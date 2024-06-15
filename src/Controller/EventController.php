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

        if ($form->isSubmitted() && $form->isValid()) {
            // Récupérer l'utilisateur connecté
            $user = $this->getUser();

            // Associer l'utilisateur comme créateur de l'événement
            $event->setCreator($user);

            $entityManager->persist($event);
            $entityManager->flush();

            return $this->redirectToRoute('app_event_list');
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
            $request->query->getInt('page', 1), // Récupérer le numéro de la page à afficher
            10 // Nombre d'éléments par page
        );

        return $this->render('event/list.html.twig', [
            'events' => $events,
        ]);
    }

    #[Route('/event/{id}/edit', name: 'app_event_edit', methods: ['GET', 'POST'])]
    public function edit(Event $event, Request $request, EntityManagerInterface $entityManager): Response
    {


        if ($event->getCreator() !== $this->getUser()) {
            $this->addFlash('danger', 'Vous n\'êtes pas autorisé à modifier cet événement.');
            return $this->redirectToRoute('app_event_list');
        }

        $form = $this->createForm(EventType::class, $event);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            $this->addFlash('success', 'L\'événement a été modifié avec succès.');
            return $this->redirectToRoute('app_event_list');
        }

        return $this->render('event/edit.html.twig', [
            'form' => $form->createView(),
        ]);
    }


    #[Route('/event/{id}/delete', name: 'app_event_delete', methods: ['POST'])]
    public function delete(Event $event, EntityManagerInterface $entityManager): Response
    {

        if ($event->getCreator() !== $this->getUser()) {
            $this->addFlash('danger', 'Vous n\'êtes pas autorisé à supprimer cet événement.');
            return $this->redirectToRoute('app_event_list');
        }

        // Supprimer l'événement de la base de données
        $entityManager->remove($event);
        $entityManager->flush();

        $this->addFlash('success', 'L\'événement a été supprimé avec succès.');
        return $this->redirectToRoute('app_event_list');
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
