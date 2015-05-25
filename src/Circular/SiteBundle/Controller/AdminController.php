<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Circular\SiteBundle\Controller;

use Circular\SiteBundle\Form\EmpresaType;
use Circular\SiteBundle\Form\HorarioItinerarioType;
use Circular\SiteBundle\Form\HorarioType;
use Circular\SiteBundle\Form\ItinerarioType;
use Circular\SiteBundle\Form\ParadaType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * Description of AdminController
 *
 * @author Almir
 */
class AdminController extends Controller {
    
    public function indexHorarioAction()
    {
        
        $user = $this->getUser();
        
        $em = $this->getDoctrine()->getManager();
        
        $horarioType = new HorarioType();
        $formHorario = $this->createForm($horarioType);
        
        $horarios = $em->getRepository('CircularSiteBundle:Horario')
                ->findAll();
        
        return $this->render('CircularSiteBundle:Admin:Horario/indexHorario.html.twig', array(
            'usuario' => $user,
            'horarios' => $horarios,
            'formHorario' => $formHorario->createView()
        ));
    }
    
    public function indexParadaAction()
    {
        
        $user = $this->getUser();
        
        $em = $this->getDoctrine()->getManager();
        
        $paradaType = new ParadaType();
        $formParada = $this->createForm($paradaType);
        
        $paradas = $em->getRepository('CircularSiteBundle:Parada')
                ->findAll();
        
        return $this->render('CircularSiteBundle:Admin:Parada/indexParada.html.twig', array(
            'usuario' => $user,
            'paradas' => $paradas,
            'formParada' => $formParada->createView()
        ));
    }
    
    public function indexEmpresaAction()
    {
        
        $user = $this->getUser();
        
        $em = $this->getDoctrine()->getManager();
        
        $empresaType = new EmpresaType();
        $formEmpresa = $this->createForm($empresaType);
        
        $empresas = $em->getRepository('CircularSiteBundle:Empresa')
                ->findAll();
        
        return $this->render('CircularSiteBundle:Admin:Empresa/indexEmpresa.html.twig', array(
            'usuario' => $user,
            'empresas' => $empresas,
            'formEmpresa' => $formEmpresa->createView()
        ));
    }
    
    public function indexItinerarioAction()
    {
        
        $user = $this->getUser();
        
        $em = $this->getDoctrine()->getManager();
        
        $itinerarioType = new ItinerarioType();
        $formItinerario = $this->createForm($itinerarioType);
        
        $paradas = $em->getRepository('CircularSiteBundle:Parada')
                ->findAll();
        
        $itinerarios = $em->getRepository('CircularSiteBundle:Itinerario')
                ->findAll();
        
        return $this->render('CircularSiteBundle:Admin:Itinerario/indexItinerario.html.twig', array(
            'usuario' => $user,
            'paradas' => $paradas,
            'itinerarios' => $itinerarios,
            'formItinerario' => $formItinerario->createView()
        ));
    }
    
    public function indexHorarioItinerarioAction()
    {
        
        $user = $this->getUser();
        
        $em = $this->getDoctrine()->getManager();
        
        $horarioItinerarioType = new HorarioItinerarioType();
        $formHorarioItinerario = $this->createForm($horarioItinerarioType);
        
        $itinerarios = $em->getRepository('CircularSiteBundle:Itinerario')
                ->findAll();
        
        $horarios = $em->getRepository('CircularSiteBundle:Horario')
                ->findAll();
        
        return $this->render('CircularSiteBundle:Admin:HorarioItinerario/indexHorarioItinerario.html.twig', array(
            'usuario' => $user,
            'horarios' => $horarios,
            'itinerarios' => $itinerarios,
            'formHorarioItinerario' => $formHorarioItinerario->createView()
        ));
    }
    
}
