<?php

namespace SiteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Destination
 */
class Destination
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $pays;

    /**
     * @var string
     */
    private $ville;

    /**
     * @var string
     */
    private $transports;

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
     * Set pays
     *
     * @param string $pays
     * @return Destination
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
     * Set ville
     *
     * @param string $ville
     * @return Destination
     */
    public function setVille($ville)
    {
        $this->ville = $ville;

        return $this;
    }

    /**
     * Get ville
     *
     * @return string 
     */
    public function getVille()
    {
        return $this->ville;
    }

    /**
     * Set transports
     *
     * @param string $transports
     * @return Destination
     */
    public function setTransports($transports)
    {
        $this->transports = $transports;

        return $this;
    }

    /**
     * Get transports
     *
     * @return string 
     */
    public function getTransports()
    {
        return $this->transports;
    }

    /**
     * Set cout
     *
     * @param integer $cout
     * @return Destination
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
