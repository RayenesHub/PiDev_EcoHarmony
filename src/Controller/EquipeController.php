<?php

namespace App\Controller;

use App\Entity\Equipe;
use App\Form\EquipeType;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Request;
use App\Repository\PlageRepository;
use App\Repository\EquipeRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class EquipeController extends AbstractController
{
    #[Route('/equipe{id}', name: 'equipe_show')]
    public function index(PlageRepository $repo, $id): Response
    {
        $plage = $repo->find($id);
        return $this->render('equipe/equipe.html.twig', [
            'plage'=>$plage
        ]);
    }
    #[Route('/equipeback/{id}', name: 'equipeback_show')]
    public function back(PlageRepository $repo, $id): Response
    {
        $plage = $repo->find($id);
        return $this->render('equipe/equipeback.html.twig', [
            'plage'=>$plage
        ]);
    }

    #[Route('/addformequipe', name: 'equipe_add')]
    public function addformequipe(ManagerRegistry $managerRegistry, Request $req): Response
    {
        $x = $managerRegistry->getManager();
        $equipe = new Equipe();
        $form = $this->createForm(EquipeType::class, $equipe);
        $form->handleRequest($req);
        if ($form->isSubmitted() and $form->isValid()) {
            $x->persist($equipe);
            $x->flush();

            return $this->redirectToRoute('equipeback_show',[
                'id'=>$equipe->getPlage()->getId()]);
        }
        return $this->renderForm('/equipe/addformequipe.html.twig', [
            'f' => $form
        ]);
    }

    #[Route('/equipe/update/{id}', name: 'equipe_edit')]
    public function UpdateEquipe(ManagerRegistry $doctrine, Request $request, EquipeRepository $rep, $id): Response
    {
       $equipe = $rep->find($id);
       $form=$this->createForm(EquipeType::class,$equipe);
       $form->handleRequest($request);
       if($form->isSubmitted()){
           $em= $doctrine->getManager();
           $em->persist($equipe);
           $em->flush();
           return $this-> redirectToRoute('equipeback_show',[
            //back to id plage pour afficher
            'id'=>$equipe->getPlage()->getId()]);
       }
       return $this->render('/equipe/addformequipe.html.twig',[
           'f'=>$form->createView(),
       ]);
    }

    #[Route('/equipe/delete/{id}', name: 'equipe_delete')]
    public function deleteEquipe($id, EquipeRepository $rep, ManagerRegistry $doctrine): Response
    {
        $em= $doctrine->getManager();
        $equipe= $rep->find($id);
        $em->remove($equipe);
        $em->flush();
        return $this-> redirectToRoute('equipeback_show',[
           //back to id plage pour afficher
            'id'=>$equipe->getPlage()->getId()]);
    }

}
