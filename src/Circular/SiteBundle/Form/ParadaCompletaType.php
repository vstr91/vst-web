<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Circular\SiteBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

/**
 * Description of ParadaCompletaType
 *
 * @author Almir
 */
class ParadaCompletaType extends ParadaType {
    
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('referencia', null,
                    array(
                        'label' => 'Referência'
                    ))
            ->add('latitude', null,
                    array(
                        'label' => 'Latitude'
                    ))
            ->add('longitude', null,
                    array(
                        'label' => 'Longitude'
                    ))
            ->add('taxaDeEmbarque', null, 
                    array(
                        'label' => 'Taxa de Embarque (Opcional)'
                    ))
            ->add('bairro', null, 
                    array(
                        'label' => 'Bairro'
                    ))
           ->add('status', 'choice', array(
                    'choices' => array('0' => 'Ativo', '2' => 'Inativo', '3' => 'Aguardando Aprovação')
                ))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Circular\SiteBundle\Entity\Parada'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'circular_sitebundle_parada';
    }
    
}
