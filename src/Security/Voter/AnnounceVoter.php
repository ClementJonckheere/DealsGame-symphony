<?php

namespace App\Security\Voter;

use Symfony\Bundle\SecurityBundle\Security;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Core\Authorization\Voter\Voter;
use Symfony\Component\Security\Core\User\UserInterface;
use \App\Entity\Announce;

class AnnounceVoter extends Voter
{
    public const MANAGE = 'ANNOUNCE_MANAGE';
    
    public function __construct(private Security $security)  {
        
    }

    protected function supports(string $attribute, mixed $subject): bool
    {
        // replace with your own logic
        // https://symfony.com/doc/current/security/voters.html
        return in_array($attribute, [self::MANAGE])
            && $subject instanceof Announce;
    }

    protected function voteOnAttribute(string $attribute, mixed $subject, TokenInterface $token): bool
    {
        $user = $token->getUser();
        // if the user is anonymous, do not grant access
        if (!$user instanceof UserInterface) {
            return false;
        }

        // ... (check conditions and return true to grant permission) ...
        switch ($attribute) {
            case self::MANAGE:
                // logic to determine if the user can EDIT
                // return true or false
                return $this->canManage($user, $subject);
        }

        return false;
    }
    // droits de faire des modifs
    private function canManage(UserInterface $user, Announce $subject) {
        return $user == $subject->getUser() || $this->security->isGranted('ROLE_ADMIN');
    }
}
