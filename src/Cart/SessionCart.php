<?php

namespace App\Cart;

use App\Entity\Product;
use Symfony\Component\HttpFoundation\RequestStack;

class SessionCart implements CartInterface
{
    public function __construct(private RequestStack $requestStack) {}

    private function getSession()
    {
        return $this->requestStack->getSession();
    }

    public function add(Product $product, int $quantity): void
    {
        $cart = $this->getSession()->get('cart', []);
        $id = $product->getId();

        if (isset($cart[$id])) {
            $cart[$id]['quantity'] += $quantity;
        } else {
            $cart[$id] = [
                'product' => $product,
                'quantity' => $quantity,
            ];
        }

        $this->getSession()->set('cart', $cart);
    }

    public function remove(int $productId): void
    {
        $cart = $this->getSession()->get('cart', []);
        unset($cart[$productId]);
        $this->getSession()->set('cart', $cart);
    }

    public function getItems(): array
    {
        return $this->getSession()->get('cart', []);
    }

    public function clear(): void
    {
        $this->getSession()->remove('cart');
    }
}