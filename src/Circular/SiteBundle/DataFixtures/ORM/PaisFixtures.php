<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Circular\SiteBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Circular\SiteBundle\Entity\Pais;

/**
 * Description of PaisFixture
 *
 * @author Almir Júnior
 */
class PaisFixtures extends AbstractFixture implements OrderedFixtureInterface {
    
    public function load(ObjectManager $manager){
        
        $pais1 = new Pais();
        $pais1->setNome('Brasil');
        $pais1->setIso3('BRA');
        $pais1->setStatus(0);
        $manager->persist($pais1);
        
        $manager->flush();
        
        $this->addReference('pais-1', $pais1);
    }
    
    public function getOrder(){
        return 0;
    } 
     
}
