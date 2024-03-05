<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PuitsController extends AbstractController
{
    #[Route('/puits', name: 'app_puits')]
    public function index(): Response
    {
        return $this->render('puits/index.html.twig', [
            'controller_name' => 'PuitsController',
        ]);
    }
}
