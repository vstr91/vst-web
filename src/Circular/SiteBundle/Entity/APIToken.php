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
     * @ORM\Column(type="datetime")
     */
    protected $dataCriacao;
    

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
     * @ORM\PrePersist()
     */
    public function prePersist()
    {
        $this->setDataCriacao(new \DateTime());
    }
    
}
