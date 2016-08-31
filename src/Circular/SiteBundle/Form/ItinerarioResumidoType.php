<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Circular\SiteBundle\Form;

use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

/**
 * Description of ItinerarioResumidoType
 *
 * @author Cefet
 */
class ItinerarioResumidoType extends ItinerarioType {
    
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('valor')
            //->add('distancia')
            ->add('status', 'choice', array(
                    'choices' => array('0' => 'Ativo', '2' => 'Inativo')
                ))
            ->add('empresa')
            ->add('observacao')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Circular\SiteBundle\Entity\Itinerario'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'circular_sitebundle_itinerario';
    }
    
}
