<?php

namespace App\Controller;

use App\Entity\Event;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\EventRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use App\Form\EventType;
use App\Form\EventEditType;
use Doctrine\Persistence\ManagerRegistry;

class EventController extends AbstractController
{
    #[Route('/event', name: 'app_event')]
    public function affiche(EventRepository $repository)
    {
        $events=$repository->findall();
        return $this->render('event/index.html.twig',['events'=>$events]);
    }

    #[Route('/eventAdmin', name: 'app_eventAdmin')]
    public function afficheEventAdmin(EventRepository $repository)
    {
        $events=$repository->findall();
        return $this->render('event/adminIndex.html.twig',['events'=>$events]);
    }

    #[Route('/eventDetails/{id}', name: 'app_eventDetails')]
    public function details(EventRepository $repository, $id)
    {
        $event=$repository->find($id);
        return $this->render('event/eventDetails.html.twig',['event'=>$event]);
    }

    #[Route('/adminAddEvent', name: 'app_adminAddEvent')]
    public function add (Request $request, ManagerRegistry $managerRegistry)
    {
        $em= $managerRegistry->getmanager();
        $event=new Event();
        $form =$this->CreateForm(EventType::class,$event);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid())
        {
            $em->persist($event);
            $em->flush();
            $this->addFlash('success', 'L\'ajout a été effectué avec succès.');
            return $this->redirectToRoute('app_eventAdmin');
        }
        return $this->render('event/adminAddEvent.html.twig',['f'=>$form->createView()]);
    }

    #[Route('/adminDeleteEvent/{id}', name: 'app_adminDeleteEvent')]
    public function delete($id, EventRepository $repository, ManagerRegistry $managerRegistry)
    {
        $event=$repository->find($id);
        $em= $managerRegistry->getmanager();
        $em->remove($event);
        $em->flush();
        $this->addFlash('Supprimer', 'La suppression a été effectué avec succès.');
        return $this->redirectToRoute('app_eventAdmin');
    }

    #[Route('/adminEditEvent/{id}', name: 'app_adminEditEvent')]
    public function adminEditParticipant(EventRepository $repository, $id,Request $request, ManagerRegistry $managerRegistry)
    {
    $p=$repository->find($id);
    $form=$this->createForm(EventEditType::class,$p);
    $form->handleRequest($request);
    if ($form->isSubmitted() && $form->isValid() )
    {
        $em= $managerRegistry->getmanager();
        $em->flush();
        $this->addFlash('modification', 'La modification a été effectué avec succès.');
        return $this->redirectToRoute('app_eventAdmin');
    }
    return $this->render('event/adminAddEvent.html.twig',['f'=>$form->createView()]);
    }

    public function index(): Response
    {
        return $this->render('event/index.html.twig', [
            'controller_name' => 'EventController',
        ]);
    }
}
