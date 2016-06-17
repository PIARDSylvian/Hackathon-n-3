<?php

namespace AppBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Travel
 */
class Travel
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var ArrayCollection
     */
    private $places;

    /**
     * @var ArrayCollection
     */
    private $participations;

    /**
     * Not persisted in database
     * @var \DateTime
     */
    private $date_start;

    /**
     * Not persisted in database
     * @var \DateTime
     */
    private $date_end;

    public function __construct()
    {
        $this->places = new ArrayCollection();
        $this->participations = new ArrayCollection();
        $this->date_start   = new \DateTime("2016-07-17");
        $this->date_end     = new \DateTime("2017-07-18");
    }


    /**
     * @param \DateTime $date_start
     * @return $this
     */
    public function setDateStart(\DateTime $date_start)
    {
        $this->date_start = $date_start;
        return $this;
    }

    /**
     * @param \DateTime $date_end
     * @return $this
     */
    public function setDateEnd(\DateTime $date_end)
    {
        $this->date_end = $date_end;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDateStart()
    {
        return $this->date_start;
    }


    /**
     * @return \DateTime
     */
    public function getDateEnd()
    {
        return $this->date_end;
    }

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
     * Set name
     *
     * @param string $name
     * @return Travel
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Add participations
     *
     * @param \AppBundle\Entity\Participation $participations
     * @return Travel
     */
    public function addParticipation(\AppBundle\Entity\Participation $participations)
    {
        $this->participations[] = $participations;

        return $this;
    }

    /**
     * Remove participations
     *
     * @param \AppBundle\Entity\Participation $participations
     */
    public function removeParticipation(\AppBundle\Entity\Participation $participations)
    {
        $this->participations->removeElement($participations);
    }

    /**
     * Get participations
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getParticipations()
    {
        return $this->participations;
    }

    /**
     * Add places
     *
     * @param \AppBundle\Entity\Place $places
     * @return Travel
     */
    public function addPlace(\AppBundle\Entity\Place $places)
    {
        $this->places[] = $places;

        return $this;
    }

    /**
     * Remove places
     *
     * @param \AppBundle\Entity\Place $places
     */
    public function removePlace(\AppBundle\Entity\Place $places)
    {
        $this->places->removeElement($places);
    }

    /**
     * Get places
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getPlaces()
    {
        return $this->places;
    }
}
