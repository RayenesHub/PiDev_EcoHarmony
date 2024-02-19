<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DechetController extends AbstractController
{
    #[Route('/dechet', name: 'app_dechet')]
    public function index(): Response
    {
        return $this->render('dechet/index.html.twig', [
            'controller_name' => 'DechetController',
        ]);
    }
}
