<?php
// src/Controller/EventController.php

namespace App\Controller;

use App\Entity\Event;
use App\Form\EventType;
use Doctrine\ORM\EntityManagerInterface;
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
    public function list(EntityManagerInterface $entityManager): Response
    {
        //si user est connecté
        if ($this->getUser()) {
            $events = $entityManager->getRepository(Event::class)->findAll();
        } else {
            $events = $entityManager->getRepository(Event::class)->findBy(['public' => true]);
        }
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
