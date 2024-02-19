<?php

namespace App\Controller;
use App\Repository\NappeRepository;
use App\Entity\Nappe;
use App\Form\PuitsType;
use App\Entity\Puits;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Request;
use App\Repository\PuitsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PuitsController extends AbstractController
{
   
//Affichage pour jointure : Utiliser NappeRepo|trouver les puits dans nappe
    #[Route('/puits{id}', name: 'puits_show')]
    public function show(NappeRepository $rep, $id): Response
    {
        
       $nappe = $rep->find($id);
       
        return $this->renderForm('/puits/puitsindex.html.twig', ['nappe'=>$nappe]);
}
//Affichage pour jointure : Utiliser NappeRepo|trouver les puits dans nappe (/{id} : "/" est parfois obligatoire)
#[Route('/puitsback/{id}', name: 'puitsback_show')]
    public function showBack(NappeRepository $rep, $id): Response
    {
        
       $nappe = $rep->find($id);
        return $this->renderForm('/puits/puitsback.html.twig', ['nappe'=>$nappe]);
    }


    #[Route('/addformpuits', name: 'puits_add')]
    public function addformpuits(ManagerRegistry $managerRegistry, Request $req): Response
    {
        $x = $managerRegistry->getManager();
        $puits = new Puits();
        $form = $this->createForm(PuitsType::class, $puits);
        $form->handleRequest($req);
        if ($form->isSubmitted() and $form->isValid()) {
            $x->persist($puits);
            $x->flush();

            return $this->redirectToRoute('puitsback_show');
        }
        return $this->renderForm('/puits/addformpuits.html.twig', [
            'f' => $form
        ]);
    }

    #[Route('/puits/update/{id}', name: 'puits_edit')]
    public function UpdatePuits(ManagerRegistry $doctrine, Request $request, PuitsRepository $rep, $id): Response
    {
       $puits = $rep->find($id);
       $form=$this->createForm(PuitsType::class,$puits);
       $form->handleRequest($request);
       if($form->isSubmitted()){
           $em= $doctrine->getManager();
           $em->persist($puits);
           $em->flush();
           return $this-> redirectToRoute('puitsback_show');
       }
       return $this->render('/puits/addformpuits.html.twig',[
           'f'=>$form->createView(),
       ]);
    }
    

    #[Route('/puits/delete/{id}', name: 'puits_delete')]
    public function deletePuits($id, PuitsRepository $rep, ManagerRegistry $doctrine): Response
    {
        $em= $doctrine->getManager();
        $puits= $rep->find($id);
        $em->remove($puits);
        $em->flush();
        return $this-> redirectToRoute('puitsback_show');
    }

}