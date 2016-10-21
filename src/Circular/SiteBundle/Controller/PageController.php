<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Circular\SiteBundle\Controller;

use Circular\SiteBundle\Form\EventSubscriber\AddDestinoSubscriber;
use Doctrine\ORM\EntityRepository;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Vostre\LocalBundle\Form\EventSubscriber\AddBairroSubscriber;
use Vostre\SiteBundle\Entity\Contato;
use Vostre\SiteBundle\Form\ContatoType;

/**
 * Description of PageController
 *
 * @author Almir
 */
class PageController extends Controller {
    
    public function adminAction()
    {                   
        return $this->render('CircularSiteBundle:Page:admin.html.twig');
    }
    
    public function coverAction(){
        return $this->render('CircularSiteBundle:Page:cover.html.twig');
    }
    
    public function novaAction()
    {
        $em = $this->getDoctrine()->getManager();
        $request = $this->getRequest();
        
//        $itinerarios = $em->getRepository('CircularSiteBundle:Itinerario')->findBy(array('status' => 0));;
        
//        $qtdItinerarios = count($itinerarios);
        
        $qtdItinerarios = $em->getRepository('CircularSiteBundle:Itinerario')->listarRegistrosAtivosVinculados()['total'];
        $qtdParadas = $em->getRepository('CircularSiteBundle:Parada')->listarRegistrosAtivosVinculados()['total'];
        $qtdLocais = $em->getRepository('VostreLocalBundle:Local')->listarRegistrosAtivosVinculados()['total'];
        $qtdEstados = $em->getRepository('VostreLocalBundle:Estado')->listarRegistrosAtivosVinculados()['total'];
        $qtdEmpresas = $em->getRepository('CircularSiteBundle:Empresa')->listarRegistrosAtivosVinculados()['total'];
        
        /*
        
        $listarTodosHorarios = $em->getRepository('CircularSiteBundle:HorarioItinerario')
                ->listarHorariosPorItinerario(8);
        
        $listarTodosHorariosAlt = $em->getRepository('CircularSiteBundle:HorarioItinerario')
                ->listarAlternativasItinerario(1, 60, 8);

        $dados = array();
        
        $form = $this->createFormBuilder($dados)
                ->add('local', 'entity', array(
                    'class' => 'VostreLocalBundle:Local',
                    'property' => 'nome',
                    'query_builder' => function(EntityRepository $er) {
                                        $em = $this->getDoctrine()->getManager();
                                        return $em->getRepository('VostreLocalBundle:Local')->listarTodosVinculados();
                                        },
                ))
        ;
                                        
        $factory = $form->getFormFactory();
        
        $bairroSubscriber = new AddBairroSubscriber($factory, $em);
        $form->addEventSubscriber($bairroSubscriber);
        
        $destinoSubscriber = new AddDestinoSubscriber($factory, $em);
        $form->addEventSubscriber($destinoSubscriber);
        
        $form = $form->getForm();
        $form->handleRequest($request);
        */
        
        $contato = new Contato();
        $formContato = $this->createForm(new ContatoType(), $contato);
        
        $request = $this->getRequest();
        
        if($request->getMethod() == 'POST'){
            $formContato->bind($request);
            
            if($formContato->isValid()){
                $em->persist($contato);
                $em->flush();
                
                $email = \Swift_Message::newInstance()
                        ->setSubject("Contato Vostrè Circular: ".$formContato->get('titulo')->getData())
                        ->setFrom($formContato->get('email')->getData())
                        ->setTo('almirjunior_bp@hotmail.com')
                        ->setBody($this->renderView('VostreSiteBundle:Component:email.html.twig', 
                                array('contato' => $contato)))
                        ->setContentType("text/html");
                        //->setBody($form->get('mensagem')->getData());
                $this->get('mailer')->send($email);
                
                $this->get('session')
                        ->getFlashBag()->add('resposta-contato', 'Mensagem enviada com sucesso! Obrigado!');
                
                return $this->redirect($this->generateUrl('circular_site_homepage'));
                
            }
            
        }
        
        return $this->render('CircularSiteBundle:Page:nova.html.twig', array(
//            'form' => $form->createView(),
            'formContato' => $formContato->createView(),
            'itinerarios' => $qtdItinerarios,
            'paradas' => $qtdParadas,
            'locais' => $qtdLocais,
            'estados' => $qtdEstados,
            'empresas' => $qtdEmpresas
        ));
    }
    
    public function consultaAction()
    {
        $em = $this->getDoctrine()->getManager();
        $request = $this->getRequest();
        
        $form = $request->request;
        $partida = $form->get('partida');
        $destino = $form->get('destino');
        
        $itinerariosPorPartidaEDestino = $em->getRepository('CircularSiteBundle:Itinerario')
                ->listarTodosPorPartidaEDestino($partida, $destino);
        
        $listarProximoHorarioItinerario = $em->getRepository('CircularSiteBundle:HorarioItinerario')
                ->listarProximoPorItinerario($partida, $destino);
        
        return $this->render('CircularSiteBundle:Page:proximoHorario.html.twig', array(
//            'valor' => $valor,
//            'empresa' => $empresa,
//            'proximoHorario' => $proximoHorario,
//            'horarios' => $horarios
            'proximoHorario' => $listarProximoHorarioItinerario[0]
        ));
    }
    
    public function consultaTodosHorariosAction()
    {
        $em = $this->getDoctrine()->getManager();
        $request = $this->getRequest();
        
        $form = $request->request;
        $idItinerario = $form->get('itinerario');
        
        $itinerario = $em->getRepository('CircularSiteBundle:Itinerario')->find($idItinerario);
        
        $todosHorarios = $em->getRepository('CircularSiteBundle:HorarioItinerario')
                ->listarHorariosPorItinerario($itinerario->getId());
        
        $alternativasItinerario = $em->getRepository('CircularSiteBundle:HorarioItinerario')
                ->listarAlternativasItinerario($itinerario->getPartida(), 
                        $itinerario->getDestino(), $itinerario->getId());
        
//        foreach ($alternativasItinerario as $a){
//            echo $a
//        }
        
        return $this->render('CircularSiteBundle:Page:todosHorarios.html.twig', array(
//            'valor' => $valor,
//            'empresa' => $empresa,
//            'proximoHorario' => $proximoHorario,
            'horarios' => $todosHorarios,
            'alternativas' => $alternativasItinerario
        ));
    }
    
    public function contatoAction()
    {
        
        $contato = new Contato();
        $form = $this->createForm(new ContatoType, $contato);
        
        $em = $this->getDoctrine()->getManager();
        
        $request = $this->getRequest();
        
        if($request->getMethod() == 'POST'){
            $form->bind($request);
            
            if($form->isValid()){
                
                $em->persist($contato);
                $em->flush();
                
                $email = \Swift_Message::newInstance()
                        ->setSubject("Contato Vostrè Circular: ".$form->get('titulo')->getData())
                        ->setFrom($form->get('email')->getData())
                        ->setTo('almirjunior_bp@hotmail.com')
                        ->setBody($this->renderView('VostreSiteBundle:Component:email.html.twig', 
                                array('contato' => $contato)))
                        ->setContentType("text/html");
                        //->setBody($form->get('mensagem')->getData());
                $this->get('mailer')->send($email);
                
                $this->get('session')
                        ->getFlashBag()->add('resposta-contato', 'Mensagem enviada com sucesso! Obrigado!');
                
                return new Response();
                
            }
            
        }
        
        return $this->render('VostreSiteBundle:Page:contato.html.twig', array(
            'form' => $form->createView(),
            'itensMenu' => $itensMenu
        ));
        
    }
    
}