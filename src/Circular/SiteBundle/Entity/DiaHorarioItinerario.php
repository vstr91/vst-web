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
 * Description of DiaHorarioItinerario
 *
 * @author Almir
 */

/**
 * HorarioItinerario
 *
 * @ORM\Entity(repositoryClass="Circular\SiteBundle\Entity\Repository\DiaHorarioItinerarioRepository")
 * @ORM\Table(name="circular_dia_horario_itinerario")
 * @ORM\HasLifecycleCallbacks()
 * @ExclusionPolicy("all")
 */
class DiaHorarioItinerario {

    /**
     * @ORM\Id
     * @ORM\ManyToOne(targetEntity="HorarioItinerario")
     * @ORM\JoinColumn(name="id_horario_itinerario", referencedColumnName="id")
     * @Expose
     */
    protected $horarioItinerario;
    
    /**
     * @ORM\Column(type="integer")
     * @Expose
     */
    protected $domingo;
    
    /**
     * @ORM\Column(type="integer")
     * @Expose
     */
    protected $segunda;
    
    /**
     * @ORM\Column(type="integer")
     * @Expose
     */
    protected $terca;
    
    /**
     * @ORM\Column(type="integer")
     * @Expose
     */
    protected $quarta;
    
    /**
     * @ORM\Column(type="integer")
     * @Expose
     */
    protected $quinta;
    
    /**
     * @ORM\Column(type="integer")
     * @Expose
     */
    protected $sexta;
    
    /**
     * @ORM\Column(type="integer")
     * @Expose
     */
    protected $sabado;
    
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
     * Set domingo
     *
     * @param integer $domingo
     * @return DiaHorarioItinerario
     */
    public function setDomingo($domingo)
    {
        $this->domingo = $domingo;

        return $this;
    }

    /**
     * Get domingo
     *
     * @return integer 
     */
    public function getDomingo()
    {
        return $this->domingo;
    }

    /**
     * Set segunda
     *
     * @param integer $segunda
     * @return DiaHorarioItinerario
     */
    public function setSegunda($segunda)
    {
        $this->segunda = $segunda;

        return $this;
    }

    /**
     * Get segunda
     *
     * @return integer 
     */
    public function getSegunda()
    {
        return $this->segunda;
    }

    /**
     * Set terca
     *
     * @param integer $terca
     * @return DiaHorarioItinerario
     */
    public function setTerca($terca)
    {
        $this->terca = $terca;

        return $this;
    }

    /**
     * Get terca
     *
     * @return integer 
     */
    public function getTerca()
    {
        return $this->terca;
    }

    /**
     * Set quarta
     *
     * @param integer $quarta
     * @return DiaHorarioItinerario
     */
    public function setQuarta($quarta)
    {
        $this->quarta = $quarta;

        return $this;
    }

    /**
     * Get quarta
     *
     * @return integer 
     */
    public function getQuarta()
    {
        return $this->quarta;
    }

    /**
     * Set quinta
     *
     * @param integer $quinta
     * @return DiaHorarioItinerario
     */
    public function setQuinta($quinta)
    {
        $this->quinta = $quinta;

        return $this;
    }

    /**
     * Get quinta
     *
     * @return integer 
     */
    public function getQuinta()
    {
        return $this->quinta;
    }

    /**
     * Set sexta
     *
     * @param integer $sexta
     * @return DiaHorarioItinerario
     */
    public function setSexta($sexta)
    {
        $this->sexta = $sexta;

        return $this;
    }

    /**
     * Get sexta
     *
     * @return integer 
     */
    public function getSexta()
    {
        return $this->sexta;
    }

    /**
     * Set sabado
     *
     * @param integer $sabado
     * @return DiaHorarioItinerario
     */
    public function setSabado($sabado)
    {
        $this->sabado = $sabado;

        return $this;
    }

    /**
     * Get sabado
     *
     * @return integer 
     */
    public function getSabado()
    {
        return $this->sabado;
    }

    /**
     * Set status
     *
     * @param integer $status
     * @return DiaHorarioItinerario
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
     * @return DiaHorarioItinerario
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
     * @return DiaHorarioItinerario
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
     * Set horarioItinerario
     *
     * @param \Circular\SiteBundle\Entity\HorarioItinerario $horarioItinerario
     * @return DiaHorarioItinerario
     */
    public function setHorarioItinerario(\Circular\SiteBundle\Entity\HorarioItinerario $horarioItinerario = null)
    {
        $this->horarioItinerario = $horarioItinerario;

        return $this;
    }

    /**
     * Get horarioItinerario
     *
     * @return \Circular\SiteBundle\Entity\HorarioItinerario 
     */
    public function getHorarioItinerario()
    {
        return $this->horarioItinerario;
    }
}
