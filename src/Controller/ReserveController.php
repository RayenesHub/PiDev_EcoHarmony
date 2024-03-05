<?php

namespace App\Controller;

use App\Entity\Reserve;
use App\Form\ReserveType;
use App\Repository\CommentRepository;
use App\Repository\ReserveRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ReserveController extends AbstractController
{
    #[Route('/reserve', name: 'app_reserve')]
    public function index(ReserveRepository $request): Response
    {   $reserve = $request->findAll();
        return $this->render('reserve/index.html.twig', [
            'reserve' => $reserve,
        ]);
    }


    #[Route('/addreserve', name: 'addformreserve')]
    public function addformpost(ManagerRegistry $managerRegistry, Request $request): Response
    {
        $em = $managerRegistry->getManager();
        $Reserve = new reserve();
        $form = $this->createForm(ReserveType::class, $Reserve);
        $form->handleRequest($request);
        if ($form->isSubmitted() and $form->isValid()) {
            $em->persist($Reserve);
            $em->flush();
            
            return $this->redirectToRoute('app_reserve');
        }
        return $this->renderForm('reserve/addreserve.html.twig', [
            'form' => $form
        ]);
    }

    #[Route('/deletereserve/{id}', name: 'deletereserve')]
    public function deletereserve($id, ManagerRegistry $managerRegistry, ReserveRepository $reserveRepository): Response
    {
        $em = $managerRegistry->getManager();
        $dataid = $reserveRepository->find($id);
        $em->remove($dataid);
        $em->flush();
        return $this->redirectToRoute('app_reserve');
    }
    
    

    #[Route('/editreserve/{id}', name: 'editreserve')]
    public function editreserve($id, reserveRepository $reserveRepository, ManagerRegistry $managerRegistry, Request $request): Response
    {
        //var_dump($id) . die();
        $x = $managerRegistry->getManager();
        $dataid = $reserveRepository->find($id);
        // var_dump($dataid) . die();
        $form = $this->createForm(ReserveType::class, $dataid);
        $form->handleRequest($request);
        if ($form->isSubmitted() and $form->isValid()) {
            $x->persist($dataid);
            $x->flush();
            return $this->redirectToRoute('app_reserve');
        }
        return $this->renderForm('reserve/addreserve.html.twig', [
            'form' => $form
        ]);
    }

    
    

   
}
