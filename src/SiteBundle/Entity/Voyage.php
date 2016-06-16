<?php

namespace SiteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Voyage
 */
class Voyage
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $nomProjet;

    /**
     * @var \DateTime
     */
    private $date_depart;

    /**
     * @var integer
     */
    private $nombresJours;


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
     * Set nomProjet
     *
     * @param string $nomProjet
     * @return Voyage
     */
    public function setNomProjet($nomProjet)
    {
        $this->nomProjet = $nomProjet;

        return $this;
    }

    /**
     * Get nomProjet
     *
     * @return string 
     */
    public function getNomProjet()
    {
        return $this->nomProjet;
    }

    /**
     * Set date_depart
     *
     * @param \DateTime $dateDepart
     * @return Voyage
     */
    public function setDateDepart($dateDepart)
    {
        $this->date_depart = $dateDepart;

        return $this;
    }

    /**
     * Get date_depart
     *
     * @return \DateTime 
     */
    public function getDateDepart()
    {
        return $this->date_depart;
    }

    /**
     * Set nombresJours
     *
     * @param integer $nombresJours
     * @return Voyage
     */
    public function setNombresJours($nombresJours)
    {
        $this->nombresJours = $nombresJours;

        return $this;
    }

    /**
     * Get nombresJours
     *
     * @return integer 
     */
    public function getNombresJours()
    {
        return $this->nombresJours;
    }
}
