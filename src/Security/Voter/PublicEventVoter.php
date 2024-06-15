<?php
// src/Security/Voter/PublicEventVoter.php

namespace App\Security\Voter;

use App\Entity\Event;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Core\Authorization\Voter\Voter;

class PublicEventVoter extends Voter
{
    protected function supports(string $attribute, $subject): bool
    {
        return in_array($attribute, ['view', 'edit', 'delete'])
            && $subject instanceof Event;
    }

    protected function voteOnAttribute(string $attribute, $subject, TokenInterface $token): bool
    {
        $event = $subject;

        switch ($attribute) {
            case 'view':
                // Autoriser la vue si l'événement est public ou si l'utilisateur est connecté
                return $event->isPublic() || $token->getUser() !== null;
            case 'edit':
            case 'delete':
                // Autoriser l'édition et la suppression si l'utilisateur est le créateur de l'événement
                return $event->getCreator() === $token->getUser();
        }

        return false;
    }
}
