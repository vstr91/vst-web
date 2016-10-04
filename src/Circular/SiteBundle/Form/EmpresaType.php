<?php

namespace Circular\SiteBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class EmpresaType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('razaoSocial')
            ->add('fantasia')
//            ->add('cnpj')
//            ->add('telefone')
//            ->add('site')
//            ->add('rua')
//            ->add('numero')
            ->add('status', 'choice', array(
                    'choices' => array('0' => 'Ativo', '2' => 'Inativo')
                ))
//            ->add('bairro')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Circular\SiteBundle\Entity\Empresa'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'circular_sitebundle_empresa';
    }
}
