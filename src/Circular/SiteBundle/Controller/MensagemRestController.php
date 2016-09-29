<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Circular\SiteBundle\Controller;

use Circular\SiteBundle\Entity\MCrypt;
use FOS\RestBundle\Controller\FOSRestController;
use FOS\RestBundle\View\View;

/**
 * Description of MensagemRestController
 *
 * @author Almir
 */
class MensagemRestController extends FOSRestController {
    
    public function getDadosAction($hash, $data) {
        $em = $this->getDoctrine()->getManager();

        $crypto = new MCrypt();
        
        $hashDescriptografado = $crypto->decrypt($crypto->decrypt($hash));

        $data = $data == '-' ? '2000-01-01' : $data;

        if (null != $em->getRepository('CircularSiteBundle:APIToken')->validaToken($hashDescriptografado)) {
            $mensagens = $em->getRepository('CircularSiteBundle:Mensagem')
                    ->listarTodosREST(null, $data);

            $view = View::create(
                            array(
                        "meta" => array(array("registros" => count($mensagens), "status" => 200, "mensagem" => "ok")),
                        "mensagens" => $mensagens
                            ), 200, array('totalRegistros' => count($mensagens)))->setTemplateVar("u");
            
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
    
}
