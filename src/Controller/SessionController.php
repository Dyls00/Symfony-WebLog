<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class SessionController extends AbstractController
{
    #[Route('/session', name: 'app_session')]
    public function index(Request $request): Response
    {
        //obtenir une session
        $session = $request -> getSession();
        if( $session -> has('nbVisite')){
            $nbreVisite = $session -> get('nbVisite') +1;
            $session->set('nbVisite',$nbreVisite);
        } else {
            $nbreVisite = 1;

        }

        $session->set('nbVisite',$nbreVisite);
        return $this->render('session/index.html.twig', [
            'controller_name' => 'SessionController',
        ]);
    }
}
