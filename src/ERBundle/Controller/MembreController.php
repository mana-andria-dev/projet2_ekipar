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
	    $message = ['status'=>'wxx', 'text'=>'fff'];

	    // On ajoute les champs de l'entité que l'on veut à notre formulaire
	    $formBuilder
	      ->add('nom',      	TextType::class)
	      ->add('prenom',   	TextType::class)
	      ->add('fonction',   	TextType::class)
	      ->add('cin',   		TextType::class)
	      ->add('telephone',   	TextType::class)
	    ;
	    // Pour l'instant, pas de candidatures, catégories, etc., on les gérera plus tard

	    // À partir du formBuilder, on génère le formulaire
	    $form = $formBuilder->getForm();

	    // Si la requête est en POST
	    if ($request->isMethod('POST')) {
	    	$cin = $request->request->get('form')['cin'];
		    $repository = $this->getDoctrine()
		      ->getManager()
		      ->getRepository('ERBundle:Membre')
		    ;	    	
			$CinTrouve = $repository->findByCin($cin);

			if ( !empty($CinTrouve) ) {
				$message = ['status'=>'erreur', 'text'=>'Le CIN ' . $cin . ' est déjà dans la base de donnée.'];
				// On redirige vers la page de visualisation de l'annonce nouvellement créée
				return $this->render(
					'ERBundle:Membre:ajouter.html.twig',
					array(
						'form' 		=> $form->createView(),
						'message' 	=> $message
					)
				);
			}

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

				$message = ['status'=>'succes', 'text'=>'Un membre a été bien enregisté'];
				// On redirige vers la page de visualisation de l'annonce nouvellement créée
				return $this->render(
					'ERBundle:Membre:ajouter.html.twig',
					array(
						'form' 		=> $form->createView(),
						'message' 	=> $message
					)
				);
			}
	    }


	    // On passe la méthode createView() du formulaire à la vue
	    // afin qu'elle puisse afficher le formulaire toute seule
	    return $this->render(
    		'ERBundle:Membre:ajouter.html.twig',
    		array(
        		'id' 		=> $Membre->getId(),
        		'form' 		=> $form->createView(),
        		'message' 	=> $message
        	)
	    );
    }

    public function chercherAction($page) {
    	//composer require knplabs/knp-paginator-bundle
		$em = $this->getDoctrine()->getManager();

		$TotalMembres = $em->getRepository('ERBundle:Membre')->findAll();
		$TotalMembres = count($TotalMembres);

		$listeMembres = $em->getRepository('ERBundle:Membre')->findAll();
		$Membres  = $this->get('knp_paginator')->paginate(
			$listeMembres,
			$page /*le numéro de la page à afficher*/,
			6 /*nbre d'éléments par page*/
		);

	    if (null === $Membres) {
	      throw new NotFoundHttpException("Aucun membre pour l'instant");
	    }	    

	    // Le render ne change pas, on passait avant un tableau, maintenant un objet
	    return $this->render('ERBundle:Membre:chercher.html.twig', array(
	      'Membres' => $Membres,
	      'TotalMembres' => $TotalMembres
	    ));
    }

    public function adminAction() {
	    return $this->render('ERBundle:Membre:admin.html.twig');    	
    }

    public function supprimerAction(Request $request) {
        $em = $this->get('doctrine.orm.entity_manager');
        $Membre = $em->getRepository('ERBundle:Membre')
                    ->find($request->get('id'));

        if ($Membre) {
            $em->remove($Membre);
            $em->flush();
        }    	
	    return $this->redirectToRoute('er_cherche');
	    // return $this->redirectToRoute('cherche', array('id' => $advert->getId()));
    }    
}
