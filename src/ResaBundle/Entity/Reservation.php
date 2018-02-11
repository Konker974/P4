<?php

namespace ResaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Reservation
 *
 * @ORM\Table(name="reservation")
 * @ORM\Entity(repositoryClass="ResaBundle\Repository\ReservationRepository")
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
     * @ORM\Column(name="Date", type="datetime")
     */
    private $date;

    /**
     * @var string
     *
     * @ORM\Column(name="Email", type="string", length=255)
     */
    private $email;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="LastModif", type="datetime", nullable=true)
     */
    private $lastModif;

    /**
     * @var bool
     *
     * @ORM\Column(name="IsPaid", type="boolean")
     */
    private $isPaid;

    /**
    * @ORM\OneToMany(targetEntity="ResaBundle\Entity\Billet", mappedBy="reservation", cascade={"persist"})
    */
    private $billets;





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
     * Set date
     *
     * @param \DateTime $date
     *
     * @return Reservation
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return Reservation
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set lastModif
     *
     * @param \DateTime $lastModif
     *
     * @return Reservation
     */
    public function setLastModif($lastModif)
    {
        $this->lastModif = $lastModif;

        return $this;
    }

    /**
     * Get lastModif
     *
     * @return \DateTime
     */
    public function getLastModif()
    {
        return $this->lastModif;
    }

    /**
     * Set isPaid
     *
     * @param boolean $isPaid
     *
     * @return Reservation
     */
    public function setIsPaid($isPaid)
    {
        $this->isPaid = $isPaid;

        return $this;
    }

    /**
     * Get isPaid
     *
     * @return boolean
     */
    public function getIsPaid()
    {
        return $this->isPaid;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->billets = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add billet
     *
     * @param \ResaBundle\Entity\Billet $billet
     *
     * @return Reservation
     */
    public function addBillet(\ResaBundle\Entity\Billet $billet)
    {
        $this->billets[] = $billet;
        $billet->setReservation($this);

        return $this;
    }

    /**
     * Remove billet
     *
     * @param \ResaBundle\Entity\Billet $billet
     */
    public function removeBillet(\ResaBundle\Entity\Billet $billet)
    {
        $this->billets->removeElement($billet);
    }

    /**
     * Get billets
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getBillets()
    {
        return $this->billets;
    }
}
