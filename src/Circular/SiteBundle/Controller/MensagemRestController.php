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
    
    public function recebeDadosAction($hash) {
        
        $em = $this->getDoctrine()->getManager();
        
        $crypto = new MCrypt();
        
        $hashDescriptografado = $crypto->decrypt($crypto->decrypt($hash));
        
        if (null != $em->getRepository('CircularSiteBundle:APIToken')->validaToken($hashDescriptografado)) {
            $dados = $this->getRequest()->request->all();
            
            //die(var_dump($dados));
            
            $mensagens = json_decode($dados['dados'], TRUE);
            $total = $dados['total'];
            
            //die(var_dump($mensagens));
            
            $mensagens = $mensagens['mensagens'];
            
            $processadas = array();
            
            for($i = 0; $i < $total; $i++){
                
                $umaMensagem = new \Circular\SiteBundle\Entity\Mensagem();
                $umaMensagem->setTitulo($mensagens[$i]['titulo']);
                $umaMensagem->setDescricao($mensagens[$i]['descricao']);
                $umaMensagem->setStatus(3);
//                $umaMensagem->setDataCriacao($mensagem[0]['descricao'])

                $em->persist($umaMensagem);
                $processadas[] = $mensagens[$i]['id'];
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
