<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ResellController extends AbstractController
{
    #[Route('/resell', name: 'app_resell')]
    public function index(): Response
    {
        return $this->render('resell/index.html.twig', [
        ]);
    }
}
