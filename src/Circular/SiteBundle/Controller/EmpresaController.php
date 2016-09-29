<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Circular\SiteBundle\Controller;

use Circular\SiteBundle\Entity\Empresa;
use Circular\SiteBundle\Form\EmpresaType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * Description of EmpresaController
 *
 * @author Almir
 */
class EmpresaController extends Controller {
    
    public function cadastrarAction($id_empresa){
        $empresa = null;
        $request = $this->getRequest();
        
        $user = $this->getUser();
        
        $em = $this->getDoctrine()->getManager();
        
        //verifica se ja existe registro
        $empresa = $em->find('CircularSiteBundle:Empresa', $id_empresa);
        
        //se nao existir, cria novo objeto
        if(is_null($empresa)){
            $empresa = new Empresa();
        }
        
        $form = $this->createForm(new EmpresaType(), $empresa);
        $form->bind($request);
        
        if($form->isValid()){
            
            //verifica se o objeto sera inativado. Em caso positivo, verifica se existem registros ativos vinculados
            //a ele. Se existirem, nao deixa inativar
            
            if($empresa->getStatus() == 2){
                
                $registrosVinculados = $em->getRepository('CircularSiteBundle:Empresa')
                        ->listarRegistrosVinculados($empresa)['total'];
                
                if($registrosVinculados > 0){
                    
                    $flashBag = $this->get('session')->getFlashBag();
                    $flashBag->get('aviso-empresa'); // gets message and clears type
                    $flashBag->set('aviso-empresa', 'Empresa contém registros ativos vinculados '
                            . 'e não pode ser inativada. Nenhuma alteração foi realizada.');
                    return $this->redirect($this->generateUrl('circular_site_admin_empresas'));
                }
                
            }
            
            //cadastra ou edita objeto
            
            $em->persist($empresa);
            $em->flush();
            
            $empresas = $em->getRepository('CircularSiteBundle:Empresa')
                ->findAll();
            
            return $this->redirect($this->generateUrl('circular_site_admin_empresas'));
        }
        
        return $this->render('CircularSiteBundle:Admin:indexEmpresas.html.twig', 
                array(
                    'usuario' => $user,
                    'empresas' => $empresas,
                    'formEmpresa' => $form->createView()
                ));
        
    }
    
    public function formAction($id_empresa){
        $request = $this->getRequest();
        
        $em = $this->getDoctrine()->getManager();
        $empresa = $em->find('CircularSiteBundle:Empresa', $id_empresa);
        
        if(is_null($empresa)){
            $empresa = new Empresa();
        }
        
        $form = $this->createForm(new EmpresaType(), $empresa);
        
//        $form->bind($request);
        
        return $this->render('CircularSiteBundle:Admin:Empresa/form.html.twig',
                array(
                    'form' => $form->createView(),
                    'empresa' => $empresa
                ));
    }
    
}
