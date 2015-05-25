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
 * Description of ParadaItinerario
 *
 * @author Almir
 */

/**
 * ParadaItinerario
 *
 * @ORM\Entity(repositoryClass="Circular\SiteBundle\Entity\Repository\ParadaItinerarioRepository")
 * @ORM\Table(name="circular_parada_itinerario")
 * @ORM\HasLifecycleCallbacks()
 * @ExclusionPolicy("all")
 */
class ParadaItinerario {
    
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
     * @ORM\Column(type="integer")
     * @Assert\NotBlank()
     * @Expose
     */
    protected $ordem;
    
    /**
     * @ORM\ManyToOne(targetEntity="Parada", inversedBy="itinerarios")
     * @ORM\JoinColumn(name="id_parada", referencedColumnName="id")
     * @Expose
     */
    protected $parada;
    
    /**
     * @ORM\ManyToOne(targetEntity="Itinerario")
     * @ORM\JoinColumn(name="id_itinerario", referencedColumnName="id")
     * @Expose
     */
    protected $itinerario;
    
    /**
     * @ORM\Column(type="integer")
     * @Expose
     */
    protected $status = 0;
    
    /**
     * @ORM\Column(type="integer")
     * @Expose
     */
    protected $destaque = 0;
    
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
     * Set ordem
     *
     * @param integer $ordem
     * @return ParadaItinerario
     */
    public function setOrdem($ordem)
    {
        $this->ordem = $ordem;

        return $this;
    }

    /**
     * Get ordem
     *
     * @return integer 
     */
    public function getOrdem()
    {
        return $this->ordem;
    }

    /**
     * Set parada
     *
     * @param \Circular\SiteBundle\Entity\Parada $parada
     * @return ParadaItinerario
     */
    public function setParada(\Circular\SiteBundle\Entity\Parada $parada = null)
    {
        $this->parada = $parada;

        return $this;
    }

    /**
     * Get parada
     *
     * @return \Circular\SiteBundle\Entity\Parada 
     */
    public function getParada()
    {
        return $this->parada;
    }

    /**
     * Set itinerario
     *
     * @param \Circular\SiteBundle\Entity\Itinerario $itinerario
     * @return ParadaItinerario
     */
    public function setItinerario(\Circular\SiteBundle\Entity\Itinerario $itinerario = null)
    {
        $this->itinerario = $itinerario;

        return $this;
    }

    /**
     * Get itinerario
     *
     * @return \Circular\SiteBundle\Entity\Itinerario 
     */
    public function getItinerario()
    {
        return $this->itinerario;
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
     * Set status
     *
     * @param integer $status
     * @return ParadaItinerario
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
     * Set dataCriacao
     *
     * @param \DateTime $dataCriacao
     * @return ParadaItinerario
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
     * @return ParadaItinerario
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
     * Set destaque
     *
     * @param integer $destaque
     * @return ParadaItinerario
     */
    public function setDestaque($destaque)
    {
        $this->destaque = $destaque;

        return $this;
    }

    /**
     * Get destaque
     *
     * @return integer 
     */
    public function getDestaque()
    {
        return $this->destaque;
    }
}
