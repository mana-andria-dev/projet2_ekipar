<?php

namespace ERBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use ERBundle\Entity\Form;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\FormType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Request;


class DefaultController extends Controller {

    public function indexAction() {
        return $this->render('ERBundle:Default:index.html.twig');
    }

    public function addAction(Request $request) {
		$formulaire = new Form();

	    // On crée le FormBuilder grâce au service form factory
	    $formBuilder = $this->get('form.factory')->createBuilder(FormType::class, $formulaire);

	    // On ajoute les champs de l'entité que l'on veut à notre formulaire
	    $formBuilder
	      ->add('nom',      TextType::class)
	      ->add('prenom',   TextType::class)
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
	        // On enregistre notre objet $formulaire dans la base de données, par exemple
	        $em = $this->getDoctrine()->getManager();
	        $em->persist($formulaire);
	        $em->flush();

	        $request->getSession()->getFlashBag()->add('notice', 'Annonce bien enregistrée.');

	        // On redirige vers la page de visualisation de l'annonce nouvellement créée
	        //return $this->redirectToRoute('oc_platform_view', array('id' => $formulaire->getId()));
	      }
	    }


	    // On passe la méthode createView() du formulaire à la vue
	    // afin qu'elle puisse afficher le formulaire toute seule
	    return $this->render('ERBundle:Default:add.html.twig', array(
	      'form' => $form->createView(),
	    ));
    }
}
