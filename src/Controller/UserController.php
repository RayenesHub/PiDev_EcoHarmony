<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\UserType;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\String\Slugger\SluggerInterface;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Knp\Component\Pager\PaginatorInterface;



#[Route('/user')]
class UserController extends AbstractController
{
   
    #[Route('/', name: 'app_user_index', methods: ['GET'])]
    public function index(EntityManagerInterface $entityManager,PaginatorInterface $paginator,UserRepository $userRepository, Request $request): Response
    {
        $usersRepository = $entityManager->getRepository(User::class);
        $user = $usersRepository->findByRoles('admin');
        $pagination = $paginator->paginate(
            $user, // Users query
            $request->query->getInt('page', 1), // Current page
            5// Items per page
        );
        return $this->render('user/index.html.twig', [
            'users' => $user,
            
        'pagination' => $pagination,
        ]);
    }

    #[Route('/new', name: 'app_user_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager, SluggerInterface $slugger, UserPasswordEncoderInterface $passwordEncoder): Response
    {
        $user = new User();
        $form = $this->createForm(UserType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            /** @var UploadedFile $imageFile */
            $imageFile = $form->get('image')->getData();

            if ($imageFile) {
                $originalFilename = pathinfo($imageFile->getClientOriginalName(), PATHINFO_FILENAME);
                $safeFilename = $slugger->slug($originalFilename);
                $newFilename = $safeFilename . '-' . uniqid() . '.' . $imageFile->guessExtension();

                
                    $imageFile->move(
                        $this->getParameter('img_directory'),
                        $newFilename
                    );
                

                $user->setImage($newFilename);
            }
            $user->setRole("user");

            
            $hashedPassword = hash('sha1', $user->getPassword());
            $user->setMdp($hashedPassword);

            $entityManager->persist($user);
            $entityManager->flush();

            return $this->redirectToRoute('app_login', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('user/new.html.twig', [
            'user' => $user,
            'form' => $form->createView(),
        ]);
    }
    #[Route('/{id}', name: 'app_user_show', methods: ['GET'])]
    public function show(EntityManagerInterface $entityManager, int $id): Response
{
    $userRepository = $entityManager->getRepository(User::class);
    $user = $userRepository->find($id);

    if (!$user) {
        throw $this->createNotFoundException('User not found');
    }

    return $this->render('user/show.html.twig', [
        'user' => $user,
    ]);
}
    #[Route('/new/back', name: 'app_user_newback', methods: ['GET', 'POST'])]
    public function newback(Request $request, EntityManagerInterface $entityManager, SluggerInterface $slugger, UserPasswordEncoderInterface $passwordEncoder): Response
    {
        $user = new User();
        $form = $this->createForm(UserType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            /** @var UploadedFile $imageFile */
            $imageFile = $form->get('image')->getData();

            if ($imageFile) {
                $originalFilename = pathinfo($imageFile->getClientOriginalName(), PATHINFO_FILENAME);
                $safeFilename = $slugger->slug($originalFilename);
                $newFilename = $safeFilename . '-' . uniqid() . '.' . $imageFile->guessExtension();

                
                    $imageFile->move(
                        $this->getParameter('img_directory'),
                        $newFilename
                    );
                

                $user->setImage($newFilename);
            }
            $user->setRole("admin");

            
            $hashedPassword = hash('sha1', $user->getPassword());
            $user->setMdp($hashedPassword);

            $entityManager->persist($user);
            $entityManager->flush();

            return $this->redirectToRoute('app_user_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('user/registerback.html.twig', [
            'user' => $user,
            'form' => $form->createView(),
        ]);
    }
    
    #[Route('/{id}/edit', name: 'app_user_edit', methods: ['GET', 'POST'])]
public function edit(Request $request, int $id, EntityManagerInterface $entityManager, SluggerInterface $slugger, UserPasswordEncoderInterface $passwordEncoder): Response
{
    $userRepository = $entityManager->getRepository(User::class);
    $user = $userRepository->find($id);

    if (!$user) {
        throw $this->createNotFoundException('User not found');
    }

    $form = $this->createForm(UserType::class, $user);
    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
        $formData = $form->getData();
        /** @var UploadedFile $imageFile */
        $imageFile = $form->get('image')->getData();

        if ($imageFile) {
            $originalFilename = pathinfo($imageFile->getClientOriginalName(), PATHINFO_FILENAME);
            $safeFilename = $slugger->slug($originalFilename);
            $newFilename = $safeFilename . '-' . uniqid() . '.' . $imageFile->guessExtension();

            try {
                $imageFile->move(
                    $this->getParameter('img_directory'),
                    $newFilename
                );
            } catch (FileException $e) {
            }

            $user->setImage($newFilename);
        }

        $user->setRole("user");
        $hashedPassword = $passwordEncoder->encodePassword($formData, $formData->getMdp());
        $hashedPassword1 = hash('sha1', $hashedPassword);
        $formData->setMdp($hashedPassword1);

        $entityManager->flush();

        return $this->redirectToRoute('app_index', [], Response::HTTP_SEE_OTHER);
    }

    return $this->renderForm('user/edit.html.twig', [
        'user' => $user,
        'form' => $form,
    ]);
}

#[Route('/{id}/edit/back', name: 'app_user_editback', methods: ['GET', 'POST'])]
public function editback(Request $request, int $id, EntityManagerInterface $entityManager, SluggerInterface $slugger, UserPasswordEncoderInterface $passwordEncoder): Response
{
    $userRepository = $entityManager->getRepository(User::class);
    $user = $userRepository->find($id);

    if (!$user) {
        throw $this->createNotFoundException('User not found');
    }

    $form = $this->createForm(UserType::class, $user);
    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
        $formData = $form->getData();
        /** @var UploadedFile $imageFile */
        $imageFile = $form->get('image')->getData();

        if ($imageFile) {
            $originalFilename = pathinfo($imageFile->getClientOriginalName(), PATHINFO_FILENAME);
            $safeFilename = $slugger->slug($originalFilename);
            $newFilename = $safeFilename . '-' . uniqid() . '.' . $imageFile->guessExtension();

            try {
                $imageFile->move(
                    $this->getParameter('img_directory'),
                    $newFilename
                );
            } catch (FileException $e) {
            }

            $user->setImage($newFilename);
        }

        $user->setRole("admin");
        $hashedPassword = $passwordEncoder->encodePassword($formData, $formData->getMdp());
        $hashedPassword1 = hash('sha1', $hashedPassword);
        $formData->setMdp($hashedPassword1);

        $entityManager->flush();

        return $this->redirectToRoute('app_user_index', [], Response::HTTP_SEE_OTHER);
    }

    return $this->renderForm('user/editback.html.twig', [
        'user' => $user,
        'form' => $form,
    ]);
}


#[Route('/{id}', name: 'app_user_delete', methods: ['POST'])]
public function delete(Request $request, int $id, EntityManagerInterface $entityManager): Response
{
    $userRepository = $entityManager->getRepository(User::class);
    $user = $userRepository->find($id);

    if (!$user) {
        throw $this->createNotFoundException('User not found');
    }

    if ($this->isCsrfTokenValid('delete' . $user->getId(), $request->request->get('_token'))) {
        $this->get('security.token_storage')->setToken(null);
        $this->get('session')->invalidate();
        $entityManager->remove($user);
        $entityManager->flush();
    }

    return $this->redirectToRoute('app_login', [], Response::HTTP_SEE_OTHER);
}

#[Route('/back/{id}', name: 'app_user_deleteback', methods: ['GET', 'POST'])]
public function deleteb(Request $request, int $id, EntityManagerInterface $entityManager): Response
{
    $userRepository = $entityManager->getRepository(User::class);
    $user = $userRepository->find($id);

    if (!$user) {
        throw $this->createNotFoundException('User not found');
    }

    if ($this->isCsrfTokenValid('delete' . $user->getId(), $request->request->get('_token'))) {
        $entityManager->remove($user);
        $entityManager->flush();
    }

    return $this->redirectToRoute('app_user_index', [], Response::HTTP_SEE_OTHER);
}

}
