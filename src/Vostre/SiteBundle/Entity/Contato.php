<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Contato
 *
 * @author Almir
 */

namespace Vostre\SiteBundle\Entity;

use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ORM\Mapping as ORM;

/**
 * Contato
 *
 * @ORM\Entity(repositoryClass="Vostre\SiteBundle\Entity\Repository\ContatoRepository")
 * @ORM\Table(name="contato")
 * @ORM\HasLifecycleCallbacks()
 */
class Contato {
    
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
     * @ORM\Column(name="nome", type="string", length=50)
     * @Assert\NotBlank()
     */
    private $nome;
    
    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=50)
     * @Assert\NotBlank()
     */
    private $email;
    
    /**
     * @var string
     *
     * @ORM\Column(name="titulo", type="string", length=50)
     * @Assert\NotBlank()
     */
    private $titulo;
    
    /**
     * @var string
     *
     * @ORM\Column(name="mensagem", type="text")
     * @Assert\NotBlank()
     */
    private $mensagem;
    
    /**
     *
     * @ORM\Column(name="dataCadastro", type="datetime")
     */
    private $dataCadastro;
    
    /**
     *
     * @ORM\Column(name="lida", type="boolean")
     */
    private $lida;
    
    public function __construct() {
        $this->setDataCadastro(new \DateTime());
        $this->setLida(false);
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
     * @return Contato
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
     * Set email
     *
     * @param string $email
     * @return Contato
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set titulo
     *
     * @param string $titulo
     * @return Contato
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
     * Set mensagem
     *
     * @param string $mensagem
     * @return Contato
     */
    public function setMensagem($mensagem)
    {
        $this->mensagem = $mensagem;

        return $this;
    }

    /**
     * Get mensagem
     *
     * @return string 
     */
    public function getMensagem()
    {
        return $this->mensagem;
    }

    /**
     * Set dataCadastro
     *
     * @param \DateTime $dataCadastro
     * @return Contato
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
     * Set lida
     *
     * @param boolean $lida
     * @return Contato
     */
    public function setLida($lida)
    {
        $this->lida = $lida;

        return $this;
    }

    /**
     * Get lida
     *
     * @return boolean 
     */
    public function getLida()
    {
        return $this->lida;
    }
}
