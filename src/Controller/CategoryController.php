<?php
namespace App\Controller;

use App\Repository\CategoryRepository;
use App\Repository\ProductRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class CategoryController extends AbstractController
{
    #[Route('/categories', name: 'app_category')]
    public function index(CategoryRepository $categoryRepository): Response
    {
        $categories = $categoryRepository->findAll();
        return $this->render('category/index.html.twig', [
            'categories' => $categories,
        ]);
    }

    #[Route('/categories/{id}', name: 'app_category_show')]
    public function show(int $id, CategoryRepository $categoryRepository): Response
    {
        $category = $categoryRepository->find($id);
        return $this->render('category/show.html.twig', [
            'category' => $category,
        ]);
    }
}