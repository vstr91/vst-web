<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Vostre\CentralBundle\Entity;

use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ORM\Mapping as ORM;

/**
 * Description of Recado
 *
 * @author Almir
 */

/**
 * Recado
 *
 * @ORM\Entity(repositoryClass="Vostre\CentralBundle\Entity\Repository\RecadoRepository")
 * @ORM\Table(name="recado")
 * @ORM\HasLifecycleCallbacks()
 */
class Recado {
    
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    
    /**
     * @var string
     *
     * @ORM\Column(name="titulo", type="string", length=50)
     * @Assert\NotBlank()
     */
    protected $titulo;
    
    /**
     * @var string
     *
     * @ORM\Column(name="descricao", type="text")
     * @Assert\NotBlank()
     */
    protected $descricao;
    
    /**
     *
     * @ORM\Column(name="dataCadastro", type="datetime")
     */
    protected $dataCadastro;
    
    /**
     *
     * @ORM\Column(name="dataInicial", type="datetime")
     */
    protected $dataInicial;
    
    /**
     *
     * @ORM\Column(name="dataFinal", type="datetime")
     */
    protected $dataFinal;
    
    /**
     * @ORM\ManyToOne(targetEntity="Usuario")
     * @ORM\JoinColumn(name="id_usuario_cadastro", referencedColumnName="id")
     */
    protected $usuarioCadastro;
    
    /**
     * @ORM\ManyToOne(targetEntity="Usuario")
     * @ORM\JoinColumn(name="id_usuario_destinatario", referencedColumnName="id")
     */
    protected $usuarioDestinatario;
    
    /**
     *
     * @ORM\Column(name="lido", type="boolean")
     */
    protected $lido;
    

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
     * Set titulo
     *
     * @param string $titulo
     * @return Recado
     */
    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;

        return $this;
    }

    /**
     * Get titulo
     *
     * @return string 
     */
    public function getTitulo()
    {
        return $this->titulo;
    }

    /**
     * Set descricao
     *
     * @param string $descricao
     * @return Recado
     */
    public function setDescricao($descricao)
    {
        $this->descricao = $descricao;

        return $this;
    }

    /**
     * Get descricao
     *
     * @return string 
     */
    public function getDescricao()
    {
        return $this->descricao;
    }

    /**
     * Set dataCadastro
     *
     * @param \DateTime $dataCadastro
     * @return Recado
     */
    public function setDataCadastro($dataCadastro)
    {
        $this->dataCadastro = $dataCadastro;

        return $this;
    }

    /**
     * Get dataCadastro
     *
     * @return \DateTime 
     */
    public function getDataCadastro()
    {
        return $this->dataCadastro;
    }

    /**
     * Set dataInicial
     *
     * @param \DateTime $dataInicial
     * @return Recado
     */
    public function setDataInicial($dataInicial)
    {
        $this->dataInicial = $dataInicial;

        return $this;
    }

    /**
     * Get dataInicial
     *
     * @return \DateTime 
     */
    public function getDataInicial()
    {
        return $this->dataInicial;
    }

    /**
     * Set dataFinal
     *
     * @param \DateTime $dataFinal
     * @return Recado
     */
    public function setDataFinal($dataFinal)
    {
        $this->dataFinal = $dataFinal;

        return $this;
    }

    /**
     * Get dataFinal
     *
     * @return \DateTime 
     */
    public function getDataFinal()
    {
        return $this->dataFinal;
    }

    /**
     * Set lido
     *
     * @param boolean $lido
     * @return Recado
     */
    public function setLido($lido)
    {
        $this->lido = $lido;

        return $this;
    }

    /**
     * Get lido
     *
     * @return boolean 
     */
    public function getLido()
    {
        return $this->lido;
    }

    /**
     * Set usuarioCadastro
     *
     * @param \Vostre\CentralBundle\Entity\Usuario $usuarioCadastro
     * @return Recado
     */
    public function setUsuarioCadastro(\Vostre\CentralBundle\Entity\Usuario $usuarioCadastro = null)
    {
        $this->usuarioCadastro = $usuarioCadastro;

        return $this;
    }

    /**
     * Get usuarioCadastro
     *
     * @return \Vostre\CentralBundle\Entity\Usuario 
     */
    public function getUsuarioCadastro()
    {
        return $this->usuarioCadastro;
    }

    /**
     * Set usuarioDestinatario
     *
     * @param \Vostre\CentralBundle\Entity\Usuario $usuarioDestinatario
     * @return Recado
     */
    public function setUsuarioDestinatario(\Vostre\CentralBundle\Entity\Usuario $usuarioDestinatario = null)
    {
        $this->usuarioDestinatario = $usuarioDestinatario;

        return $this;
    }

    /**
     * Get usuarioDestinatario
     *
     * @return \Vostre\CentralBundle\Entity\Usuario 
     */
    public function getUsuarioDestinatario()
    {
        return $this->usuarioDestinatario;
    }
}
