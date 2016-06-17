<?php
/**
 * Created by PhpStorm.
 * User: rod
 * Date: 17/06/16
 * Time: 05:13
 */

namespace AppBundle\DataFixtures\ORM;

use AppBundle\Entity\Criteria;
use Doctrine\Common\Persistence\ObjectManager;

class LoadCriteriaData extends LoadCommon
{
    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {
        $criteria = new Criteria();
        $criteria->setName('France');
        $criteria->setTypeCriteria(Criteria::ACCEPTED_PLACE);
        $manager->persist($criteria);
        $this->setReference('criteria_france', $criteria);

        $criteria = new Criteria();
        $criteria->setName('Etranger');
        $criteria->setTypeCriteria(Criteria::ACCEPTED_PLACE);
        $manager->persist($criteria);
        $this->setReference('criteria_etranger', $criteria);

        $criteria = new Criteria();
        $criteria->setName('Voiture');
        $criteria->setTypeCriteria(Criteria::ACCEPTED_LOCOMOTION);
        $manager->persist($criteria);
        $this->setReference('criteria_voiture', $criteria);

        $criteria = new Criteria();
        $criteria->setName('Train');
        $criteria->setTypeCriteria(Criteria::ACCEPTED_LOCOMOTION);
        $manager->persist($criteria);
        $this->setReference('criteria_train', $criteria);

        $criteria = new Criteria();
        $criteria->setName('Avion');
        $criteria->setTypeCriteria(Criteria::ACCEPTED_LOCOMOTION);
        $manager->persist($criteria);
        $this->setReference('criteria_avion', $criteria);

        $criteria = new Criteria();
        $criteria->setName('Bateau');
        $criteria->setTypeCriteria(Criteria::ACCEPTED_LOCOMOTION);
        $manager->persist($criteria);
        $this->setReference('criteria_bateau', $criteria);

        $criteria = new Criteria();
        $criteria->setName('Autocar');
        $criteria->setTypeCriteria(Criteria::ACCEPTED_LOCOMOTION);
        $manager->persist($criteria);
        $this->setReference('criteria_autocar', $criteria);

        $manager->flush();
    }

    public function getOrder()
    {
        return 1;
    }
}
