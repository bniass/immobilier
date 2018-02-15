<?php

namespace SNT\ImmobilierBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Reservation
 *
 * @ORM\Table(name="reservation")
 * @ORM\Entity(repositoryClass="SNT\ImmobilierBundle\Repository\ReservationRepository")
 */
class Reservation
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
     * @ORM\Column(name="dateReservation", type="date")
     */
    private $dateReservation;

    /**
     * @var string
     *
     * @ORM\Column(name="etat", type="string", length=30)
     */
    private $etat;


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
     * Set dateReservation
     *
     * @param \DateTime $dateReservation
     *
     * @return Reservation
     */
    public function setDateReservation($dateReservation)
    {
        $this->dateReservation = $dateReservation;

        return $this;
    }

    /**
     * Get dateReservation
     *
     * @return \DateTime
     */
    public function getDateReservation()
    {
        return $this->dateReservation;
    }

    /**
     * Set etat
     *
     * @param string $etat
     *
     * @return Reservation
     */
    public function setEtat($etat)
    {
        $this->etat = $etat;

        return $this;
    }

    /**
     * Get etat
     *
     * @return string
     */
    public function getEtat()
    {
        return $this->etat;
    }

    /**
     * Set bien
     *
     * @param \SNT\ImmobilierBundle\Entity\Bien $bien
     *
     * @return Reservation
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
     * @return Reservation
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
