<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProduitsController extends AbstractController
{
    #[Route('/produits', name: 'app_produits')]
    public function index(): Response
    {
        $produits = [
            [
                'image' => 'sac_femme_rouge.webp',
                'title' => 'Sac à dos rouge femme',
                'text' => 'Dolore irure cillum nisi nostrud non. Non nulla adipisicing officia dolor mollit non incididunt ex proident cillum. Anim consequat exercitation duis.',
                'class' => 'filterDiv femme'
            ],
            [
                'image' => 'sac_mixte_cuire.webp',
                'title' => 'Sac en cuire mixte',
                'text' => 'Amet minim eiusmod sit in deserunt. Labore cupidatat non Lorem veniam fugiat. Ex ex laborum cillum velit tempor exercitation cillum voluptate ea ullamco consectetur duis minim.',
                'class' => 'filterDiv mixtes'
            ],
            [
                'image' => 'sacs-dos-vintage-homme_new.jpeg',
                'title' => 'Sac à dos vintage homme',
                'text' => 'Amet minim eiusmod sit in deserunt. Labore cupidatat non Lorem veniam fugiat. Ex ex laborum cillum velit tempor exercitation cillum voluptate ea ullamco consectetur duis minim.',
                'class' => 'filterDiv homme'
            ],   
            [
                'image' => 'sac_femme_rouge.webp',
                'title' => 'Sac à dos rouge femme',
                'text' => 'Dolore irure cillum nisi nostrud non. Non nulla adipisicing officia dolor mollit non incididunt ex proident cillum. Anim nulla nostrud Lorem veniam irure consequat exercitation duis.',
                'class' => 'filterDiv femme'
            ],           
            [
                'image' => 'sac_mixte_cuire.webp',
                'title' => 'Sac en cuire mixte',
                'text' => 'Amet minim eiusmod sit in deserunt. Labore cupidatat non Lorem veniam fugiat. Ex ex laborum cillum velit tempor exercitation cillum voluptate ea ullamco consectetur duis minim.',
                'class' => 'filterDiv mixtes'
            ],
            [
                'image' => 'sacs-dos-vintage-homme_new.jpeg',
                'title' => 'Sac à dos vintage homme',
                'text' => 'Amet minim eiusmod sit in deserunt. Labore cupidatat non Lorem veniam fugiat. Ex ex laborum cillum velit tempor exercitation cillum voluptate ea ullamco consectetur duis minim.',
                'class' => 'filterDiv homme'
            ],            
            [
                'image' => 'sac_femme_rouge.webp',
                'title' => 'Sac à dos rouge femme',
                'text' => 'Dolore irure cillum nisi nostrud non. Non nulla adipisicing officia dolor mollit non incididunt ex proident cillum. Anim nulla nostrud Lorem veniam irure consequat exercitation duis.',
                'class' => 'filterDiv femme'
            ],
            [
                'image' => 'sac_mixte_cuire.webp',
                'title' => 'Sac en cuire mixte',
                'text' => 'Amet minim eiusmod sit in deserunt. Labore cupidatat non Lorem veniam fugiat. Ex ex laborum cillum velit tempor exercitation cillum voluptate ea ullamco consectetur duis minim.',
                'class' => 'filterDiv mixtes'
            ],
            [
                'image' => 'sac_mixte_cuire.webp',
                'title' => 'Sac en cuire mixte',
                'text' => 'Amet minim eiusmod sit in deserunt. Labore cupidatat non Lorem veniam fugiat. Ex ex laborum cillum velit tempor exercitation cillum voluptate ea ullamco consectetur duis minim.',
                'class' => 'filterDiv mixtes'
            ] 
            
        ];

        return $this->render('produits/index.html.twig', [
            'controller_name' => 'ProduitsController',
            'produits' => $produits
        ]);
    }
}
