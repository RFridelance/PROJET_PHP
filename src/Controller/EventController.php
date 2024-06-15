<?php
// src/Controller/EventController.php

namespace App\Controller;

use App\Entity\Event;
use App\Form\EventType;
use App\Service\MailJetService;
use Doctrine\ORM\EntityManagerInterface;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use Psr\Log\LoggerInterface;

class EventController extends AbstractController
{
    private $mailJetService;
    private $logger;

    public function __construct(MailJetService $mailJetService, LoggerInterface $logger)
    {
        $this->mailJetService = $mailJetService;
        $this->logger = $logger;
    }

    #[Route('/event/new', name: 'app_event_new')]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        // Utiliser le voter pour vérifier si l'utilisateur peut créer un événement non public
        $this->denyAccessUnlessGranted('view', new Event());

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
        // Utiliser le voter pour vérifier si l'utilisateur peut voir les événements non publics
        $this->denyAccessUnlessGranted('view', new Event());

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
        // Utiliser le voter pour vérifier si l'utilisateur peut modifier cet événement
        $this->denyAccessUnlessGranted('edit', $event);

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
        // Utiliser le voter pour vérifier si l'utilisateur peut supprimer cet événement
        $this->denyAccessUnlessGranted('delete', $event);

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

    #[Route('/event/subscribe/{id}', name: 'app_event_subscribe')]
    public function subscribe(Event $event, EntityManagerInterface $entityManager, UserInterface $user): Response
    {
        if ($event->isFull()) {
            $this->addFlash('error', 'L\'événement est complet.');
            return $this->redirectToRoute('app_event_list');
        }

        if ($event->getUsers()->contains($user)) {
            $this->addFlash('error', 'Vous êtes déjà inscrit à cet événement.');
            return $this->redirectToRoute('app_event_list');
        }

        $event->addUser($user);
        $entityManager->flush();

        $this->mailJetService->sendEmail(
            $user->getEmail(),
            $user->getName(),
            'Confirmation d\'inscription',
            '<p>Vous êtes inscrit à l\'événement : ' . $event->getTitle() . '</p>'
        );

        $this->addFlash('success', 'Inscription réussie. Un email a été envoyé à ' . $user->getEmail());

        return $this->redirectToRoute('app_event_list');
    }

    #[Route('/event/unsubscribe/{id}', name: 'app_event_unsubscribe')]
    public function unsubscribe(Event $event, EntityManagerInterface $entityManager, UserInterface $user): Response
    {
        if (!$event->getUsers()->contains($user)) {
            $this->addFlash('error', 'Vous n\'êtes pas inscrit à cet événement.');
            return $this->redirectToRoute('app_event_list');
        }

        $event->removeUser($user);
        $entityManager->flush();

        $this->mailJetService->sendEmail(
            $user->getEmail(),
            $user->getName(),
            'Confirmation de désinscription',
            '<p>Vous êtes désinscrit de l\'événement : ' . $event->getTitle() . '</p>'
        );

        $this->addFlash('success', 'Désinscription réussie. Un email a été envoyé à ' . $user->getEmail());

        return $this->redirectToRoute('app_event_list');
    }
}
