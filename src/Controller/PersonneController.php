<?php

namespace App\Controller;

use App\Entity\Personne;
use App\Form\PersonneType;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/personne')]
class PersonneController extends AbstractController
{
    #[Route('/', name: 'personne_list')]
    public function index( ManagerRegistry $doctrine): Response
    {
        $repository = $doctrine ->getRepository(Personne::class);
        $personnes = $repository ->findAll();
        return $this -> render('/personne/index.html.twig', [
            'personnes' => $personnes
        ]);
    }
    #[Route('/add', name: 'add_personne')]
    public function addPersonne( ManagerRegistry $doctrine, Request $request): Response
    {
        $manager = $doctrine -> getManager();
        $personne = new Personne();
        // l'objet $personne est l'image de notre formulaire
        $form = $this -> createForm(PersonneType::class, $personne);
        // supprimer des champs
        //$form ->remove('nom du champ');

        // Le formulaire va traiter la requete
        $form -> handleRequest($request);

        // verifier si la requete a ete soumis
        if($form -> isSubmitted() /*&& $form -> isValid()*/){
            $manager = $doctrine -> getManager();
            // si oui
              //traiter le formulaire
            $manager -> persist($personne);
            //pousser vers la bdd
            $manager -> flush();
            // afficher un message de succes
            $this -> addFlash('success', "La personne a été ajouter avec success");
            // rediriger vers la liste de personne
            return $this->redirectToRoute('personne_list');
        }else{
            // si non
            // afficher le formulaire

            return $this->render('personne/add_personne.html.twig', [
                'form' => $form->createView()
            ]);
        }
    }

    #[Route('/{id<\d+>}', name: 'detail_personne')]
    public function detail( ManagerRegistry $doctrine, $id): Response
    {
        $repository = $doctrine ->getRepository(Personne::class);
        $personne = $repository ->find($id);
        if(!$personne){
            $this -> addFlash('erreur', "La personne d'id $id n'existe pas");
            return $this -> redirectToRoute('personne_list');
        }
        return $this -> render('/personne/details.html.twig', [
            'personne' => $personne
        ]);
    }

    // fonction pour effacer une personne
    #[Route('/delete/{id}', name: 'delete_personne')]
    public function deletePersonne( ManagerRegistry $doctrine, Personne $personne = null): RedirectResponse
    {
    // Recuprer la personne

    if($personne){
        // si la personne existe
        $manager = $doctrine -> getManager();
        // le supprimer et retourner un flash message
        // ajouter la transaction
        $manager -> remove($personne);
        // executer la transaction

        // retourner un message de$manager -> flush(); success
        $this -> addFlash('success', 'La personne a été supprimer avec succes');
    } else {
        //  si non retourner un flash message d'erreur
        $this -> addFlash('erreur', "La personne n'existe pas");
    }
    return $this -> redirectToRoute('personne_list');

    }
    // fonction pour mettre a jour une personne
    #[Route('/update/{id}/{name}/{firstname}/{age}', name: 'update_personne')]
    public function updatePersonne( ManagerRegistry $doctrine, Personne $personne = null, $name, $firstname, $age): RedirectResponse
    {
        // Recuprer la personne

        if($personne){
            // si la personne existe
            $personne -> setFirstname($firstname);
            $personne -> setName($name);
            $personne -> setAge($age);
            $manager = $doctrine -> getManager();
            // ajouter la transaction
            $manager -> persist($personne);
            // executer la transaction
            $manager -> flush();
            // retourner un message de success
            $this -> addFlash('success', 'La personne a été mis a jour avec succes');
        } else {
            //  si non retourner un flash message d'erreur
            $this -> addFlash('erreur', "La personne n'existe pas");
        }
        return $this -> redirectToRoute('personne_list');

    }

    // fonction de pagination pour afficher un nombre de personne donné
    #[Route('/all/{page?1}/{nbre?12}', name: 'all_personne')]
    public function all( ManagerRegistry $doctrine, $page, $nbre): Response
    {
        // recuperer la table personne de la bdd
        $repository = $doctrine ->getRepository(Personne::class);
        $personnes = $repository ->findBy(['age' => 26 ], [],$nbre,($page - 1 ) * $nbre);
        return $this -> render('/personne/index.html.twig', [
            'personnes' => $personnes
        ]);
    }
}
