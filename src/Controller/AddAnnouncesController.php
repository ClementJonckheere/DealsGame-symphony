<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Announce;
use App\Form\AddAnnoncesType;
use App\Repository\AnnounceRepository;
use Symfony\Component\HttpFoundation\Request;

class AddAnnouncesController extends AbstractController
{
    #[Route('/add-announces', name: 'app_add_announces')]
    public function index(Request $request, AnnounceRepository $announceRepository): Response
    {

        $announce = new Announce();
        $form = $this->createForm(AddAnnoncesType::class, $announce);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $announceRepository->save($announce, true);
        }
        return $this->render('add_announces/index.html.twig', [
            'form'=> $form
        ]);
    }
}
