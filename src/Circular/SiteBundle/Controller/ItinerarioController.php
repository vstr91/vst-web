<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Circular\SiteBundle\Controller;

use Circular\SiteBundle\Entity\Horario;
use Circular\SiteBundle\Entity\HorarioItinerario;
use Circular\SiteBundle\Entity\Itinerario;
use Circular\SiteBundle\Entity\Parada;
use Circular\SiteBundle\Entity\ParadaItinerario;
use Circular\SiteBundle\Form\ItinerarioResumidoType;
use FOS\RestBundle\Controller\FOSRestController;
use Symfony\Component\HttpFoundation\Response;

/**
 * Description of ItinerarioController
 *
 * @author Almir
 */
class ItinerarioController extends FOSRestController {
    
//    public function getItinerariosAction() {
//        $em = $this->getDoctrine()->getManager();
//        $data = $em->getRepository('CircularSiteBundle:Itinerario')
//                ->listarTodos(null);
//        $view = $this->view($data, 100)
//                ->setTemplate($template)
//    }
    
    public function cadastrarAction(){
        
        $em = $this->getDoctrine()->getManager();
        
        $dados = $this->getRequest()->request->all();
        
        $valor = $dados['valor'];
        //$distancia = $dados['distancia'];
        $idPartida = $dados['idPartida'];
        $idDestino = $dados['idDestino'];
        $idEmpresa = $dados['idEmpresa'];
        $status = $dados['status'];
        $observacao = $dados['observacao'];
        $duracao = $dados['duracao'];
        
        //$observacao = is_null($observacao) ? '' : $observacao;
        
        $paradas = $dados['paradas'];
        
        //die(var_dump($paradas));
        
        /*
        $distancia = str_replace(".", "", $distancia);
        $distancia = str_replace(",", ".", $distancia);
         */
        
        $qtdParadas = count($paradas);
        
        $bairroPartida = $em->getRepository('VostreLocalBundle:Bairro')
                    ->findOneBy(array('id' => $idPartida));
        $bairroDestino = $em->getRepository('VostreLocalBundle:Bairro')
                    ->findOneBy(array('id' => $idDestino));
        $empresa = $em->getRepository('CircularSiteBundle:Empresa')
                    ->findOneBy(array('id' => $idEmpresa));
        
        $itinerario = new Itinerario();
        
        $itinerario->setPartida($bairroPartida);
        $itinerario->setDestino($bairroDestino);
        $itinerario->setStatus($status);
        $itinerario->setValor($valor);
        //$itinerario->setDistancia($distancia);
        $itinerario->setEmpresa($empresa);
        $itinerario->setObservacao($observacao);
        $itinerario->setDuracao($duracao);
        
        $em->persist($itinerario);
        
        $em->flush();
        
        for($i = 0; $i < $qtdParadas; $i++){
        
            $parada = new Parada();
            
            $parada = $em->getRepository('CircularSiteBundle:Parada')
                    ->findOneBy(array('id' => $paradas[$i]['id']));
            
//            $itinerario = $em->getRepository('CircularSiteBundle:Itinerario')
//                    ->find('CircularSiteBundle:Itinerario', $id_itinerario);
            
            $umaParada = new ParadaItinerario();
            
            $umaParada->setOrdem($i+1);
            $umaParada->setParada($parada);
            $umaParada->setItinerario($itinerario);
            $umaParada->setDestaque($paradas[$i]['isPrincipal']);
            
            if($umaParada->getDestaque() == -1){
                $umaParada->setValor($paradas[$i]['valorTrecho']);
            }
            
            $em->persist($umaParada);
        }
        
        $em->flush();
        
        return new Response();
        
    }
    
