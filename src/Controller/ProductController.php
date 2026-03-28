<?php
namespace App\Controller;

use App\Repository\ProductRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class ProductController extends AbstractController
{
    #[Route('/products', name: 'app_product')]
    public function index(ProductRepository $productRepository): Response
    {
        $products = $productRepository->findAll();
        return $this->render('product/index.html.twig', [
            'products' => $products,
        ]);
    }

    #[Route('/products/{id}', name: 'app_product_show')]
    public function show(int $id, ProductRepository $productRepository): Response
    {
        $product = $productRepository->find($id);
        return $this->render('product/show.html.twig', [
            'product' => $product,
        ]);
    }
}