<?php

namespace App\Controller;

use App\Entity\Category;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/categories')]
class CategoryController extends AbstractController
{
    #[Route('/', name: 'app_category_index')]
    public function index(): Response
    {
        return $this->render('categories/show.html.twig', [
            'controller_name' => 'CategoryController',
        ]);
    }

    #[Route('/{id}', name: 'app_category_show')]
    public function show(Category $category): Response
    {
        return $this->render('categories/show.html.twig', [
            'category' => $category

        ]);
    }
}
