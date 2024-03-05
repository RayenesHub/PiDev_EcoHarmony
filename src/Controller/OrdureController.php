<?php

namespace App\Controller;

use App\Entity\Ordure;
use App\Form\OrdureType;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Request;
use App\Repository\CentreRepository;
use App\Repository\OrdureRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class OrdureController extends AbstractController
{

    #[Route('/ordure{id}', name: 'ordure_show')]
    public function index(CentreRepository $repo, $id): Response
    {
        $centre = $repo->find($id);
        return $this->render('ordure/ordure.html.twig', [
            'centre'=>$centre
        ]);
    }


    #[Route('/ordureback/{id}', name: 'ordureback_show')]
    public function back(CentreRepository $repo, $id): Response
    {
        $centre = $repo->find($id);
        return $this->render('ordure/ordureback.html.twig', [
            'centre'=>$centre
        ]);
    }

    #[Route('/addformordure', name: 'ordure_add')]
    public function addformordure(ManagerRegistry $managerRegistry, Request $req): Response
    {
        $x = $managerRegistry->getManager();
        $ordure = new Ordure();
        $form = $this->createForm(OrdureType::class, $ordure);
        $form->handleRequest($req);
        if ($form->isSubmitted() and $form->isValid()) {
            $x->persist($ordure);
            $x->flush();

            return $this->redirectToRoute('ordureback_show',[
                'id'=>$ordure->getCentre()->getId()]);
        }
        return $this->renderForm('/ordure/addformordure.html.twig', [
            'f' => $form
        ]);
    }

    #[Route('/ordure/update/{id}', name: 'ordure_edit')]
    public function UpdateOrdure(ManagerRegistry $doctrine, Request $request, OrdureRepository $rep, $id): Response
    {
       $ordure = $rep->find($id);
       $form=$this->createForm(OrdureType::class,$ordure);
       $form->handleRequest($request);
       if($form->isSubmitted()){
           $em= $doctrine->getManager();
           $em->persist($ordure);
           $em->flush();
           return $this-> redirectToRoute('ordureback_show',[
            //back to id centre pour afficher
            'id'=>$ordure->getCentre()->getId()]);
       }
       return $this->render('/ordure/addformordure.html.twig',[
           'f'=>$form->createView(),
       ]);
    }

    #[Route('/ordure/delete/{id}', name: 'ordure_delete')]
    public function deleteOrdure($id, OrdureRepository $rep, ManagerRegistry $doctrine): Response
    {
        $em= $doctrine->getManager();
        $ordure= $rep->find($id);
        $em->remove($ordure);
        $em->flush();
        return $this-> redirectToRoute('ordureback_show',[
           //back to id centre pour afficher
            'id'=>$ordure->getCentre()->getId()]);
    }

}
