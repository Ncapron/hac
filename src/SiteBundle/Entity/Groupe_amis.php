<?php

namespace SiteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Groupe_amis
 */
class Groupe_amis
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $nomGroup;

    /**
     * @var string
     */
    private $budget;


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
     * Set nomGroup
     *
     * @param string $nomGroup
     * @return Groupe_amis
     */
    public function setNomGroup($nomGroup)
    {
        $this->nomGroup = $nomGroup;

        return $this;
    }

    /**
     * Get nomGroup
     *
     * @return string 
     */
    public function getNomGroup()
    {
        return $this->nomGroup;
    }

    /**
     * Set budget
     *
     * @param string $budget
     * @return Groupe_amis
     */
    public function setBudget($budget)
    {
        $this->budget = $budget;

        return $this;
    }

    /**
     * Get budget
     *
     * @return string 
     */
    public function getBudget()
    {
        return $this->budget;
    }
}
