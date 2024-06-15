<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\ChangePasswordFormType;
use App\Form\UserUpdateType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Core\User\UserInterface;

class UserController extends AbstractController
{
    public function __construct(private readonly EntityManagerInterface $entityManager){}

    #[Route('/user', name: 'app_user')]
    public function index(): Response
    {
        return $this->render('user/index.html.twig', [
            'controller_name' => 'UserController',
        ]);
    }

    #[Route('/user/{id}/update', name: 'user_update')]
    public function edit(Request $request, User $user): Response
    {
        $form = $this->createForm(UserUpdateType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->entityManager;
            $entityManager->persist($user);
            $entityManager->flush();

            return $this->redirectToRoute('app_profile'); // Redirection vers une autre page après modification
        }

        return $this->render('user/update.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    #[Route('/profile/change-password', name: 'user_change_password')]
    public function changePassword(Request $request, UserPasswordHasherInterface $passwordHasher, EntityManagerInterface $entityManager): Response
    {
        $user = $this->getUser(); // Récupérer l'utilisateur actuellement connecté

        if (!$user) {
            throw $this->createNotFoundException('No user found');
        }

        $form = $this->createForm(ChangePasswordFormType::class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Récupérer les valeurs des champs manuellement
            $oldPassword = $form->get('oldPassword')->getData();
            $newPassword = $form->get('newPassword')->getData();
            $confirmPassword = $form->get('confirmPassword')->getData();

            // Vérifier si l'ancien mot de passe est correct
            if (!$passwordHasher->isPasswordValid($user, $oldPassword)) {
                $this->addFlash('danger', 'Ancien mot de passe incorrect.');
                return $this->redirectToRoute('user_change_password');
            }

            // Vérifier si les nouveaux mots de passe correspondent
            if ($newPassword !== $confirmPassword) {
                $this->addFlash('danger', 'Les nouveaux mots de passe ne correspondent pas.');
                return $this->redirectToRoute('user_change_password');
            }

            // Encoder et mettre à jour le nouveau mot de passe
            $newEncodedPassword = $passwordHasher->hashPassword($user, $newPassword);
            $user->setPassword($newEncodedPassword);

            $entityManager->flush();

            $this->addFlash('success', 'Mot de passe mis à jour avec succès.');

            // Rediriger vers le profil
            return $this->redirectToRoute('app_profile');
        }

        return $this->render('user/changePassword.html.twig', [
            'form' => $form->createView(),
        ]);
    }


}
