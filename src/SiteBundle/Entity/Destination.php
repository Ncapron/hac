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
    private $allemagne;

    /**
     * @var string
     */
    private $paysBas;

    /**
     * @var string
     */
    private $albanie;

    /**
     * @var string
     */
    private $espagne;

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
     * Set allemagne
     *
     * @param string $allemagne
     * @return Destination
     */
    public function setAllemagne($allemagne)
    {
        $this->allemagne = $allemagne;

        return $this;
    }

    /**
     * Get allemagne
     *
     * @return string 
     */
    public function getAllemagne()
    {
        return $this->allemagne;
    }

    /**
     * Set paysBas
     *
     * @param string $paysBas
     * @return Destination
     */
    public function setPaysBas($paysBas)
    {
        $this->paysBas = $paysBas;

        return $this;
    }

    /**
     * Get paysBas
     *
     * @return string 
     */
    public function getPaysBas()
    {
        return $this->paysBas;
    }

    /**
     * Set albanie
     *
     * @param string $albanie
     * @return Destination
     */
    public function setAlbanie($albanie)
    {
        $this->albanie = $albanie;

        return $this;
    }

    /**
     * Get albanie
     *
     * @return string 
     */
    public function getAlbanie()
    {
        return $this->albanie;
    }

    /**
     * Set espagne
     *
     * @param string $espagne
     * @return Destination
     */
    public function setEspagne($espagne)
    {
        $this->espagne = $espagne;

        return $this;
    }

    /**
     * Get espagne
     *
     * @return string 
     */
    public function getEspagne()
    {
        return $this->espagne;
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
