<?php
// src/AppBundle/Entity/User.php

namespace AppBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

class User extends BaseUser
{
    protected $id;

    /**
     * @var ArrayCollection
     */
    private $criterias;

    /**
     * @var ArrayCollection
     */
    private $participations;


    /**
     * @var ArrayCollection
     */
    private $places;

    public function __construct()
    {
        parent::__construct();

        $this->criterias = new ArrayCollection();
        $this->participations = new ArrayCollection();
        $this->places = new ArrayCollection();
    }

    /**
     * Add criterias
     *
     * @param \AppBundle\Entity\Criteria $criterias
     * @return User
     */
    public function addCriteria(\AppBundle\Entity\Criteria $criterias)
    {
        $this->criterias[] = $criterias;

        return $this;
    }

    /**
     * Remove criterias
     *
     * @param \AppBundle\Entity\Criteria $criterias
     */
    public function removeCriteria(\AppBundle\Entity\Criteria $criterias)
    {
        $this->criterias->removeElement($criterias);
    }

    /**
     * Get criterias
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getCriterias()
    {
        return $this->criterias;
    }

    /**
     * Add participations
     *
     * @param \AppBundle\Entity\Participation $participations
     * @return User
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
     * @return User
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
