<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Circular\SiteBundle\DataFixtures\ORM;

use Circular\SiteBundle\Entity\Local;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

/**
 * Description of LocalFixtures
 *
 * @author Almir
 */
class LocalFixtures extends AbstractFixture implements OrderedFixtureInterface {
    
    public function load(ObjectManager $manager){
        
        $local1 = new Local();
        $local1->setNome('Barra do Piraí');
        $local1->setTipo(0);
        $local1->setEstado($manager->merge($this->getReference('estado-1')));
        $local1->setCidade($local1);
        $local1->setStatus(0);
        $manager->persist($local1);
        
        $manager->flush();
        
        $this->addReference('local-1', $local1);
    }
    
    public function getOrder(){
        return 2;
    }
    
}
