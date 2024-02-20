<?php

namespace App\Controller;

use App\Entity\Recyclage;
use App\Form\RecyclageType;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Request;
use App\Repository\RecyclageRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class RecyclageController extends AbstractController
{
    #[Route('/recyclage', name: 'recyclage_show')]
    public function show(RecyclageRepository $rep): Response
    {
        
       $recyclage = $rep->findAll();
        return $this->render('/recyclage/recyclage.html.twig', ['recyclage'=>$recyclage]);
    }

    #[Route('/recyclageback', name: 'recyclageback_show')]
    public function showback(RecyclageRepository $rep): Response
    {
        
       $recyclage = $rep->findAll();
        return $this->render('/recyclage/recyclageback.html.twig', ['recyclage'=>$recyclage]);
    }

    #[Route('/addformrecyclage', name: 'recyclage_add')]
    public function addformrecyclage(ManagerRegistry $managerRegistry, Request $req): Response
    {
        $x = $managerRegistry->getManager();
        $recyclage = new Recyclage();
        $form = $this->createForm(RecyclageType::class, $recyclage);
        $form->handleRequest($req);
        if ($form->isSubmitted() and $form->isValid()) {
            $x->persist($recyclage);
            $x->flush();

            return $this->redirectToRoute('recyclageback_show');
        }
        return $this->renderForm('/recyclage/addformrecyclage.html.twig', [
            'f' => $form
        ]);
    }


    #[Route('/recyclage/update/{id}', name: 'recyclage_update')]
    public function UpdateRecyclage(ManagerRegistry $doctrine, Request $request, RecyclageRepository $rep, $id): Response
    {
       $recyclage = $rep->find($id);
      // $recyclage=new Recyclage();
       $form=$this->createForm(RecyclageType::class,$recyclage);
       $form->handleRequest($request);
       if($form->isSubmitted()){
           $em= $doctrine->getManager();
           $em->persist($recyclage);
           $em->flush();
           return $this-> redirectToRoute('recyclageback_show');
       }
       return $this->render('/recyclage/addformrecyclage.html.twig',[
           'f'=>$form->createView(),
       ]);
    }

    #[Route('/recyclage/delete/{id}', name: 'recyclage_delete')]
    public function deleteRecyclage($id, RecyclageRepository $rep, ManagerRegistry $doctrine): Response
    {
        $em= $doctrine->getManager();
        $recyclage= $rep->find($id);
        $em->remove($recyclage);
        $em->flush();
        return $this-> redirectToRoute('recyclageback_show');
    }

}
