<?php

namespace SNT\ImmobilierBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contrat
 *
 * @ORM\Table(name="contrat")
 * @ORM\Entity(repositoryClass="SNT\ImmobilierBundle\Repository\ContratRepository")
 */
class Contrat
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
     * @var \DateTime
     *
     * @ORM\Column(name="dateContrat", type="date")
     */
    private $dateContrat;

    /**
     * @var int
     *
     * @ORM\Column(name="caution", type="integer")
     */
    private $caution;

    /**
     * @var string
     *
     * @ORM\Column(name="duree", type="string", length=30)
     */
    private $duree;

    /**
     * @ORM\OneToOne(targetEntity="SNT\ImmobilierBundle\Entity\Bien")
     * @ORM\JoinColumn(nullable=false)
     */
    private $bien;

    /**
     * @ORM\OneToOne(targetEntity="SNT\ImmobilierBundle\Entity\Client")
     * @ORM\JoinColumn(nullable=false)
     */
    private $client;


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
     * Set dateContrat
     *
     * @param \DateTime $dateContrat
     *
     * @return Contrat
     */
    public function setDateContrat($dateContrat)
    {
        $this->dateContrat = $dateContrat;

        return $this;
    }

    /**
     * Get dateContrat
     *
     * @return \DateTime
     */
    public function getDateContrat()
    {
        return $this->dateContrat;
    }

    /**
     * Set caution
     *
     * @param integer $caution
     *
     * @return Contrat
     */
    public function setCaution($caution)
    {
        $this->caution = $caution;

        return $this;
    }

    /**
     * Get caution
     *
     * @return int
     */
    public function getCaution()
    {
        return $this->caution;
    }

    /**
     * Set duree
     *
     * @param string $duree
     *
     * @return Contrat
     */
    public function setDuree($duree)
    {
        $this->duree = $duree;

        return $this;
    }

    /**
     * Get duree
     *
     * @return string
     */
    public function getDuree()
    {
        return $this->duree;
    }

    /**
     * Set bien
     *
     * @param \SNT\ImmobilierBundle\Entity\Bien $bien
     *
     * @return Contrat
     */
    public function setBien(\SNT\ImmobilierBundle\Entity\Bien $bien)
    {
        $this->bien = $bien;

        return $this;
    }

    /**
     * Get bien
     *
     * @return \SNT\ImmobilierBundle\Entity\Bien
     */
    public function getBien()
    {
        return $this->bien;
    }

    /**
     * Set client
     *
     * @param \SNT\ImmobilierBundle\Entity\Client $client
     *
     * @return Contrat
     */
    public function setClient(\SNT\ImmobilierBundle\Entity\Client $client)
    {
        $this->client = $client;

        return $this;
    }

    /**
     * Get client
     *
     * @return \SNT\ImmobilierBundle\Entity\Client
     */
    public function getClient()
    {
        return $this->client;
    }
}
