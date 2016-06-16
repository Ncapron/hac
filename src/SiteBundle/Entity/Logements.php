<?php

namespace SiteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Logements
 */
class Logements
{

    /**
     * @var integer
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
     * @var string
     */
    private $chambre_hote;

    /**
     * @var string
     */
    private $location_appartement;

    /**
     * @var string
     */
    private $location_mobile_home;

    /**
     * @var string
     */
    private $location_de_maison;

    /**
     * @var string
     */
    private $location_chalet;

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
     * Set camping
     *
     * @param string $camping
     * @return Logements
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
     * @return Logements
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
     * Set chambre_hote
     *
     * @param string $chambreHote
     * @return Logements
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
     * Set location_appartement
     *
     * @param string $locationAppartement
     * @return Logements
     */
    public function setLocationAppartement($locationAppartement)
    {
        $this->location_appartement = $locationAppartement;

        return $this;
    }

    /**
     * Get location_appartement
     *
     * @return string 
     */
    public function getLocationAppartement()
    {
        return $this->location_appartement;
    }

    /**
     * Set location_mobile_home
     *
     * @param string $locationMobileHome
     * @return Logements
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
     * Set location_de_maison
     *
     * @param string $locationDeMaison
     * @return Logements
     */
    public function setLocationDeMaison($locationDeMaison)
    {
        $this->location_de_maison = $locationDeMaison;

        return $this;
    }

    /**
     * Get location_de_maison
     *
     * @return string 
     */
    public function getLocationDeMaison()
    {
        return $this->location_de_maison;
    }

    /**
     * Set location_chalet
     *
     * @param string $locationChalet
     * @return Logements
     */
    public function setLocationChalet($locationChalet)
    {
        $this->location_chalet = $locationChalet;

        return $this;
    }

    /**
     * Get location_chalet
     *
     * @return string 
     */
    public function getLocationChalet()
    {
        return $this->location_chalet;
    }

    /**
     * Set cout
     *
     * @param integer $cout
     * @return Logements
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
