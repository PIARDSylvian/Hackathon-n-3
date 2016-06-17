<?php
/**
 * Created by PhpStorm.
 * User: rod
 * Date: 17/06/16
 * Time: 05:13
 */

namespace AppBundle\DataFixtures\ORM;

use AppBundle\Entity\Place;
use Doctrine\Common\Persistence\ObjectManager;

class LoadPlaceData extends LoadCommon
{
    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {
        $entity = new Place();
        $entity->setCity('La Loupe');
        $entity->setCostDaylife('6');
        $entity->setCostNight('50');
        $entity->setPhotoFilename('la_loupe.jpg');
        $manager->persist($entity);
        $this->setReference('place_la_loupe', $entity);

        $entity = new Place();
        $entity->setCity('Nogent Le Rotrou');
        $entity->setCostDaylife('6');
        $entity->setCostNight('50');
        $entity->setPhotoFilename('nogentlerotrou.jpg');
        $manager->persist($entity);
        $this->setReference('place_nogent', $entity);

        $entity = new Place();
        $entity->setCity('Chartres');
        $entity->setCostDaylife('6');
        $entity->setCostNight('90');
        $entity->setPhotoFilename('chartres.jpg');
        $manager->persist($entity);
        $this->setReference('place_chartres', $entity);

        $entity = new Place();
        $entity->setCity('Paris');
        $entity->setCostDaylife('20');
        $entity->setCostNight('100');
        $entity->setPhotoFilename('Paris-Eiffel-Tower2.jpg');
        $manager->persist($entity);
        $this->setReference('place_paris', $entity);

        $entity = new Place();
        $entity->setCity('Rennes');
        $entity->setCostDaylife('10');
        $entity->setCostNight('100');
        $entity->setPhotoFilename('Rennes2.jpg');
        $manager->persist($entity);
        $this->setReference('place_rennes', $entity);

        $entity = new Place();
        $entity->setCity('Orléans');
        $entity->setCostDaylife('15');
        $entity->setCostNight('100');
        $entity->setPhotoFilename('orleans.jpg');
        $manager->persist($entity);
        $this->setReference('place_orleans', $entity);

        $entity = new Place();
        $entity->setCity('Londres');
        $entity->setCostDaylife('20');
        $entity->setCostNight('200');
        $entity->setPhotoFilename('londres.jpg');
        $manager->persist($entity);
        $this->setReference('place_londres', $entity);

        $entity = new Place();
        $entity->setCity('Barcelone');
        $entity->setCostDaylife('10');
        $entity->setCostNight('100');
        $entity->setPhotoFilename('barcelone.jpg');
        $manager->persist($entity);
        $this->setReference('place_barcelone', $entity);

        $entity = new Place();
        $entity->setCity('Tokyo');
        $entity->setCostDaylife('20');
        $entity->setCostNight('200');
        $entity->setPhotoFilename('tokyo.jpg');
        $manager->persist($entity);
        $this->setReference('place_tokyo', $entity);

        $manager->flush();
    }

    public function getOrder()
    {
        return 3;
    }
}
