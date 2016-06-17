<?php

namespace AppBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Criteria
 */
class Criteria
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
    public $users;

    public function __construct()
    {
        $this->users = new ArrayCollection();
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
     * @return Criteria
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
     * @var integer
     */
    public $type_criteria;


    /**
     * Set type_criteria
     *
     * @param integer $typeCriteria
     * @return Criteria
     */
    public function setTypeCriteria($typeCriteria)
    {
        $this->type_criteria = $typeCriteria;

        return $this;
    }

    /**
     * Get type_criteria
     *
     * @return integer 
     */
    public function getTypeCriteria()
    {
        return $this->type_criteria;
    }

    /**
     * Add users
     *
     * @param \AppBundle\Entity\User $users
     * @return Criteria
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
}
