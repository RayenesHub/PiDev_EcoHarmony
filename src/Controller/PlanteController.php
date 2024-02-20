<?php

namespace App\Controller;

use App\Entity\Plante;
use App\Repository\PlanteRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Form\PlanteType;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\String\Slugger\SluggerInterface;
use Symfony\Component\HttpFoundation\File\UploadedFile;
class PlanteController extends AbstractController
{
    #[Route('/plante', name: 'app_plante')]
    public function index(): Response
    {
        return $this->render('plante/index.html.twig', [
            'controller_name' => 'PlanteController',
        ]);
    }

    #[Route('/List_p', name: 'app_listP')]
public function ListP(PlanteRepository $repo): Response
{
    $plantes = $repo->findAll(); 
    return $this->render('plante/ListP.html.twig', [
        'plantes' => $plantes, 
    ]);
}

#[Route('/List_pB', name: 'app_listPB')]
public function ListPB(PlanteRepository $repo): Response
{
    $plantes = $repo->findAll(); 
    return $this->render('planteBack/listPlanteB.html.twig', [
        'plantes' => $plantes, 
    ]);
}

#[Route('/add_plante', name: 'app_addPlante')]
public function AddP(ManagerRegistry $mr, Request $req): Response
{
    $plante = new Plante();
    $form = $this->createForm(PlanteType::class, $plante);
    $form->handleRequest($req);

    if ($form->isSubmitted() && $form->isValid()) {
        
        $imageFile = $form->get('image')->getData(); 

        if ($imageFile instanceof UploadedFile) {
            $newFilename = uniqid().'.'.$imageFile->guessExtension();
            $imageFile->move(
                $this->getParameter('plantes_directory').'/uploads/images/',
                $newFilename
            );
            $plante->setImage($newFilename);
        }

        $em = $mr->getManager();
        $em->persist($plante);
        $em->flush();

        return $this->redirectToRoute('app_listP');
    }

    return $this->render('/plante/addPlante.html.twig', [
        'form' => $form->createView(),
    ]);
}

#[Route('/add_planteB', name: 'app_addPlanteB')]
public function addPlanteB(ManagerRegistry $mr, Request $req, PlanteRepository $planteRepository): Response
{
    $plante = new Plante(); 

    $form = $this->createForm(PlanteType::class, $plante);

    $form->handleRequest($req);
    if ($form->isSubmitted() && $form->isValid()) {
        $em = $mr->getManager();
        $em->persist($plante);
        $em->flush();
        return $this->redirectToRoute('app_listPB');
    }

    $plantes = $planteRepository->findAll(); // Utilisation correcte de $planteRepository

    return $this->render('planteBack/addPlanteB.html.twig', [
        'form' => $form->createView(),
        'plantes' => $plantes, // Passer la liste des plantes au template
    ]);
}

    #[Route('/delete_plante/{id}', name: 'app_delete_plante')]
    public function removeD(PlanteRepository $repo, $id, ManagerRegistry $mr): Response
    {
        $plante = $repo->find($id); 
        $em = $mr->getManager();
        $em->remove($plante);
        $em->flush();
   
        return $this->redirectToRoute('app_listP');
    }
    #[Route('/delete_planteB/{id}', name: 'app_delete_planteB')]
    public function removeDB(PlanteRepository $repo, $id, ManagerRegistry $mr): Response
    {
        $plante = $repo->find($id); 
        $em = $mr->getManager();
        $em->remove($plante);
        $em->flush();
   
        return $this->redirectToRoute('app_listPB');
    }
    #[Route('/update_plante/{id}', name: 'app_update_plante')]
    public function updatePlante(ManagerRegistry $mr, Request $req, $id, PlanteRepository $planteRepository): Response
    {
        $em = $mr->getManager();
        $plante = $em->getRepository(Plante::class)->find($id);
    
        if (!$plante) {
            // Si la plante n'existe pas, vous pouvez rediriger l'utilisateur ou afficher une page d'erreur.
            throw $this->createNotFoundException('La plante demandée n\'existe pas.');
            // Ou return $this->redirectToRoute('nom_de_la_route');
        }
    
        $form = $this->createForm(PlanteType::class, $plante);
        $form->handleRequest($req);
    
        if ($form->isSubmitted() && $form->isValid()) {
            $imageFile = $form->get('image')->getData();
    
            if ($imageFile instanceof UploadedFile) {
                $newFilename = uniqid().'.'.$imageFile->guessExtension();
                try {
                    $imageFile->move(
                        $this->getParameter('plantes_directory').'/uploads/images/',
                        $newFilename
                    );
                    $plante->setImage($newFilename);
                } catch (FileException $e) {
                    // Gérer l'exception si quelque chose se passe mal pendant le téléchargement du fichier
                }
            }
    
            $em->flush();
            return $this->redirectToRoute('app_listP');
        }
    
        // Si le formulaire n'est pas soumis ou n'est pas valide, ou si le fichier image n'est pas traité,
        // on continue à afficher la page avec le formulaire de mise à jour.
        return $this->render('plante/addPlante.html.twig', [
            'form' => $form->createView(),
            'PlanteId' => $id,
            // 'plantes' => $plantes, Pas nécessaire à moins que vous utilisiez cette variable dans votre vue.
        ]);
    }
    
        
    

    #[Route('/update_planteB/{id}', name: 'app_update_planteB')]
    public function updatePlanteB(ManagerRegistry $mr, Request $req, $id, PlanteRepository $planteRepository): Response
    {
        $em = $mr->getManager();
        $plante = $em->getRepository(Plante::class)->find($id);
    
        $form = $this->createForm(PlanteType::class, $plante);
    
        $form->handleRequest($req);
    
        if ($form->isSubmitted() && $form->isValid()) {
            $em->flush();
    
            return $this->redirectToRoute('app_listPB');
        }
    
        $plantes = $planteRepository->findAll(); 
    
        return $this->render('planteBack/addPlanteB.html.twig', [
            'form' => $form->createView(),
            'PlanteId' => $id,
            'plantes' => $plantes, 
        ]);
    }
    



}
