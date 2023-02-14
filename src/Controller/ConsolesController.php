<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ConsolesController extends AbstractController
{
    #[Route('/consoles', name: 'app_consoles')]
    public function index(): Response
    {
        return $this->render('consoles/index.html.twig', [
        ]);
    }
}
