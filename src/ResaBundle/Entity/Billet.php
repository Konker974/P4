<?php

namespace ResaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Billet
 *
 * @ORM\Table(name="billet")
 * @ORM\Entity(repositoryClass="ResaBundle\Repository\BilletRepository")
 */
class Billet
{
    /**
   * @ORM\ManyToOne(targetEntity="ResaBundle\Entity\Reservation", inversedBy="billets")
   * @ORM\JoinColumn(nullable=false)
   */
    private $reservation;


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
     * @ORM\Column(name="Nom", type="string", length=255)
     * @Assert\Type("string")
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="Prenom", type="string", length=255)
     * @Assert\Type("string")
     */
    private $prenom;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DateNaissance", type="date")
     * @Assert\DateTime()
     */
    private $dateNaissance;

    /**
     * @var string
     *
     * @ORM\Column(name="Pays", type="string", length=100)
     */
    private $pays;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DateVisite", type="date")
     * @Assert\DateTime()
     */
    private $dateVisite;

    /**
     * @var string
     *
     * @ORM\Column(name="NumSerie", type="string", length=255, unique=true)
     * @Assert\Type("string")
     */
    private $numSerie;


    /**
     * @var int
     *
     * @ORM\Column(name="Type", type="boolean", length=100)
     * @Assert\Type("int")
     */
    private $type;

    /**
     * @var bool
     *
     * @ORM\Column(name="Reduction", type="boolean", nullable=true)
     * @Assert\Type("bool")
k
     */
    private $reduction;


    public function getReservation(){
      return $this->reservation;
    }
    public function setReservation(Reservation $reservation){
      $this->reservation=$reservation;
      return $this;
    }

    /**
     * Get reduction
     *
     * @return boolean
     */
    public function getReduction()
    {
        return $this->reduction;
    }

    /**
     * Set isPaid
     *
     * @param boolean $isPaid
     *
     * @return Billet
     */
    public function setReduction($reduction)
    {
        $this->reduction = $reduction;

        return $this;
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
     * Set nom
     *
     * @param string $nom
     *
     * @return Billet
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set prenom
     *
     * @param string $prenom
     *
     * @return Billet
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom
     *
     * @return string
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set dateNaissance
     *
     * @param \DateTime $dateNaissance
     *
     * @return Billet
     */
    public function setDateNaissance($dateNaissance)
    {
        $this->dateNaissance = $dateNaissance;

        return $this;
    }

    /**
     * Get dateNaissance
     *
     * @return \DateTime
     */
    public function getDateNaissance()
    {
        return $this->dateNaissance;
    }

    /**
     * Set pays
     *
     * @param string $pays
     *
     * @return Billet
     */
    public function setPays($pays)
    {
        $this->pays = $pays;

        return $this;
    }

    /**
     * Get pays
     *
     * @return string
     */
    public function getPays()
    {
        return $this->pays;
    }

    /**
     * Set dateVisite
     *
     * @param \DateTime $dateVisite
     *
     * @return Billet
     */
    public function setDateVisite($dateVisite)
    {
        $this->dateVisite = $dateVisite;

        return $this;
    }

    /**
     * Get dateVisite
     *
     * @return \DateTime
     */
    public function getDateVisite()
    {
        return $this->dateVisite;
    }

    /**
     * Set numSerie
     *
     * @param string $numSerie
     *
     * @return Billet
     */
    public function setNumSerie($numSerie)
    {
        $this->numSerie = $numSerie;

        return $this;
    }

    /**
     * Get numSerie
     *
     * @return string
     */
    public function getNumSerie()
    {
        return $this->numSerie;
    }




    /**
     * Set type
     *
     * @param bool $type
     *
     * @return Billet
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return bool
     */
    public function getType()
    {
        return $this->type;
    }


}
