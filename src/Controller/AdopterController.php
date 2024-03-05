<?php

namespace App\Controller;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Adoptation;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Persistence\ManagerRegistry; 
use App\Entity\Adopter;
use App\Form\AdoptationFormType;
use Symfony\Component\HttpFoundation\Request;
use App\Repository\AnimalRepository;

use App\Entity\Animal;
use App\Form\AnimalType;


class AdopterController extends AbstractController
{
    #[Route('/adopter', name: 'app_adopter')]
    public function index(): Response
    {
        return $this->render('adopter/index.html.twig', [
            'controller_name' => 'AdopterController',
        ]);
    }

   
    #[Route('/addadopter', name: 'addadopter')]
    public function addformanimal(ManagerRegistry $managerRegistry, Request $request,MailerInterface $mailer
    ): Response
    {
        $em = $managerRegistry->getManager();
        $Adopter = new adopter();
        $form = $this->createForm(AdoptationFormType::class, $Adopter );
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid())
        {
            
            $email = (new Email())
            ->from('TheTreeWell@gmail.com')
            ->to($Adopter->getEmailadopter())
            ->subject('Participation à')
            ->html('<p>Vous avez adopter l animal merci.</p>');

        $mailer->send($email);
            $em->persist($Adopter);
            $em->flush();
            return $this->redirectToRoute('app_frontanimal');
        }

        return $this->renderForm('adopter/addadopter.html.twig', [
            'form' => $form
        ]);
    }












}
