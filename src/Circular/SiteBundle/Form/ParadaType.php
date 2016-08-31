<?php

namespace Circular\SiteBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ParadaType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
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
            ->add('bairro', null, 
                    array(
                        'label' => 'Bairro'
                    ))
            ->add('taxaDeEmbarque', null, 
                    array(
                        'label' => 'Taxa de Embarque (Opcional)'
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
