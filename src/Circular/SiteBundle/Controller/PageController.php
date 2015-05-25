<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Circular\SiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * Description of PageController
 *
 * @author Almir
 */
class PageController extends Controller {
    
    public function indexAction()
    {
        
        $em = $this->getDoctrine()->getManager();
        
        $paradas = $em->getRepository('CircularSiteBundle:Parada')
                ->listarTodos(null);
        
        $json = "[";
        
       // foreach ($paradas as $parada) {
            
            
//            $json .= "{lat:'".$parada->latitude."',lng:'-43.824914', 
//                        data:{nome:'Roberto Silveira',
//                            endereco:{rua:'Praça Nilo Peçanha', 
//                                numero:'S/N', bairro:'Centro'},
//                            cidade:'Barra do Piraí', 
//                                estado:'Rio de Janeiro', 
//                                    sigla:'RJ',
//                                    pais:'Brasil',
//                                        id:'1',
//                                            key:'barra-do-pirai',
//                                                destinos:'4',
//                        cidadesDestinos:'Valença - '}, 
//                        tag:'1',
//                                      options:{
//                                          icon: new google.maps.MarkerImage('imagens/brasoes/barra-do-pirai.png')
//                                      }
//                       }";
                       // }
                        
        return $this->render('CircularSiteBundle:Page:index.html.twig', 
                array(
                    'paradas' => $paradas
                ));
    }
    
    public function adminAction()
    {                   
        return $this->render('CircularSiteBundle:Page:admin.html.twig');
    }
    
    public function coverAction()
    {
        return $this->render('CircularSiteBundle:Page:cover.html.twig');
    }
    
}