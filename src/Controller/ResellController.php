<?php

namespace App\Controller;

use App\Entity\Announce;
use App\Entity\User;
use App\Repository\AnnounceRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;

class ResellController extends AbstractController
{
    #[IsGranted('IS_AUTHENTICATED')]
    #[Route('/resell', name: 'app_resell')]
    public function index(): Response
    {
        return $this->render('resell/index.html.twig');
    }

    #[Route('/announce/delete/{id}', name: 'app_announce_delete')]
    #[IsGranted('ANNOUNCE_MANAGE', subject: 'announce')]
    public function delete(AnnounceRepository $announceRepository, Announce $announce): Response
    {
        $announceRepository->remove($announce, true);
        return $this->redirectToRoute('app_resell');
    }
}
