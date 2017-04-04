<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Circular\SiteBundle\Entity;

use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ORM\Mapping as ORM;
use JMS\Serializer\Annotation\ExclusionPolicy;
use JMS\Serializer\Annotation\Expose;

/**
 * Description of Itinerario
 *
 * @author Almir
 */

/**
 * Itinerario
 *
 * @ORM\Entity(repositoryClass="Circular\SiteBundle\Entity\Repository\ItinerarioRepository")
 * @ORM\Table(name="circular_itinerario")
 * @ORM\HasLifecycleCallbacks()
 * @ExclusionPolicy("all")
 */
class Itinerario {
    
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @Expose
     */
    private $id;
    
    /**
     * @ORM\ManyToOne(targetEntity="Vostre\LocalBundle\Entity\Bairro")
     * @ORM\JoinColumn(name="id_partida", referencedColumnName="id")
     * @Expose
     */
    protected $partida;
    
    /**
     * @ORM\ManyToOne(targetEntity="Vostre\LocalBundle\Entity\Bairro")
     * @ORM\JoinColumn(name="id_destino", referencedColumnName="id")
     * @Expose
     */
    protected $destino;
    
    /**
     * @ORM\ManyToOne(targetEntity="Empresa")
     * @ORM\JoinColumn(name="id_empresa", referencedColumnName="id")
     * @Expose
     */
    protected $empresa;
    
    /**
     * @ORM\Column(type="decimal", scale=2, nullable=true)
     * @Expose
     */
    protected $valor;
    
    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     * @Expose
     */
    protected $observacao;
    
    /**
     * @ORM\Column(type="decimal", scale=2, nullable=true)
     * @Expose
     */
    protected $distancia;
    
    /**
     @ORM\Column(name="duracao", type="time", nullable=true)
     * @Expose
     */
    protected $duracao;
    
    /**
     * @ORM\Column(type="integer")
     * @Expose
     */
    protected $status = 0;
    
    /**
     * @ORM\Column(type="datetime")
     */
    protected $dataCriacao;
    
    /**
     * @ORM\Column(type="datetime")
     */
    protected $ultimaAlteracao;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set valor
     *
     * @param string $valor
     * @return Itinerario
     */
    public function setValor($valor)
    {
        $this->valor = $valor;

        return $this;
    }

    /**
     * Get valor
     *
     * @return string 
     */
    public function getValor()
    {
        return $this->valor;
    }

    /**
     * Set distancia
     *
     * @param string $distancia
     * @return Itinerario
     */
    public function setDistancia($distancia)
    {
        $this->distancia = $distancia;

        return $this;
    }

    /**
     * Get distancia
     *
     * @return string 
     */
    public function getDistancia()
    {
        return $this->distancia;
    }

    /**
     * Set status
     *
     * @param integer $status
     * @return Itinerario
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
     * Set partida
     *
     * @param \Vostre\LocalBundle\Entity\Bairro $partida
     * @return Itinerario
     */
    public function setPartida(\Vostre\LocalBundle\Entity\Bairro $partida = null)
    {
        $this->partida = $partida;

        return $this;
    }

    /**
     * Get partida
     *
     * @return \Vostre\LocalBundle\Entity\Bairro 
     */
    public function getPartida()
    {
        return $this->partida;
    }

    /**
     * Set destino
     *
     * @param \Vostre\LocalBundle\Entity\Bairro $destino
     * @return Itinerario
     */
    public function setDestino(\Vostre\LocalBundle\Entity\Bairro $destino = null)
    {
        $this->destino = $destino;

        return $this;
    }

    /**
     * Get destino
     *
     * @return \Vostre\LocalBundle\Entity\Bairro 
     */
    public function getDestino()
    {
        return $this->destino;
    }
    
    public function __toString() {
        return $this->partida." (".$this->getPartida()->getLocal()->getNome().") - "
                .$this->destino." (".$this->getDestino()->getLocal()->getNome().")";
    }
    
    /**
     * @ORM\PrePersist()
     */
    public function prePersist()
    {
        $this->setDataCriacao(new \DateTime());
        $this->setUltimaAlteracao(new \DateTime());
    }
    
    /**
     * @ORM\PreUpdate()
     */
    public function preUpdate()
    {
        $this->setUltimaAlteracao(new \DateTime());
    }
    

    /**
     * Set dataCriacao
     *
     * @param \DateTime $dataCriacao
     * @return Itinerario
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
     * @return Itinerario
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

    /**
     * Set empresa
     *
     * @param \Circular\SiteBundle\Entity\Empresa $empresa
     * @return Itinerario
     */
    public function setEmpresa(\Circular\SiteBundle\Entity\Empresa $empresa = null)
    {
        $this->empresa = $empresa;

        return $this;
    }

    /**
     * Get empresa
     *
     * @return \Circular\SiteBundle\Entity\Empresa 
     */
    public function getEmpresa()
    {
        return $this->empresa;
    }

    /**
     * Set observacao
     *
     * @param string $observacao
     * @return Itinerario
     */
    public function setObservacao($observacao)
    {
        $this->observacao = $observacao;

        return $this;
    }

    /**
     * Get observacao
     *
     * @return string 
     */
    public function getObservacao()
    {
        return $this->observacao;
    }

    /**
     * Set duracao
     *
     * @param \DateTime $duracao
     * @return Itinerario
     */
    public function setDuracao($duracao)
    {
        $this->duracao = $duracao;

        return $this;
    }

    /**
     * Get duracao
     *
     * @return \DateTime 
     */
    public function getDuracao()
    {
        return $this->duracao;
    }
}
