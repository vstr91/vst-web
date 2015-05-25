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
 * Description of Telefone
 *
 * @author Almir
 */

/**
 * Telefone
 *
 * @ORM\Entity(repositoryClass="Vostre\CRMBundle\Entity\Repository\TelefoneRepository")
 * @ORM\Table(name="telefone")
 * @ORM\HasLifecycleCallbacks()
 */
class Telefone {
    
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
     * @ORM\Column(name="ddd", type="integer")
     * @Assert\NotBlank()
     */
    private $ddd;
    
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
     * @ORM\Column(name="tipo", type="integer")
     * @Assert\NotBlank()
     */
    private $tipo;
    
    /**
     * @var string
     *
     * @ORM\Column(name="situacao", type="integer")
     * @Assert\NotBlank()
     */
    private $situacao;
    
    /**
     * @ORM\ManyToOne(targetEntity="Cliente")
     * @ORM\JoinColumn(name="id_cliente", referencedColumnName="id")
     */
    private $cliente;
    

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
     * Set ddd
     *
     * @param integer $ddd
     * @return Telefone
     */
    public function setDdd($ddd)
    {
        $this->ddd = $ddd;

        return $this;
    }

    /**
     * Get ddd
     *
     * @return integer 
     */
    public function getDdd()
    {
        return $this->ddd;
    }

    /**
     * Set numero
     *
     * @param string $numero
     * @return Telefone
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
     * Set tipo
     *
     * @param integer $tipo
     * @return Telefone
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
     * Set situacao
     *
     * @param integer $situacao
     * @return Telefone
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
     * Set cliente
     *
     * @param \Vostre\CRMBundle\Entity\Cliente $cliente
     * @return Telefone
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
