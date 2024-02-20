<?php

namespace App\Controller;

use App\Repository\DechetRepository;
use App\Entity\Dechet;
use App\Form\DechetType;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Request;
use App\Repository\PuitsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DechetController extends AbstractController
{
    //ne5dhou l ID centre recyclage w n'affichiw les dechets avec le meme ID
    #[Route('/dechet/{id}', name: 'dechet_show')]
    public function show(RecyclageRepository $rep, $id): Response
    {
        
       $recyclage = $rep->find($id);
       
        return $this->renderForm('/dechet/dechet.html.twig', ['recyclage'=>$recyclage]);
}

#[Route('/dechetback/{id}', name: 'dechetback_show')]
    public function showBack(RecyclageRepository $rep, $id): Response
    {
        
       $recyclage = $rep->find($id);
        return $this->renderForm('/dechet/dechetback.html.twig', ['recyclage'=>$recyclage]);
    }

}
