<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Circular\SiteBundle\Entity;

use Doctrine\ORM\Mapping\Entity;

/**
 * @Entity
 */
class ParadaCollab extends Parada {
    
    private $paradaRelacionada;
    
    /**
     * @var integer
     */
    private $status;

    /**
     * @var \Vostre\LocalBundle\Entity\Bairro
     */
    private $bairro;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $itinerarios;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->itinerarios = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set status
     *
     * @param integer $status
     * @return ParadaCollab
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return integer 
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set bairro
     *
     * @param \Circular\SiteBundle\Entity\Bairro $bairro
     * @return ParadaCollab
     */
    public function setBairro(\Vostre\LocalBundle\Entity\Bairro $bairro = null)
    {
        $this->bairro = $bairro;

        return $this;
    }

    /**
     * Get bairro
     *
     * @return \Circular\SiteBundle\Entity\Bairro 
     */
    public function getBairro()
    {
        return $this->bairro;
    }

    /**
     * Add itinerarios
     *
     * @param \Circular\SiteBundle\Entity\ParadaItinerario $itinerarios
     * @return ParadaCollab
     */
    public function addItinerario(\Circular\SiteBundle\Entity\ParadaItinerario $itinerarios)
    {
        $this->itinerarios[] = $itinerarios;

        return $this;
    }

    /**
     * Remove itinerarios
     *
     * @param \Circular\SiteBundle\Entity\ParadaItinerario $itinerarios
     */
    public function removeItinerario(\Circular\SiteBundle\Entity\ParadaItinerario $itinerarios)
    {
        $this->itinerarios->removeElement($itinerarios);
    }

    /**
     * Get itinerarios
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getItinerarios()
    {
        return $this->itinerarios;
    }
    /**
     * @var \DateTime
     */
    protected $dataCriacao;

    /**
     * @var \DateTime
     */
    protected $ultimaAlteracao;


    /**
     * Set dataCriacao
     *
     * @param \DateTime $dataCriacao
     * @return ParadaCollab
     */
    public function setDataCriacao($dataCriacao)
    {
        $this->dataCriacao = $dataCriacao;

        return $this;
    }

    /**
     * Get dataCriacao
     *
     * @return \DateTime 
     */
    public function getDataCriacao()
    {
        return $this->dataCriacao;
    }

    /**
     * Set ultimaAlteracao
     *
     * @param \DateTime $ultimaAlteracao
     * @return ParadaCollab
     */
    public function setUltimaAlteracao($ultimaAlteracao)
    {
        $this->ultimaAlteracao = $ultimaAlteracao;

        return $this;
    }

    /**
     * Get ultimaAlteracao
     *
     * @return \DateTime 
     */
    public function getUltimaAlteracao()
    {
        return $this->ultimaAlteracao;
    }
}
