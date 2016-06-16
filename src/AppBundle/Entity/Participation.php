<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Participation
 */
class Participation
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var int
     */
    private $budget;

    /**
     * @var int
     */
    private $maxDistance;

    /**
     * @var \DateTime
     */
    private $dateStartAvaible;

    /**
     * @var \DateTime
     */
    private $dateEndAvaible;

    /**
     * @var \AppBundle\Entity\User
     */
    private $user;


    /**
     * @var \AppBundle\Entity\Travel
     */
    private $travel;

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
     * Set maxDistance
     *
     * @param integer $maxDistance
     * @return Participation
     */
    public function setMaxDistance($maxDistance)
    {
        $this->maxDistance = $maxDistance;

        return $this;
    }

    /**
     * Get maxDistance
     *
     * @return integer 
     */
    public function getMaxDistance()
    {
        return $this->maxDistance;
    }

    /**
     * Set dateStartAvaible
     *
     * @param \DateTime $dateStartAvaible
     * @return Participation
     */
    public function setDateStartAvaible($dateStartAvaible)
    {
        $this->dateStartAvaible = $dateStartAvaible;

        return $this;
    }

    /**
     * Get dateStartAvaible
     *
     * @return \DateTime 
     */
    public function getDateStartAvaible()
    {
        return $this->dateStartAvaible;
    }

    /**
     * Set dateEndAvaible
     *
     * @param \DateTime $dateEndAvaible
     * @return Participation
     */
    public function setDateEndAvaible($dateEndAvaible)
    {
        $this->dateEndAvaible = $dateEndAvaible;

        return $this;
    }

    /**
     * Get dateEndAvaible
     *
     * @return \DateTime 
     */
    public function getDateEndAvaible()
    {
        return $this->dateEndAvaible;
    }
    /**
     * @var integer
     */
    private $budjet;


    /**
     * Set budget
     *
     * @param integer $budget
     * @return Participation
     */
    public function setBudget($budget)
    {
        $this->budget = $budget;

        return $this;
    }

    /**
     * Get budget
     *
     * @return integer 
     */
    public function getBudget()
    {
        return $this->budget;
    }

    /**
     * Set user
     *
     * @param \AppBundle\Entity\User $user
     * @return Participation
     */
    public function setUser(\AppBundle\Entity\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \AppBundle\Entity\User 
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set travel
     *
     * @param \AppBundle\Entity\Travel $travel
     * @return Participation
     */
    public function setTravel(\AppBundle\Entity\Travel $travel = null)
    {
        $this->travel = $travel;

        return $this;
    }

    /**
     * Get travel
     *
     * @return \AppBundle\Entity\Travel 
     */
    public function getTravel()
    {
        return $this->travel;
    }
}
