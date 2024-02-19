<?php

namespace App\Controller;

use App\Entity\Puits;
use App\Entity\Nappe;
use App\Form\NappeType;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Request;
use App\Repository\NappeRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class NappeController extends AbstractController
{
   

    #[Route('/nappe', name: 'nappe_show')]
    public function show(NappeRepository $rep): Response
    {
        
       $nappe = $rep->findAll();
        return $this->render('/nappe/nappeindex.html.twig', ['nappe'=>$nappe]);
    }

    #[Route('/nappeback', name: 'nappeback_show')]
    public function showBack(NappeRepository $rep): Response
    {
        
       $nappe = $rep->findAll();
        return $this->render('/nappe/nappeback.html.twig', ['nappe'=>$nappe]);
    }


    #[Route('/addformnapp', name: 'nappe_add')]
    public function addformnappe(ManagerRegistry $managerRegistry, Request $req): Response
    {
        $x = $managerRegistry->getManager();
        $nappe = new Nappe();
        $form = $this->createForm(NappeType::class, $nappe);
        $form->handleRequest($req);
        if ($form->isSubmitted() and $form->isValid()) {
            $x->persist($nappe);
            $x->flush();

            return $this->redirectToRoute('nappeback_show');
        }
        return $this->renderForm('/nappe/addformnappe.html.twig', [
            'f' => $form
        ]);
    }


    #[Route('/nappe/update/{id}', name: 'nappe_update')]
    public function UpdateNappe(ManagerRegistry $doctrine, Request $request, NappeRepository $rep, $id): Response
    {
       $nappe = $rep->find($id);
       $form=$this->createForm(NappeType::class,$nappe);
       $form->handleRequest($request);
       if($form->isSubmitted()){
        
           $em= $doctrine->getManager();
           $em->persist($nappe);
           $em->flush();
           return $this-> redirectToRoute('nappeback_show');
       }
       return $this->render('/nappe/addformnappe.html.twig',[
           'f'=>$form->createView(),
       ]);
    }

    #[Route('/nappe/delete/{id}', name: 'nappe_delete')]
    public function deleteNappe($id, NappeRepository $rep, ManagerRegistry $doctrine): Response
    {
        $em= $doctrine->getManager();
        $nappe= $rep->find($id);
        $em->remove($nappe);
        $em->flush();
        return $this-> redirectToRoute('nappeback_show');
    }

}


    

