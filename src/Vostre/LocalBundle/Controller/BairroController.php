<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Vostre\LocalBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Vostre\LocalBundle\Entity\Bairro;
use Vostre\LocalBundle\Form\BairroType;

/**
 * Description of BairroController
 *
 * @author Almir
 */
class BairroController extends Controller {
    
    public function cadastrarAction($id_bairro){
        $bairro = null;
        $request = $this->getRequest();
        
        $user = $this->getUser();
        
        $em = $this->getDoctrine()->getManager();
        
        //verifica se ja existe registro
        $bairro = $em->find('VostreLocalBundle:Bairro', $id_bairro);
        
        //se nao existir, cria novo objeto
        if(is_null($bairro)){
            $bairro = new Bairro();
        }
        
        $form = $this->createForm(new BairroType($em), $bairro);
        $form->bind($request);
        
        if($form->isValid()){
            
            //cadastra ou edita objeto
            
            $em->persist($bairro);
            $em->flush();
            
            return $this->redirect($this->generateUrl('vostre_site_admin_bairros'));
        }
        
        $bairros = $em->getRepository('VostreLocalBundle:Bairro')
                ->findAll();
        
        return $this->render('VostreCentralBundle:Admin:Bairro/indexBairro.html.twig', 
                array(
                    'usuario' => $user,
                    'bairros' => $bairros,
                    'formBairro' => $form->createView()
                ));
        
    }
    
    public function formAction($id_bairro){
        $request = $this->getRequest();
        
        $em = $this->getDoctrine()->getManager();
        $bairro = $em->find('VostreLocalBundle:Bairro', $id_bairro);
        
        if(is_null($bairro)){
            $bairro = new Bairro();
        }
        
        $form = $this->createForm(new BairroType($em), $bairro);
        
//        $form->bind($request);
        
        return $this->render('VostreCentralBundle:Admin:Bairro/form.html.twig',
                array(
                    'form' => $form->createView(),
                    'bairro' => $bairro
                ));
    }
    
}
