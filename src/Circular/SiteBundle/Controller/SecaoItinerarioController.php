<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Circular\SiteBundle\Controller;

use Circular\SiteBundle\Entity\HorarioItinerario;
use Circular\SiteBundle\Entity\SecaoItinerario;
use Circular\SiteBundle\Form\SecaoItinerarioType;
use FOS\RestBundle\Controller\FOSRestController;

/**
 * Description of HorarioItinerarioController
 *
 * @author Almir
 */
class SecaoItinerarioController extends FOSRestController {

    public function cadastrarAction() {

        $em = $this->getDoctrine()->getManager();

        $dados = $this->getRequest()->request->all();

        $idItinerario = $dados['circular_sitebundle_horarioitinerario']['itinerario'];

        if (!empty($dados['chk-dia'])) {

            $horarios = $dados['chk-dia'];

            foreach ($horarios as $horario) {
                echo "<p>ID Horario: " . key($horarios) . "</p>";

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

                for ($i = 0; $i < 7; $i++) {
                    if (isset($horario[$i])) {
                        $dias[$i] = $horario[$i];
                    } else {
                        $dias[$i] = 0;
                    }
                }
                next($horario);
                next($horarios);

//                $dhi = new DiaHorarioItinerario();
//                $dhi->setHorarioItinerario($horarioItinerario);

                for ($i = 0; $i < 7; $i++) {

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

    public function carregarAction($idItinerario) {

        $user = $this->getUser();

        $em = $this->getDoctrine()->getManager();

//        $horarioItinerario = $em->getRepository('CircularSiteBundle:HorarioItinerario')
//                ->find($idHorarioItinerario);

        $itinerario = $em->getRepository('CircularSiteBundle:Itinerario')
                ->findOneBy(array('id' => $idItinerario));
        
        $secaoItinerario = new SecaoItinerario();
        $secaoItinerario->setItinerario($itinerario);

        $secaoItinerarioType = new SecaoItinerarioType();
        $formSecaoItinerario = $this->createForm($secaoItinerarioType, $secaoItinerario);

        $secoes = $em->getRepository('CircularSiteBundle:SecaoItinerario')
                ->findBy(array('itinerario' => $itinerario->getId(), 'status' => 0), array('ordem' => 'ASC'));
        
        $secoesInativas = $em->getRepository('CircularSiteBundle:SecaoItinerario')
                ->findBy(array('itinerario' => $itinerario->getId(), 'status' => 2), array('ordem' => 'ASC'));

        return $this->render('CircularSiteBundle:Admin:SecaoItinerario/carregaSecaoItinerario.html.twig', array(
                    'usuario' => $user,
                    'secoes' => $secoes,
                    'secoesInativas' => $secoesInativas,
                    'itinerario' => $itinerario,
                    'formSecaoItinerario' => $formSecaoItinerario->createView()
        ));
    }

    public function editarAction() {

        $em = $this->getDoctrine()->getManager();

        $dados = $this->getRequest()->request->get('secoes');
        $idItinerario = $this->getRequest()->request->get('idItinerario');
        
        $itinerario = $em->getRepository('CircularSiteBundle:Itinerario')
                        ->findOneBy(array('id' => $idItinerario));

        if($itinerario){
            
            $em->getRepository('CircularSiteBundle:SecaoItinerario')
                        ->invalidaTodasSecoesItinerario($itinerario->getId());
            
            foreach ($dados as $dado){
                echo $dado['nome']." | ".$dado['valor']." | ".$dado['id'];
                echo "<br />";
                
                $secao = $em->getRepository('CircularSiteBundle:SecaoItinerario')
                        ->find($dado['id']);
                
                if($secao == null){
                    $secao = new SecaoItinerario();
                }
                
                $secao->setNome($dado['nome']);
                $secao->setValor($dado['valor']);
                $secao->setOrdem($dado['ordem']);
                $secao->setStatus(0);
                $secao->setItinerario($itinerario);
                
                $em->persist($secao);
                $em->flush();
                
            }
        }
        
        return new \Symfony\Component\HttpFoundation\Response();//$this->redirect($this->generateUrl('circular_site_admin_secoes_itinerarios'));
    }

}
