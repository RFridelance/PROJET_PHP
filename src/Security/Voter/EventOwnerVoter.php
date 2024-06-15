<?php
// src/Security/Voter/EventOwnerVoter.php

namespace App\Security\Voter;

use App\Entity\Event;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Core\Authorization\Voter\Voter;

class EventOwnerVoter extends Voter
{
    protected function supports(string $attribute, $subject): bool
    {
        return in_array($attribute, ['edit', 'delete'])
            && $subject instanceof Event;
    }

    protected function voteOnAttribute(string $attribute, $subject, TokenInterface $token): bool
    {
        $event = $subject;

        switch ($attribute) {
            case 'edit':
            case 'delete':
                // Autoriser l'édition et la suppression si l'utilisateur est le créateur de l'événement
                return $event->getCreator() === $token->getUser();
        }

        return false;
    }
}