    public function carregarAction($id_itinerario){
        $request = $this->getRequest();
        
        $user = $this->getUser();
        
        $em = $this->getDoctrine()->getManager();
        $itinerario = $em->find('CircularSiteBundle:Itinerario', $id_itinerario);
        
        $paradasItinerario = $em->getRepository('CircularSiteBundle:ParadaItinerario')
                ->findBy(array('itinerario' => $itinerario->getId(), 'status' => 0), 
                        array('ordem' => 'ASC'));
        
        $paradasItinerarioInativas = $em->getRepository('CircularSiteBundle:ParadaItinerario')
                ->findBy(array('itinerario' => $itinerario->getId(), 'status' => 2), 
                        array('ordem' => 'ASC'));
        
        $paradas = $em->getRepository('CircularSiteBundle:Parada')
                ->findAll();
        
        if(is_null($itinerario)){
            $itinerario = new Itinerario();
        }
        
        $form = $this->createForm(new ItinerarioResumidoType($em), $itinerario);
        
//        $form->bind($request);
        
        return $this->render('CircularSiteBundle:Admin:Itinerario/carregaItinerario.html.twig',
                array(
                    'form' => $form->createView(),
                    'itinerario' => $itinerario,
                    'usuario' => $user,
                    'paradasItinerario' => $paradasItinerario,
                    'paradasItinerarioInativas' => $paradasItinerarioInativas,
                    'paradas' => $paradas
                ));
    }
    
    public function editarAction($id_itinerario){
        
        $request = $this->getRequest();
        
        $user = $this->getUser();
        
        $dados = $request->request->all();
        
        //die(var_dump($dados));
        
        $valor = $dados['valor'];
        $idPartida = $dados['idPartida'];
        $idDestino = $dados['idDestino'];
        $idEmpresa = $dados['idEmpresa'];
        $status = $dados['status'];
        $observacao = $dados['observacao'];
        $duracao = $dados['duracao'];
        
        if(isset($dados['paradas'])){
            $paradas = $dados['paradas'];
        } else{
            $paradas = 0;
        }
        
        $em = $this->getDoctrine()->getManager();
        $itinerario = $em->find('CircularSiteBundle:Itinerario', $id_itinerario);
        
//        $paradas = $em->getRepository('CircularSiteBundle:Parada')
//                ->findAll();
        
        //die($itinerario);
        
        if(!is_null($itinerario)){
            
            $qtdParadas = count($paradas);

            $bairroPartida = $em->getRepository('VostreLocalBundle:Bairro')
                        ->findOneBy(array('id' => $idPartida));
            $bairroDestino = $em->getRepository('VostreLocalBundle:Bairro')
                        ->findOneBy(array('id' => $idDestino));
            $empresa = $em->getRepository('CircularSiteBundle:Empresa')
                        ->findOneBy(array('id' => $idEmpresa));
            
            $itinerario->setPartida($bairroPartida);
            $itinerario->setDestino($bairroDestino);
            $itinerario->setStatus($status);
            $itinerario->setValor($valor);
            $itinerario->setEmpresa($empresa);
            $itinerario->setObservacao($observacao);
            $itinerario->setDuracao(\DateTime::createFromFormat('H:i', $duracao));
            
            $em->persist($itinerario);

            $em->flush();
            
            $em->getRepository('CircularSiteBundle:ParadaItinerario')
                        ->invalidaTodasParadasItinerario($id_itinerario);

            if($itinerario->getStatus() == 2){
                $em->getRepository('CircularSiteBundle:HorarioItinerario')
                        ->invalidaTodosHorariosItinerario($id_itinerario);
                return new Response();
            }
            
            for($i = 0; $i < $qtdParadas; $i++){

                $parada = new Parada();

                $parada = $em->getRepository('CircularSiteBundle:Parada')
                        ->findOneBy(array('id' => $paradas[$i]['id']));
                
                $umaParada = $em->getRepository('CircularSiteBundle:ParadaItinerario')
                        ->findOneBy(array('parada' => $paradas[$i]['id'], 'itinerario' => $id_itinerario));

                if(is_null($umaParada)){
                    $umaParada = new ParadaItinerario();
                }

                $umaParada->setOrdem($i+1);
                $umaParada->setParada($parada);
                $umaParada->setItinerario($itinerario);
                $umaParada->setDestaque($paradas[$i]['isPrincipal']);
                
                if($umaParada->getDestaque() == -1){
                    $umaParada->setValor($paradas[$i]['valorTrecho']);
                } else{
                    $umaParada->setValor(null);
                }
                
                $umaParada->setStatus(0);

                $em->persist($umaParada);
            }

            $em->flush();
            
        }
        
        return new Response();//$this->redirect($this->generateUrl('circular_site_admin_horarios_itinerarios'));
        
    }
    
