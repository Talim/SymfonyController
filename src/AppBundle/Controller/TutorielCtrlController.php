<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

class TutorielCtrlController extends Controller
{
    /**
     * @Route(
     *      path="/hello/{nom}",
     *      name="TutorielCtrl_hello",
     *      defaults={"nom":"inconnu"},
     *      requirements={"nom" : "[A-Za-z]+"}
     *
     * )
     */
    public function helloAction($nom)
    {
        $page = "<html><body><h1>Bonjour ". $nom ."</h1></body></html>";
        return new Response($page);
    }

}
