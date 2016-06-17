<?php

namespace AppBundle\Repository;

use AppBundle\Entity\User;
use Doctrine\ORM\EntityRepository;

/**
 * TravelRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class TravelRepository extends EntityRepository
{
    /**
     * @param User $user
     * @return \AppBundle\Entity\Travel[]
     */
    public function findByUserParticipations(User $user)
    {
        $query = $this->createQueryBuilder('t')
            ->join('t.participations', 'p')
            ->where('p.user = :user')
            ->setParameter(':user', $user);

        return $query->getQuery()->getResult();
    }
}
