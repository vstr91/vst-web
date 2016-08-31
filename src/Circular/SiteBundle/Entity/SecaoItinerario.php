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
 * Description of SecaoItinerario
 *
 * @author Almir
 */

/**
 * SecaoItinerario
 *
 * @ORM\Entity(repositoryClass="Circular\SiteBundle\Entity\Repository\SecaoItinerarioRepository")
 * @ORM\Table(name="circular_secao_itinerario")
 * @ORM\HasLifecycleCallbacks()
 * @ExclusionPolicy("all")
 */
class SecaoItinerario {
    
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
    private $ordem;
    
    /**
     * @var string
     *
     * @ORM\Column(name="nome", type="string", length=100)
     * @Expose
     */
    private $nome;
    
    /**
     * @ORM\ManyToOne(targetEntity="Itinerario")
     * @ORM\JoinColumn(name="id_itinerario", referencedColumnName="id")
     * @Expose
     */
    private $itinerario;
    
    /**
     * @ORM\Column(type="decimal", scale=2)
     * @Expose
     */
    private $valor;
    
    /**
     * @ORM\Column(type="integer")
     * @Expose
     */
    private $status = 0;
    
    /**
     * @ORM\Column(type="datetime")
     */
    private $dataCriacao;
    
    /**
     * @ORM\Column(type="datetime")
     */
    private $ultimaAlteracao;
    
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
     * @return SecaoItinerario
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
     * Set nome
     *
     * @param string $nome
     * @return SecaoItinerario
     */
    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Get nome
     *
     * @return string 
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Set valor
     *
     * @param string $valor
     * @return SecaoItinerario
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
     * Set status
     *
     * @param integer $status
     * @return SecaoItinerario
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
     * @return SecaoItinerario
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
     * @return SecaoItinerario
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
     * Set itinerario
     *
     * @param \Circular\SiteBundle\Entity\Itinerario $itinerario
     * @return SecaoItinerario
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
}
