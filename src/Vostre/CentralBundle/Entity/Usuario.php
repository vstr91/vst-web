<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Usuario
 *
 * @author Almir
 */

namespace Vostre\CentralBundle\Entity;

use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ORM\Mapping as ORM;
use \FOS\UserBundle\Model\User as BaseUser;

/**
 * Usuario
 *
 * @ORM\Entity(repositoryClass="Vostre\CentralBundle\Entity\Repository\UsuarioRepository")
 * @ORM\Table(name="usuario")
 * @ORM\HasLifecycleCallbacks()
 */
class Usuario extends BaseUser {
    
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
     * @ORM\Column(name="nome", type="string", length=50)
     * @Assert\NotBlank()
     */
    protected $nome;
    
    /**
     * @ORM\ManyToOne(targetEntity="TipoUsuario")
     * @ORM\JoinColumn(name="id_tipo_usuario", referencedColumnName="id")
     */
    protected $tipoUsuario;
    
    /**
     * @ORM\ManyToOne(targetEntity="Vostre\CRMBundle\Entity\Cliente")
     * @ORM\JoinColumn(name="id_cliente", referencedColumnName="id")
     */
    protected $cliente;
    
    /**
     *
     * @ORM\Column(name="dataCadastro", type="datetime")
     */
    protected $dataCadastro;
    
    /**
     *
     * @ORM\Column(name="ultimaAlteracao", type="datetime")
     */
    protected $ultimaAlteracao;
    
    /**
     * @ORM\ManyToOne(targetEntity="Usuario")
     * @ORM\JoinColumn(name="id_usuario_cadastro", referencedColumnName="id")
     */
    protected $usuarioCadastro;
    
    /**
     * @ORM\ManyToOne(targetEntity="Usuario")
     * @ORM\JoinColumn(name="id_usuario_ultima_alteracao", referencedColumnName="id")
     */
    protected $usuarioUltimaAlteracao;
    

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
     * @return Usuario
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
     * Set dataCadastro
     *
     * @param \DateTime $dataCadastro
     * @return Usuario
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
     * Set ultimaAlteracao
     *
     * @param \DateTime $ultimaAlteracao
     * @return Usuario
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
     * Set ultimoLogin
     *
     * @param \DateTime $ultimoLogin
     * @return Usuario
     */
    public function setUltimoLogin($ultimoLogin)
    {
        $this->ultimoLogin = $ultimoLogin;

        return $this;
    }

    /**
     * Get ultimoLogin
     *
     * @return \DateTime 
     */
    public function getUltimoLogin()
    {
        return $this->ultimoLogin;
    }

    /**
     * Set tipoUsuario
     *
     * @param \Vostre\CentralBundle\Entity\TipoUsuario $tipoUsuario
     * @return Usuario
     */
    public function setTipoUsuario(\Vostre\CentralBundle\Entity\TipoUsuario $tipoUsuario = null)
    {
        $this->tipoUsuario = $tipoUsuario;

        return $this;
    }

    /**
     * Get tipoUsuario
     *
     * @return \Vostre\CentralBundle\Entity\TipoUsuario 
     */
    public function getTipoUsuario()
    {
        return $this->tipoUsuario;
    }

    /**
     * Set cliente
     *
     * @param \Vostre\CRMBundle\Entity\Cliente $cliente
     * @return Usuario
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

    /**
     * Set usuarioCadastro
     *
     * @param \Vostre\CentralBundle\Entity\Usuario $usuarioCadastro
     * @return Usuario
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
     * Set usuarioUltimaAlteracao
     *
     * @param \Vostre\CentralBundle\Entity\Usuario $usuarioUltimaAlteracao
     * @return Usuario
     */
    public function setUsuarioUltimaAlteracao(\Vostre\CentralBundle\Entity\Usuario $usuarioUltimaAlteracao = null)
    {
        $this->usuarioUltimaAlteracao = $usuarioUltimaAlteracao;

        return $this;
    }

    /**
     * Get usuarioUltimaAlteracao
     *
     * @return \Vostre\CentralBundle\Entity\Usuario 
     */
    public function getUsuarioUltimaAlteracao()
    {
        return $this->usuarioUltimaAlteracao;
    }
}
