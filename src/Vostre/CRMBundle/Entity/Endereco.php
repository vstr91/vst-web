<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Vostre\CRMBundle\Entity;

use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ORM\Mapping as ORM;

/**
 * Description of Endereco
 *
 * @author Almir
 */

/**
 * Endereco
 *
 * @ORM\Entity(repositoryClass="Vostre\CRMBundle\Entity\Repository\EnderecoRepository")
 * @ORM\Table(name="endereco")
 * @ORM\HasLifecycleCallbacks()
 */
class Endereco {
    
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
    
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
     * @ORM\Column(name="numero", type="string", length=10)
     * @Assert\NotBlank()
     */
    private $numero;
    
    /**
     * @var string
     *
     * @ORM\Column(name="complemento", type="string", length=50)
     * @Assert\NotBlank()
     */
    private $complemento;
    
    /**
     * @ORM\ManyToOne(targetEntity="Vostre\LocalBundle\Entity\Bairro")
     * @ORM\JoinColumn(name="id_bairro", referencedColumnName="id")
     */
    protected $bairro;
    
    /**
     * @var string
     *
     * @ORM\Column(name="cep", type="string", length=8)
     * @Assert\NotBlank()
     */
    private $cep;
    
    /**
     * @var string
     *
     * @ORM\Column(name="situacao", type="integer")
     */
    private $situacao;
    
    /**
     * @var string
     *
     * @ORM\Column(name="principal", type="boolean")
     * @Assert\NotBlank()
     */
    private $principal;
    
    /**
     * @ORM\ManyToOne(targetEntity="Cliente")
     * @ORM\JoinColumn(name="id_cliente", referencedColumnName="id")
     */
    protected $cliente;
    

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
     * Set rua
     *
     * @param string $rua
     * @return Endereco
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
     * @return Endereco
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
     * Set complemento
     *
     * @param string $complemento
     * @return Endereco
     */
    public function setComplemento($complemento)
    {
        $this->complemento = $complemento;

        return $this;
    }

    /**
     * Get complemento
     *
     * @return string 
     */
    public function getComplemento()
    {
        return $this->complemento;
    }

    /**
     * Set cep
     *
     * @param string $cep
     * @return Endereco
     */
    public function setCep($cep)
    {
        $this->cep = $cep;

        return $this;
    }

    /**
     * Get cep
     *
     * @return string 
     */
    public function getCep()
    {
        return $this->cep;
    }

    /**
     * Set situacao
     *
     * @param integer $situacao
     * @return Endereco
     */
    public function setSituacao($situacao)
    {
        $this->situacao = $situacao;

        return $this;
    }

    /**
     * Get situacao
     *
     * @return integer 
     */
    public function getSituacao()
    {
        return $this->situacao;
    }

    /**
     * Set principal
     *
     * @param boolean $principal
     * @return Endereco
     */
    public function setPrincipal($principal)
    {
        $this->principal = $principal;

        return $this;
    }

    /**
     * Get principal
     *
     * @return boolean 
     */
    public function getPrincipal()
    {
        return $this->principal;
    }

    /**
     * Set bairro
     *
     * @param \Vostre\LocalBundle\Entity\Bairro $bairro
     * @return Endereco
     */
    public function setBairro(\Vostre\LocalBundle\Entity\Bairro $bairro = null)
    {
        $this->bairro = $bairro;

        return $this;
    }

    /**
     * Get bairro
     *
     * @return \Vostre\LocalBundle\Bairro 
     */
    public function getBairro()
    {
        return $this->bairro;
    }

    /**
     * Set cliente
     *
     * @param \Vostre\CRMBundle\Entity\Cliente $cliente
     * @return Endereco
     */
    public function setCliente(\Vostre\CRMBundle\Entity\Cliente $cliente = null)
    {
        $this->cliente = $cliente;

        return $this;
    }

    /**
     * Get cliente
     *
     * @return \Vostre\CRMBundle\Entity\Cliente 
     */
    public function getCliente()
    {
        return $this->cliente;
    }
}
