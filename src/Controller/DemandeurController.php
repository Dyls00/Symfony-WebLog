<?php

namespace App\Controller;

use App\Entity\Demandeur;
use App\Form\DemandeurType;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/demandeur')]
class DemandeurController extends AbstractController
{
    private $passwordHasher;

    public function __construct(UserPasswordHasherInterface $passwordHasher)
    {
        $this->passwordHasher = $passwordHasher;
    }

    #[Route('/index', name: 'demandeur_list')]
    public function index( ManagerRegistry $doctrine): Response
    {
        $repository = $doctrine ->getRepository(Demandeur::class);
        $demandeurs = $repository ->findAll();
        return $this -> render('/demandeur/index.html.twig', [
            'demandeurs' => $demandeurs
        ]);
    }
    #[Route('/add', name: 'add_demandeur')]
    public function adddemandeur( ManagerRegistry $doctrine, Request $request): Response
    {
        $manager = $doctrine -> getManager();
        $demandeur = new demandeur();
        // l'objet $demandeur est l'image de notre formulaire
        $form = $this -> createForm(DemandeurType::class, $demandeur);
        // supprimer des champs
        //$form ->remove('nom du champ');

        // Le formulaire va traiter la requete
        $form -> handleRequest($request);

        // verifier si la requete a ete soumis
        if($form -> isSubmitted() /*&& $form -> isValid()*/){
            $nom = $demandeur->getNom();
            $prenom = $demandeur->getPrenom();

            // Vérifier si le demandeur existe déjà
            $existingDemandeur = $doctrine->getRepository(Demandeur::class)->findOneByNomPrenom($nom, $prenom);

            if ($existingDemandeur) {
                $this->addFlash('error', 'Un demandeur avec le même nom et prénom existe déjà.');
            } else {
                // Hacher le mot de passe
                $hashedPassword = $this->passwordHasher->hashPassword(
                    $demandeur,
                    $demandeur->getPassword()
                );
                // Hacher le mot de passe
                $hashedPassword = $this->passwordHasher->hashPassword(
                    $demandeur,
                    $demandeur->getPassword()
                );
                $demandeur->setPassword($hashedPassword);
                $manager = $doctrine->getManager();
                // si oui
                //traiter le formulaire
                $manager->persist($demandeur);
                //pousser vers la bdd
                $manager->flush();
                // afficher un message de succes
                $this->addFlash('success', "La demandeur a été ajouter avec success");
                // rediriger vers la liste de demandeur
            }
                return $this->redirectToRoute('all_demandeur');
        }else{
            // si non
            // afficher le formulaire

            return $this->render('demandeur/add_demandeur.html.twig', [
                'form' => $form->createView()
            ]);
        }
    }

    #[Route('/{id<\d+>}', name: 'detail_demandeur')]
    public function detail( ManagerRegistry $doctrine, $id): Response
    {
        $repository = $doctrine ->getRepository(demandeur::class);
        $demandeur = $repository ->find($id);
        if(!$demandeur){
            $this -> addFlash('erreur', "La demandeur d'id $id n'existe pas");
            return $this -> redirectToRoute('demandeur_list');
        }
        return $this -> render('/demandeur/details.html.twig', [
            'demandeur' => $demandeur
        ]);
    }

    // fonction pour effacer une demandeur
    #[Route('/delete/{id}', name: 'delete_demandeur')]
    public function deletedemandeur( ManagerRegistry $doctrine, demandeur $demandeur = null):Response
    {
        // Recuprer la demandeur

        if($demandeur){
            // si la demandeur existe
            $manager = $doctrine -> getManager();
            // le supprimer et retourner un flash message
            // ajouter la transaction
            $manager -> remove($demandeur);
            // executer la transaction

            // retourner un message de$manager -> flush(); success
            $this -> addFlash('success', 'La demandeur a été supprimer avec succes');
        } else {
            //  si non retourner un flash message d'erreur
            $this -> addFlash('erreur', "La demandeur n'existe pas");
        }
        return $this -> redirectToRoute('demandeur_list');

    }
    // fonction pour mettre a jour une demandeur
    #[Route('/update/{id?0}', name: 'update_demandeur')]
    public function updatedemandeur( ManagerRegistry $doctrine, demandeur $demandeur = null, Request $request): Response
    {
        // si la demandeur n'existe pas
        if(!$demandeur){
            $demandeur = new demandeur();
        } else {
            // si non
            // recuperer

            $manager = $doctrine -> getManager();
            // l'objet $demandeur est l'image de notre formulaire
            $form = $this -> createForm(demandeurType::class, $demandeur);
            // supprimer des champs
            //$form ->remove('nom du champ');

            // Le formulaire va traiter la requete
            $form -> handleRequest($request);

            // verifier si la requete a ete soumis
            if($form -> isSubmitted() /*&& $form -> isValid()*/){
                $manager = $doctrine -> getManager();
                // si oui
                //traiter le formulaire
                $manager -> persist($demandeur);
                //pousser vers la bdd
                $manager -> flush();
                // afficher un message de succes
                $this -> addFlash('success', "La demandeur a été ajouter avec success");
                // rediriger vers la liste de demandeur
                return $this->redirectToRoute('demandeur_list');
            }else {
                // si non
                // afficher le formulaire

                return $this->render('demandeur/add_demandeur.html.twig', [
                    'form' => $form->createView()
                ]);
            }
        }

    }

    // fonction de pagination pour afficher un nombre de demandeur donné
    #[Route('/all/{page?1}/{nbre?5}', name: 'all_demandeur')]
    public function all( ManagerRegistry $doctrine, $page, $nbre): Response
    {
        // recuperer la table demandeur de la bdd
        $repository = $doctrine ->getRepository(demandeur::class);
        $nbdemandeur = $repository->count([]);
        $nbrePage = ceil($nbdemandeur / $nbre);
        $demandeurs = $repository ->findBy([], [],$nbre,($page - 1 ) * $nbre);
        return $this -> render('/demandeur/index.html.twig', [
            'demandeurs' => $demandeurs,
            'isPaginated' => true,
            'nbrePage' => $nbrePage,
            'page' => $page,
            'nbre' => $nbre,
        ]);
    }
}
