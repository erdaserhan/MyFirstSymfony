<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
// appel des réponses http en mode text
use Symfony\Component\HttpFoundation\Response;
# use Symfony\Component\Routing\Attribute\Route;

class FirstController extends AbstractController
{

    // création de la méthode pour notre page d'accueil
    public function index(): Response
    {
        return new Response("<html><body><h1>Homepage</h1>
<nav><a href='./'>Accueil</a> | <a href='./contact'>Contact</a> | <a href='./json' target='_blank'>json</a></nav></body></html>");
    }

    public function rami(): Response
    {
        return new Response("<html><body><h1>Contact</h1><nav><a href='./'>Accueil</a> | <a href='./contact'>Contact</a> | <a href='./json' target='_blank'>json</a></nav></body></html>");
    }

    // attributs devenus inutiles #[Route('/json', name: 'my_json')]
    public function myJson(): JsonResponse
    {
        return $this->json([
            'message' => 'Welcome to your new controller!',
            'path' => 'src/Controller/FirstController.php',
        ]);
    }
}
