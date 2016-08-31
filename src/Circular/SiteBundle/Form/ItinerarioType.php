<?php

namespace Circular\SiteBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ItinerarioType extends AbstractType
{
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
            ->add('partida')
            ->add('destino')
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
