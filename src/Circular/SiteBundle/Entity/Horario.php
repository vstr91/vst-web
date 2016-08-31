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
 * Description of Horario
 *
 * @author Almir
 */

/**
 * Horario
 *
 * @ORM\Entity(repositoryClass="Circular\SiteBundle\Entity\Repository\HorarioRepository")
 * @ORM\Table(name="circular_horario")
 * @ORM\HasLifecycleCallbacks()
 * @ExclusionPolicy("all")
 */
class Horario {
    
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
     * @var time
     *
     * @ORM\Column(name="nome", type="time")
     * @Assert\NotBlank()
     * @Expose
     */
    private $nome;
    
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
     * Set nome
     *
     * @param \DateTime $nome
     * @return Horario
     */
    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Get nome
     *
     * @return \DateTime 
     */
    public function getNome()
    {
        return $this->nome;
    }
    
    public function __toString() {
        return $this->nome->format('H:i');
    }
    

    /**
     * Set dataCriacao
     *
     * @param \DateTime $dataCriacao
     * @return Horario
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
     * @return Horario
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
     * Set status
     *
     * @param integer $status
     * @return Horario
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
}
