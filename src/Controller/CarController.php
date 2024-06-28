<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class CarController extends AbstractController
{
    #[Route('/car', name: 'app_car')]
    public function index(): Response
    {
        $car = [
            'name' => 'Peugeot 3008',
            'prices' => 62000,
            'date' => strtotime('yesterday'),
            'img' => 'https://images.caradisiac.com/images/5/3/6/2/185362/S0-peugeot-3008-restyle-2020-nouvelle-gamme-les-prix-des-31-050-eur-642772.jpg'
        ];
        return $this->render('car/index.html.twig', ['car' => $car]);
    }
}
