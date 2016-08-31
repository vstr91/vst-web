<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Circular\SiteBundle\Controller;

use Circular\SiteBundle\Entity\Mensagem;
use Circular\SiteBundle\Form\MensagemType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * Description of MensagemController
 *
 * @author Cefet
 */
class MensagemController extends Controller {
    
    public function cadastrarAction($id_mensagem){
        $mensagem = null;
        $request = $this->getRequest();
        
        $user = $this->getUser();
        
        $em = $this->getDoctrine()->getManager();
        
        //verifica se ja existe registro
        $mensagem = $em->find('CircularSiteBundle:Mensagem', $id_mensagem);
        
        //se nao existir, cria novo objeto
        if(is_null($mensagem)){
            $mensagem = new Mensagem();
        }
        
        $form = $this->createForm(new MensagemType(), $mensagem);
        $form->bind($request);
        
        if($form->isValid()){
            
            //cadastra ou edita objeto
            
            $em->persist($mensagem);
            $em->flush();
            
            $mensagens = $em->getRepository('CircularSiteBundle:Mensagem')
                ->findAll();
            
            return $this->redirect($this->generateUrl('circular_site_admin_mensagens'));
        }
        
        return $this->render('CircularSiteBundle:Admin:indexMensagens.html.twig', 
                array(
                    'usuario' => $user,
                    'mensagens' => $mensagens,
                    'formMensagem' => $form->createView()
                ));
        
    }
    
    public function formAction($id_mensagem){
        $request = $this->getRequest();
        
        $em = $this->getDoctrine()->getManager();
        $mensagem = $em->find('CircularSiteBundle:Mensagem', $id_mensagem);
        
        if(is_null($mensagem)){
            $mensagem = new Mensagem();
        }
        
        $form = $this->createForm(new MensagemType(), $mensagem);
        
//        $form->bind($request);
        
        return $this->render('CircularSiteBundle:Admin:Mensagem/form.html.twig',
                array(
                    'form' => $form->createView(),
                    'mensagem' => $mensagem
                ));
    }
    
}
