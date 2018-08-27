<?php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="promocion")
 * @ORM\Entity(repositoryClass="AppBundle\Entity\Repository\PromocionRepository")
 */
class Promocion
{
	/**
	 * @ORM\Column(type="integer")
	 * @ORM\Id
	 * @ORM\GeneratedValue(strategy="AUTO")
	 */
	private $id;
	
	/**
	 * @ORM\Column(type="string", length=255, nullable=false)
	 */
	private $nombre;
	
	/**
	 * @ORM\Column(type="date", nullable=false)
	 */
	private $fechaPublicacion;
	
	/**
	 * @ORM\Column(type="date", nullable=false)
	 */
	private $fechaVencimiento;
	
	/**
	 * @ORM\Column(type="boolean", nullable=true)
	 */
	private $generica;
	
	/**
	 * @ORM\Column(type="text", nullable=true)
	 */
	private $descripcion;
	
	/**
	 * @ORM\Column(type="string", nullable=true)
	 */
	private $mensaje;
	
	/**
	 * @ORM\Column(type="string", length=255, nullable=true)
	 */
	protected $imagen;
	
	/**
	 * @ORM\Column(type="integer", nullable=true)
	 */
	protected $orden;
	

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
     * Set nombre
     *
     * @param string $nombre
     *
     * @return Promocion
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set fechaPublicacion
     *
     * @param \DateTime $fechaPublicacion
     *
     * @return Promocion
     */
    public function setFechaPublicacion($fechaPublicacion)
    {
        $this->fechaPublicacion = $fechaPublicacion;

        return $this;
    }

    /**
     * Get fechaPublicacion
     *
     * @return \DateTime
     */
    public function getFechaPublicacion()
    {
        return $this->fechaPublicacion;
    }

    /**
     * Set fechaVencimiento
     *
     * @param \DateTime $fechaVencimiento
     *
     * @return Promocion
     */
    public function setFechaVencimiento($fechaVencimiento)
    {
        $this->fechaVencimiento = $fechaVencimiento;

        return $this;
    }

    /**
     * Get fechaVencimiento
     *
     * @return \DateTime
     */
    public function getFechaVencimiento()
    {
        return $this->fechaVencimiento;
    }
    
    /**
     * Set generica
     *
     * @param int $generica
     *
     * @return Promocion
     */
    public function setGenerica($generica)
    {
        $this->generica = $generica;

        return $this;
    }

    /**
     * Get generica
     *
     * @return int
     */
    public function getGenerica()
    {
        return $this->generica;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     *
     * @return Promocion
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    /**
     * Get descripcion
     *
     * @return string
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Set mensaje
     *
     * @param string $mensaje
     *
     * @return Promocion
     */
    public function setMensaje($mensaje)
    {
        $this->mensaje = $mensaje;

        return $this;
    }

    /**
     * Get mensaje
     *
     * @return string
     */
    public function getMensaje()
    {
        return $this->mensaje;
    }

    /**
     * Set imagen
     *
     * @param string $imagen
     *
     * @return Promocion
     */
    public function setImagen($imagen)
    {
        $this->imagen = $imagen;

        return $this;
    }

    /**
     * Get imagen
     *
     * @return string
     */
    public function getImagen()
    {
        return $this->imagen;
    }
    
    /**
     * Set orden
     *
     * @param integer $orden
     *
     * @return Promocion
     */
    public function setOrden($orden)
    {
        $this->orden = $orden;

        return $this;
    }

    /**
     * Get orden
     *
     * @return integer
     */
    public function getOrden()
    {
        return $this->orden;
    }
    
    
    public function getUploadRootDir()
    {
    	// absolute path to your directory where images must be saved
    	return __DIR__.'/../../../../../public_html/'.$this->getUploadDir();
    }
    
    public function getUploadDir()
    {
    	return 'uploads/promociones';
    }
    
    public function getAbsolutePath()
    {
    	return null === $this->imagen ? null : $this->getUploadRootDir().'/'.$this->imagen;
    }
    
    public function getWebPath()
    {
    	return null === $this->imagen ? null : '/'.$this->getUploadDir().'/'.$this->imagen;
    }
    
}
