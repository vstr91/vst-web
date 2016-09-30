<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Circular\SiteBundle\Controller;

use Circular\SiteBundle\Entity\MCrypt;
use Circular\SiteBundle\Entity\Parada;
use FOS\RestBundle\Controller\FOSRestController;
use FOS\RestBundle\View\View;
use Vostre\LocalBundle\Entity\Bairro;

/**
 * Description of ParadaRest
 *
 * @author Almir
 */
class ParadaRestController extends FOSRestController {

    public function getDadosAction($hash, $data) {
        $em = $this->getDoctrine()->getManager();

        $crypto = new MCrypt();
        
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

        $crypto = new MCrypt();
        
        $request = $this->getRequest();
        
        $hashDescriptografado = $crypto->decrypt($crypto->decrypt($hash));
        
    }
    
    public function recebeDadosAction($hash) {
        
        $em = $this->getDoctrine()->getManager();
        
        $crypto = new MCrypt();
        
        $hashDescriptografado = $crypto->decrypt($crypto->decrypt($hash));
        
        if (null != $em->getRepository('CircularSiteBundle:APIToken')->validaToken($hashDescriptografado)) {
            $dados = $this->getRequest()->request->all();
            
            //die(var_dump($dados));
            
            $paradas = json_decode($dados['dados'], TRUE);
            $total = $dados['total'];
            
            //die(var_dump($mensagens));
            
            $paradas = $paradas['paradas'];
            
            $processadas = array();
            
            for($i = 0; $i < $total; $i++){
                
                $umaParada = new Parada();
                $umaParada->setReferencia($paradas[$i]['referencia']);
                $umaParada->setLatitude($paradas[$i]['latitude']);
                $umaParada->setLongitude($paradas[$i]['longitude']);
                
                $umBairro = new Bairro();
                $umBairro->setId($paradas[$i]['bairro']);
                
                $umBairro = $em->find('VostreLocalBundle:Bairro', $umBairro->getId());
                
                $umaParada->setBairro($umBairro);
                
                $umaParada->setStatus(3);
//                $umaMensagem->setDataCriacao($mensagem[0]['descricao'])

                $em->persist($umaParada);
                $processadas[] = $paradas[$i]['id'];
            }
            
            $em->flush();
            
            $view = View::create(
                            array(
                        "meta" => array(array("registros" => count($processadas), "status" => 200, "mensagem" => "ok")),
                        "processadas" => $processadas
                            ), 200, array('totalRegistros' => count($processadas)))->setTemplateVar("u");
            
            $em->getRepository('CircularSiteBundle:APIToken')->atualizaToken($hashDescriptografado);

            return $this->handleView($view);
            
        }
        
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
