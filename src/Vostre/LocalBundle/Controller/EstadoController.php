<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Vostre\LocalBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Vostre\LocalBundle\Entity\Estado;
use Vostre\LocalBundle\Form\EstadoType;

/**
 * Description of EstadoController
 *
 * @author Almir
 */
class EstadoController extends Controller {
    
    public function cadastrarAction($id_estado){
        $estado = null;
        $request = $this->getRequest();
        
        $user = $this->getUser();
        
        $em = $this->getDoctrine()->getManager();
        
        //verifica se ja existe registro
        $estado = $em->find('VostreLocalBundle:Estado', $id_estado);
        
        //se nao existir, cria novo objeto
        if(is_null($estado)){
            $estado = new Estado();
        }
        
        $form = $this->createForm(new EstadoType(), $estado);
        $form->bind($request);
        
        if($form->isValid()){
            
            //cadastra ou edita objeto
            
            $em->persist($estado);
            $em->flush();
            
            $estados = $em->getRepository('VostreLocalBundle:Estado')
                ->findAll();
            
            return $this->redirect($this->generateUrl('vostre_site_admin_estados'));
        }
        
        return $this->render('VostreCentralBundle:Central:indexEstado.html.twig', 
                array(
                    'usuario' => $user,
                    'estados' => $estados,
                    'formEstado' => $form->createView()
                ));
        
    }
    
    public function detalhesAction($sigla) {
        $em = $this->getDoctrine()->getManager();
        
        $estado = new Estado();
        
        $estado = $em->getRepository('VostreLocalBundle:Estado')->findOneBy(array('sigla' => $sigla));
        
        $locais = $em->getRepository('VostreLocalBundle:Local')->listarTodosVinculadosPorEstado($estado);
        
        return $this->render('VostreLocalBundle:Estado:detalhes.html.twig', 
                array(
                    'estado' => $estado,
                    'locais' => $locais
                ));
    }
    
}
