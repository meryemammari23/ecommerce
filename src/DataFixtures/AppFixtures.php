<?php

namespace App\DataFixtures;

use App\Entity\Category;
use App\Entity\Product;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $electronics = new Category();
        $electronics->setName('Electronics');
        $manager->persist($electronics);

        $fashion = new Category();
        $fashion->setName('Fashion');
        $manager->persist($fashion);

        $sports = new Category();
        $sports->setName('Sports & Fitness');
        $manager->persist($sports);

        $p1 = new Product();
        $p1->setName('Wireless Headphones');
        $p1->setDescription('Premium sound quality with noise cancellation.');
        $p1->setPrice(79.99);
        $p1->setCategory($electronics);
        $manager->persist($p1);

        $p2 = new Product();
        $p2->setName('Bluetooth Speaker');
        $p2->setDescription('Portable speaker with 360 sound.');
        $p2->setPrice(59.99);
        $p2->setCategory($electronics);
        $manager->persist($p2);

        $p3 = new Product();
        $p3->setName('Wireless Mouse');
        $p3->setDescription('Ergonomic wireless mouse.');
        $p3->setPrice(29.99);
        $p3->setCategory($electronics);
        $manager->persist($p3);

        $p4 = new Product();
        $p4->setName('Classic Leather Jacket');
        $p4->setDescription('Stylish leather jacket for all occasions.');
        $p4->setPrice(149.99);
        $p4->setCategory($fashion);
        $manager->persist($p4);

        $p5 = new Product();
        $p5->setName('Summer Dress');
        $p5->setDescription('Light and comfortable summer dress.');
        $p5->setPrice(49.99);
        $p5->setCategory($fashion);
        $manager->persist($p5);

        $p6 = new Product();
        $p6->setName('Yoga Mat Premium');
        $p6->setDescription('Non-slip premium yoga mat.');
        $p6->setPrice(29.99);
        $p6->setCategory($sports);
        $manager->persist($p6);

        $p7 = new Product();
        $p7->setName('Running Shoes');
        $p7->setDescription('Lightweight running shoes for all terrains.');
        $p7->setPrice(89.99);
        $p7->setCategory($sports);
        $manager->persist($p7);

        $manager->flush();
    }
}
