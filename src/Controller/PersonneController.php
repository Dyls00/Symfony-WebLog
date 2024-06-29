<?php

namespace App\Controller;

use App\Entity\Personne;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/personne', name: 'default_personne')]
class PersonneController extends AbstractController
{
    #[Route('/', name: 'app_personne')]
    public function index( ManagerRegistry $doctrine): Response
    {
        $repository = $doctrine ->getRepository(Personne::class);
        $personnes = $repository ->findAll();
        return $this -> render('/personne/index.html.twig', [
            'personnes' => $personnes
        ]);
    }
    #[Route('/add', name: 'add_personne')]
    public function addPersonne( ManagerRegistry $doctrine): Response
    {
        $entityManager = $doctrine->getManager();
       /* $personne = new Personne();
        $personne -> setFirstname('johane');
        $personne -> setName('dyls');
        $personne -> setAge(26);
        
        $personne2 = new Personne();
        $personne2 -> setFirstname('kieffer');
        $personne2 -> setName('dyls');
        $personne2 -> setAge(28);

        // Ajouter l'operation d'insertion de la personne
        $entityManager -> persist($personne);
        $entityManager -> persist($personne2);

        // executer l'operation
        $entityManager -> flush();*/
        return $this->render('personne/details.html.twig', [
            /*'personne' => $personne,*/
        ]);
    }
}
