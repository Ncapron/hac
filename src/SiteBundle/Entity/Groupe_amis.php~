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
     * @var integer
     */
    private $budget;

    /**
     * @var \UserBundle\Entity\User
     */
    private $user;


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
     * @param integer $budget
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
     * @return integer 
     */
    public function getBudget()
    {
        return $this->budget;
    }

    /**
     * Set user
     *
     * @param \UserBundle\Entity\User $user
     * @return Groupe_amis
     */
    public function setUser(\UserBundle\Entity\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \UserBundle\Entity\User 
     */
    public function getUser()
    {
        return $this->user;
    }
}
