<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Circular\SiteBundle\Controller;

use Circular\SiteBundle\Entity\HorarioItinerario;
use Circular\SiteBundle\Form\HorarioItinerarioType;
use FOS\RestBundle\Controller\FOSRestController;
use Symfony\Component\HttpFoundation\Response;

/**
 * Description of HorarioItinerarioController
 *
 * @author Almir
 */
class HorarioItinerarioController extends FOSRestController {
    
    public function cadastrarAction(){
        
        $em = $this->getDoctrine()->getManager();
        
        $dados = $this->getRequest()->request->all();
        
        $idItinerario = $dados['circular_sitebundle_horarioitinerario']['itinerario'];
        
        if(!empty($dados['chk-dia'])){

            $horarios = $dados['chk-dia'];

            foreach($horarios as $horario){
                echo "<p>ID Horario: ".key($horarios)."</p>";
                
                $itinerario = $em->getRepository('CircularSiteBundle:Itinerario')
                    ->findOneBy(array('id' => $idItinerario));
                
                $umHorario = $em->getRepository('CircularSiteBundle:Horario')
                    ->findOneBy(array('id' => key($horarios)));
                
                $horarioItinerario = new HorarioItinerario();
                $horarioItinerario->setHorario($umHorario);
                $horarioItinerario->setItinerario($itinerario);
                
//                $em->persist($horarioItinerario);
//                
//                $em->flush();
                
                //var_dump($horarioItinerario);
                
                for($i = 0; $i < 7; $i++){
                    if(isset($horario[$i])){
                        $dias[$i] = $horario[$i];
                    } else{
                        $dias[$i] = 0;
                    }
                }
                next($horario);
                next($horarios);

//                $dhi = new DiaHorarioItinerario();
//                $dhi->setHorarioItinerario($horarioItinerario);
                
                for($i = 0; $i < 7; $i++){
                    
                    switch ($i) {
                        case 0:
                            $horarioItinerario->setDomingo($dias[$i]);
                            break;
                        case 1:
                            $horarioItinerario->setSegunda($dias[$i]);
                            break;
                        case 2:
                            $horarioItinerario->setTerca($dias[$i]);
                            break;
                        case 3:
                            $horarioItinerario->setQuarta($dias[$i]);
                            break;
                        case 4:
                            $horarioItinerario->setQuinta($dias[$i]);
                            break;
                        case 5:
                            $horarioItinerario->setSexta($dias[$i]);
                            break;
                        case 6:
                            $horarioItinerario->setSabado($dias[$i]);
                            break;
                    }
                    
                }
                
                $em->persist($horarioItinerario);
                $em->flush();

            }
        }
        
        //die(var_dump($dados));
        
        return $this->redirect($this->generateUrl('circular_site_admin_horarios_itinerarios'));
        
    }
    
    public function carregarAction($idItinerario)
    {
        
        $user = $this->getUser();
        
        $em = $this->getDoctrine()->getManager();
        
//        $horarioItinerario = $em->getRepository('CircularSiteBundle:HorarioItinerario')
//                ->find($idHorarioItinerario);

        $itinerario = $em->getRepository('CircularSiteBundle:Itinerario')
                ->findOneBy(array('id' => $idItinerario));
        
        $horarioItinerario = new HorarioItinerario();
        $horarioItinerario->setItinerario($itinerario);
        
        $horarioItinerarioType = new HorarioItinerarioType();
        $formHorarioItinerario = $this->createForm($horarioItinerarioType, $horarioItinerario);
        
        $horariosItinerario = $em->getRepository('CircularSiteBundle:HorarioItinerario')
                ->findBy(array('itinerario' => $horarioItinerario->getItinerario()->getId(), 'status' => 0), 
                        array('horario' => 'ASC'));
        
        $arrHorarios = [];
        
        foreach($horariosItinerario as $umHorario){
            $arrHorarios[] = $umHorario->getId();
        }
        
//        $diasHorariosItinerario = $em->getRepository('CircularSiteBundle:DiaHorarioItinerario')
//                ->findBy(array('horarioItinerario' => $arrHorarios));
        
//        foreach ($diasHorariosItinerario as $d){
//            echo $p->getDomingo();
//        }
//        
//        die();
        
        $horarios = $em->getRepository('CircularSiteBundle:Horario')
                ->findAll();
        
//        die(var_dump($horariosItinerario));
        
        return $this->render('CircularSiteBundle:Admin:HorarioItinerario/carregaHorarioItinerario.html.twig', array(
            'usuario' => $user,
            'horarios' => $horarios,
            'horariosItinerario' => $horariosItinerario,
            'formHorarioItinerario' => $formHorarioItinerario->createView()
        ));
    }
    
