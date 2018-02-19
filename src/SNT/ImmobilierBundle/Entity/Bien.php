<?php

namespace SNT\ImmobilierBundle\Entity;

use Doctrine\ORM\Mapping as ORM;


/**
 * Bien
 *
 * @ORM\Table(name="bien")
 * @ORM\Entity(repositoryClass="SNT\ImmobilierBundle\Repository\BienRepository")
 */
class Bien
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nomBien", type="string", length=50)
     */
    private $nomBien;

    /**
     * @var bool
     *
     * @ORM\Column(name="etat", type="boolean")
     */
    private $etat;

    /**
     * @var string
     *
     * @ORM\Column(name="descrition", type="text")
     */
    private $descrition;

    /**
     * @var int
     *
     * @ORM\Column(name="prixLocation", type="integer")
     */
    
    private $prixLocation;

    /**

   * @ORM\ManyToOne(targetEntity="SNT\ImmobilierBundle\Entity\Bien")

   *  @ORM\JoinColumn(name="bien_parent_id", referencedColumnName="id", nullable=true)

   */
   private $bienParent;

   /**

   * @ORM\ManyToOne(targetEntity="SNT\ImmobilierBundle\Entity\Localite")

   * @ORM\JoinColumn(nullable=false)

   */
  private $localite;

  /**

   * @ORM\ManyToOne(targetEntity="SNT\ImmobilierBundle\Entity\TypeBien")

   * @ORM\JoinColumn(nullable=false)

   */
  private $typeBien;

  /**
   * @ORM\OneToMany(targetEntity="SNT\ImmobilierBundle\Entity\Image", mappedBy="bien",cascade={"persist"})
   */
  private $images;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nomBien
     *
     * @param string $nomBien
     *
     * @return Bien
     */
    public function setNomBien($nomBien)
    {
        $this->nomBien = $nomBien;

        return $this;
    }

    /**
     * Get nomBien
     *
     * @return string
     */
    public function getNomBien()
    {
        return $this->nomBien;
    }

    /**
     * Set etat
     *
     * @param boolean $etat
     *
     * @return Bien
     */
    public function setEtat($etat)
    {
        $this->etat = $etat;

        return $this;
    }

    /**
     * Get etat
     *
     * @return bool
     */
    public function getEtat()
    {
        return $this->etat;
    }

    /**
     * Set descrition
     *
     * @param string $descrition
     *
     * @return Bien
     */
    public function setDescrition($descrition)
    {
        $this->descrition = $descrition;

        return $this;
    }

    /**
     * Get descrition
     *
     * @return string
     */
    public function getDescrition()
    {
        return $this->descrition;
    }

    

    /**
     * Set prixLocation
     *
     * @param integer $prixLocation
     *
     * @return Bien
     */
    public function setPrixLocation($prixLocation)
    {
        $this->prixLocation = $prixLocation;

        return $this;
    }

    /**
     * Get prixLocation
     *
     * @return int
     */
    public function getPrixLocation()
    {
        return $this->prixLocation;
    }

    /**
     * Set bienParent
     *
     * @param \SNT\ImmobierBundle\Entity\Bien $bienParent
     *
     * @return Bien
     */
    public function setBienParent($bienParent = null)
    {
        $this->bienParent = $bienParent;

        return $this;
    }

    /**
     * Get bienParent
     *
     * @return \SNT\ImmobierBundle\Entity\Bien
     */
    public function getBienParent()
    {
        return $this->bienParent;
    }

    /**
     * Set localite
     *
     * @param \SNT\ImmobierBundle\Entity\Localite $localite
     *
     * @return Bien
     */
    public function setLocalite($localite)
    {
        $this->localite = $localite;

        return $this;
    }

    /**
     * Get localite
     *
     * @return \SNT\ImmobierBundle\Entity\Localite
     */
    public function getLocalite()
    {
        return $this->localite;
    }

    /**
     * Set typeBien
     *
     * @param \SNT\ImmobierBundle\Entity\TypeBien $typeBien
     *
     * @return Bien
     */
    public function setTypeBien($typeBien)
    {
        $this->typeBien = $typeBien;

        return $this;
    }

    /**
     * Get typeBien
     *
     * @return \SNT\ImmobierBundle\Entity\TypeBien
     */
    public function getTypeBien()
    {
        return $this->typeBien;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->images = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add image
     *
     * @param \SNT\ImmobierBundle\Entity\Image $image
     *
     * @return Bien
     */
    public function addImage($image)
    {
        $this->images[] = $image;

        return $this;
    }

    /**
     * Remove image
     *
     * @param \SNT\ImmobierBundle\Entity\Image $image
     */
    public function removeImage($image)
    {
        $this->images->removeElement($image);
    }

    /**
     * Get images
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getImages()
    {
        return $this->images;
    }

    public function __toString(){
        return $this->nomBien;
    }
}
