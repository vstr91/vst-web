<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Circular\SiteBundle\Controller;

use Circular\SiteBundle\Entity\Horario;
use Circular\SiteBundle\Form\HorarioType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * Description of HorarioController
 *
 * @author Almir
 */
class HorarioController extends Controller {
    
    public function cadastrarAction($id_horario){
        $horario = null;
        $request = $this->getRequest();
        
        $user = $this->getUser();
        
        $em = $this->getDoctrine()->getManager();
        
        //verifica se ja existe registro
        $horario = $em->find('CircularSiteBundle:Horario', $id_horario);
        
        //se nao existir, cria novo objeto
        if(is_null($horario)){
            $horario = new Horario();
        }
        
        $form = $this->createForm(new HorarioType(), $horario);
        $form->bind($request);
        
        if($form->isValid()){
            
            //cadastra ou edita objeto
            
            $em->persist($horario);
            $em->flush();
            
            $horarios = $em->getRepository('CircularSiteBundle:Horario')
                ->findAll();
            
            return $this->redirect($this->generateUrl('circular_site_admin_horarios'));
        }
        
        return $this->render('CircularSiteBundle:Admin:indexHorarios.html.twig', 
                array(
                    'usuario' => $user,
                    'horarios' => $horarios,
                    'formHorario' => $form->createView()
                ));
        
    }
    
}
