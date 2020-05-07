<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class HowItWorksController extends AbstractController
{
    /**
     * @Route("/how/it/works", name="how_it_works")
     */
    public function index()
    {
        return $this->render('how_it_works/index.html.twig', [
            'controller_name' => 'HowItWorksController',
        ]);
    }
}
