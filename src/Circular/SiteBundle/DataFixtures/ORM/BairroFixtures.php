<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Circular\SiteBundle\DataFixtures\ORM;

use Circular\SiteBundle\Entity\Bairro;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

/**
 * Description of BairroFixtures
 *
 * @author Almir
 */
class BairroFixtures extends AbstractFixture implements OrderedFixtureInterface {
    
    public function load(ObjectManager $manager){
        
        $bairro1 = new Bairro();
        $bairro1->setNome('Centro');
        $bairro1->setLocal($manager->merge($this->getReference('local-1')));
        $bairro1->setStatus(0);
        $manager->persist($bairro1);
        
        $manager->flush();
        
        $this->addReference('bairro-1', $bairro1);
    }
    
    public function getOrder(){
        return 3;
    }
    
}
