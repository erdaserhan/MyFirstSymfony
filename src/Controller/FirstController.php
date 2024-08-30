<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
//
use Symfony\Component\HttpFoundation\Response;
# use Symfony\Component\Routing\Attribute\Route;

class FirstController extends AbstractController
{

    //Création de la méthode 
    public function index(): Response
    {
        return new Response("<html>");
    }


    
    //#[Route('/json', name: 'app_first')]
    public function myJson(): JsonResponse
    {
        return $this->json([
            'message' => 'Welcome to your new controller!',
            'path' => 'src/Controller/FirstController.php',
        ]);
    }
}
