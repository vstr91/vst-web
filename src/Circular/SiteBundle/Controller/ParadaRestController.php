<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Circular\SiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * Description of ParadaRest
 *
 * @author Almir
 */
class ParadaRestController extends Controller {
    
    public function getParadasAction() {
        $em = $this->getDoctrine()->getManager();
        
        $paradas = $em->getRepository('CircularSiteBundle:Parada')
                ->listarTodosREST(null);
        return $paradas;
    }
    
}
