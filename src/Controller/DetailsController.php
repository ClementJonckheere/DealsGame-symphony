<?php

namespace App\Controller;

use App\Entity\Announce;
use App\Entity\User;
use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;

#[Route('/details')]
class DetailsController extends AbstractController
{
    #[Route('/', name: 'app_details_index')]
    public function index(): Response
    {
        return $this->render('details/show.html.twig', [
        ]);
    }


#[Route('/{id}', name: 'app_details_show')]
#[IsGranted('IS_AUTHENTICATED')]
    public function show(Announce $announce): Response
    {
        return $this->render('details/show.html.twig', [
            'announce' => $announce
        ]);
    }
}
