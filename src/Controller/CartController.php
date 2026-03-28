<?php

namespace App\Controller;

use App\Cart\CartHandler;
use App\Repository\ProductRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class CartController extends AbstractController
{
    public function __construct(private CartHandler $cartHandler) {}

    #[Route('/cart', name: 'app_cart')]
    public function index(): Response
    {
        $items = $this->cartHandler->getItems();
        return $this->render('cart/index.html.twig', [
            'items' => $items,
        ]);
    }

    #[Route('/cart/add', name: 'app_cart_add', methods: ['POST'])]
    public function add(Request $request, ProductRepository $productRepository): Response
    {
        $productId = $request->request->get('product_id');
        $quantity = (int) $request->request->get('quantity', 1);

        $product = $productRepository->find($productId);

        if ($product) {
            $this->cartHandler->add($product, $quantity);
        }

        return $this->redirectToRoute('app_cart');
    }

    #[Route('/cart/remove/{id}', name: 'app_cart_remove')]
    public function remove(int $id): Response
    {
        $this->cartHandler->remove($id);
        return $this->redirectToRoute('app_cart');
    }
}