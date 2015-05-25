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
    
}
