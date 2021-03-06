<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Vostre\CentralBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Vostre\CentralBundle\Form\RecadoType;
use Vostre\LocalBundle\Entity\Bairro;
use Vostre\LocalBundle\Entity\Local;
use Vostre\LocalBundle\Form\BairroType;
use Vostre\LocalBundle\Form\EstadoType;
use Vostre\LocalBundle\Form\LocalType;
use Vostre\LocalBundle\Form\PaisType;

/**
 * Description of CentralController
 *
 * @author Almir
 */
class CentralController extends Controller {
    
    public function indexAction()
    {
        
        $user = $this->getUser();
        
        $em = $this->getDoctrine()->getManager();
        
        $acessos = $em->getRepository('CircularSiteBundle:APIToken')
                ->listarUltimosAcessos(20);
        
         $contatos = $em->getRepository('CircularSiteBundle:APIToken')
                ->rankingAcessosPorIdentificador('acesso');
        
//        $recadoType = new RecadoType();
//        $formRecado = $this->createForm($recadoType);
        
        return $this->render('VostreCentralBundle:Central:index.html.twig', array(
            'usuario' => $user,
            //'formRecado' => $formRecado->createView(),
            'acessos' => $acessos,
            'contatos' => $contatos
        ));
    }
    
    public function indexPaisAction()
    {
        
        $user = $this->getUser();
        
        $em = $this->getDoctrine()->getManager();
        
        $paisType = new PaisType();
        $formPais = $this->createForm($paisType);
        
        $paises = $em->getRepository('VostreLocalBundle:Pais')
                ->findAll();
        
        return $this->render('VostreCentralBundle:Admin:Pais/indexPais.html.twig', array(
            'usuario' => $user,
            'paises' => $paises,
            'formPais' => $formPais->createView()
        ));
    }
    
    public function indexEstadoAction()
    {
        
        $user = $this->getUser();
        
        $em = $this->getDoctrine()->getManager();
        
        $estadoType = new EstadoType();
        $formEstado = $this->createForm($estadoType);
        
        $estados = $em->getRepository('VostreLocalBundle:Estado')
                ->findAll();
        
        return $this->render('VostreCentralBundle:Admin:Estado/indexEstado.html.twig', array(
            'usuario' => $user,
            'estados' => $estados,
            'formEstado' => $formEstado->createView()
        ));
    }
    
    public function indexLocalAction(Request $request)
    {
        
        $user = $this->getUser();
        
        $em = $this->getDoctrine()->getManager();
        $local = new Local();
//        $request = $this->getRequest();
        
        $localType = new LocalType($em);
        $formLocal = $this->createForm($localType, $local);
        $formLocal->handleRequest($request);
        
        $locais = $em->getRepository('VostreLocalBundle:Local')
                ->findAll();
        
        return $this->render('VostreCentralBundle:Admin:Local/indexLocal.html.twig', array(
            'usuario' => $user,
            'locais' => $locais,
            'formLocal' => $formLocal->createView()
        ));
    }
    
    public function indexBairroAction(Request $request)
    {
        
        $user = $this->getUser();
        
        $em = $this->getDoctrine()->getManager();
        $bairro = new Bairro();
//        $request = $this->getRequest();
        
        $bairroType = new BairroType($em);
        $formBairro = $this->createForm($bairroType, $bairro);
        $formBairro->handleRequest($request);
        
        $bairros = $em->getRepository('VostreLocalBundle:Bairro')
                ->findAll();
        
        return $this->render('VostreCentralBundle:Admin:Bairro/indexBairro.html.twig', array(
            'usuario' => $user,
            'bairros' => $bairros,
            'formBairro' => $formBairro->createView()
        ));
    }
    
    public function excluirContatoAction($id_contato)
    {
        
        $user = $this->getUser();
        
        $em = $this->getDoctrine()->getManager();
        
        $contato = $em->getRepository('VostreSiteBundle:Contato')->find($id_contato);
        
        $em->remove($contato);
        $em->flush();
        
        return new \Symfony\Component\HttpFoundation\Response("Excluído");
    }
    
    public function carregarContatoAction($id_contato)
    {
        
        $user = $this->getUser();
        
        $em = $this->getDoctrine()->getManager();
        
        $contato = $em->getRepository('VostreSiteBundle:Contato')->find($id_contato);
        
        return $this->render('VostreCentralBundle:Admin:Contato/detalheContato.html.twig', array(
            'usuario' => $user,
            'contato' => $contato
        ));
    }
    
    public function carregaAcessoPorIdentificadorAction($identificador)
    {
        
        $user = $this->getUser();
        
        $em = $this->getDoctrine()->getManager();
        
        $acessosDados = $em->getRepository('CircularSiteBundle:APIToken')
                ->listarUltimosAcessosPorIdentificador(null, $identificador, 'dados');
        
        $acessosMensagens = $em->getRepository('CircularSiteBundle:APIToken')
                ->listarUltimosAcessosPorIdentificador(null, $identificador, 'mensagem');
        
        return $this->render('VostreCentralBundle:Admin:APIToken/detalhes.html.twig', array(
            'usuario' => $user,
            'acessosDados' => $acessosDados,
            'acessosMensagens' => $acessosMensagens
        ));
    }
    
}
