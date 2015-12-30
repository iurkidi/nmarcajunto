<?php

namespace uni\bundle\nmarcaJuntoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * noticias
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class noticias
{
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
     * @ORM\Column(name="titulo", type="string", length=50)
     */
    private $titulo;

    /**
     * @var string
     *
     * @ORM\Column(name="contenido", type="text")
     */
    private $contenido;

    /**
     * @var string
     *
     * @ORM\Column(name="foto", type="string", length=50)
     */
    private $foto;

    /**
     * @var string
     *
     * @ORM\Column(name="autor", type="string", length=50)
     */
    private $autor;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_pub", type="datetime")
     */
    private $fechaPub;
    
    /**
    * @ORM\ManyToOne(targetEntity="categorias", inversedBy="noticiass", cascade={"remove"})
    */
    protected $categoria;
    
    /**
    * @ORM\OneToMany(targetEntity="comentarios", mappedBy="noticia", cascade={"remove"})
    */
    protected $comentarioss;

    public function __construct() {
        $this->comentarioss = new ArrayCollection();
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
     * Set titulo
     *
     * @param string $titulo
     * @return noticias
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
     * Set contenido
     *
     * @param string $contenido
     * @return noticias
     */
    public function setContenido($contenido)
    {
        $this->contenido = $contenido;

        return $this;
    }

    /**
     * Get contenido
     *
     * @return string 
     */
    public function getContenido()
    {
        return $this->contenido;
    }

    /**
     * Set foto
     *
     * @param string $foto
     * @return noticias
     */
    public function setFoto($foto)
    {
        $this->foto = $foto;

        return $this;
    }

    /**
     * Get foto
     *
     * @return string 
     */
    public function getFoto()
    {
        return $this->foto;
    }

    /**
     * Set autor
     *
     * @param string $autor
     * @return noticias
     */
    public function setAutor($autor)
    {
        $this->autor = $autor;

        return $this;
    }

    /**
     * Get autor
     *
     * @return string 
     */
    public function getAutor()
    {
        return $this->autor;
    }

    /**
     * Set fechaPub
     *
     * @param \DateTime $fechaPub
     * @return noticias
     */
    public function setFechaPub($fechaPub)
    {
        $this->fechaPub = $fechaPub;

        return $this;
    }

    /**
     * Get fechaPub
     *
     * @return \DateTime 
     */
    public function getFechaPub()
    {
        return $this->fechaPub;
    }
    
    public function __toString() {
     return $this->titulo;
    }

    /**
     * Set categoria
     *
     * @param \uni\bundle\nmarcaJuntoBundle\Entity\categorias $categoria
     * @return noticias
     */
    public function setCategoria(\uni\bundle\nmarcaJuntoBundle\Entity\categorias $categoria = null)
    {
        $this->categoria = $categoria;

        return $this;
    }

    /**
     * Get categoria
     *
     * @return \uni\bundle\nmarcaJuntoBundle\Entity\categorias 
     */
    public function getCategoria()
    {
        return $this->categoria;
    }

    /**
     * Add comentarioss
     *
     * @param \uni\bundle\nmarcaJuntoBundle\Entity\comentarios $comentarioss
     * @return noticias
     */
    public function addComentarioss(\uni\bundle\nmarcaJuntoBundle\Entity\comentarios $comentarioss)
    {
        $this->comentarioss[] = $comentarioss;

        return $this;
    }

    /**
     * Remove comentarioss
     *
     * @param \uni\bundle\nmarcaJuntoBundle\Entity\comentarios $comentarioss
     */
    public function removeComentarioss(\uni\bundle\nmarcaJuntoBundle\Entity\comentarios $comentarioss)
    {
        $this->comentarioss->removeElement($comentarioss);
    }

    /**
     * Get comentarioss
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getComentarioss()
    {
        return $this->comentarioss;
    }
    
}
