<?php

namespace App\Controller;
use Dompdf\Dompdf;
use Dompdf\Options;
use App\Entity\Event;
use App\Entity\Participant;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\EventRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use App\Form\EventType;
use App\Form\EventEditType;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use CMEN\GoogleChartsBundle\GoogleCharts\Charts\PieChart;
use DateTime;
use SebastianBergmann\Environment\Console;
use Symfony\Component\HttpFoundation\JsonResponse;

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
    
        $data = array(['events', 'participants']);

        foreach ($events as $event) {
            $participantsCount = count($event->getParticipants());
            $data[] = [$event->getNomEvent(), $participantsCount];
        }


        $pieChart = new PieChart();
 
 
 
        $pieChart->getData()->setArrayToDataTable( $data);
 
        $pieChart->getOptions()->setHeight(600);
        $pieChart->getOptions()->setWidth(600);
        
        $cases= [];

        foreach($events as $event){
            $cases[]= [
                'id' => $event->getId(),
                'start' => $event->getStart()->format('Y-m-d H:i:s'),
                'end' => $event->getEnd()->format('Y-m-d H:i:s'),
                'title' => $event->getNomEvent()
            ];
        }
        
        $data = json_encode($cases);
        return $this->render('event/adminIndex.html.twig',['events'=>$events,'piechart' => $pieChart,'data'=>$data]);
    }

    #[Route('/eventCal', name: 'app_eventCal')]
    public function eventCal(EventRepository $repository):Response
    {
        $events=$repository->findall();
        $cases= [];

        foreach($events as $event){
            $cases[]= [
                'id' => $event->getId(),
                'start' => $event->getStart()->format('Y-m-d H:i:s'),
                'end' => $event->getEnd()->format('Y-m-d H:i:s'),
                'title' => $event->getNomEvent()
            ];
        }
        
        $data = json_encode($cases);
        dump($data);
        return $this->render('event/calendar.html.twig', compact('data'));
    }

    #[Route('/apiEvent', name: 'app_apiEvent', methods: ['POST'])]
    public function majEvent(?Event $event, Request $request, ManagerRegistry $managerRegistry, EventRepository $rep)
    {
        $data = json_decode($request->getContent());
        $event = $rep->find($data->id);
        if (!$event) {
            return new Response('Événement non trouvé');
        }
        $event->setStart(new DateTime($data->start));
        $event->setEnd(new DateTime($data->end));
    
        $em = $this->getDoctrine()->getManager();
        $em->persist($event);
        $em->flush();
        return new Response('Mise à jour effectuée', 200);
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
    public function delete($id, EventRepository $repository, ManagerRegistry $managerRegistry, MailerInterface $mailer): Response
    {
        $event=$repository->find($id);
        $participants = $event->getParticipants();
            foreach( $participants as $p)
            {
                $htmlContent = $this->renderView(
                    'event/mail/emailCancel.html.twig',
                    [
                        'p' => $p,
                        'event' => $event,
                    ]
                );
                $email = (new Email())
                ->from('TheTreeWell@gmail.com')
                ->to($p->getEmail())
                ->subject('Annulation de'. $event->getNomEvent())
                ->html($htmlContent);

            $mailer->send($email);
            }
            $em= $managerRegistry->getmanager();
            $em->remove($event);
            $em->flush();
        $this->addFlash('Supprimer', 'La suppression a été effectué avec succès.');
        return $this->redirectToRoute('app_eventAdmin');
    }





    #[Route('/adminDeleteEvent_Backup/{id}', name: 'app_adminDeleteEvent_Backup')]
    public function delete_Backup($id, EventRepository $repository, ManagerRegistry $managerRegistry)
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


    #[Route('/pdfEvent', name: 'app_pdfEvent')]
    public function generatePdf(EventRepository $rep): Response
    {
        // Create a new Dompdf instance
        $dompdf = new Dompdf();
        $events=$rep->findAll();

        
        $html = $this->renderView('event/pdf.html.twig', [
            'events' => $events,

        ]);

        
        $dompdf->loadHtml($html);
        $css = file_get_contents('css/pdfEvent.css');
        $dompdf->loadHtml('<style>' . $css . '</style>' . $html);

        
        $dompdf->setPaper('A4', 'portrait');

        // Render PDF
        $dompdf->render();

        // Output PDF as response
        $pdfOutput = $dompdf->output();
        $response = new Response($pdfOutput);
        $response->headers->set('Content-Type', 'application/pdf');
        $response->headers->set('Content-Disposition', 'inline; filename="output.pdf"');

        return $response;
    }


    #[Route('/pdfParticipant/{id}', name: 'app_pdfParticipant')]
    public function generatePdfP(EventRepository $rep, int $id): Response
    {
        // Create a new Dompdf instance
        $dompdf = new Dompdf();
        $event=$rep->find($id);

        // Render HTML content
        $html = $this->renderView('event/pdfParticipant.html.twig', [
            'event' => $event,

        ]);

        // Load HTML to Dompdf
        $dompdf->loadHtml($html);
        $css = file_get_contents('css/pdfEvent.css');
        $dompdf->loadHtml('<style>' . $css . '</style>' . $html);

        // Set paper size and orientation
        $dompdf->setPaper('A4', 'portrait');

        // Render PDF
        $dompdf->render();

        // Output PDF as response
        $pdfOutput = $dompdf->output();
        $response = new Response($pdfOutput);
        $response->headers->set('Content-Type', 'application/pdf');
        $response->headers->set('Content-Disposition', 'inline; filename="output.pdf"');

        return $response;
    }


    #[Route('/searchEvent', name: 'app_searchEvent', methods: "POST")]
    public function searchEvent(Request $request,ManagerRegistry $managerRegistry, EventRepository $repository)
    {
        $input = $request->request->get('input');

    // Vérifier si l'input existe
    if ($input !== null) {
        // Effectuer la recherche dans le repository
        $events = $repository->findBySearchTerm($input);

        $cases= [];

        foreach($events as $event){
            $cases[]= [
                'id' => $event->getId(),
                'nom' => $event->getNomEvent(),
                'start' => $event->getStart(),
                'end' => $event -> getEnd(),
                'lieux' => $event -> getLieuxEvent(),
                'affiche' => $event -> getAfficheEvent(),
                'description' => $event -> getDescriptionEvent(),
            ];
        }
        
        $data = json_encode($cases);

        return new Response($data);
    }

    return $this->json(['error' => 'Aucune entrée fournie']);
}

#[Route('/allEvent', name: 'app_allEvent', methods: "POST")]
    public function allEvent(Request $request,ManagerRegistry $managerRegistry, EventRepository $repository)
    {
        $events = $repository->findAll();

        $cases= [];

        foreach($events as $event){
            $cases[]= [
                'id' => $event->getId(),
                'nom' => $event->getNomEvent(),
                'start' => $event->getStart(),
                'end' => $event -> getEnd(),
                'lieux' => $event -> getLieuxEvent(),
                'affiche' => $event -> getAfficheEvent(),
                'description' => $event -> getDescriptionEvent(),
            ];
        }
        
        $data = json_encode($cases);

        return new Response($data);
    }
}
