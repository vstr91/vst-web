<?php

namespace Circular\SiteBundle\Form\DataTransformer;

use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\Form\DataTransformerInterface;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of TimeToTextTransformer
 *
 * @author Almir
 */
class TimeToTextTransformer implements DataTransformerInterface {
    
    private $manager;

    public function __construct(ObjectManager $manager)
    {
        $this->manager = $manager;
    }
    
    public function reverseTransform($text) {
        
        if (null === $text) {
            return '';
        }
        
        return \DateTime::createFromFormat('H:i', $text);
        
    }

    public function transform($time) {
        
        if (null === $time) {
            return '';
        }
        
        return $time->format("H:i");
        
    }

//put your code here
}
