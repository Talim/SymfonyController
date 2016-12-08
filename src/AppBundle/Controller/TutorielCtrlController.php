<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class TutorielCtrlController extends Controller
{
    /**
     * @Route("/hello")
     */
    public function helloAction()
    {
        return $this->render('AppBundle:TutorielCtrl:hello.html.twig', array(
            // ...
        ));
    }

}
