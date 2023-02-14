<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AddAnnouncesController extends AbstractController
{
    #[Route('/add-announces', name: 'app_add_announces')]
    public function index(): Response
    {
        return $this->render('add_announces/index.html.twig', [
        ]);
    }
}
