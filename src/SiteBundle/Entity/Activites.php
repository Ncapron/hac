<?php

namespace SiteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Activites
 */
class Activites
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $randonnee;

    /**
     * @var string
     */
    private $paintball;

    /**
     * @var string
     */
    private $cout;


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
     * Set randonnee
     *
     * @param string $randonnee
     * @return Activites
     */
    public function setRandonnee($randonnee)
    {
        $this->randonnee = $randonnee;

        return $this;
    }

    /**
     * Get randonnee
     *
     * @return string 
     */
    public function getRandonnee()
    {
        return $this->randonnee;
    }

    /**
     * Set paintball
     *
     * @param string $paintball
     * @return Activites
     */
    public function setPaintball($paintball)
    {
        $this->paintball = $paintball;

        return $this;
    }

    /**
     * Get paintball
     *
     * @return string 
     */
    public function getPaintball()
    {
        return $this->paintball;
    }

    /**
     * Set cout
     *
     * @param string $cout
     * @return Activites
     */
    public function setCout($cout)
    {
        $this->cout = $cout;

        return $this;
    }

    /**
     * Get cout
     *
     * @return string 
     */
    public function getCout()
    {
        return $this->cout;
    }
}
