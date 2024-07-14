<?php

namespace App\Controller;

use App\Entity\Personne;
use App\Entity\Unite;
use App\Form\PersonneType;
use App\Form\UniteType;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class DashbordController extends AbstractController
{
    #[Route('/', name: 'app_dashbord')]
    public function index(): Response
    {
        return $this->render('dashbord/index.html.twig', [
            'controller_name' => 'DashbordController',
        ]);
    }
}
