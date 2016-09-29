<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Circular\SiteBundle\Entity;

use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ORM\Mapping as ORM;

/**
 * Description of APIToken
 *
 * @author Almir
 */

/**
 * APIToken
 *
 * @ORM\Entity(repositoryClass="Circular\SiteBundle\Entity\Repository\APITokenRepository")
 * @ORM\Table(name="circular_api_token")
 * @ORM\HasLifecycleCallbacks()
 */
class APIToken {
    
    /**
     * @var string
     *
     * @ORM\Column(name="nome", type="string", length=100)
     * @ORM\Id
     * @Assert\NotBlank()
     */
    private $puroTexto;
    
    /**
     * @var string
     *
     * @ORM\Column(name="identificadorUnico", nullable=true, type="string", length=100)
     */
    private $identificadorUnico;
    
    /**
     * @var string
     *
     * @ORM\Column(name="tipo", nullable=true, type="string", length=50)
     */
    private $tipo;
    
    /**
     * @ORM\Column(type="datetime")
     */
    protected $dataCriacao;
    
    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    protected $dataValidacao;
    

    /**
     * Set puroTexto
     *
     * @param string $puroTexto
     * @return APIToken
     */
    public function setPuroTexto($puroTexto)
    {
        $this->puroTexto = $puroTexto;

        return $this;
    }

    /**
     * Get puroTexto
     *
     * @return string 
     */
    public function getPuroTexto()
    {
        return $this->puroTexto;
    }

    /**
     * Set dataCriacao
     *
     * @param \DateTime $dataCriacao
     * @return APIToken
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
     * Set dataValidacao
     *
     * @param \DateTime $dataValidacao
     * @return APIToken
     */
    public function setDataValidacao($dataValidacao)
    {
        $this->dataValidacao = $dataValidacao;

        return $this;
    }

    /**
     * Get dataValidacao
     *
     * @return \DateTime 
     */
    public function getDataValidacao()
    {
        return $this->dataValidacao;
    }
    
    /**
     * @ORM\PrePersist()
     */
    public function prePersist()
    {
        $this->setDataCriacao(new \DateTime());
    }
    

    /**
     * Set identificadorUnico
     *
     * @param string $identificadorUnico
     * @return APIToken
     */
    public function setIdentificadorUnico($identificadorUnico)
    {
        $this->identificadorUnico = $identificadorUnico;

        return $this;
    }

    /**
     * Get identificadorUnico
     *
     * @return string 
     */
    public function getIdentificadorUnico()
    {
        return $this->identificadorUnico;
    }

    /**
     * Set tipo
     *
     * @param string $tipo
     * @return APIToken
     */
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;

        return $this;
    }

    /**
     * Get tipo
     *
     * @return string 
     */
    public function getTipo()
    {
        return $this->tipo;
    }
}
