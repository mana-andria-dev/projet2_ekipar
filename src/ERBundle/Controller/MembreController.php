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
use Symfony\Component\HttpFoundation\ResponseHeaderBag;

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

    public function chercherAction($page, $trie, $ordre) {
    	$critere = [$trie=>$ordre];
    	//composer require knplabs/knp-paginator-bundle
    	//https://github.com/liuggio/ExcelBundle
		$em = $this->getDoctrine()->getManager();

		$TotalMembres = $em->getRepository('ERBundle:Membre')->findAll();
		$dataSearch = [];
		foreach ($TotalMembres as $key => $value) {
			$dataSearch[] = $value->getNom() . ' ' . $value->getPrenom();
		}

		$TotalMembres = count($TotalMembres);

		$listeMembres = $em->getRepository('ERBundle:Membre')->findBy(array(), $critere);
		
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
	      'Membres' 		=> $Membres,
	      'dataSearch' 		=> $dataSearch,
	      'TotalMembres' 	=> $TotalMembres
	    ));
    }

	public function modifierAction($id, Request $request) {
		$em = $this->getDoctrine()->getManager();

		$membre = $em->getRepository('ERBundle:Membre')->find($id);
		$message = ['status'=>'', 'text'=>''];

		if (null === $membre) {
		  throw new NotFoundHttpException("Membre introubale.");
		}

	    $formBuilder = $this->get('form.factory')->createBuilder(FormType::class, $membre);
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

		if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()) {
		  	$em->flush();
		  	$message = ['status'=>'succes', 'text'=>'Un membre a été modifié avec succès'];
		  //return $this->redirectToRoute('oc_platform_view', array('id' => $advert->getId()));
		}

		return $this->render('ERBundle:Membre:edit.html.twig', array(
		  'membre' => $membre,
		  'form'   => $form->createView(),
		  'message'=> $message
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

    public function exportexcelAction() {
        // ask the service for a Excel5
       $phpExcelObject = $this->get('phpexcel')->createPHPExcelObject();

       $phpExcelObject->getProperties()->setCreator("liuggio")
           ->setLastModifiedBy("Ekipar")
           ->setTitle("Liste des membres")
           ->setSubject("Liste des membres")
           ->setDescription("Liste des membres")
           ->setKeywords("office 2005 openxml php")
           ->setCategory("Liste des membres");

		$em = $this->getDoctrine()->getManager();

		$listeMembres = $em->getRepository('ERBundle:Membre')->findBy(
			array(), array('id' => 'DESC')
		);

    	$celA = 'A1';
    	$celB = 'B1';
    	$celC = 'C1';
       	$phpExcelObject->setActiveSheetIndex(0)
           ->setCellValue($celA, 'NOM')
           ->setCellValue($celB, 'PRENOM')
           ->setCellValue($celC, 'FONCTION');	

		$phpExcelObject
			->getActiveSheet()
			->getStyle('A1:A1')
			->applyFromArray(
				array(
					'font' => array(
						'size' => 18,
						'bold' => true,
						'color' => array('rgb' => '0000ff')
					)
				)
			);	

		$phpExcelObject
			->getActiveSheet()
			->getStyle('B1:B1')
			->applyFromArray(
				array(
					'font' => array(
						'size' => 18,
						'bold' => true,
						'color' => array('rgb' => '0000ff')
					)
				)
			);	

		$phpExcelObject
			->getActiveSheet()
			->getStyle('C1:C1')
			->applyFromArray(
				array(
					'font' => array(
						'size' => 18,
						'bold' => true,
						'color' => array('rgb' => '0000ff')
					)
				)
			);           


		foreach ($listeMembres as $key => $value) {
			$keyCellule = $key + 2;
			$dataSearch[] = $value->getNom() . ' ' . $value->getPrenom();
        	$celA = 'A' . $keyCellule;
        	$celB = 'B' . $keyCellule;
        	$celC = 'C' . $keyCellule;
	       	$phpExcelObject->setActiveSheetIndex(0)
	           ->setCellValue($celA, $value->getNom())
	           ->setCellValue($celB, $value->getPrenom())			
	           ->setCellValue($celC, $value->getFonction());
		}          


       $phpExcelObject->getActiveSheet()->setTitle('Simple');
       // Set active sheet index to the first sheet, so Excel opens this as the first sheet
       $phpExcelObject->setActiveSheetIndex(0);

        // create the writer
        $writer = $this->get('phpexcel')->createWriter($phpExcelObject, 'Excel5');
        // create the response
        $response = $this->get('phpexcel')->createStreamedResponse($writer);
        // adding headers
        $dispositionHeader = $response->headers->makeDisposition(
            ResponseHeaderBag::DISPOSITION_ATTACHMENT,
            'Listes_des_membres.xls'
        );
        $response->headers->set('Content-Type', 'text/vnd.ms-excel; charset=utf-8');
        $response->headers->set('Pragma', 'public');
        $response->headers->set('Cache-Control', 'maxage=1');
        $response->headers->set('Content-Disposition', $dispositionHeader);

        return $response;        
    }

}
