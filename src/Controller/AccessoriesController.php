<?php

namespace App\Controller;

use App\Repository\AnnounceRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AccessoriesController extends AbstractController
{
    #[Route('/accessories', name: 'app_accessories')]
    public function index(AnnounceRepository $announceRepository): Response
    {
        return $this->render('accessories/index.html.twig', [
            'announces' => $announceRepository->findByCategory(3)
        ]);
    }
}
