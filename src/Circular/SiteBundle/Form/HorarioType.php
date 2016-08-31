<?php

namespace Circular\SiteBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class HorarioType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nome')
            ->add('status', 'choice', array(
                    'choices' => array('0' => 'Ativo', '2' => 'Inativo')
                ))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Circular\SiteBundle\Entity\Horario'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'circular_sitebundle_horario';
    }
}
