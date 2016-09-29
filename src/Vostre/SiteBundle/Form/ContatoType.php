<?php

namespace Vostre\SiteBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ContatoType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nome', null, array(
                'label' => 'site.comum.formulario.contato.nome'
            ))
            ->add('email', null, array(
                'label' => 'site.comum.formulario.contato.email'
            ))
            ->add('titulo', null, array(
                'label' => 'site.comum.formulario.contato.titulo'
            ))
            ->add('mensagem', null, array(
                'label' => 'site.comum.formulario.contato.mensagem',
                'attr' => array('rows' => '3')
            ))
            //->add('dataCadastro')
            //->add('lida')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Vostre\SiteBundle\Entity\Contato'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'contato';
    }
}
