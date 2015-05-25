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
 * Description of TipoUsuario
 *
 * @author Almir
 */

/**
 * TipoUsusario
 *
 * @ORM\Entity(repositoryClass="Vostre\CentralBundle\Entity\Repository\TipoUsuarioRepository")
 * @ORM\Table(name="tipo_usuario")
 * @ORM\HasLifecycleCallbacks()
 */
class TipoUsuario {
    
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
     * @var integer
     *
     * @ORM\Column(name="situacao", type="integer")
     */
    private $situacao;
    

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
     * @return TipoUsuario
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
     * Set situacao
     *
     * @param integer $situacao
     * @return TipoUsuario
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
}
