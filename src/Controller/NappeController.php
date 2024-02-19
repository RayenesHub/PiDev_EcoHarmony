<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class NappeController extends AbstractController
{
    #[Route('/nappe', name: 'app_nappe')]
    public function index(): Response
    {
        return $this->render('nappe/index.html.twig', [
            'controller_name' => 'NappeController',
        ]);
    }
}
