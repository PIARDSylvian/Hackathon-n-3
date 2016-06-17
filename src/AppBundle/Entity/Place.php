<?php

namespace AppBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Place
 */
class Place
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $city;

    /**
     * @var string
     */
    private $longitude;

    /**
     * @var string
     */
    private $latitude;

    /**
     * @var string
     */
    private $country;


    /**
     * @var float
     */
    private $cost_night;

    /**
     * @var float
     */
    private $cost_daylife;

    /**
     * @var string
     */
    private $url_gmap;

    /**
     * @var ArrayCollection
     */
    private $events;

    /**
     * @var ArrayCollection
     */
    private $users;

    /**
     * @var ArrayCollection
     */
    private $travels;

    /**
     * Place constructor.
     */
    public function __construct()
    {
        $this->events = new ArrayCollection();
        $this->users = new ArrayCollection();
        $this->travels = new ArrayCollection();
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
     * Set city
     *
     * @param string $city
     * @return Place
     */
    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * Get city
     *
     * @return string 
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set longitude
     *
     * @param string $longitude
     * @return Place
     */
    public function setLongitude($longitude)
    {
        $this->longitude = $longitude;

        return $this;
    }

    /**
     * Get longitude
     *
     * @return string 
     */
    public function getLongitude()
    {
        return $this->longitude;
    }

    /**
     * Set latitude
     *
     * @param string $latitude
     * @return Place
     */
    public function setLatitude($latitude)
    {
        $this->latitude = $latitude;

        return $this;
    }

    /**
     * Get latitude
     *
     * @return string 
     */
    public function getLatitude()
    {
        return $this->latitude;
    }

    /**
     * Set country
     *
     * @param string $country
     * @return Place
     */
    public function setCountry($country)
    {
        $this->country = $country;

        return $this;
    }

    /**
     * Get country
     *
     * @return string 
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Set cost_night
     *
     * @param float $costNight
     * @return Place
     */
    public function setCostNight($costNight)
    {
        $this->cost_night = $costNight;

        return $this;
    }

    /**
     * Get cost_night
     *
     * @return float 
     */
    public function getCostNight()
    {
        return $this->cost_night;
    }

    /**
     * Set cost_daylife
     *
     * @param float $costDaylife
     * @return Place
     */
    public function setCostDaylife($costDaylife)
    {
        $this->cost_daylife = $costDaylife;

        return $this;
    }

    /**
     * Get cost_daylife
     *
     * @return float 
     */
    public function getCostDaylife()
    {
        return $this->cost_daylife;
    }

    /**
     * Set url_gmap
     *
     * @param string $urlGmap
     * @return Place
     */
    public function setUrlGmap($urlGmap)
    {
        $this->url_gmap = $urlGmap;

        return $this;
    }

    /**
     * Get url_gmap
     *
     * @return string 
     */
    public function getUrlGmap()
    {
        return $this->url_gmap;
    }

    /**
     * Add events
     *
     * @param \AppBundle\Entity\Event $events
     * @return Place
     */
    public function addEvent(\AppBundle\Entity\Event $events)
    {
        $this->events[] = $events;

        return $this;
    }

    /**
     * Remove events
     *
     * @param \AppBundle\Entity\Event $events
     */
    public function removeEvent(\AppBundle\Entity\Event $events)
    {
        $this->events->removeElement($events);
    }

    /**
     * Get events
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getEvents()
    {
        return $this->events;
    }

    /**
     * Add users
     *
     * @param \AppBundle\Entity\User $users
     * @return Place
     */
    public function addUser(\AppBundle\Entity\User $users)
    {
        $this->users[] = $users;

        return $this;
    }

    /**
     * Remove users
     *
     * @param \AppBundle\Entity\User $users
     */
    public function removeUser(\AppBundle\Entity\User $users)
    {
        $this->users->removeElement($users);
    }

    /**
     * Get users
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getUsers()
    {
        return $this->users;
    }

    /**
     * Add travels
     *
     * @param \AppBundle\Entity\Travel $travels
     * @return Place
     */
    public function addTravel(\AppBundle\Entity\Travel $travels)
    {
        $this->travels[] = $travels;

        return $this;
    }

    /**
     * Remove travels
     *
     * @param \AppBundle\Entity\Travel $travels
     */
    public function removeTravel(\AppBundle\Entity\Travel $travels)
    {
        $this->travels->removeElement($travels);
    }

    /**
     * Get travels
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getTravels()
    {
        return $this->travels;
    }
}
