<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Contracts\HttpClient\HttpClientInterface;
use Symfony\Component\Routing\Attribute\Route;

class GotController extends AbstractController
{
    private $client;
    public function __construct(HttpClientInterface $client)
    {
        $this->client = $client;
    }
    #[Route('/got', name: 'app_got')]
    public function index(): Response
    {
        $response = $this->client->request(
            'GET',
            'https://thronesapi.com/api/v2/Characters/10'
        );
        // Récupérer le contenu de la réponse
        $content = $response->toArray();
        $wikipedia = $content['firstName']."_".$content['lastName'];
        //dd($content);
        return $this->render('got/index.html.twig', [
            'controller_name' => 'GotController',
            'character' => $content,
            'fiche_perso' => $wikipedia,
        ]);
        
        
        
    }
    
}
