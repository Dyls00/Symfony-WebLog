// src/Controller/PersonneController.php

namespace App\Controller;

use App\Entity\Personne;
use App\Form\PersonneStep1Type;
use App\Form\PersonneStep2Type;
use App\Form\PersonneStep3Type;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Session\SessionInterface;

class PersonneController extends AbstractController
{
    #[Route('/personne/new/{step}', name: 'personne_new', requirements: ['step' => '\d+'])]
    public function new(Request $request, ManagerRegistry $doctrine, SessionInterface $session, int $step = 1): Response
    {
        // Initialiser ou récupérer l'objet Personne depuis la session
        $personne = $session->get('personne', new Personne());

        // Déterminer le formulaire actuel en fonction de l'étape
        switch ($step) {
            case 1:
                $form = $this->createForm(PersonneStep1Type::class, $personne);
                break;
            case 2:
                $form = $this->createForm(PersonneStep2Type::class, $personne);
                break;
            case 3:
                $form = $this->createForm(PersonneStep3Type::class, $personne);
                break;
            default:
                throw $this->createNotFoundException('Étape non valide');
        }

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Stocker l'objet Personne dans la session
            $session->set('personne', $personne);

            if ($step < 3) {
                // Passer à l'étape suivante
                return $this->redirectToRoute('personne_new', ['step' => $step + 1]);
            } else {
                // Persist et flush les données en base de données
                $em = $doctrine->getManager();
                $em->persist($personne);
                $em->flush();

                // Supprimer l'objet Personne de la session
                $session->remove('personne');

                $this->addFlash('success', 'Personne créée avec succès!');

                return $this->redirectToRoute('home'); // Rediriger vers une autre page après la soumission finale
            }
        }

        return $this->render('personne/new.html.twig', [
            'form' => $form->createView(),
            'step' => $step,
        ]);
    }
}