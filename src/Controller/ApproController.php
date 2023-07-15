<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ApproController extends AbstractController
{
    #[Route('/appro', name: 'app_appro')]
    public function index(): Response
    {
        return $this->render('appro/index.html.twig', [
            'controller_name' => 'ApproController',
        ]);
    }
}
