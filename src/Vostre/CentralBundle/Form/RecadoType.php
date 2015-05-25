<?php

namespace Vostre\CentralBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class RecadoType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            //->add('dataCadastro')
            ->add('dataInicial', 'text', array(
                'label' => "Data Inicial",
                'attr' => array(
                    'class' => 'date'
                )
            ))
            ->add('dataFinal', 'text', array(
                'label' => "Data Final",
                'attr' => array(
                    'class' => 'date'
                )
            ))
            ->add('titulo', null, array(
                'label' => 'Título'
            ))
            ->add('descricao', null, array(
                'label' => 'Descrição'
            ))
            //->add('lido')
            //->add('usuarioCadastro')
            ->add('usuarioDestinatario', null, array(
                'label' => 'Destinatário'
            ))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Vostre\CentralBundle\Entity\Recado'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'vostre_centralbundle_recado';
    }
}
