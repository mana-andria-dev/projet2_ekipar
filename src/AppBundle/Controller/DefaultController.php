<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..').DIRECTORY_SEPARATOR,
        ]);
    }

    /**
     * @Route("/user/home", name="homepage_user")
     */
    public function userAction(Request $request)
    {
        
        return $this->render('role/user.html.twig');
    }

    /**
     * @Route("/admin/home", name="homepage_admin")
     */
    public function adminAction(Request $request)
    {
       //  $user= $this->getUser()->setEmail('mayah@shasama.com');
       
        return $this->render('role/admin.html.twig');
    }
}   
