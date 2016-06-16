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
     * @param integer $cout
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
     * @return integer 
     */
    public function getCout()
    {
        return $this->cout;
    }
    /**
     * @var string
     */
    private $tir_arc;

    /**
     * @var string
     */
    private $kayak;

    /**
     * @var string
     */
    private $visite_musee;

    /**
     * @var string
     */
    private $trekking;

    /**
     * @var string
     */
    private $peche_maritime;


    /**
     * Set tir_arc
     *
     * @param string $tirArc
     * @return Activites
     */
    public function setTirArc($tirArc)
    {
        $this->tir_arc = $tirArc;

        return $this;
    }

    /**
     * Get tir_arc
     *
     * @return string 
     */
    public function getTirArc()
    {
        return $this->tir_arc;
    }

    /**
     * Set kayak
     *
     * @param string $kayak
     * @return Activites
     */
    public function setKayak($kayak)
    {
        $this->kayak = $kayak;

        return $this;
    }

    /**
     * Get kayak
     *
     * @return string 
     */
    public function getKayak()
    {
        return $this->kayak;
    }

    /**
     * Set visite_musee
     *
     * @param string $visiteMusee
     * @return Activites
     */
    public function setVisiteMusee($visiteMusee)
    {
        $this->visite_musee = $visiteMusee;

        return $this;
    }

    /**
     * Get visite_musee
     *
     * @return string 
     */
    public function getVisiteMusee()
    {
        return $this->visite_musee;
    }

    /**
     * Set trekking
     *
     * @param string $trekking
     * @return Activites
     */
    public function setTrekking($trekking)
    {
        $this->trekking = $trekking;

        return $this;
    }

    /**
     * Get trekking
     *
     * @return string 
     */
    public function getTrekking()
    {
        return $this->trekking;
    }

    /**
     * Set peche_maritime
     *
     * @param string $pecheMaritime
     * @return Activites
     */
    public function setPecheMaritime($pecheMaritime)
    {
        $this->peche_maritime = $pecheMaritime;

        return $this;
    }

    /**
     * Get peche_maritime
     *
     * @return string 
     */
    public function getPecheMaritime()
    {
        return $this->peche_maritime;
    }
}
