<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Circular\SiteBundle\Controller;

use Circular\SiteBundle\Entity\Itinerario;
use Circular\SiteBundle\Entity\Parada;
use Circular\SiteBundle\Form\ParadaType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * Description of ParadaController
 *
 * @author Almir
 */
class ParadaController extends Controller {
    
//    public function cadastrarAction($id_parada){
//        $parada = new Parada();
//        $request = $this->getRequest();
//        
//        $em = $this->getDoctrine()->getManager();
//        
//        //verifica se ja existe registro
//        $parada = $em->find('CircularSiteBundle:Parada', $id_parada);
//        
//        //se nao existir, cria novo objeto
//        if(is_null($parada)){
//            $parada = new Parada();
//        }
//        
//        $form = $this->createForm(new ParadaType(), $parada);
//        $form->bind($request);
//        
//        if($form->isValid()){
//            
//            //cadastra ou edita objeto
//            
//            $em->persist($parada);
//            $em->flush();
//            
//            $paradas = $em->getRepository('CircularSiteBundle:Parada')
//                ->listarTodos(null);
//            
//            return $this->redirect($this->generateUrl('circular_site_homepage'/*, 
//                    array(
//                        'paradas' => $paradas
//                    )*/));
////            return $this->render('CircularSiteBundle:Page:index.html.twig', 
////                array(
////                    'paradas' => $paradas
////                ));
//        }
//        
//        return $this->render('CircularSiteBundle:Page:index.html.twig', 
//                array(
//                    'paradas' => $paradas
//                ));
//        
//    }
    
    public function cadastrarAction($id_parada){
        $parada = null;
        $request = $this->getRequest();
        
        $user = $this->getUser();
        
        $em = $this->getDoctrine()->getManager();
        
        //verifica se ja existe registro
        $parada = $em->find('CircularSiteBundle:Parada', $id_parada);
        
        //se nao existir, cria novo objeto
        if(is_null($parada)){
            $parada = new Parada();
        }
        
        $form = $this->createForm(new ParadaType(), $parada);
        $form->bind($request);
        
        if($form->isValid()){
            
            //cadastra ou edita objeto
            
            $em->persist($parada);
            $em->flush();
            
            $paradas = $em->getRepository('CircularSiteBundle:Parada')
                ->findAll();
            
            return $this->redirect($this->generateUrl('circular_site_admin_paradas'));
        }
        
        return $this->render('CircularSiteBundle:Admin:indexParadas.html.twig', 
                array(
                    'usuario' => $user,
                    'paradas' => $paradas,
                    'formParada' => $form->createView()
                ));
        
    }
    
    public function formAction($id_parada){
        $request = $this->getRequest();
        
        $em = $this->getDoctrine()->getManager();
        $parada = $em->find('CircularSiteBundle:Parada', $id_parada);
        
        if(is_null($parada)){
            $parada = new Parada();
        }
        
        $form = $this->createForm(new ParadaType(), $parada);
        
//        $form->bind($request);
        
        return $this->render('CircularSiteBundle:Parada:form.html.twig',
                array(
                    'form' => $form->createView(),
                    'parada' => $parada
                ));
    }
    
    public function itinerariosAction($id_parada) {
        
        $em = $this->getDoctrine()->getManager();
        
        $parada = new Parada();
        
        $parada = $em->find('CircularSiteBundle:Parada', $id_parada);
        
        $itinerarios = $em->getRepository('CircularSiteBundle:Parada')
                ->listaItinerariosPorParada($parada);
        
        return $this->render('CircularSiteBundle:Parada:detalhes.html.twig', 
                array(
                    'parada' => $parada,
                    'itinerarios' => $itinerarios
                ));
        
    }
    
    public function paradasItinerarioAction($id_itinerario) {
        $em = $this->getDoctrine()->getManager();
        
        $itinerario = new Itinerario();
        
        $itinerario = $em->find('CircularSiteBundle:Itinerario', $id_itinerario);
        
        $paradas = $em->getRepository('CircularSiteBundle:Parada')
                ->listaParadasPorItinerario($itinerario);
        
        return $this->render('CircularSiteBundle:Itinerario:detalhes.html.twig', 
                array(
                    'paradas' => $paradas
                ));
    }
    
}
