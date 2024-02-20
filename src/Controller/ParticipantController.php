<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
    use Symfony\Component\HttpFoundation\Request;
    use Symfony\Component\HttpFoundation\Response;
    use Symfony\Component\Routing\Annotation\Route;
    use Doctrine\ORM\EntityManagerInterface;
    use Symfony\Component\Form\Extension\Core\Type\SubmitType;
    use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
    use App\Repository\ParticipantRepository;
    use App\Repository\EventRepository;
    use App\Entity\Participant;
    use App\Form\ParticipantType;

class ParticipantController extends AbstractController
{
    #[Route('/participant', name: 'app_participant')]
    public function index(): Response
    {
        return $this->render('participant/index.html.twig', [
            'controller_name' => 'ParticipantController',
        ]);
    }

    #[Route('/addParticipant/{id}', name: 'app_addParticipant')]
    public function add (Request $request, EventRepository $repository, $id, ParticipantRepository $rep)
    {
        $event=$repository->find($id);
        $p=new Participant();
        $p->setEvent($event);
        $nbrP= $rep->countByEvent($event);
        $form =$this->CreateForm(ParticipantType::class,$p);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid())
        {
            $em=$this->getDoctrine()->getManager();
            $em->persist($p);
            $em->flush();
            return $this->redirectToRoute('app_event');
        }
        return $this->render('event/eventDetails.html.twig',['event'=>$event,'f'=>$form->createView(), 'nbrP'=>$nbrP]);
    }

}
