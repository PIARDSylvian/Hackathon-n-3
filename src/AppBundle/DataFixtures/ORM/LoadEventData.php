<?php
/**
 * Created by PhpStorm.
 * User: rod
 * Date: 17/06/16
 * Time: 05:13
 */

namespace AppBundle\DataFixtures\ORM;

use AppBundle\Entity\Event;
use Doctrine\Common\Persistence\ObjectManager;

class LoadEventData extends LoadCommon
{
    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {
        $entity = new Event();
        $entity->setName('Festival des Vieilles Charrues');
        $entity->setCostEvent('35');
        $entity->setPlace($this->getReference('place_rennes'));
        $entity->setDateStart(new \DateTime('2016-07-14'));
        $entity->setDateEnd(new \DateTime('2016-07-17'));
        $entity->setUrl('http://www.vieillescharrues.asso.fr/2016/');
        $manager->persist($entity);
        $this->setReference('festival_rennes', $entity);

        $entity = new Event();
        $entity->setName('Orléans Jazz');
        $entity->setCostEvent('35');
        $entity->setPlace($this->getReference('place_orleans'));
        $entity->setDateStart(new \DateTime('2016-07-13'));
        $entity->setDateEnd(new \DateTime('2016-07-17'));
        $entity->setUrl('http://jazzorjazz.fr/');
        $manager->persist($entity);
        $this->setReference('festival_orleans', $entity);

        $entity = new Event();
        $entity->setName('Concert Retro années 80 - Zenith Orléans');
        $entity->setCostEvent('45');
        $entity->setPlace($this->getReference('place_orleans'));
        $entity->setDateStart(new \DateTime('2016-07-01 20:00'));
        $entity->setDateEnd(new \DateTime('2016-07-01 23:00'));
        $manager->persist($entity);
        $this->setReference('festival_orleans_2', $entity);


        $manager->flush();
    }

    public function getOrder()
    {
        return 4;
    }
}
