<?php

namespace Proxies\__CG__\Circular\SiteBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Parada extends \Circular\SiteBundle\Entity\Parada implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array();



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return array('__isInitialized__', '' . "\0" . 'Circular\\SiteBundle\\Entity\\Parada' . "\0" . 'id', '' . "\0" . 'Circular\\SiteBundle\\Entity\\Parada' . "\0" . 'referencia', '' . "\0" . 'Circular\\SiteBundle\\Entity\\Parada' . "\0" . 'latitude', '' . "\0" . 'Circular\\SiteBundle\\Entity\\Parada' . "\0" . 'longitude', '' . "\0" . 'Circular\\SiteBundle\\Entity\\Parada' . "\0" . 'status', '' . "\0" . 'Circular\\SiteBundle\\Entity\\Parada' . "\0" . 'bairro', '' . "\0" . 'Circular\\SiteBundle\\Entity\\Parada' . "\0" . 'itinerarios', '' . "\0" . 'Circular\\SiteBundle\\Entity\\Parada' . "\0" . 'usuario', 'dataCriacao', 'ultimaAlteracao');
        }

        return array('__isInitialized__', '' . "\0" . 'Circular\\SiteBundle\\Entity\\Parada' . "\0" . 'id', '' . "\0" . 'Circular\\SiteBundle\\Entity\\Parada' . "\0" . 'referencia', '' . "\0" . 'Circular\\SiteBundle\\Entity\\Parada' . "\0" . 'latitude', '' . "\0" . 'Circular\\SiteBundle\\Entity\\Parada' . "\0" . 'longitude', '' . "\0" . 'Circular\\SiteBundle\\Entity\\Parada' . "\0" . 'status', '' . "\0" . 'Circular\\SiteBundle\\Entity\\Parada' . "\0" . 'bairro', '' . "\0" . 'Circular\\SiteBundle\\Entity\\Parada' . "\0" . 'itinerarios', '' . "\0" . 'Circular\\SiteBundle\\Entity\\Parada' . "\0" . 'usuario', 'dataCriacao', 'ultimaAlteracao');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Parada $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', array());
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', array());
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', array());

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function setReferencia($referencia)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setReferencia', array($referencia));

        return parent::setReferencia($referencia);
    }

    /**
     * {@inheritDoc}
     */
    public function getReferencia()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getReferencia', array());

        return parent::getReferencia();
    }

    /**
     * {@inheritDoc}
     */
    public function setLatitude($latitude)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLatitude', array($latitude));

        return parent::setLatitude($latitude);
    }

    /**
     * {@inheritDoc}
     */
    public function getLatitude()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLatitude', array());

        return parent::getLatitude();
    }

    /**
     * {@inheritDoc}
     */
    public function setLongitude($longitude)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLongitude', array($longitude));

        return parent::setLongitude($longitude);
    }

    /**
     * {@inheritDoc}
     */
    public function getLongitude()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLongitude', array());

        return parent::getLongitude();
    }

    /**
     * {@inheritDoc}
     */
    public function setStatus($status)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setStatus', array($status));

        return parent::setStatus($status);
    }

    /**
     * {@inheritDoc}
     */
    public function getStatus()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getStatus', array());

        return parent::getStatus();
    }

    /**
     * {@inheritDoc}
     */
    public function setBairro(\Vostre\LocalBundle\Entity\Bairro $bairro = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setBairro', array($bairro));

        return parent::setBairro($bairro);
    }

    /**
     * {@inheritDoc}
     */
    public function getBairro()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getBairro', array());

        return parent::getBairro();
    }

    /**
     * {@inheritDoc}
     */
    public function addItinerario(\Circular\SiteBundle\Entity\ParadaItinerario $itinerarios)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addItinerario', array($itinerarios));

        return parent::addItinerario($itinerarios);
    }

    /**
     * {@inheritDoc}
     */
    public function removeItinerario(\Circular\SiteBundle\Entity\ParadaItinerario $itinerarios)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeItinerario', array($itinerarios));

        return parent::removeItinerario($itinerarios);
    }

    /**
     * {@inheritDoc}
     */
    public function getItinerarios()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getItinerarios', array());

        return parent::getItinerarios();
    }

    /**
     * {@inheritDoc}
     */
    public function setUsuario(\Vostre\CentralBundle\Entity\Usuario $usuario = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUsuario', array($usuario));

        return parent::setUsuario($usuario);
    }

    /**
     * {@inheritDoc}
     */
    public function getUsuario()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUsuario', array());

        return parent::getUsuario();
    }

    /**
     * {@inheritDoc}
     */
    public function prePersist()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'prePersist', array());

        return parent::prePersist();
    }

    /**
     * {@inheritDoc}
     */
    public function preUpdate()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'preUpdate', array());

        return parent::preUpdate();
    }

    /**
     * {@inheritDoc}
     */
    public function setDataCriacao($dataCriacao)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDataCriacao', array($dataCriacao));

        return parent::setDataCriacao($dataCriacao);
    }

    /**
     * {@inheritDoc}
     */
    public function getDataCriacao()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDataCriacao', array());

        return parent::getDataCriacao();
    }

    /**
     * {@inheritDoc}
     */
    public function setUltimaAlteracao($ultimaAlteracao)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUltimaAlteracao', array($ultimaAlteracao));

        return parent::setUltimaAlteracao($ultimaAlteracao);
    }

    /**
     * {@inheritDoc}
     */
    public function getUltimaAlteracao()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUltimaAlteracao', array());

        return parent::getUltimaAlteracao();
    }

}
