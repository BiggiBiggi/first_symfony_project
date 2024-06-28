<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class GOTController extends AbstractController
{
    #[Route('/got', name: 'app_got')]
    public function index(): Response
    {
        return $this->render('got/index.html.twig', [
            'controller_name' => 'GOTController',
        ]);
    }
}