    public function editarAction(){
        
        $em = $this->getDoctrine()->getManager();
        
        $dados = $this->getRequest()->request->all();
        
        $idItinerario = $dados['circular_sitebundle_horarioitinerario']['itinerario'];
        
        //die(var_dump($dados['chk-dia']));
        
        if(!empty($dados['chk-dia'])){

            $horarios = $dados['chk-dia'];

            $em->getRepository('CircularSiteBundle:HorarioItinerario')
                        ->invalidaTodosHorariosItinerario($idItinerario);
            
//            $em->getRepository('CircularSiteBundle:HorarioItinerario')
//                        ->invalidaTodosDiasItinerario($idItinerario);
            
            foreach($horarios as $horario){
                echo "<p>ID Horario: ".key($horarios)."</p>";
                
                $itinerario = $em->getRepository('CircularSiteBundle:Itinerario')
                    ->findOneBy(array('id' => $idItinerario));
                
                $umHorario = $em->getRepository('CircularSiteBundle:Horario')
                    ->findOneBy(array('id' => key($horarios)));
                
                $horarioItinerario = $em->getRepository('CircularSiteBundle:HorarioItinerario')
                    ->findOneBy(array('horario' => $umHorario->getId(), 'itinerario' => $itinerario->getId()));
                
                if(null == $horarioItinerario){
                    $horarioItinerario = new HorarioItinerario();
                }
                
                $horarioItinerario->setHorario($umHorario);
                $horarioItinerario->setItinerario($itinerario);
                
//                $em->persist($horarioItinerario);
//                
//                $em->flush();
                
                for($i = 0; $i < 7; $i++){
                    if(isset($horario[$i])){
                        $dias[$i] = $horario[$i];
                    } else{
                        $dias[$i] = 0;
                    }
                }
                next($horario);
                next($horarios);

//                $dhi = $em->getRepository('CircularSiteBundle:DiaHorarioItinerario')
//                    ->findOneBy(array('horarioItinerario' => $horarioItinerario));
                
//                if(null == $dhi){
//                    $dhi = new DiaHorarioItinerario();
//                }
                
//                $dhi->setHorarioItinerario($horarioItinerario);
                
                for($i = 0; $i < 7; $i++){
                    
                    switch ($i) {
                        case 0:
                            $horarioItinerario->setDomingo($dias[$i]);
                            break;
                        case 1:
                            $horarioItinerario->setSegunda($dias[$i]);
                            break;
                        case 2:
                            $horarioItinerario->setTerca($dias[$i]);
                            break;
                        case 3:
                            $horarioItinerario->setQuarta($dias[$i]);
                            break;
                        case 4:
                            $horarioItinerario->setQuinta($dias[$i]);
                            break;
                        case 5:
                            $horarioItinerario->setSexta($dias[$i]);
                            break;
                        case 6:
                            $horarioItinerario->setSabado($dias[$i]);
                            break;
                    }
                    
                }
                $horarioItinerario->setStatus(0);
                $em->persist($horarioItinerario);
                $em->flush();

            }
        }
        
        //die(var_dump($dados));
        
        return $this->redirect($this->generateUrl('circular_site_admin_horarios_itinerarios'));
        
    }
    
}
