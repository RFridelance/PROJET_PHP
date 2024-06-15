<?php

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
        if ($this->getUser()) {
            $query = $entityManager->getRepository(Event::class)->createQueryBuilder('e')
                ->orderBy('e.Date', 'DESC')
                ->getQuery();
        } else {
            $query = $entityManager->getRepository(Event::class)->createQueryBuilder('e')
                ->where('e.public = true')
                ->orderBy('e.Date', 'DESC')
                ->getQuery();
        }

        $events = $paginator->paginate(
            $query,
            $request->query->getInt('page', 1),
            2
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
