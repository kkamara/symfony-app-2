<?php

namespace App\Controller;

use App\Form\ProductType;
use App\Repository\ProductRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use App\Entity\Product;

final class ProductController extends AbstractController
{
    #[Route('/products', name: 'product_index')]
    public function index(ProductRepository $repo): Response
    {
        return $this->render('product/index.html.twig', [
            'products' => $repo->findAll(),
        ]);
    }

    #[Route('/products/{id<\d+>}', name: 'product_show')]
    public function show(Product $product): Response
    {
        return $this->render('product/show.html.twig', [
            'product' => $product,
        ]);
    }

    #[Route('/products/new', name: 'product_new')]
    public function new(Request $request, EntityManagerInterface $manager): Response
    {
        $product = new Product();

        $form = $this->createForm(ProductType::class, $product);

        $form->handleRequest($request);

        if ($form->isSubmitted()) {
            $manager->persist($product);
            $manager->flush();

            return $this->redirectToRoute('product_show', ['id' => $product->getId()]);
        }

        return $this->render('product/new.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
