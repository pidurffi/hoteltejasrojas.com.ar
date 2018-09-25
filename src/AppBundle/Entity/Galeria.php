<?php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="galeria")
 * @ORM\Entity(repositoryClass="AppBundle\Entity\Repository\GaleriaRepository")
 */
class Galeria {
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
	 * @ORM\Column(type="array", nullable=true)
	 */
	protected $galeria;
	
	

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
     * @return Galeria
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
     * Set galeria
     *
     * @param array $galeria
     *
     * @return Galeria
     */
    public function setGaleria($galeria)
    {
    	$galeriaFinal = array();
    	foreach($galeria as $gal) {
    		if(empty($gal)) continue;
    		$galeriaFinal[] = $gal;
    	}
        $this->galeria = $galeriaFinal;

        return $this;
    }

    /**
     * Get galeria
     *
     * @return array
     */
    public function getGaleria()
    {
        return $this->galeria;
    }
    
    
    public function getUploadRootDir()
    {
    	// absolute path to your directory where images must be saved
    	return __DIR__.'/../../../../../public_html/'.$this->getUploadDir();
    }
    
    public function getUploadDir()
    {
    	return 'uploads/galerias';
    }
    
    public function getAbsolutePath()
    {
    	return null === $this->image ? null : $this->getUploadRootDir().'/'.$this->image;
    }
    
    public function getWebPath()
    {
    	return null === $this->image ? null : '/'.$this->getUploadDir().'/'.$this->image;
    }
    
}
