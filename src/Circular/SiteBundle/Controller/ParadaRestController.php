<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Circular\SiteBundle\Controller;

use FOS\RestBundle\Controller\FOSRestController;
use FOS\RestBundle\View\View;

/**
 * Description of ParadaRest
 *
 * @author Almir
 */
class ParadaRestController extends FOSRestController {

    public function getDadosAction($hash, $data) {
        $em = $this->getDoctrine()->getManager();

        $crypto = new \Circular\SiteBundle\Entity\MCrypt();
        
        $hashDescriptografado = $crypto->decrypt($crypto->decrypt($hash));

        $data = $data == '-' ? '2000-01-01' : $data;

        if (null == $em->getRepository('CircularSiteBundle:APIToken')->validaToken($hashDescriptografado)) {
            $paradas = $em->getRepository('CircularSiteBundle:Parada')
                    ->listarTodosREST(null, $data);

            $view = View::create(
                            array(
                        "meta" => array(array("registros" => count($paradas), "status" => 200, "mensagem" => "ok")),
                        "paradas" => $paradas
                            ), 200, array('totalRegistros' => count($paradas)))->setTemplateVar("u");
            
            $em->getRepository('CircularSiteBundle:APIToken')->atualizaToken($hashDescriptografado);

            return $this->handleView($view);
        } else {
            $view = View::create(
                    array(
                        "meta" => array(array("registros" => 0, "status" => 403, "mensagem" => "Acesso negado."))
                    ),
                403, array('totalRegistros' => 0))->setTemplateVar("u");
//                ->setStatusCode(200)
//                ->setData($paises);


            return $this->handleView($view);
        }
    }
    
    public function setDadosAction($hash){
        
        $em = $this->getDoctrine()->getManager();

        $crypto = new \Circular\SiteBundle\Entity\MCrypt();
        
        $request = $this->getRequest();
        
        $hashDescriptografado = $crypto->decrypt($crypto->decrypt($hash));
        
    }

}
