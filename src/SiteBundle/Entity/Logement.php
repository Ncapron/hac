<?php

namespace SiteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Logement
 */
class Logement
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $camping;

    /**
     * @var string
     */
    private $hotel;

    /**
     * @var int
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
     * Set camping
     *
     * @param string $camping
     * @return Logement
     */
    public function setCamping($camping)
    {
        $this->camping = $camping;

        return $this;
    }

    /**
     * Get camping
     *
     * @return string 
     */
    public function getCamping()
    {
        return $this->camping;
    }

    /**
     * Set hotel
     *
     * @param string $hotel
     * @return Logement
     */
    public function setHotel($hotel)
    {
        $this->hotel = $hotel;

        return $this;
    }

    /**
     * Get hotel
     *
     * @return string 
     */
    public function getHotel()
    {
        return $this->hotel;
    }

    /**
     * Set cout
     *
     * @param integer $cout
     * @return Logement
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