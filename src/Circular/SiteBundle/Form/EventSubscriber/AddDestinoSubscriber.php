<?php
 
namespace Circular\SiteBundle\Form\EventSubscriber;

use Doctrine\ORM\EntityRepository;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\Form\FormFactoryInterface;
 
class AddDestinoSubscriber implements EventSubscriberInterface
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
 
    private function addDestinoForm($form, $partida)
    {  
        $form->add($this->factory->createNamed('destino','entity', null, array(
            'class'         => 'VostreLocalBundle:Bairro',
            'empty_value'   => 'Destino',
            'auto_initialize' => false,
            'query_builder' => function (EntityRepository $repository) use ($partida) {
                                        return $this->em->getRepository('CircularSiteBundle:Itinerario')
                                                ->listarTodosDestinosPorPartida($partida);
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
 
        $partida = ($data) ? $data : null ;
        
        $this->addDestinoForm($form, $partida);
    }
 
    public function preBind(FormEvent $event)
    {
        $data = $event->getData();
        $form = $event->getForm();
 
        if (null === $data) {
            return;
        }
 
        $partida = array_key_exists('partida', $data) ? $data['partida'] : null;
        $this->addDestinoForm($form, $partida);
    }
}