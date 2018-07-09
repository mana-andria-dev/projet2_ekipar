<?php

namespace ERBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use ERBundle\Entity\Membre;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\FormType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Request;


class MembreController extends Controller {

    public function ajouterAction(Request $request) {
		$Membre = new Membre();

	    // On crée le FormBuilder grâce au service form factory
	    $formBuilder = $this->get('form.factory')->createBuilder(FormType::class, $Membre);

	    // On ajoute les champs de l'entité que l'on veut à notre formulaire
	    $formBuilder
	      ->add('nom',      TextType::class)
	      ->add('prenom',   TextType::class)
	      ->add('fonction',   TextType::class)
	    ;
	    // Pour l'instant, pas de candidatures, catégories, etc., on les gérera plus tard

	    // À partir du formBuilder, on génère le formulaire
	    $form = $formBuilder->getForm();

	    // Si la requête est en POST
	    if ($request->isMethod('POST')) {
	      // On fait le lien Requête <-> Formulaire
	      // À partir de maintenant, la variable $formulaire contient les valeurs entrées dans le formulaire par le visiteur
	      $form->handleRequest($request);

	      // On vérifie que les valeurs entrées sont correctes
	      // (Nous verrons la validation des objets en détail dans le prochain chapitre)
	      if ($form->isValid()) {
	        // On enregistre notre objet $formulaire dans la base de données
	        $em = $this->getDoctrine()->getManager();
	        $em->persist($Membre);
	        $em->flush();

	        $request->getSession()->getFlashBag()->add('notice', 'Annonce bien enregistrée.');

	        // On redirige vers la page de visualisation de l'annonce nouvellement créée
	        return $this->redirectToRoute(
	        	'er_ajout', 
	        	array(
	        		'id' => $Membre->getId(),
	        		'form' => $form->createView()
	        	)
	        );
	      }
	    }


	    // On passe la méthode createView() du formulaire à la vue
	    // afin qu'elle puisse afficher le formulaire toute seule
	    return $this->render('ERBundle:Membre:ajouter.html.twig', array(
	      'form' => $form->createView(),
	    ));
    }

    public function chercherAction(Request $request) {

	    // On récupère le repository
	    $repository = $this->getDoctrine()
	      ->getManager()
	      ->getRepository('ERBundle:Membre')
	    ;

	    $TotalMembres = 0;
	    $Membres = $repository->findAll('Tojoniaina');

		if ($request->isMethod('POST')) {
	    	$Membres = $repository->findByPrenom($request->request->get('rechercher'));
		}

	    if (null === $Membres) {
	      throw new NotFoundHttpException("Aucun membre pour l'instant");
	    }

	    $TotalMembres = count($Membres);

	    // Le render ne change pas, on passait avant un tableau, maintenant un objet
	    return $this->render('ERBundle:Membre:chercher.html.twig', array(
	      'Membres' => $Membres,
	      'TotalMembres' => $TotalMembres
	    ));
    }

    public function adminAction() {
	    return $this->render('ERBundle:Membre:admin.html.twig');    	
    }
}
