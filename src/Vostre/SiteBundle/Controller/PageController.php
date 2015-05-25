<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Vostre\SiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Vostre\SiteBundle\Entity\Contato;
use Vostre\SiteBundle\Form\ContatoType;
use Gedmo\Translatable\TranslatableListener;

/**
 * Description of PageController
 *
 * @author Almir
 */
class PageController extends Controller {
    
    public function indexAction()
    {
        
        $em = $this->getDoctrine()->getManager();
        
//        $translatableListener = new \Gedmo\Translatable\TranslatableListener();
//        $translatableListener->setTranslatableLocale('pt_BR');
//        $em->addEventSubscriber($translatableListener);
        
        $destaquesCarousel = $em->getRepository('VostreSiteBundle:Destaque')
                ->listarTodos(true, 1);
        
        $destaquesFeature = $em->getRepository('VostreSiteBundle:Destaque')
                ->listarTodos(true, 0);
        
        $itensMenu = $this->listaItensMenu($this, true);
        
        return $this->render('VostreSiteBundle:Page:index.html.twig', array(
            'itensMenu' => $itensMenu,
            'destaquesCarousel' => $destaquesCarousel,
            'destaquesFeature' => $destaquesFeature
        ));
    }
    
    public function servicosAction()
    {
        
        $em = $this->getDoctrine()->getManager();
        
        $portfolio = $em->getRepository('VostreSiteBundle:Servico')
                ->listarTodos(true);
        
        $itensMenu = PageController::listaItensMenu($this, true);
        
        return $this->render('VostreSiteBundle:Page:servicos.html.twig', array(
            'itensMenu' => $itensMenu,
            'portfolio' => $portfolio
        ));
    }
    
    public function portfolioAction()
    {
        
        $em = $this->getDoctrine()->getManager();
        
        $portfolio = $em->getRepository('VostreSiteBundle:Portfolio')
                ->listarTodos(true);
        
        $itensMenu = PageController::listaItensMenu($this, true);
        
        return $this->render('VostreSiteBundle:Page:portfolio.html.twig', array(
            'itensMenu' => $itensMenu,
            'portfolio' => $portfolio
        ));
    }
    
    public function contatoAction()
    {
        
        $itensMenu = PageController::listaItensMenu($this, true);
        
//        return $this->render('VostreSiteBundle:Page:contato.html.twig', array(
//            'itensMenu' => $itensMenu
//        ));
        
        $contato = new Contato();
        $form = $this->createForm(new ContatoType(), $contato);
        
        $em = $this->getDoctrine()->getManager();
        
        $request = $this->getRequest();
        
        if($request->getMethod() == 'POST'){
            $form->bind($request);
            
            if($form->isValid()){
                
                $em->persist($contato);
                $em->flush();
                
                $email = \Swift_Message::newInstance()
                        ->setSubject("Contato Vostrè: ".$form->get('titulo')->getData())
                        ->setFrom($form->get('email')->getData())
                        ->setTo('almirjunior_bp@hotmail.com')
                        ->setBody($this->renderView('VostreSiteBundle:Component:email.html.twig', 
                                array('contato' => $contato)))
                        ->setContentType("text/html");
                        //->setBody($form->get('mensagem')->getData());
                $this->get('mailer')->send($email);
                
                $this->get('session')
                        ->getFlashBag()->add('resposta-contato', 'Mensagem enviada com sucesso! Obrigado!');
                
                return $this->redirect($this->generateUrl('vostre_site_contato'));
                
            }
            
        }
        
        return $this->render('VostreSiteBundle:Page:contato.html.twig', array(
            'form' => $form->createView(),
            'itensMenu' => $itensMenu
        ));
        
    }
    
    public function centralAction()
    {
        
        $itensMenu = PageController::listaItensMenu($this, true);
        
        return $this->render('VostreSiteBundle:Page:central.html.twig', array(
            'itensMenu' => $itensMenu
        ));
    }
    
    public static function listaItensMenu($controller, $soAtivos = true){
        
        $em = $controller->getDoctrine()->getManager();
        
        return $itensMenu = $em->getRepository('VostreSiteBundle:Menu')
                ->listarTodos($soAtivos);
    }
    
}