    public function editarTarifaAction(){
        
        $request = $this->getRequest();
        
        $em = $this->getDoctrine()->getManager();
        
        if($request->isMethod('POST')){
            //die(var_dump($request->request));
            
            $tarifa = $request->request->get('tarifa');
            $tarifa = str_replace(".", "", $tarifa);
            $tarifa = str_replace(",", ".", $tarifa);
            
            $itinerarios = $request->request->get('chk-tarifa');
            
            foreach($itinerarios as $itinerario){
                $em->getRepository('CircularSiteBundle:Itinerario')->atualizarTarifa($tarifa, $itinerario);
            }
            
        }
        
        $user = $this->getUser();
        $todosItinerarios = $em->getRepository('CircularSiteBundle:Itinerario')
                ->findAll();
        
        return $this->render('CircularSiteBundle:Admin/Itinerario:alteraTarifaItinerario.html.twig', array(
            'usuario' => $user,
            'itinerarios' => $todosItinerarios
        ));
        
    }
    
    public function horarioAction() {
        
        $em = $this->getDoctrine()->getManager();
        
        $itinerarios = $em->getRepository('CircularSiteBundle:Itinerario')
                ->listarTodos(null);
        
        $form = $this->createFormBuilder()
                ->add('itinerarios', 'entity', array(
                    'class' => 'CircularSiteBundle:Itinerario',
                    'label' => 'Itinerários:'
                    ))
                ->add('horarios', 'entity', array(
                    'class' => 'CircularSiteBundle:Horario',
                    'label' => 'Horários:',
                    'expanded' => true,
                    'multiple' => true,
                    ))
                ->getForm()
                ;
        
        return $this->render('CircularSiteBundle:Itinerario:horarios.html.twig', 
                array(
                    'itinerarios' => $itinerarios,
                    'form' => $form->createView()
                ));
    }
    
    public function cadastrarHorarioAction() {
        
        $form = $_POST['form'];
        
        $horarios = $form['horarios'];
        $itinerario = $form['itinerarios'];
        
        $em = $this->getDoctrine()->getManager();
        
        $qtd_horarios = count($horarios);
        
        $umItinerario = $em->find('CircularSiteBundle:Itinerario', $itinerario);
        
        for($i = 0; $i < $qtd_horarios; $i++){
            $umHorario = new Horario();
            $horarioItinerario = new HorarioItinerario();
        
            $umHorario = $em->find('CircularSiteBundle:Horario', $horarios[$i]);
            
            $horarioItinerario->setHorario($umHorario);
            $horarioItinerario->setItinerario($umItinerario);
            
            $em->persist($horarioItinerario);
            
            //echo "<p>".$umHorario->getNome()->format('H:i')."</p>";
            
        }
        
        $em->flush();
        
        return new Response();
        
    }
    
    public function proximoHorarioAction($itinerario, $hora) {
        
        $em = $this->getDoctrine()->getManager();
        
        $horario = new Horario();
        
        $horario = $em->getRepository('CircularSiteBundle:Horario')
                ->listarProximoHorario(1, $itinerario, $hora);
        
        if($horario){
            echo $horario->getNome()->format('H:i');
        } else{
            $horario = $em->getRepository('CircularSiteBundle:Horario')
                ->listarPrimeiroHorario(1, $itinerario, $hora);
            echo $horario->getNome()->format('H:i');
        }
        
        return new Response();
    }
    
    public function todosHorariosAction($id_itinerario, $hora) {
        
        $em = $this->getDoctrine()->getManager();
        
        $itinerario = new Itinerario();
        $itinerario = $em->find('CircularSiteBundle:Itinerario', $id_itinerario);
        
        $horarios = $em->getRepository('CircularSiteBundle:Itinerario')
                ->listarTodosHorarios($id_itinerario);
        
        
        return $this->render('CircularSiteBundle:Itinerario:todosHorarios.html.twig', 
                array(
                    'horarios' => $horarios,
                    'hora' => $hora,
                    'itinerario' => $itinerario
                ));
    }
    
}
