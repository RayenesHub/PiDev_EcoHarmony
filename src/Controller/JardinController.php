<?php

namespace App\Controller;
use App\Entity\Jardin;
use App\Repository\JardinRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Form\JardinType;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\String\Slugger\SluggerInterface;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Knp\Component\Pager\PaginatorInterface;
use Doctrine\ORM\EntityManagerInterface;


class JardinController extends AbstractController
{
    #[Route('/jardin', name: 'app_jardin')]
    public function index(): Response
    {
        return $this->render('jardin/index.html.twig', [
            'controller_name' => 'JardinController',
        ]);
    }

    #[Route('/add_jardin', name: 'app_addJardin')]
    public function addJardin(ManagerRegistry $mr, Request $req, JardinRepository $jardinRepository): Response
    {
        $jardin = new Jardin(); 
    
        $form = $this->createForm(JardinType::class, $jardin);
    
        $form->handleRequest($req);
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $mr->getManager();
            $em->persist($jardin);
            $em->flush();
            return $this->redirectToRoute('app_listJ');
        }
    
        $jardin= $jardinRepository->findAll(); 
    
        return $this->render('jardinn/addJardin.html.twig', [
            'form' => $form->createView(),
            'jardin' => $jardin, 
        ]);
    }
    
    #[Route('/List_j', name: 'app_listJ')]
    public function listJ(PaginatorInterface $paginator, JardinRepository $repo, Request $request): Response
    {
        // Récupérer tous les jardins
        $query = $repo->createQueryBuilder('j')
            ->getQuery();
    
        // Paginer les résultats
        $pagination = $paginator->paginate(
            $query,
            $request->query->getInt('page', 1), // Page par défaut est 1 si non spécifiée
            10 // Nombre d'éléments par page
        );
    
        // Rendre la vue avec la pagination
        return $this->render('jardinn/listJ.html.twig', [
            'pagination' => $pagination,
        ]);
    }
    


#[Route('/List_jBack', name: 'app_listJBack')]
public function ListJB(JardinRepository $repo): Response
{
    $jardin= $repo->findAll(); 
    return $this->render('jardinBack/listJardin.html.twig', [
        'jardin' => $jardin, 
    ]);
}
#[Route('/add_jardinBack', name: 'app_addJardinBack')]
public function add(ManagerRegistry $mr, Request $req, JardinRepository $jardinRepository): Response
{
    $jardin = new Jardin(); 

    $form = $this->createForm(JardinType::class, $jardin);

    $form->handleRequest($req);
    if ($form->isSubmitted() && $form->isValid()) {
        $em = $mr->getManager();
        $em->persist($jardin);
        $em->flush();
        return $this->redirectToRoute('app_listJBack');
    }

    $jardin= $jardinRepository->findAll(); 

    return $this->render('jardinBack/addJardinB.html.twig', [
        'form' => $form->createView(),
        'jardin' => $jardin, 
    ]);
}



#[Route('/delete_jardin/{id}', name: 'app_delete_jardin')]
    public function removeD(JardinRepository $repo, $id, ManagerRegistry $mr): Response
    { 
        $jardin = $repo->find($id); 
        $em = $mr->getManager();
        $em->remove($jardin);
        $em->flush();
   
        return $this->redirectToRoute('app_listJ');
    }

   

    #[Route('/update_jardin/{id}', name: 'app_update_jardin')]
    public function updateJardin(ManagerRegistry $mr, Request $req, $id, JardinRepository $jardinRepository): Response
    {
        $em = $mr->getManager();
        $jardin = $em->getRepository(Jardin::class)->find($id);
    
        $form = $this->createForm(JardinType::class, $jardin);
    
        $form->handleRequest($req);
    
        if ($form->isSubmitted() && $form->isValid()) {
            $em->flush();
    
            return $this->redirectToRoute('app_listJ');
        }
    
        $jardin = $jardinRepository->findAll(); 
    
        return $this->render('jardinn/addJardin.html.twig', [
            'form' => $form->createView(),
            'jardinId' => $id,
            'jardin' => $jardin, 
        ]);
    }
    
    #[Route('/delete_jardinB/{id}', name: 'app_delete_jardinB')]
    public function removeJB(JardinRepository $repo, $id, ManagerRegistry $mr): Response
    { 
        $jardin = $repo->find($id); 
        $em = $mr->getManager();
        $em->remove($jardin);
        $em->flush();
   
        return $this->redirectToRoute('app_listJBack');
    }
    #[Route('/update_jardinB/{id}', name: 'app_update_jardinB')]
    public function updateJardinB(ManagerRegistry $mr, Request $req, $id, JardinRepository $jardinRepository): Response
    {
        $em = $mr->getManager();
        $jardin = $em->getRepository(Jardin::class)->find($id);
    
        $form = $this->createForm(JardinType::class, $jardin);
    
        $form->handleRequest($req);
    
        if ($form->isSubmitted() && $form->isValid()) {
            $em->flush();
    
            return $this->redirectToRoute('app_listJBack');
        }
    
        $jardin = $jardinRepository->findAll(); 
    
        return $this->render('jardinBack/addJardinB.html.twig', [
            'form' => $form->createView(),
            'jardinId' => $id,
            'jardin' => $jardin, 
        ]);
    }
    



}
