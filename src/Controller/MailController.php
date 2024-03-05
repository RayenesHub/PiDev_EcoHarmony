<?php

namespace App\Controller;

use App\Repository\PlageRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;


class MailController extends AbstractController
{
    #[Route('/mail{id}', name: 'plage_mail')]
    public function Emailplage(MailerInterface $mailer, PlageRepository $rep, $id): Response
    {
       
        $plage=$rep->find($id);
        $htmlContent = '<table>';
         
            $htmlContent .= '<tr>';
            $htmlContent .= '<td><img src="' . $plage->getPic() . '"width="500" height="250" alt="Image Plage"></td>';
            $htmlContent .= '<td>' . $plage->getSurnom() . '</td>'; 
            $htmlContent .= '<td>' . $plage->getRegion() . '</td>';
            
            $htmlContent .= '</tr>';
        
        $htmlContent .= '</table>';
    
        
        $email = (new Email())
            ->from('rayeneksouri@gmail.com')
            ->to('snowkettzen@gmail.com')
            ->subject('TreeWell')
            ->html($htmlContent);
    
        
        $mailer->send($email);
        return $this->redirectToRoute('plageback_show');
         
    }

    
}
