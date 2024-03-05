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
    use App\Form\ParticipantAdminType;
    use App\Form\ParticipantEditType;
    use Doctrine\Persistence\ManagerRegistry;
    use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;

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
    public function add (Request $request, EventRepository $repository, $id, ParticipantRepository $rep, ManagerRegistry $managerRegistry, MailerInterface $mailer)
    {
        $em= $managerRegistry->getmanager();
        $event=$repository->find($id);
        $p=new Participant();
        $p->setEvent($event);
        $nbrP= $rep->countByEvent($event);
        $form =$this->CreateForm(ParticipantType::class,$p);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid())
        {
            $htmlContent = $this->renderView(
                'event/mail/emailAdd.html.twig',
                [
                    'p' => $p,
                    'event' => $event,
                ]
            );
            $email = (new Email())
            ->from('TheTreeWell@gmail.com')
            ->to($p->getEmail())
            ->subject('Participation à'. $event->getNomEvent())
            ->html($htmlContent);

        $mailer->send($email);
            $em->persist($p);
            $em->flush();
            return $this->redirectToRoute('app_event');
        }
        return $this->render('event/eventDetails.html.twig',['event'=>$event,'f'=>$form->createView(), 'nbrP'=>$nbrP]);
    }



    #[Route('/afficherParticipant/{id}', name: 'app_afficherParticipant')]
    public function afficherParticipant (Request $request, EventRepository $repository, $id)
    {
        $event=$repository->find($id);
        return $this->render('event/adminListParticipants.html.twig',['event'=>$event]);
    }




    #[Route('/adminAddParticipant', name: 'app_adminAddParticipant')]
    public function adminAdd (Request $request, ManagerRegistry $managerRegistry)
    {
        $em= $managerRegistry->getmanager();
        $p=new Participant();
        $form =$this->CreateForm(ParticipantAdminType::class,$p);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid())
        {
            $em->persist($p);
            $em->flush();
            $this->addFlash('success', 'L\'ajout a été effectué avec succès.');
            return $this->redirectToRoute('app_eventAdmin');
        }
        return $this->render('event/adminAddParticipant.html.twig',['f'=>$form->createView()]);
    }



    #[Route('/adminDeleteParticipant/{id}', name: 'app_adminDeleteParticipant')]
    public function delete($id, ParticipantRepository $repository, ManagerRegistry $managerRegistry)
    {
        $p=$repository->find($id);
        $event=$p->getEvent();
        $em= $managerRegistry->getmanager();
        $em->remove($p);
        $em->flush();
        $this->addFlash('Supprimer', 'La suppression a été effectué avec succès.');
        return $this->render('event/adminListParticipants.html.twig',['event'=>$event]);
    }


    
    #[Route('/adminEditParticipant/{id}', name: 'app_adminEditParticipant')]
    public function adminEditParticipant(ParticipantRepository $repository, $id,Request $request, ManagerRegistry $managerRegistry)
    {
    $p=$repository->find($id);
    $event=$p->getEvent();
    $form=$this->createForm(ParticipantEditType::class,$p);
    $form->handleRequest($request);
    if ($form->isSubmitted() && $form->isValid() )
    {
        $em= $managerRegistry->getmanager();
        $em->flush();
        $this->addFlash('modification', 'La modification a été effectué avec succès.');
        return $this->render('event/adminListParticipants.html.twig',['event'=>$event]);
    }
    return $this->render('event/adminAddParticipant.html.twig',['f'=>$form->createView()]);
    }

}
