<?php

namespace Vostre\LocalBundle\Form;

use Doctrine\ORM\EntityManager;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Vostre\LocalBundle\Entity\Estado;

class LocalType extends AbstractType {

    /** @var EntityManager */
    private $em;

    /**
     * Constructor
     * 
     * @param Doctrine $doctrine
     */
    public function __construct(EntityManager $doctrine) {
        $this->em = $doctrine;
    }

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
                ->add('nome')
                ->add('tipo', 'choice', array(
                    'choices' => array('0' => 'Cidade', '1' => 'Distrito')
                ))
                ->add('status', 'choice', array(
                    'choices' => array('0' => 'Ativo', '2' => 'Inativo')
                ))
                ->add('estado', 'entity', array(
                    'class' => 'VostreLocalBundle:Estado',
                    'placeholder' => 'Selecione um Estado'
                ))
                //->add('cidade')
        ;

        $formModifier = function(FormInterface $form, Estado $estado = null) {
            $cidades = null === $estado ? array() : $this->em->getRepository('VostreLocalBundle:Local')
                            ->findBy(array('estado' => $estado->getId()));

            $form->add('cidade', 'entity', array(
                'class' => 'VostreLocalBundle:Local',
                'placeholder' => '',
                'choices' => $cidades
            ));
        };

        $builder->addEventListener(FormEvents::PRE_SET_DATA, function(FormEvent $event) use ($formModifier) {
            $data = $event->getData();

            $formModifier($event->getForm(), $data->getEstado());
        });

        $builder->get('estado')->addEventListener(
                FormEvents::POST_SUBMIT, function (FormEvent $event) use ($formModifier) {
            // It's important here to fetch $event->getForm()->getData(), as
            // $event->getData() will get you the client data (that is, the ID)
            $estado = $event->getForm()->getData();

            // since we've added the listener to the child, we'll have to pass on
            // the parent to the callback functions!
            $formModifier($event->getForm()->getParent(), $estado);
        }
        );
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'Vostre\LocalBundle\Entity\Local'
        ));
    }

    /**
     * @return string
     */
    public function getName() {
        return 'vostre_localbundle_local';
    }

}
