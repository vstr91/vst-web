<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Circular\SiteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use JMS\Serializer\Annotation\ExclusionPolicy;
use JMS\Serializer\Annotation\Expose;

/**
 * Description of Empresa
 *
 * @author Almir
 */

/**
 * Empresa
 *
 * @ORM\Entity(repositoryClass="Circular\SiteBundle\Entity\Repository\EmpresaRepository")
 * @ORM\Table(name="circular_empresa")
 * @ORM\HasLifecycleCallbacks()
 * @ExclusionPolicy("all")
 */
class Empresa {
    
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
     * @ORM\Column(name="razao_social", type="string", length=50)
     * @Assert\NotBlank()
     * @Expose
     */
    private $razaoSocial;
    
    /**
     * @var string
     *
     * @ORM\Column(name="fantasia", type="string", length=50)
     * @Assert\NotBlank()
     * @Expose
     */
    private $fantasia;
    
    /**
     * @var string
     *
     * @ORM\Column(name="cnpj", type="string", length=50)
     * @Assert\NotBlank()
     * @Expose
     */
    private $cnpj;
    
    /**
     * @var string
     *
     * @ORM\Column(name="telefone", type="string", length=50)
     * @Assert\NotBlank()
     * @Expose
     */
    private $telefone;
    
    /**
     * @var string
     *
     * @ORM\Column(name="site", type="string", length=50)
     * @Expose
     */
    private $site;
    
    /**
     * @var string
     *
     * @ORM\Column(name="rua", type="string", length=50)
     * @Assert\NotBlank()
     */
    private $rua;
    
    /**
     * @var string
     *
     * @ORM\Column(name="numero", type="string", length=50)
     * @Assert\NotBlank()
     */
    private $numero;
    
    /**
     * @ORM\ManyToOne(targetEntity="Vostre\LocalBundle\Entity\Bairro")
     * @ORM\JoinColumn(name="id_bairro", referencedColumnName="id")
     */
    private $bairro;
    
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
     * Set razaoSocial
     *
     * @param string $razaoSocial
     * @return Empresa
     */
    public function setRazaoSocial($razaoSocial)
    {
        $this->razaoSocial = $razaoSocial;

        return $this;
    }

    /**
     * Get razaoSocial
     *
     * @return string 
     */
    public function getRazaoSocial()
    {
        return $this->razaoSocial;
    }

    /**
     * Set fantasia
     *
     * @param string $fantasia
     * @return Empresa
     */
    public function setFantasia($fantasia)
    {
        $this->fantasia = $fantasia;

        return $this;
    }

    /**
     * Get fantasia
     *
     * @return string 
     */
    public function getFantasia()
    {
        return $this->fantasia;
    }

    /**
     * Set cnpj
     *
     * @param string $cnpj
     * @return Empresa
     */
    public function setCnpj($cnpj)
    {
        $this->cnpj = $cnpj;

        return $this;
    }

    /**
     * Get cnpj
     *
     * @return string 
     */
    public function getCnpj()
    {
        return $this->cnpj;
    }

    /**
     * Set telefone
     *
     * @param string $telefone
     * @return Empresa
     */
    public function setTelefone($telefone)
    {
        $this->telefone = $telefone;

        return $this;
    }

    /**
     * Get telefone
     *
     * @return string 
     */
    public function getTelefone()
    {
        return $this->telefone;
    }

    /**
     * Set site
     *
     * @param string $site
     * @return Empresa
     */
    public function setSite($site)
    {
        $this->site = $site;

        return $this;
    }

    /**
     * Get site
     *
     * @return string 
     */
    public function getSite()
    {
        return $this->site;
    }

    /**
     * Set rua
     *
     * @param string $rua
     * @return Empresa
     */
    public function setRua($rua)
    {
        $this->rua = $rua;

        return $this;
    }

    /**
     * Get rua
     *
     * @return string 
     */
    public function getRua()
    {
        return $this->rua;
    }

    /**
     * Set numero
     *
     * @param string $numero
     * @return Empresa
     */
    public function setNumero($numero)
    {
        $this->numero = $numero;

        return $this;
    }

    /**
     * Get numero
     *
     * @return string 
     */
    public function getNumero()
    {
        return $this->numero;
    }

    /**
     * Set status
     *
     * @param integer $status
     * @return Empresa
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
     * @return Empresa
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
     * @return Empresa
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
     * Set bairro
     *
     * @param \Vostre\LocalBundle\Entity\Bairro $bairro
     * @return Empresa
     */
    public function setBairro(\Vostre\LocalBundle\Entity\Bairro $bairro = null)
    {
        $this->bairro = $bairro;

        return $this;
    }

    /**
     * Get bairro
     *
     * @return \Vostre\LocalBundle\Entity\Bairro 
     */
    public function getBairro()
    {
        return $this->bairro;
    }
    
    public function __toString() {
        return $this->getRazaoSocial();
    }
}
