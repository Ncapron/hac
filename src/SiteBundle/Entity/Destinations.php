<?php

namespace SiteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Destination
 */
class Destinations
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $France/Paris;

    /**
     * @var integer
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
     * Set France/Paris
     *
     * @param string $france/Paris
     * @return Destinations
     */
    public function setFrance/Paris($france/Paris)
    {
        $this->France/Paris = $france/Paris;

        return $this;
    }

    /**
     * Get France/Paris
     *
     * @return string 
     */
    public function getFrance/Paris()
    {
        return $this->France/Paris;
    }

    /**
     * Set cout
     *
     * @param integer $cout
     * @return Destinations
     */
    public function setCout($cout)
    {
        $this->cout = $cout;

        return $this;
    }

    /**
     * Get cout
     *
     * @return integer 
     */
    public function getCout()
    {
        return $this->cout;
    }
}
