<?php

namespace App\Controller;

use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;


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
   

}
