<?php
// src/Security/Voter/UserPasswordVoter.php

namespace App\Security\Voter;

use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Core\Authorization\Voter\Voter;
use Symfony\Component\Security\Core\User\UserInterface;

class UserPasswordVoter extends Voter
{
    protected function supports(string $attribute, $subject): bool
    {
        // Voter supports uniquement l'action 'changePassword' sur un objet User
        return $attribute === 'changePassword' && $subject instanceof UserInterface;
    }

    protected function voteOnAttribute(string $attribute, $subject, TokenInterface $token): bool
    {
        /** @var UserInterface|null $user */
        $user = $token->getUser();

        if (!$user instanceof UserInterface) {
            return false;
        }

        // Vérifier si l'utilisateur connecté est le même que l'utilisateur du mot de passe
        return $user === $subject;
    }
}

