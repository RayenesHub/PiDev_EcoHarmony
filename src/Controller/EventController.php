<?php

namespace App\Controller;

use App\Entity\Event;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\EventRepository;

class EventController extends AbstractController
{
    #[Route('/event', name: 'app_event')]
    public function affiche(EventRepository $repository)
    {
        $events=$repository->findall();
        return $this->render('event/index.html.twig',['events'=>$events]);
    }

    #[Route('/eventDetails/{id}', name: 'app_eventDetails')]
    public function details(EventRepository $repository, $id)
    {
        $event=$repository->find($id);
        return $this->render('event/eventDetails.html.twig',['event'=>$event]);
    }


    public function index(): Response
    {
        return $this->render('event/index.html.twig', [
            'controller_name' => 'EventController',
        ]);
    }
}
