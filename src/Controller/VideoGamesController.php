<?php

namespace App\Controller;

use App\Repository\AnnounceRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class VideoGamesController extends AbstractController
{
    #[Route('/video/games', name: 'app_video_games')]
    public function index(AnnounceRepository $announceRepository): Response
    {
        return $this->render('video_games/index.html.twig', [
            'announces' => $announceRepository->findByCategory(1)
        ]);
    }
}
