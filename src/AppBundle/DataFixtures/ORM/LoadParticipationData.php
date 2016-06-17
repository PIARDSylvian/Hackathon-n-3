<?php
/**
 * Created by PhpStorm.
 * User: rod
 * Date: 17/06/16
 * Time: 05:13
 */

namespace AppBundle\DataFixtures\ORM;

use AppBundle\Entity\Participation;
use Doctrine\Common\Persistence\ObjectManager;

class LoadParticipationData extends LoadCommon
{
    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {
        // orleans
        $entity = new Participation();
        $entity->setBudget('200');
        $entity->setDateStartAvaible(new \DateTime('2016-07-01'));
        $entity->setDateEndAvaible(new \DateTime('2016-07-31'));
        $entity->setMaxDistance('200');
        $entity->setTravel($this->getReference('travel_orleans'));
        $entity->setUser($this->getReference('rod'));
        $manager->persist($entity);
        $this->setReference('participation_orleans_rod', $entity);

        $entity = new Participation();
        $entity->setBudget('100');
        $entity->setDateStartAvaible(new \DateTime('2016-07-15'));
        $entity->setDateEndAvaible(new \DateTime('2016-07-31'));
        $entity->setMaxDistance('200');
        $entity->setTravel($this->getReference('travel_orleans'));
        $entity->setUser($this->getReference('sylvian'));
        $manager->persist($entity);
        $this->setReference('participation_orleans_sylvian', $entity);

        $entity = new Participation();
        $entity->setBudget('150');
        $entity->setDateStartAvaible(new \DateTime('2016-07-01'));
        $entity->setDateEndAvaible(new \DateTime('2016-07-25'));
        $entity->setMaxDistance('200');
        $entity->setTravel($this->getReference('travel_orleans'));
        $entity->setUser($this->getReference('tim'));
        $manager->persist($entity);
        $this->setReference('participation_orleans_tim', $entity);

        // rennes
        $entity = new Participation();
        $entity->setBudget('175');
        $entity->setDateStartAvaible(new \DateTime('2016-07-01'));
        $entity->setDateEndAvaible(new \DateTime('2016-07-31'));
        $entity->setMaxDistance('200');
        $entity->setTravel($this->getReference('travel_rennes'));
        $entity->setUser($this->getReference('tim'));
        $manager->persist($entity);
        $this->setReference('participation_rennes_tim', $entity);

        $entity = new Participation();
        $entity->setBudget('175');
        $entity->setDateStartAvaible(new \DateTime('2016-07-15'));
        $entity->setDateEndAvaible(new \DateTime('2016-07-31'));
        $entity->setMaxDistance('200');
        $entity->setTravel($this->getReference('travel_rennes'));
        $entity->setUser($this->getReference('sylvian'));
        $manager->persist($entity);
        $this->setReference('participation_rennes_sylvian', $entity);

        $manager->flush();
    }

    public function getOrder()
    {
        return 6;
    }
}
