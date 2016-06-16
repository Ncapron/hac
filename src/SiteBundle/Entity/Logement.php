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
    /**
     * @var string
     */
    private $chambre_hote;

    /**
     * @var string
     */
    private $location_appt;

    /**
     * @var string
     */
    private $location_mobile_home;

    /**
     * @var string
     */
    private $yourte;

    /**
     * @var string
     */
    private $grotte;


    /**
     * Set chambre_hote
     *
     * @param string $chambreHote
     * @return Logement
     */
    public function setChambreHote($chambreHote)
    {
        $this->chambre_hote = $chambreHote;

        return $this;
    }

    /**
     * Get chambre_hote
     *
     * @return string 
     */
    public function getChambreHote()
    {
        return $this->chambre_hote;
    }

    /**
     * Set location_appt
     *
     * @param string $locationAppt
     * @return Logement
     */
    public function setLocationAppt($locationAppt)
    {
        $this->location_appt = $locationAppt;

        return $this;
    }

    /**
     * Get location_appt
     *
     * @return string 
     */
    public function getLocationAppt()
    {
        return $this->location_appt;
    }

    /**
     * Set location_mobile_home
     *
     * @param string $locationMobileHome
     * @return Logement
     */
    public function setLocationMobileHome($locationMobileHome)
    {
        $this->location_mobile_home = $locationMobileHome;

        return $this;
    }

    /**
     * Get location_mobile_home
     *
     * @return string 
     */
    public function getLocationMobileHome()
    {
        return $this->location_mobile_home;
    }

    /**
     * Set yourte
     *
     * @param string $yourte
     * @return Logement
     */
    public function setYourte($yourte)
    {
        $this->yourte = $yourte;

        return $this;
    }

    /**
     * Get yourte
     *
     * @return string 
     */
    public function getYourte()
    {
        return $this->yourte;
    }

    /**
     * Set grotte
     *
     * @param string $grotte
     * @return Logement
     */
    public function setGrotte($grotte)
    {
        $this->grotte = $grotte;

        return $this;
    }

    /**
     * Get grotte
     *
     * @return string 
     */
    public function getGrotte()
    {
        return $this->grotte;
    }
}
