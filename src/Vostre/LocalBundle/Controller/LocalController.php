<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Vostre\LocalBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Vostre\LocalBundle\Entity\Local;
use Vostre\LocalBundle\Form\LocalType;

/**
 * Description of LocalController
 *
 * @author Almir
 */
class LocalController extends Controller {
    
    public function cadastrarAction($id_local){
        $local = null;
        $request = $this->getRequest();
        
        $user = $this->getUser();
        
        $em = $this->getDoctrine()->getManager();
        
        //verifica se ja existe registro
        $local = $em->find('VostreLocalBundle:Local', $id_local);
        
        //se nao existir, cria novo objeto
        if(is_null($local)){
            $local = new Local();
        }
        
        $form = $this->createForm(new LocalType($em), $local);
        $form->bind($request);
        
        if($form->isValid()){
            
            //cadastra ou edita objeto
            
            $em->persist($local);
            $em->flush();
            
            if($local->getTipo() == 0 && null == $local->getCidade()){
                
                $cidade = $em->find('VostreLocalBundle:Local', $local->getId());
                
                $local->setCidade($cidade);
                
                $em->persist($local);
                $em->flush();
                
            }
            
            $locais = $em->getRepository('VostreLocalBundle:Local')
                ->findAll();
            
            return $this->redirect($this->generateUrl('vostre_site_admin_locais'));
        }
        
        $locais = $em->getRepository('VostreLocalBundle:Local')
                ->findAll();
        
        return $this->render('VostreCentralBundle:Central:indexLocal.html.twig', 
                array(
                    'usuario' => $user,
                    'locais' => $locais,
                    'formLocal' => $form->createView()
                ));
        
    }
    
}
