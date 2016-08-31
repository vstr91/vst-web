<?php

namespace Vostre\LocalBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('VostreLocalBundle:Default:index.html.twig', array('name' => $name));
    }
}
