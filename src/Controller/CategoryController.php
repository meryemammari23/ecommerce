<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class CategoryController extends AbstractController
{
    #[Route('/categories', name: 'app_category')]
    public function index(): Response
    {
        return $this->render('category/index.html.twig');
    }

    #[Route('/categories/{id}', name: 'app_category_show')]
    public function show(int $id): Response
    {
        return $this->render('category/show.html.twig', ['id' => $id]);
    }
}