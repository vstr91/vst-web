<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Vostre\LocalBundle\Entity;

use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ORM\Mapping as ORM;
use JMS\Serializer\Annotation\ExclusionPolicy;
use JMS\Serializer\Annotation\Expose;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * Description of Local
 *
 * @author Almir
 */

/**
 * Local
 *
 * @ORM\Entity(repositoryClass="Vostre\LocalBundle\Entity\Repository\LocalRepository")
 * @ORM\Table(name="local")
 * @UniqueEntity({"nome", "estado"}, message="Já existe este local")
 * @ORM\HasLifecycleCallbacks()
 * @ExclusionPolicy("all")
 */
class Local {
    
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
     * @ORM\Column(name="nome", type="string", length=50)
     * @Assert\NotBlank()
     * @Expose
     */
    private $nome;
    
    /**
     * @ORM\Column(type="integer")
     * @Expose
     */
    protected $tipo;
    
    /**
     * @ORM\Column(type="integer")
     * @Expose
     */
    protected $status = 0;
    
    /**
     * @ORM\ManyToOne(targetEntity="Estado")
     * @ORM\JoinColumn(name="id_estado", referencedColumnName="id")
     * @Expose
     */
    protected $estado;
    
    /**
     * @ORM\ManyToOne(targetEntity="Local")
     * @ORM\JoinColumn(name="id_cidade", referencedColumnName="id")
     * @Expose
     */
    protected $cidade;
    
    /**
     * @ORM\Column(type="datetime")
     */
    protected $dataCriacao;
    
    /**
     * @ORM\Column(type="datetime")
     */
    protected $ultimaAlteracao;

    /**
     * Set id
     *
     * @return integer 
     */
    public function setId($id)
    {
        $this->id = $id;
        
        return $this;
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
     * @param string $nome
     * @return Local
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
     * Set tipo
     *
     * @param integer $tipo
     * @return Local
     */
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;

        return $this;
    }

    /**
     * Get tipo
     *
     * @return integer 
     */
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * Set status
     *
     * @param integer $status
     * @return Local
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
     * Set estado
     *
     * @param \Vostre\LocalBundle\Entity\Estado $estado
     * @return Local
     */
    public function setEstado(\Vostre\LocalBundle\Entity\Estado $estado = null)
    {
        $this->estado = $estado;

        return $this;
    }

    /**
     * Get estado
     *
     * @return \Vostre\LocalBundle\Entity\Estado 
     */
    public function getEstado()
    {
        return $this->estado;
    }

    /**
     * Set cidade
     *
     * @param \Vostre\LocalBundle\Entity\Local $cidade
     * @return Local
     */
    public function setCidade(\Vostre\LocalBundle\Entity\Local $cidade = null)
    {
        $this->cidade = $cidade;

        return $this;
    }

    /**
     * Get cidade
     *
     * @return \Vostre\LocalBundle\Entity\Local 
     */
    public function getCidade()
    {
        return $this->cidade;
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
     * @return Local
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
     * @return Local
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
     * @Assert\True(message = "Cidade requerida")
     */
    public function isCidadeValida() {
        return ($this->getTipo() == 0 && $this->getCidade() == null) 
        || ($this->getTipo() == 1 && $this->getCidade() != null);
    }
    
    public function __toString() {
        return $this->getNome();
    }
}
