<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

use App\Entity\Category;
use App\Entity\Product;

class DefaultController extends AbstractController
{
     /**
     * @Route("/adasdasdasd", name="tabele")
     */
    public function showAll()
    {
        $products  = $this->getDoctrine()->getRepository(Products::class)->findAll();

        return $this->render('index.html.twig',[
            'products' => $products ,
        ]);
    }
}