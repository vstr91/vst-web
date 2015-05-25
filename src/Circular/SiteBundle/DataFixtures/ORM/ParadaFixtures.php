<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Circular\SiteBundle\DataFixtures\ORM;

use Circular\SiteBundle\Entity\Parada;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

/**
 * Description of ParadaFixtures
 *
 * @author Almir
 */
class ParadaFixtures extends AbstractFixture implements OrderedFixtureInterface {
    
    public function load(ObjectManager $manager){
        
        $parada1 = new Parada();
        $parada1->setReferencia('Terminal de Ônibus - Centro');
        $parada1->setLatitude('-22.470995');
        $parada1->setLongitude('-43.825270');
        $parada1->setBairro($manager->merge($this->getReference('bairro-1')));
        $parada1->setStatus(0);
        $manager->persist($parada1);
        
        $manager->flush();
        
        $this->addReference('parada-1', $parada1);
    }
    
    public function getOrder(){
        return 4;
    }
    
}
