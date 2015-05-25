<?php

namespace Proxies\__CG__\Vostre\SiteBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Servico extends \Vostre\SiteBundle\Entity\Servico implements \Doctrine\ORM\Proxy\Proxy
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
            return array('__isInitialized__', '' . "\0" . 'Vostre\\SiteBundle\\Entity\\Servico' . "\0" . 'id', '' . "\0" . 'Vostre\\SiteBundle\\Entity\\Servico' . "\0" . 'titulo', '' . "\0" . 'Vostre\\SiteBundle\\Entity\\Servico' . "\0" . 'descricao', '' . "\0" . 'Vostre\\SiteBundle\\Entity\\Servico' . "\0" . 'imagem', '' . "\0" . 'Vostre\\SiteBundle\\Entity\\Servico' . "\0" . 'file', '' . "\0" . 'Vostre\\SiteBundle\\Entity\\Servico' . "\0" . 'temp', '' . "\0" . 'Vostre\\SiteBundle\\Entity\\Servico' . "\0" . 'ordem', '' . "\0" . 'Vostre\\SiteBundle\\Entity\\Servico' . "\0" . 'situacao', '' . "\0" . 'Vostre\\SiteBundle\\Entity\\Servico' . "\0" . 'dataCadastro', '' . "\0" . 'Vostre\\SiteBundle\\Entity\\Servico' . "\0" . 'ultimaAlteracao', 'usuarioCadastro', 'usuarioUltimaAlteracao', '' . "\0" . 'Vostre\\SiteBundle\\Entity\\Servico' . "\0" . 'locale');
        }

        return array('__isInitialized__', '' . "\0" . 'Vostre\\SiteBundle\\Entity\\Servico' . "\0" . 'id', '' . "\0" . 'Vostre\\SiteBundle\\Entity\\Servico' . "\0" . 'titulo', '' . "\0" . 'Vostre\\SiteBundle\\Entity\\Servico' . "\0" . 'descricao', '' . "\0" . 'Vostre\\SiteBundle\\Entity\\Servico' . "\0" . 'imagem', '' . "\0" . 'Vostre\\SiteBundle\\Entity\\Servico' . "\0" . 'file', '' . "\0" . 'Vostre\\SiteBundle\\Entity\\Servico' . "\0" . 'temp', '' . "\0" . 'Vostre\\SiteBundle\\Entity\\Servico' . "\0" . 'ordem', '' . "\0" . 'Vostre\\SiteBundle\\Entity\\Servico' . "\0" . 'situacao', '' . "\0" . 'Vostre\\SiteBundle\\Entity\\Servico' . "\0" . 'dataCadastro', '' . "\0" . 'Vostre\\SiteBundle\\Entity\\Servico' . "\0" . 'ultimaAlteracao', 'usuarioCadastro', 'usuarioUltimaAlteracao', '' . "\0" . 'Vostre\\SiteBundle\\Entity\\Servico' . "\0" . 'locale');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Servico $proxy) {
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
    public function getAbsolutePath()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAbsolutePath', array());

        return parent::getAbsolutePath();
    }

    /**
     * {@inheritDoc}
     */
    public function getWebPath()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getWebPath', array());

        return parent::getWebPath();
    }

    /**
     * {@inheritDoc}
     */
    public function setFile(\Symfony\Component\HttpFoundation\File\UploadedFile $file = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFile', array($file));

        return parent::setFile($file);
    }

    /**
     * {@inheritDoc}
     */
    public function getFile()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFile', array());

        return parent::getFile();
    }

    /**
     * {@inheritDoc}
     */
    public function preUpload()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'preUpload', array());

        return parent::preUpload();
    }

    /**
     * {@inheritDoc}
     */
    public function upload()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'upload', array());

        return parent::upload();
    }

    /**
     * {@inheritDoc}
     */
    public function removeUpload()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeUpload', array());

        return parent::removeUpload();
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
    public function setTitulo($titulo)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTitulo', array($titulo));

        return parent::setTitulo($titulo);
    }

    /**
     * {@inheritDoc}
     */
    public function getTitulo()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTitulo', array());

        return parent::getTitulo();
    }

    /**
     * {@inheritDoc}
     */
    public function setDescricao($descricao)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDescricao', array($descricao));

        return parent::setDescricao($descricao);
    }

    /**
     * {@inheritDoc}
     */
    public function getDescricao()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDescricao', array());

        return parent::getDescricao();
    }

    /**
     * {@inheritDoc}
     */
    public function setImagem($imagem)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setImagem', array($imagem));

        return parent::setImagem($imagem);
    }

    /**
     * {@inheritDoc}
     */
    public function getImagem()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getImagem', array());

        return parent::getImagem();
    }

    /**
     * {@inheritDoc}
     */
    public function setOrdem($ordem)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setOrdem', array($ordem));

        return parent::setOrdem($ordem);
    }

    /**
     * {@inheritDoc}
     */
    public function getOrdem()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getOrdem', array());

        return parent::getOrdem();
    }

    /**
     * {@inheritDoc}
     */
    public function setSituacao($situacao)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSituacao', array($situacao));

        return parent::setSituacao($situacao);
    }

    /**
     * {@inheritDoc}
     */
    public function getSituacao()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSituacao', array());

        return parent::getSituacao();
    }

    /**
     * {@inheritDoc}
     */
    public function setDataCadastro($dataCadastro)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDataCadastro', array($dataCadastro));

        return parent::setDataCadastro($dataCadastro);
    }

    /**
     * {@inheritDoc}
     */
    public function getDataCadastro()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDataCadastro', array());

        return parent::getDataCadastro();
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

    /**
     * {@inheritDoc}
     */
    public function setUsuarioCadastro(\Vostre\CentralBundle\Entity\Usuario $usuarioCadastro = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUsuarioCadastro', array($usuarioCadastro));

        return parent::setUsuarioCadastro($usuarioCadastro);
    }

    /**
     * {@inheritDoc}
     */
    public function getUsuarioCadastro()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUsuarioCadastro', array());

        return parent::getUsuarioCadastro();
    }

    /**
     * {@inheritDoc}
     */
    public function setUsuarioUltimaAlteracao(\Vostre\CentralBundle\Entity\Usuario $usuarioUltimaAlteracao = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUsuarioUltimaAlteracao', array($usuarioUltimaAlteracao));

        return parent::setUsuarioUltimaAlteracao($usuarioUltimaAlteracao);
    }

    /**
     * {@inheritDoc}
     */
    public function getUsuarioUltimaAlteracao()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUsuarioUltimaAlteracao', array());

        return parent::getUsuarioUltimaAlteracao();
    }

    /**
     * {@inheritDoc}
     */
    public function setTranslatableLocale($locale)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTranslatableLocale', array($locale));

        return parent::setTranslatableLocale($locale);
    }

}
