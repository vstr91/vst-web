<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Circular\SiteBundle\Controller;

use Circular\SiteBundle\Entity\APIToken;
use Circular\SiteBundle\Entity\MCrypt;
use FOS\RestBundle\Controller\FOSRestController;
use Symfony\Component\HttpFoundation\Response;
use FOS\RestBundle\View\View;

/**
 * Description of CircularRestController
 *
 * @author Almir
 */
class CircularRestController extends FOSRestController {
    
    public function getTokenAction(){
        $crypt = new MCrypt();
        $apiToken = new APIToken();
        $em = $this->getDoctrine()->getManager();
        
        $request = $this->getRequest();
        
        $identificadorUnico = $request->get("id");
        $tipo = $request->get("tipo");
        
        if($identificadorUnico != null){
            $identificadorUnico = $crypt->decrypt($identificadorUnico);
        } else{
            $identificadorUnico = "";
        }
        
        $tipo = $tipo != null ? $tipo : "";
        
        $puroTexto = $crypt->geraChaveAcessoAPI(10);
        
        $apiToken->setPuroTexto($puroTexto);
        $apiToken->setIdentificadorUnico($identificadorUnico);
        $apiToken->setTipo($tipo);
        
        $token = $crypt->encrypt($puroTexto);
        
        $em->persist($apiToken);
        $em->flush();
        
        return new Response($token);
    }
    
    public function getDadosAction($hash, $data) {
        $em = $this->getDoctrine()->getManager();
        
        $crypto = new \Circular\SiteBundle\Entity\MCrypt();
        
        $hashDescriptografado = $crypto->decrypt($crypto->decrypt($hash));
        
        if(null != $em->getRepository('CircularSiteBundle:APIToken')->validaToken($hashDescriptografado)){
            $data = $data == '-' ? '2000-01-01' : $data;

            $paises = $em->getRepository('VostreLocalBundle:Pais')
                    ->listarTodosREST(null, $data);
            $horarios = $em->getRepository('CircularSiteBundle:Horario')
                    ->listarTodosREST(null, $data);
            $estados = $em->getRepository('VostreLocalBundle:Estado')
                    ->listarTodosREST(null, $data);
            $locais = $em->getRepository('VostreLocalBundle:Local')
                    ->listarTodosREST(null, $data);
            $bairros = $em->getRepository('VostreLocalBundle:Bairro')
                    ->listarTodosREST(null, $data);
            $paradas = $em->getRepository('CircularSiteBundle:Parada')
                    ->listarTodosREST(null, $data);
            $empresas = $em->getRepository('CircularSiteBundle:Empresa')
                    ->listarTodosREST(null, $data);
            $itinerarios = $em->getRepository('CircularSiteBundle:Itinerario')
                    ->listarTodosREST(null, $data);
            $paradasItinerarios = $em->getRepository('CircularSiteBundle:ParadaItinerario')
                    ->listarTodosREST(null, $data);
            $horariosItinerarios = $em->getRepository('CircularSiteBundle:HorarioItinerario')
                    ->listarTodosREST(null, $data);
            
            // versao 1.1.0
            $secoesItinerarios = $em->getRepository('CircularSiteBundle:SecaoItinerario')
                    ->listarTodosREST(null, $data);

            $totalRegistros = count($paises) + count($horarios) + count($estados) + count($locais) + count($bairros) 
                    + count($paradas) + count($empresas) + count($itinerarios) + count($paradasItinerarios) 
                    + count($horariosItinerarios) + count($secoesItinerarios);
            
            $view = View::create(
                    array(
                        "meta" => array(array("registros" => $totalRegistros, "status" => 200, "mensagem" => "ok")),
                        "paises" => $paises, 
                        "horarios" => $horarios,
                        "estados" => $estados,
                        "locais" => $locais,
                        "bairros" => $bairros,
                        "paradas" => $paradas,
                        "empresas" => $empresas,
                        "itinerarios" => $itinerarios,
                        "horariosItinerarios" => $horariosItinerarios,
                        "paradasItinerarios" => $paradasItinerarios,
                        "secoesItinerarios" => $secoesItinerarios
                    ), 200, array('totalRegistros' => $totalRegistros))->setTemplateVar("u");
            
            $em->getRepository('CircularSiteBundle:APIToken')->atualizaToken($hashDescriptografado);


            return $this->handleView($view);            
        } else {
            $view = View::create(
                    array(
                        "meta" => array(array("registros" => 0, "status" => 403, "mensagem" => "Acesso negado."))
                    ),
                403, array('totalRegistros' => 0))->setTemplateVar("u");


            return $this->handleView($view);
        }
        
    }
    
}
