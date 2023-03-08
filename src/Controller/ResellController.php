<?php

namespace App\Controller;

use App\Entity\Announce;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ResellController extends AbstractController
{
    #[Route('/resell', name: 'app_resell')]
    public function index(Announce $announce): Response
    {
        return $this->render('resell/index.html.twig', [
            'announce' => $announce
        ]);
    }
}
