<?php

namespace App\Controller;


use App\Entity\Animal;
use App\Form\AnimalType;
use App\Repository\CommentRepository;
use App\Repository\AnimalRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class AnimalController extends AbstractController
{
    #[Route('/animal', name: 'app_animal')]
    public function index(AnimalRepository $request): Response
    {   $animal = $request->findAll();
        return $this->render('animal/index.html.twig', [
            'animal' => $animal,
        ]);
    }

    #[Route('/frontanimal', name: 'app_frontanimal')]
    public function frontindex(AnimalRepository $request): Response
    {   $animal = $request->findAll();
        return $this->render('animal/frontanimal.html.twig', [
            'animal' => $animal,
        ]);
    }



    #[Route('/addanimal', name: 'addformanimal')]
    public function addformanimal(ManagerRegistry $managerRegistry, Request $request): Response
    {
        $em = $managerRegistry->getManager();
        $Animal = new animal();
        $form = $this->createForm(AnimalType::class, $Animal);
        $form->handleRequest($request);
        if ($form->isSubmitted() and $form->isValid()) {
            $em->persist($Animal);
            $em->flush();
            
            return $this->redirectToRoute('app_animal');
        }
        return $this->renderForm('animal/addanimal.html.twig', [
            'form' => $form
        ]);
    }

    #[Route('/deleteanimal/{id}', name: 'deleteanimal')]
    public function deleteanimal($id, ManagerRegistry $managerRegistry, AnimalRepository $animalRepository): Response
    {
        $em = $managerRegistry->getManager();
        $dataid = $animalRepository->find($id);
        $em->remove($dataid);
        $em->flush();
        return $this->redirectToRoute('app_animal');
    }
    
    

    #[Route('/editanimal/{id}', name: 'editanimal')]
    public function editanimal($id, animalRepository $animalRepository, ManagerRegistry $managerRegistry, Request $request): Response
    {
        //var_dump($id) . die();
        $x = $managerRegistry->getManager();
        $dataid = $animalRepository->find($id);
        // var_dump($dataid) . die();
        $form = $this->createForm(AnimalType::class, $dataid);
        $form->handleRequest($request);
        if ($form->isSubmitted() and $form->isValid()) {
            $x->persist($dataid);
            $x->flush();
            return $this->redirectToRoute('app_animal');
        }
        return $this->renderForm('animal/addanimal.html.twig', [
            'form' => $form
        ]);
    }










}
