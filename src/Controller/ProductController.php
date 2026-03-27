<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class ProductController extends AbstractController
{
    #[Route('/products', name: 'app_product')]
    public function index(): Response
    {
        return $this->render('product/index.html.twig');
    }

    #[Route('/products/{id}', name: 'app_product_show')]
    public function show(int $id): Response
    {
        return $this->render('product/show.html.twig', ['id' => $id]);
    }
}