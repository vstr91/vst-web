<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Vostre\SiteBundle\Entity;

use Symfony\Component\Validator\Constraints as Assert;
use Gedmo\Mapping\Annotation as Gedmo;
use Doctrine\ORM\Mapping as ORM;
use Gedmo\Translatable\Translatable;

/**
 * Description of Menu
 *
 * @author Almir
 */

/**
 * Menu
 *
 * @ORM\Entity(repositoryClass="Vostre\SiteBundle\Entity\Repository\MenuRepository")
 * @ORM\Table(name="menu")
 * @ORM\HasLifecycleCallbacks()
 */
class Menu implements Translatable {
    
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
     * @Gedmo\Translatable
     * @ORM\Column(name="titulo", type="string", length=50)
     * @Assert\NotBlank()
     */
    private $titulo;
    
    /**
     * @var string
     *
     * @ORM\Column(name="caminho", type="string", length=50)
     * @Assert\NotBlank()
     */
    private $caminho;
    
    /**
     * @var string
     *
     * @ORM\Column(name="ordem", type="integer")
     * @Assert\NotBlank()
     */
    private $ordem;
    
    /**
     * @var string
     *
     * @ORM\Column(name="situacao", type="integer")
     */
    private $situacao;
    
    /**
     *
     * @ORM\Column(name="dataCadastro", type="datetime")
     */
    private $dataCadastro;
    
    /**
     *
     * @ORM\Column(name="ultimaAlteracao", type="datetime")
     */
    private $ultimaAlteracao;
    
    /**
     * @ORM\ManyToOne(targetEntity="Vostre\CentralBundle\Entity\Usuario")
     * @ORM\JoinColumn(name="id_usuario_cadastro", referencedColumnName="id")
     */
    protected $usuarioCadastro;
    
    /**
     * @ORM\ManyToOne(targetEntity="Vostre\CentralBundle\Entity\Usuario")
     * @ORM\JoinColumn(name="id_usuario_ultima_alteracao", referencedColumnName="id")
     */
    protected $usuarioUltimaAlteracao;
    
    /**
     * @Gedmo\Locale
     * Used locale to override Translation listener`s locale
     * this is not a mapped field of entity metadata, just a simple property
     */
    private $locale;
    

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
     * @return Menu
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
     * Set caminho
     *
     * @param string $caminho
     * @return Menu
     */
    public function setCaminho($caminho)
    {
        $this->caminho = $caminho;

        return $this;
    }

    /**
     * Get caminho
     *
     * @return string 
     */
    public function getCaminho()
    {
        return $this->caminho;
    }

    /**
     * Set ordem
     *
     * @param integer $ordem
     * @return Menu
     */
    public function setOrdem($ordem)
    {
        $this->ordem = $ordem;

        return $this;
    }

    /**
     * Get ordem
     *
     * @return integer 
     */
    public function getOrdem()
    {
        return $this->ordem;
    }

    /**
     * Set situacao
     *
     * @param integer $situacao
     * @return Menu
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
     * @return Menu
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
     * @return Menu
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
     * Set usuarioCadastro
     *
     * @param \Vostre\CentralBundle\Entity\Usuario $usuarioCadastro
     * @return Menu
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
     * @return Menu
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
    
    public function setTranslatableLocale($locale)
    {
        $this->locale = $locale;
    }
}
