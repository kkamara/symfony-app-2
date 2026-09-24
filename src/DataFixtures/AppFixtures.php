<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use App\Entity\Product;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $product = new Product();
        $product->setName('Product One');
        $product->setDescription("This is the first description.");
        $product->setSize(100);

        $manager->persist($product);

        $product = new Product();
        $product->setName('Product Two');
        $product->setDescription("This is the second description.");
        $product->setSize(200);

        $manager->persist($product);

        $manager->flush();
    }
}
