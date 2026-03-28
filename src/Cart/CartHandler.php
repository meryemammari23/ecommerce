<?php

namespace App\Cart;

use App\Entity\Product;
use Symfony\Component\DependencyInjection\Attribute\Autowire;

class CartHandler
{
    public function __construct(
        #[Autowire(service: SessionCart::class)]
        private CartInterface $cart
    ) {}

    public function add(Product $product, int $quantity): void
    {
        $this->cart->add($product, $quantity);
    }

    public function remove(int $productId): void
    {
        $this->cart->remove($productId);
    }

    public function getItems(): array
    {
        return $this->cart->getItems();
    }

    public function clear(): void
    {
        $this->cart->clear();
    }
}