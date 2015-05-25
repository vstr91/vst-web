<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Circular\SiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * Description of ItinerarioRestController
 *
 * @author Almir
 */
class ItinerarioRestController extends Controller {
    
    public function getItinerariosAction() {
        $em = $this->getDoctrine()->getManager();
        
        $itinerarios = $em->getRepository('CircularSiteBundle:Itinerario')
                ->listarTodosREST(null);
        return $itinerarios;
    }
    
}
