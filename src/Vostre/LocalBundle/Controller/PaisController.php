<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Vostre\LocalBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Vostre\LocalBundle\Entity\Pais;
use Vostre\LocalBundle\Form\PaisType;

/**
 * Description of PaisController
 *
 * @author Almir
 */
class PaisController extends Controller {
    
    public function cadastrarAction($id_pais){
        $pais = null;
        $request = $this->getRequest();
        
        $user = $this->getUser();
        
        $em = $this->getDoctrine()->getManager();
        
        //verifica se ja existe registro
        $pais = $em->find('VostreLocalBundle:Pais', $id_pais);
        
        //se nao existir, cria novo objeto
        if(is_null($pais)){
            $pais = new Pais();
        }
        
        $form = $this->createForm(new PaisType(), $pais);
        $form->bind($request);
        
        if($form->isValid()){
            
            //cadastra ou edita objeto
            
            $em->persist($pais);
            $em->flush();
            
            $paises = $em->getRepository('VostreLocalBundle:Pais')
                ->findAll();
            
            return $this->redirect($this->generateUrl('vostre_site_admin_paises'));
        }
        
        return $this->render('VostreCentralBundle:Admin:indexPais.html.twig', 
                array(
                    'usuario' => $user,
                    'paises' => $paises,
                    'formPais' => $form->createView()
                ));
        
    }
    
}
