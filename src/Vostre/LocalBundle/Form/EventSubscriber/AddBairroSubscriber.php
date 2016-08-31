<?php
 
namespace Vostre\LocalBundle\Form\EventSubscriber;

use Doctrine\ORM\EntityRepository;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\Form\FormFactoryInterface;
use Vostre\LocalBundle\Entity\Local;
 
class AddBairroSubscriber implements EventSubscriberInterface
{
    private $factory;
    private $em;
 
    public function __construct(FormFactoryInterface $factory, \Doctrine\ORM\EntityManager $em)
    {
        $this->factory = $factory;
        $this->em = $em;
    }
 
    public static function getSubscribedEvents()
    {
        return array(
            FormEvents::PRE_SET_DATA => 'preSetData',
            FormEvents::PRE_BIND     => 'preBind'
        );
    }
 
    private function addBairroForm($form, $local)
    {  
        $form->add($this->factory->createNamed('partida','entity', null, array(
            'class'         => 'VostreLocalBundle:Bairro',
            'empty_value'   => 'Bairro',
            'auto_initialize' => false,
            'query_builder' => function (EntityRepository $repository) use ($local) {
                                        return $this->em->getRepository('VostreLocalBundle:Bairro')
                                                ->listarTodosVinculadosPorLocal($local);
            }
        )));
    }
 
    public function preSetData(FormEvent $event)
    {
        $data = $event->getData();
        $form = $event->getForm();
 
        if (null === $data) {
            return;
        }
        
        //die(var_dump($data));
 
        $local = ($data) ? $data->getLocal() : null ;
        
        $this->addBairroForm($form, $local);
    }
 
    public function preBind(FormEvent $event)
    {
        $data = $event->getData();
        $form = $event->getForm();
 
        if (null === $data) {
            return;
        }
 
        $local = array_key_exists('local', $data) ? $data['local'] : null;
        $this->addBairroForm($form, $local);
    }
}