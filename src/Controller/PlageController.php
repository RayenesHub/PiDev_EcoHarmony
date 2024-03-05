<?php

namespace App\Controller;

use App\Entity\Plage;
use App\Form\PlageType;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Request;
use App\Repository\PlageRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PlageController extends AbstractController
{
    #[Route('/plage', name: 'plage_show')]
    public function index(PlageRepository $rep): Response
    {
        $plage=$rep->findall();
        return $this->render('plage/plage.html.twig', [
            'plage' => $plage,
        ]);
    }

    #[Route('/plageback', name: 'plageback_show')]
    public function back(PlageRepository $rep): Response
    {
        $plage=$rep->findall();
        return $this->render('plage/plageback.html.twig', [
            'plage' => $plage,
        ]);
    }
    #[Route('/addformplage', name: 'plage_add')]
    public function addformplage(ManagerRegistry $managerRegistry, Request $req): Response
    {
        $x = $managerRegistry->getManager();
        $plage = new Plage();
        $form = $this->createForm(PlageType::class, $plage);
        $form->handleRequest($req);
        if ($form->isSubmitted() and $form->isValid()) {
            $x->persist($plage);
            $x->flush();

            return $this->redirectToRoute('plageback_show');
        }
        return $this->renderForm('/plage/addformplage.html.twig', [
            'f' => $form
        ]);
    }

    #[Route('/plage/update/{id}', name: 'plage_update')]
    public function UpdatePlage(ManagerRegistry $doctrine, Request $request, PlageRepository $rep, $id): Response
    {
       $plage = $rep->find($id);
       $form=$this->createForm(PlageType::class,$plage);
       $form->handleRequest($request);
       if($form->isSubmitted()){
        
           $em= $doctrine->getManager();
           $em->persist($plage);
           $em->flush();
           return $this-> redirectToRoute('plageback_show');
       }
       return $this->render('/plage/addformplage.html.twig',[
           'f'=>$form->createView(),
       ]);
    }

    #[Route('/plage/delete/{id}', name: 'plage_delete')]
    public function deletePlage($id, PlageRepository $rep, ManagerRegistry $doctrine): Response
    {
        $em= $doctrine->getManager();
        $plage= $rep->find($id);
        $em->remove($plage);
        $em->flush();
        return $this-> redirectToRoute('plageback_show');
    }


}
