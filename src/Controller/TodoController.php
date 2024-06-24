<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class TodoController extends AbstractController
{
    #[Route('/todo', name: 'app_to_do')]
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
        }
        return $this->render('todo/index.html.twig');
    }
    #[Route('/todo/{name}/{content}', name: 'add_to_do')]
    public function AddTodo(Request $request, $name, $content): Response
    {
        // verifier s'il ya le tableau de todo dans la session
    }
}
