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
 * Description of Chamado
 *
 * @author Almir
 */

/**
 * Chamado
 *
 * @ORM\Entity(repositoryClass="Vostre\CentralBundle\Entity\Repository\ChamadoRepository")
 * @ORM\Table(name="chamado")
 * @ORM\HasLifecycleCallbacks()
 */
class Chamado {
    
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
     * @ORM\ManyToOne(targetEntity="Vostre\CRMBundle\Entity\Cliente")
     * @ORM\JoinColumn(name="id_cliente", referencedColumnName="id")
     */
    protected $cliente;
    
    /**
     * @ORM\ManyToOne(targetEntity="Usuario")
     * @ORM\JoinColumn(name="id_usuario_responsavel", referencedColumnName="id")
     */
    protected $usuarioResponsavel;
    
    /**
     * @var integer
     *
     * @ORM\Column(name="situacao", type="integer")
     */
    private $situacao;
    
    /**
     *
     * @ORM\Column(name="dataCadastro", type="datetime")
     */
    protected $dataCadastro;
    
    /**
     * @ORM\ManyToOne(targetEntity="Usuario")
     * @ORM\JoinColumn(name="id_usuario_cadastro", referencedColumnName="id")
     */
    protected $usuarioCadastro;
    
    /**
     * @ORM\ManyToOne(targetEntity="Produto")
     * @ORM\JoinColumn(name="id_produto", referencedColumnName="id")
     */
    protected $produto;
    

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
     * @return Chamado
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
     * @return Chamado
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
     * Set situacao
     *
     * @param integer $situacao
     * @return Chamado
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
     * Set dataCadastro
     *
     * @param \DateTime $dataCadastro
     * @return Chamado
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
     * Set cliente
     *
     * @param \Vostre\CRMBundle\Entity\Cliente $cliente
     * @return Chamado
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
     * Set usuarioResponsavel
     *
     * @param \Vostre\CentralBundle\Entity\Usuario $usuarioResponsavel
     * @return Chamado
     */
    public function setUsuarioResponsavel(\Vostre\CentralBundle\Entity\Usuario $usuarioResponsavel = null)
    {
        $this->usuarioResponsavel = $usuarioResponsavel;

        return $this;
    }

    /**
     * Get usuarioResponsavel
     *
     * @return \Vostre\CentralBundle\Entity\Usuario 
     */
    public function getUsuarioResponsavel()
    {
        return $this->usuarioResponsavel;
    }

    /**
     * Set usuarioCadastro
     *
     * @param \Vostre\CentralBundle\Entity\Usuario $usuarioCadastro
     * @return Chamado
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
     * Set produto
     *
     * @param \Vostre\CentralBundle\Entity\Produto $produto
     * @return Chamado
     */
    public function setProduto(\Vostre\CentralBundle\Entity\Produto $produto = null)
    {
        $this->produto = $produto;

        return $this;
    }

    /**
     * Get produto
     *
     * @return \Vostre\CentralBundle\Entity\Produto 
     */
    public function getProduto()
    {
        return $this->produto;
    }
}
