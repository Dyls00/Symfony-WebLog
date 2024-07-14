<?php

namespace App\Controller;

use App\Entity\Personne;
use App\Entity\Unite;
use App\Form\UniteType;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class UniteController extends AbstractController
{
    #[Route('/unite', name: 'app_unite')]
    public function index( ManagerRegistry $doctrine): Response
    {
        $repository = $doctrine ->getRepository(Unite::class);
        $unites = $repository ->findAll();
        return $this -> render('/unite/index.html.twig', [
            'unites' => $unites
        ]);
    }


    #[Route('/unite/add', name: 'add_unite')]
    public function addPersonne( ManagerRegistry $doctrine, Request $request): Response
    {
        $manager = $doctrine -> getManager();
        $unite = new Unite();
        // l'objet $personne est l'image de notre formulaire
        $form = $this -> createForm(UniteType::class, $unite);
        // supprimer des champs
        //$form ->remove('nom du champ');

        // Le formulaire va traiter la requete
        $form -> handleRequest($request);

        // verifier si la requete a ete soumis
        if($form -> isSubmitted() /*&& $form -> isValid()*/){
            $manager = $doctrine -> getManager();
            // si oui
            //traiter le formulaire
            $manager -> persist($unite);
            //pousser vers la bdd
            $manager -> flush();
            // afficher un message de succes
            $this -> addFlash('success', "L'unite a été ajouter avec success");
            // rediriger vers la liste de personne
            return $this->redirectToRoute('app_unite');
        }else{
            // si non
            // afficher le formulaire

            return $this->render('unite/add-unite.html.twig', [
                'form' => $form->createView()
            ]);
        }
    }
}
