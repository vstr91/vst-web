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
 * Description of HorarioItinerario
 *
 * @author Almir
 */

/**
 * HorarioItinerario
 *
 * @ORM\Entity(repositoryClass="Circular\SiteBundle\Entity\Repository\HorarioItinerarioRepository")
 * @ORM\Table(name="circular_horario_itinerario")
 * @ORM\HasLifecycleCallbacks()
 * @ExclusionPolicy("all")
 */
class HorarioItinerario {
    
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
     * @ORM\ManyToOne(targetEntity="Horario")
     * @ORM\JoinColumn(name="id_horario", referencedColumnName="id")
     * @Expose
     */
    protected $horario;
    
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
     * @ORM\Column(type="string", nullable=true)
     * @Expose
     */
    protected $obs;
    
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
     * Set horario
     *
     * @param \Circular\SiteBundle\Entity\Horario $horario
     * @return HorarioItinerario
     */
    public function setHorario(\Circular\SiteBundle\Entity\Horario $horario = null)
    {
        $this->horario = $horario;

        return $this;
    }

    /**
     * Get horario
     *
     * @return \Circular\SiteBundle\Entity\Horario 
     */
    public function getHorario()
    {
        return $this->horario;
    }

    /**
     * Set itinerario
     *
     * @param \Circular\SiteBundle\Entity\Itinerario $itinerario
     * @return HorarioItinerario
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
     * @return HorarioItinerario
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
     * @return HorarioItinerario
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
     * @return HorarioItinerario
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
     * Set domingo
     *
     * @param integer $domingo
     * @return HorarioItinerario
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
     * @return HorarioItinerario
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
     * @return HorarioItinerario
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
     * @return HorarioItinerario
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
     * @return HorarioItinerario
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
     * @return HorarioItinerario
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
     * @return HorarioItinerario
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
     * Set obs
     *
     * @param string $obs
     * @return HorarioItinerario
     */
    public function setObs($obs)
    {
        $this->obs = $obs;

        return $this;
    }

    /**
     * Get obs
     *
     * @return string 
     */
    public function getObs()
    {
        return $this->obs;
    }
}
