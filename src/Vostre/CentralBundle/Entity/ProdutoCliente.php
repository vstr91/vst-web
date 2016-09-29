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
 * Description of ProdutoCliente
 *
 * @author Almir
 */

/**
 * ProdutoCliente
 *
 * @ORM\Entity(repositoryClass="Vostre\CentralBundle\Entity\Repository\ProdutoClienteRepository")
 * @ORM\Table(name="produto_cliente")
 * @ORM\HasLifecycleCallbacks()
 */
class ProdutoCliente {
    
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    
    /**
     * @ORM\ManyToOne(targetEntity="Produto")
     * @ORM\JoinColumn(name="id_produto", referencedColumnName="id")
     */
    protected $produto;
    
    /**
     * @ORM\ManyToOne(targetEntity="Vostre\CRMBundle\Entity\Cliente")
     * @ORM\JoinColumn(name="id_cliente", referencedColumnName="id")
     */
    protected $cliente;
    
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
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set situacao
     *
     * @param integer $situacao
     * @return ProdutoCliente
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
     * @return ProdutoCliente
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
     * Set produto
     *
     * @param \Vostre\CentralBundle\Entity\Produto $produto
     * @return ProdutoCliente
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

    /**
     * Set cliente
     *
     * @param \Vostre\CRMBundle\Entity\Cliente $cliente
     * @return ProdutoCliente
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
     * @return ProdutoCliente
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
}
