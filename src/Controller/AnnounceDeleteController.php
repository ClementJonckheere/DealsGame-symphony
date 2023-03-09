<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AnnounceDeleteController extends AbstractController
{
    #[Route('/announce/delete', name: 'app_announce_delete')]
    public function index(): Response
    {
        return $this->render('announce_delete/index.html.twig', [
            'controller_name' => 'AnnounceDeleteController',
        ]);
    }

    // public function delete(): Response
    // {
    //     $announceRepository->remove(shoppingListe, true);
    //     return $this->redirectToRoute('#');
    // }
}
