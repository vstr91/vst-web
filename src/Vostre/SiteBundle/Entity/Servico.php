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
use Symfony\Component\HttpFoundation\File\UploadedFile;

/**
 * Description of Servico
 *
 * @author Almir
 */

/**
 * Servico
 *
 * @ORM\Entity(repositoryClass="Vostre\SiteBundle\Entity\Repository\ServicoRepository")
 * @ORM\Table(name="servico")
 * @ORM\HasLifecycleCallbacks()
 */
class Servico implements Translatable {
    
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
     * @Gedmo\Translatable
     * @ORM\Column(name="descricao", type="text")
     * @Assert\NotBlank()
     */
    private $descricao;
    
    /**
     * @var string
     *
     * @ORM\Column(name="imagem", type="string", length=50)
     * @Assert\NotBlank()
     */
    private $imagem;
    
    /**
     * @Assert\File(maxSize="6000000")
     */
    private $file;
    
    private $temp;
    
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
    
    ################## INICIO METODOS MANIPULACAO IMAGENS ###################
    
    public function getAbsolutePath()
    {
        return null === $this->imagem
            ? null
            : $this->getUploadRootDir().'/'.$this->imagem;
    }

    public function getWebPath()
    {
        return null === $this->imagem
            ? null
            : $this->getUploadDir().'/'.$this->imagem;
    }

    protected function getUploadRootDir()
    {
        // the absolute directory path where uploaded
        // documents should be saved
        return __DIR__.'/../../../../web/'.$this->getUploadDir();
    }

    protected function getUploadDir()
    {
        // get rid of the __DIR__ so it doesn't screw up
        // when displaying uploaded doc/image in the view.
        return 'uploads/servico';
    }
    
    /**
     * Sets file.
     *
     * @param UploadedFile $file
     */
    public function setFile(UploadedFile $file = null)
    {
        $this->file = $file;
        // check if we have an old image path
        if (isset($this->imagem)) {
            // store the old name to delete after the update
            $this->temp = $this->imagem;
            $this->imagem = null;
        } else {
            $this->imagem = 'initial';
        }
    }
    
    /**
     * Get file.
     *
     * @return UploadedFile
     */
    public function getFile()
    {
        return $this->file;
    }

    /**
     * @ORM\PrePersist()
     * @ORM\PreUpdate()
     */
    public function preUpload()
    {
        if (null !== $this->getFile()) {
            // do whatever you want to generate a unique name
            $filename = sha1(uniqid(mt_rand(), true));
            $this->imagem = $filename.'.'.$this->getFile()->guessExtension();
        }
    }

    /**
     * @ORM\PostPersist()
     * @ORM\PostUpdate()
     */
    public function upload()
    {
        if (null === $this->getFile()) {
            return;
        }

        // if there is an error when moving the file, an exception will
        // be automatically thrown by move(). This will properly prevent
        // the entity from being persisted to the database on error
        $this->getFile()->move($this->getUploadRootDir(), $this->imagem);

        // check if we have an old image
        if (isset($this->temp)) {
            // delete the old image
            unlink($this->getUploadRootDir().'/'.$this->temp);
            // clear the temp image path
            $this->temp = null;
        }
        $this->file = null;
    }

    /**
     * @ORM\PostRemove()
     */
    public function removeUpload()
    {
        if ($file = $this->getAbsolutePath()) {
            unlink($file);
        }
    }
    
    ################## FIM METODOS MANIPULACAO IMAGENS ###################
    

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
     * @return Servico
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
     * @return Servico
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
     * Set imagem
     *
     * @param string $imagem
     * @return Servico
     */
    public function setImagem($imagem)
    {
        $this->imagem = $imagem;

        return $this;
    }

    /**
     * Get imagem
     *
     * @return string 
     */
    public function getImagem()
    {
        return $this->imagem;
    }

    /**
     * Set ordem
     *
     * @param integer $ordem
     * @return Servico
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
     * @return Servico
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
     * @return Servico
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
     * @return Servico
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
     * @return Servico
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
     * @return Servico
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
