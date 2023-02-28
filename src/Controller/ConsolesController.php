<?php

namespace App\Controller;

use App\Repository\AnnounceRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ConsolesController extends AbstractController
{
    #[Route('/consoles', name: 'app_consoles')]
    public function index(AnnounceRepository $announceRepository): Response
    {
        return $this->render('consoles/index.html.twig', [
            'announces' => $announceRepository->findByCategory(2)
        ]);
    }
}
