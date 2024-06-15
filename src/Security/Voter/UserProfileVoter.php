<?php
// src/Security/Voter/UserPasswordVoter.php

namespace App\Security\Voter;

use App\Entity\User;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Core\Authorization\Voter\Voter;

class UserProfileVoter extends Voter
{
    protected function supports(string $attribute, $subject): bool
    {
        // Voter supports uniquement les actions 'edit' sur des objets de type User
        return in_array($attribute, ['edit']) && $subject instanceof User;
    }

    protected function voteOnAttribute(string $attribute, $subject, TokenInterface $token): bool
    {
        /** @var User|null $user */
        $user = $token->getUser();

        if (!$user instanceof User) {
            return false;
        }

        // Vérifie si l'utilisateur connecté est le même que l'utilisateur du profil
        return $user === $subject;
    }
}

