<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Circular\SiteBundle\Controller;

use Circular\SiteBundle\Entity\Itinerario;
use Circular\SiteBundle\Entity\Parada;
use Circular\SiteBundle\Form\ParadaCompletaType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * Description of ParadaController
 *
 * @author Almir
 */
class ParadaController extends Controller {
    
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
        
        $form = $this->createForm(new ParadaCompletaType(), $parada);
        $form->bind($request);
        
        if($form->isValid()){
            
            //verifica se o objeto sera inativado. Em caso positivo, verifica se existem registros ativos vinculados
            //a ele. Se existirem, nao deixa inativar
            
            if($parada->getStatus() == 2){
                
                $registrosVinculados = $em->getRepository('CircularSiteBundle:Parada')
                        ->listarRegistrosVinculados($parada)['total'];
                
                if($registrosVinculados > 0){
                    
                    $flashBag = $this->get('session')->getFlashBag();
                    $flashBag->get('aviso-parada'); // gets message and clears type
                    $flashBag->set('aviso-parada', 'Parada contém registros ativos vinculados '
                            . 'e não pode ser inativada. Nenhuma alteração foi realizada.');
                    return $this->redirect($this->generateUrl('circular_site_admin_paradas'));
                }
                
            }
            
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
        
        $form = $this->createForm(new ParadaCompletaType(), $parada);
        
//        $form->bind($request);
        
        return $this->render('CircularSiteBundle:Admin:Parada/form.html.twig',
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
    
    public function detalhesAction($sigla, $local, $bairro, $slug) {
        $em = $this->getDoctrine()->getManager();
        
        $parada = new Parada();
        $itinerarios = array();
        
        $parada = $em->getRepository('CircularSiteBundle:Parada')->carregar($sigla, $local, $bairro, $slug);
        
        $proximasSaidas = $em->getRepository('CircularSiteBundle:Parada')->listaProximasSaidasPorParada($parada);
        
        //die(var_dump($proximasSaidas));
        
        $total = count($proximasSaidas);
        
        for($i = 0; $i < $total; $i++){
            $itinerario = $em->getRepository('CircularSiteBundle:Itinerario')->find($proximasSaidas[$i]['id']);
            $horario = $em->getRepository('CircularSiteBundle:Horario')->find($proximasSaidas[$i]['hora']);
            
            $hi = new \Circular\SiteBundle\Entity\HorarioItinerario();
            $hi->setHorario($horario);
            $hi->setItinerario($itinerario);
            
            $itinerarios[] = $hi;
        }
        
        //die(var_dump($itinerarios));
        
        return $this->render('CircularSiteBundle:Parada:detalhes.html.twig', 
                array(
                    'parada' => $parada,
                    'itinerarios' => $itinerarios
                ));
    }
    
}
