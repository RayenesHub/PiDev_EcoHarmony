<?php

namespace App\Controller;
use App\Repository\ReserveRepository;

use Symfony\Component\HttpFoundation\JsonResponse;
use App\Entity\Animal;
use App\Form\AnimalType;
use App\Repository\CommentRepository;
use App\Repository\AnimalRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use CMEN\GoogleChartsBundle\GoogleCharts\Charts\PieChart;

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




        #[Route('/email', name: 'email')]
        public function sendEmail(MailerInterface $mailer): Response
        {
            $email = (new Email())
                ->from('ahmed.labidi707@gmail.com')
                ->to('ahmed.labidi.ceven@gmail.com')
                //->cc('cc@example.com')
                //->bcc('bcc@example.com')
                //->replyTo('fabien@example.com')
                //->priority(Email::PRIORITY_HIGH)
                ->subject('Time for Symfony Mailer!')
                ->text('Sending emails is fun again!')
                ->html('<p>See Twig integration for better HTML integration!</p>');
    
            $mailer->send($email);
            $this->addFlash('Supprimer', 'La suppression a été effectué avec succès.');
            return $this->redirectToRoute('app_frontanimal');
            // ...
        }
    




        #[Route('/animalstat', name: 'app_animalstat')]
        public function afficheanimalstat(ReserveRepository $repository)
        {
            $reserve=$repository->findall();
        
            $data = array(['reserve', 'animal']);
    
            foreach ($reserve as $reserve) {
                $animalCount = count($reserve->getAnimals());
                $data[] = [$reserve->getNomReserve(), $animalCount];
            }
    
    
            $pieChart = new PieChart();
            $pieChart->getData()->setArrayToDataTable( $data);
            $pieChart->getOptions()->setHeight(600);
            $pieChart->getOptions()->setWidth(600);
            
            $cases= [];
    
            foreach($reserve as $reserve){
                $cases[]= [
                    'id' => $reserve->getId(),
                    'nomReserve' => $reserve->getNomReserve(),
                    'Capacite' => $reserve->getCapacite(),
                    'Lieu' => $reserve->getLieu()
                ];
            }
            
            $data = json_encode($cases);
            return $this->render('animal/animalstat.html.twig',['reserve'=>$reserve,'piechart' => $pieChart,'data'=>$data]);
        }


        #[Route('/searchAnimal', name: 'app_searchAnimal', methods: "POST")]
    public function searchAnimal(Request $request,ManagerRegistry $managerRegistry, AnimalRepository $repository)
    {
        $input = $request->request->get('input');

    // Vérifier si l'input existe
    if ($input !== null) {
        // Effectuer la recherche dans le repository
        $animal = $repository->liveSearch($input);

        $cases= [];

        foreach($animal as $a){
            $cases[]= [
                'categorie' => $a->getCategorie(),
                'poid' => $a->getPoid(),
                'etat' => $a->getEtat(),
                'image' => $a -> getImageLink(),
                'description' => $a -> getDescription(),
            ];
        }
        
        $data = json_encode($cases);

        return new Response($data);
    }

    return $this->json(['error' => 'Aucune entrée fournie']);
}

#[Route('/allAnimal', name: 'app_allAnimal', methods: "POST")]
    public function allAnimal(Request $request,ManagerRegistry $managerRegistry, AnimalRepository $repository)
    {
        $animal = $repository->findAll();

        $cases= [];

        foreach($animal as $a){
            $cases[]= [
                'categorie' => $a->getCategorie(),
                'poid' => $a->getPoid(),
                'etat' => $a->getEtat(),
                'image' => $a -> getImageLink(),
                'description' => $a -> getDescription(),
            ];
        }
        
        $data = json_encode($cases);

        return new Response($data);
    }
    








        






}