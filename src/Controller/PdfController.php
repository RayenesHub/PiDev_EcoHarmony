<?php

namespace App\Controller;
use Dompdf\Dompdf;
use Dompdf\Options;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;

use App\Repository\AnimalRepository;
use App\Repository\CommentRepository;
use App\Controller\AnimalController;
use App\Entity\Animal;
use App\Form\AnimalType;
use Doctrine\Persistence\ManagerRegistry;



class PdfController extends AbstractController
{
    #[Route('/pdf', name: 'app_pdf')]
    public function index(): Response
    {
        return $this->render('pdf/index.html.twig', [
            'controller_name' => 'PdfController',
        ]);
    }

    #[Route('/pdfgenrate', name: 'app_pdfgenerate')]
    public function generatePdf(AnimalRepository $animalRepository): Response
    {
        // Create a new Dompdf instance
        $dompdf = new Dompdf();
        $animal=$animalRepository->findAll();

        // Render HTML content
        $html = $this->renderView('pdf/indexpdf.html.twig', [
            'animal' => $animal,

        ]);
        $css = file_get_contents('css/styles.css');
        // Load HTML to Dompdf
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
}
