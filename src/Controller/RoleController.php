<?php

namespace App\Controller;

use App\Entity\Role;
use App\Form\RoleType;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
#[Route('/role')]
class RoleController extends AbstractController
{
    #[Route('/index', name: 'app_role')]
    public function index(ManagerRegistry $doctrine, Role $role = null): Response
    {
        $repository = $doctrine -> getRepository(Role::class);
        $roles = $repository -> findAll();
        return $this->render('role/index.html.twig', [
            'roles' => $roles,
        ]);
    }

    #[Route('/add', name: 'add_role')]
    public function addRole(ManagerRegistry $doctrine, Role $role = null): Response
    {
        // recuperer les entités
        $manager = $doctrine -> getManager();
        // creer un role
        $role = new Role();
        //creer un formulaire
        $form = $this -> createForm(RoleType::class, $role);
        return $this->render('role/add_role.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
