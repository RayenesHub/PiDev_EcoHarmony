<?php

namespace App\Controller;

use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Component\Security\Csrf\TokenGenerator\TokenGeneratorInterface;
use App\Form\ResetPasswordFormType;
use App\Form\ResetPasswordRequestFormType;
use App\Service\SendMailService;
use Doctrine\ORM\EntityManagerInterface;


class SecurityController extends AbstractController
{
    #[Route(path: '', name: 'app_login')]
    public function login(AuthenticationUtils $authenticationUtils, AuthorizationCheckerInterface $authorizationChecker, UserRepository $userRepository): Response
{
    if ($this->getUser()) {
        $roles = $this->getUser()->getRole();
        
        if (($roles=='admin')) {
            return $this->redirectToRoute('app_user_index');
        } else {
            return $this->redirectToRoute('app_index');
        }
    }

    // get the login error if there is one
    $error = $authenticationUtils->getLastAuthenticationError();
    // last username entered by the user
    $lastUsername = $authenticationUtils->getLastUsername();
    
    $user = $userRepository->findOneBy(['email' => $lastUsername]);

    if ($user) {
        
        return $this->render('security/login.html.twig', ['last_username' => $lastUsername, 'error' => $error]);
    }
    
    return $this->render('security/login.html.twig', ['last_username' => $lastUsername, 'error' => $error,'user' =>$user]);
}

    

    #[Route(path: '/logout', name: 'app_logout')]
    public function logout(): void
    {
        throw new \LogicException('This method can be blank - it will be intercepted by the logout key on your firewall.');
    }


    #[Route(path: '/oubli-pass', name: 'forgotten_password')]
    public function forgottenPassword(Request $request,UserRepository $usersRepository,TokenGeneratorInterface $tokenGenerator,EntityManagerInterface $entityManager,SendMailService $mail): Response
    {
        $form = $this->createForm(ResetPasswordRequestFormType::class);
        $form -> handleRequest($request);
        if ($form->isSubmitted() && $form->isValid())
        {
            //on va chercher l'utilisateur par son email
            $user = $usersRepository->findOneByEmail($form->get('email')->getData());
            if($user){
                $token = $tokenGenerator->generateToken();
                $user->setResetToken($token);
                $entityManager->persist($user);
                $entityManager->flush();

                $url= $this->generateUrl('reset_pass',['token'=> $token],UrlGeneratorInterface::ABSOLUTE_URL);

                $context = compact('url','user');

                $mail->send(
                  'thetreewell2@gmail.com',
                  $user->getEmail(),
                  'Réinitialisation de mot de passe',
                  'password_reset',
                  $context
                );

                return $this->redirectToRoute('app_login');

            }

            return $this->redirectToRoute('app_login');
        }
       return $this->render('security/reset_password_request.html.twig', [
           'requestPassForm' => $form ->createView()
       ]);

    }
    #[Route('/oubli-pass/{token}', name:'reset_pass')]
    public function resetPass(
        string $token,
        Request $request,
        UserRepository $usersRepository,
        EntityManagerInterface $entityManager,
        UserPasswordHasherInterface $passwordHasher
    ): Response
    {
        // On vérifie si on a ce token dans la base
        $user = $usersRepository->findOneByResetToken($token);

        if($user){
            $form = $this->createForm(ResetPasswordFormType::class);

            $form->handleRequest($request);

            if($form->isSubmitted() && $form->isValid()){
                // On efface le token
                $user->setResetToken('');
               
                $hashedPassword = hash('sha1',  $form->get('mdp')->getData());
                $user->setMdp(
                    $hashedPassword
                    
                );
                $entityManager->persist($user);
                $entityManager->flush();
                return $this->redirectToRoute('app_login');
            }

            return $this->render('security/reset_password.html.twig', [
                'passForm' => $form->createView()
            ]);
        }
        return $this->redirectToRoute('app_login');
    }

}

   


