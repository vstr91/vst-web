<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Circular\SiteBundle\DataFixtures\ORM;

use Circular\SiteBundle\Entity\Estado;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

/**
 * Description of EstadoFixtures
 *
 * @author Almir
 */
class EstadoFixtures extends AbstractFixture implements OrderedFixtureInterface {
    
    public function load(ObjectManager $manager){
        
        $estado1 = new Estado();
        $estado1->setNome('Rio de Janeiro');
        $estado1->setSigla('RJ');
        $estado1->setPais($manager->merge($this->getReference('pais-1')));
        $estado1->setStatus(0);
        $manager->persist($estado1);
        
        $manager->flush();
        
        $this->addReference('estado-1', $estado1);
    }
    
    public function getOrder(){
        return 1;
    }

//put your code here
}
