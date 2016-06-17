<?php
/**
 * Created by PhpStorm.
 * User: rod
 * Date: 17/06/16
 * Time: 05:13
 */

namespace AppBundle\DataFixtures\ORM;

use AppBundle\Entity\Travel;
use Doctrine\Common\Persistence\ObjectManager;

class LoadTravelData extends LoadCommon
{
    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {
        $entity = new Travel();
        $entity->setName('Week-end à Orléans');
        $entity->addPlace($this->getReference('place_orleans'));
        $manager->persist($entity);
        $this->setReference('travel_orleans', $entity);

        $entity = new Travel();
        $entity->setName('Vacances à Rennes');
        $entity->addPlace($this->getReference('place_rennes'));
        $manager->persist($entity);
        $this->setReference('travel_rennes', $entity);


        $manager->flush();
    }

    public function getOrder()
    {
        return 5;
    }
}
