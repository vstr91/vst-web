<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Circular\SiteBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\DiscriminatorMap;
use Doctrine\ORM\Mapping\DiscriminatorColumn;
use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Mapping\InheritanceType;
use Symfony\Component\Validator\Constraints as Assert;
use JMS\Serializer\Annotation\ExclusionPolicy;
use JMS\Serializer\Annotation\Expose;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * Description of Parada
 *
 * @author Almir
 */




/**
 * @Entity
 * @InheritanceType("SINGLE_TABLE")
 * @DiscriminatorColumn(name="discr", type="string")
 * @DiscriminatorMap({"parada" = "Parada", "paradaCollab" = "ParadaCollab"})
 * @ORM\Entity(repositoryClass="Circular\SiteBundle\Entity\Repository\ParadaRepository")
 * @ORM\Table(name="circular_parada")
 * @ORM\HasLifecycleCallbacks()
 * @ExclusionPolicy("all")
 */
class Parada {
    
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
     * @var string
     *
     * @ORM\Column(name="referencia", type="string", length=100)
     * @Expose
     */
    private $referencia;
    
    /**
     * @var string
     *
     * @ORM\Column(name="latitude", type="string", length=50)
     * @Assert\NotBlank()
     * @Expose
     */
    private $latitude;
    
    /**
     * @var string
     *
     * @ORM\Column(name="longitude", type="string", length=50)
     * @Assert\NotBlank()
     * @Expose
     */
    private $longitude;
    
    /**
     * @var string
     *
     * @ORM\Column(name="taxa_de_embarque", type="decimal", scale=2, nullable=true)
     * @Expose
     */
    private $taxaDeEmbarque;
    
    /**
     * @ORM\Column(type="integer")
     * @Expose
     */
    private $status = 0;
    
    /**
     * @ORM\ManyToOne(targetEntity="Vostre\LocalBundle\Entity\Bairro")
     * @ORM\JoinColumn(name="id_bairro", referencedColumnName="id")
     * @Expose
     */
    private $bairro;
    
    /**
     * @ORM\OneToMany(targetEntity="ParadaItinerario", mappedBy="parada")
     */
    private $itinerarios;
    
    /**
     * @ORM\ManyToOne(targetEntity="Vostre\CentralBundle\Entity\Usuario")
     * @ORM\JoinColumn(name="id_usuario", referencedColumnName="id")
     */
    private $usuario;
    
    /**
     * @var string
     * 
     * @Gedmo\Slug(fields={"referencia"}, unique=false)
     * @ORM\Column(name="slug", type="string", length=100, nullable=true)
     */
    private $slug;

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
     * Set referencia
     *
     * @param string $referencia
     * @return Parada
     */
    public function setReferencia($referencia)
    {
        $this->referencia = $referencia;

        return $this;
    }

    /**
     * Get referencia
     *
     * @return string 
     */
    public function getReferencia()
    {
        return $this->referencia;
    }

    /**
     * Set latitude
     *
     * @param string $latitude
     * @return Parada
     */
    public function setLatitude($latitude)
    {
        $this->latitude = $latitude;

        return $this;
    }

    /**
     * Get latitude
     *
     * @return string 
     */
    public function getLatitude()
    {
        return $this->latitude;
    }

    /**
     * Set longitude
     *
     * @param string $longitude
     * @return Parada
     */
    public function setLongitude($longitude)
    {
        $this->longitude = $longitude;

        return $this;
    }

    /**
     * Get longitude
     *
     * @return string 
     */
    public function getLongitude()
    {
        return $this->longitude;
    }

    /**
     * Set status
     *
     * @param integer $status
     * @return Parada
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
     * @param Bairro $bairro
     * @return Parada
     */
    public function setBairro(\Vostre\LocalBundle\Entity\Bairro $bairro = null)
    {
        $this->bairro = $bairro;

        return $this;
    }

    /**
     * Get bairro
     *
     * @return Bairro 
     */
    public function getBairro()
    {
        return $this->bairro;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->itinerarios = new ArrayCollection();
    }

    /**
     * Add itinerarios
     *
     * @param ParadaItinerario $itinerarios
     * @return Parada
     */
    public function addItinerario(ParadaItinerario $itinerarios)
    {
        $this->itinerarios[] = $itinerarios;

        return $this;
    }

    /**
     * Remove itinerarios
     *
     * @param ParadaItinerario $itinerarios
     */
    public function removeItinerario(ParadaItinerario $itinerarios)
    {
        $this->itinerarios->removeElement($itinerarios);
    }

    /**
     * Get itinerarios
     *
     * @return Collection 
     */
    public function getItinerarios()
    {
        return $this->itinerarios;
    }

    /**
     * Set usuario
     *
     * @param \Vostre\CentralBundle\Entity\Usuario $usuario
     * @return Parada
     */
    public function setUsuario(\Vostre\CentralBundle\Entity\Usuario $usuario = null)
    {
        $this->usuario = $usuario;

        return $this;
    }

    /**
     * Get usuario
     *
     * @return \Vostre\CentralBundle\Entity\Usuario 
     */
    public function getUsuario()
    {
        return $this->usuario;
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
     * @return Parada
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
     * @return Parada
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
     * Set taxaDeEmbarque
     *
     * @param string $taxaDeEmbarque
     * @return Parada
     */
    public function setTaxaDeEmbarque($taxaDeEmbarque)
    {
        $this->taxaDeEmbarque = $taxaDeEmbarque;

        return $this;
    }

    /**
     * Get taxaDeEmbarque
     *
     * @return string 
     */
    public function getTaxaDeEmbarque()
    {
        return $this->taxaDeEmbarque;
    }

    /**
     * Set slug
     *
     * @param string $slug
     * @return Parada
     */
    public function setSlug($slug)
    {
        $this->slug = $slug;

        return $this;
    }

    /**
     * Get slug
     *
     * @return string 
     */
    public function getSlug()
    {
        return $this->slug;
    }
}
