<?php

namespace App\Controller;

use App\Entity\Centre;
use App\Form\CentreType;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Request;
use App\Repository\CentreRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CentreController extends AbstractController
{
    #[Route('/centre', name: 'centre_show')]
    public function index(CentreRepository $rep): Response
    {
        $centre=$rep->findall();
        return $this->render('centre/centre.html.twig', [
            'centre' => $centre,
        ]);
    }

    #[Route('/centreback', name: 'centreback_show')]
    public function back(CentreRepository $rep): Response
    {
        $centre=$rep->findall();
        return $this->render('centre/centreback.html.twig', [
            'centre' => $centre,
        ]);
    }

    #[Route('/addformcentre', name: 'centre_add')]
    public function addformcentre(ManagerRegistry $managerRegistry, Request $req): Response
    {
        $x = $managerRegistry->getManager();
        $centre = new Centre();
        $form = $this->createForm(CentreType::class, $centre);
        $form->handleRequest($req);
        if ($form->isSubmitted() and $form->isValid()) {
            $x->persist($centre);
            $x->flush();

            return $this->redirectToRoute('centreback_show');
        }
        return $this->renderForm('/centre/addformcentre.html.twig', [
            'f' => $form
        ]);
    }

    #[Route('/centre/update/{id}', name: 'centre_update')]
    public function UpdateCentre(ManagerRegistry $doctrine, Request $request, CentreRepository $rep, $id): Response
    {
       $centre = $rep->find($id);
       $form=$this->createForm(CentreType::class,$centre);
       $form->handleRequest($request);
       if($form->isSubmitted()){
        
           $em= $doctrine->getManager();
           $em->persist($centre);
           $em->flush();
           return $this-> redirectToRoute('centreback_show');
       }
       return $this->render('/centre/addformcentre.html.twig',[
           'f'=>$form->createView(),
       ]);
    }

    #[Route('/centre/delete/{id}', name: 'centre_delete')]
    public function deleteCentre($id, CentreRepository $rep, ManagerRegistry $doctrine): Response
    {
        $em= $doctrine->getManager();
        $centre= $rep->find($id);
        $em->remove($centre);
        $em->flush();
        return $this-> redirectToRoute('centreback_show');
    }
}
