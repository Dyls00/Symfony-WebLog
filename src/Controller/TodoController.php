<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/todo')]
class TodoController extends AbstractController
{
    #[Route('/', name: 'app_to_do')]
    public function index(Request $request): Response
    {
        //obtenir une session
        $session = $request -> getSession();

        // si le tableau existe dans la session juste afficher si non initialiser et afficher
        if(!$session -> has('todos'))
        {
            $todos = [
                'achat' =>'acheter clé usb',
                'cours' => 'Finaliser mon cours',
                'correction'=>'corriger mes examens '
            ];
            $session->set('todos',$todos);
            $this -> addFlash('infos', "La liste des todos vient d'etre actualiser");
        }
        return $this->render('todo/index.html.twig');
    }
    #[Route('/add/{name}/{content}',
        name: 'add_to_do',
    )]
    public function addTodo(Request $request, $name, $content): RedirectResponse
    {
        $session = $request -> getSession();
        // verifier s'il ya le tableau de todo dans la session
        if($session -> has('todos')){
            // si oui
            // si on a deja un todo avec le meme name
            $todos = $session -> get('todos');
            if(isset($todos[$name])){
                // si oui afficher une erreur
                $this -> addFlash('info', "Le todo d'id $name existe déja");
            } else {
                // si non ajouter et afficher succes
                $todos[$name] = $content;
                $this -> addFlash('success', "Le todo d'id $name a été ajouter");
                $session -> set('todos',$todos);
            }

        } else {
            // si non
            // afficher une erreur et rediriger vers le controlleur index
            $this -> addFlash('erreur', "La liste des todos n'est pas initialiser");
        }
        return $this-> redirectToRoute('app_to_do');
    }

    #[Route('/update/{name}/{content}', name: 'update_to_do')]
    public function UpdateTodo(Request $request, $name, $content): RedirectResponse
    {
        $session = $request -> getSession();
        // verifier s'il ya le tableau de todo dans la session
        if($session -> has('todos')){
            // si oui
            // si on a pas un todo avec le meme name
            $todos = $session -> get('todos');
            if(!isset($todos[$name])){
                // si non afficher une erreur
                $this -> addFlash('erreur', "Le todo d'id $name n'existe pas");
            } else {
                // si non ajouter et afficher succes
                $todos[$name] = $content;
                $this -> addFlash('success', "Le todo d'id $name a été mis a jour");
                $session -> set('todos',$todos);
            }

        } else {
            // si non
            // afficher une erreur et rediriger vers le controlleur index
            $this -> addFlash('erreur', "La liste des todos n'est pas initialiser");
        }
        return $this-> redirectToRoute('app_to_do');
    }

    #[Route('/delete/{name}', name: 'delete_to_do')]
    public function deleteTodo(Request $request, $name): RedirectResponse
    {
        $session = $request -> getSession();
        // verifier s'il ya le tableau de todo dans la session
        if($session -> has('todos')){
            // si oui
            // si on a pas un todo avec le meme name
            $todos = $session -> get('todos');
            if(!isset($todos[$name])){
                // si non afficher une erreur
                $this -> addFlash('erreur', "Le todo d'id $name n'existe pas");
            } else {
                // si non ajouter et afficher succes
                unset($todos[$name]);
                $session -> set('todos',$todos);
                $this -> addFlash('success', "Le todo d'id $name a été supprimer");
            }

        } else {
            // si non
            // afficher une erreur et rediriger vers le controlleur index
            $this -> addFlash('erreur', "La liste des todos n'est pas initialiser");
        }
        return $this-> redirectToRoute('app_to_do');
    }

    #[Route('/reset', name: 'reset_to_do')]
    public function resetTodo(Request $request): RedirectResponse
    {
        $session = $request -> getSession();
        // supprimer toute la liste todo
        $session -> remove('todos');
        // afficher un flash message
        $this -> addFlash('success', "Votre liste de todo a été réinitialiser");
        return $this-> redirectToRoute('app_to_do');
    }
}
