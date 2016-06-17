<?php
/**
 * Created by PhpStorm.
 * User: rod
 * Date: 17/06/16
 * Time: 05:13
 */

namespace AppBundle\DataFixtures\ORM;

use Doctrine\Common\Persistence\ObjectManager;

class LoadUserData extends LoadCommon
{
    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {
        $userManager = $this->getUserManager();

        //========================================
        // For testing purpose
        //========================================
        // User by default for deployment : Test
        $user = $userManager->createUser();
        $user->setUsername('test');
        $user->setPlainPassword('test');
        $user->setEnabled(true);
        $user->setEmail('test@email.com');
        $user->setRoles(array('ROLE_USER'));
        $user->addCriteria($this->getReference('criteria_france'));
        $user->addCriteria($this->getReference('criteria_etranger'));
        $user->addCriteria($this->getReference('criteria_avion'));
        $user->addCriteria($this->getReference('criteria_train'));
        $user->addCriteria($this->getReference('criteria_voiture'));

        $userManager->updateUser($user, true);
        $this->addReference('test', $user);

        //========================================
        // For demo
        //========================================
        // Rod
        $user = $userManager->createUser();
        $user->setUsername('rod');
        $user->setPlainPassword('rod');
        $user->setEnabled(true);
        $user->setEmail('rod@email.com');
        $user->setRoles(array('ROLE_USER'));
        $user->addCriteria($this->getReference('criteria_france'));
        $user->addCriteria($this->getReference('criteria_etranger'));
        $user->addCriteria($this->getReference('criteria_avion'));
        $user->addCriteria($this->getReference('criteria_train'));
        $user->addCriteria($this->getReference('criteria_voiture'));

        $userManager->updateUser($user, true);
        $this->addReference('rod', $user);

        // Sylvian
        $user = $userManager->createUser();
        $user->setUsername('sylvian');
        $user->setPlainPassword('sylvian');
        $user->setEnabled(true);
        $user->setEmail('sylvian@email.com');
        $user->setRoles(array('ROLE_USER'));
        $user->addCriteria($this->getReference('criteria_france'));
        $user->addCriteria($this->getReference('criteria_train'));
        $user->addCriteria($this->getReference('criteria_voiture'));

        $userManager->updateUser($user, true);
        $this->addReference('sylvian', $user);

        // Timothe
        $user = $userManager->createUser();
        $user->setUsername('tim');
        $user->setPlainPassword('tim');
        $user->setEnabled(true);
        $user->setEmail('tim@email.com');
        $user->setRoles(array('ROLE_USER'));
        $user->addCriteria($this->getReference('criteria_france'));
        $user->addCriteria($this->getReference('criteria_etranger'));
        $user->addCriteria($this->getReference('criteria_avion'));
        $user->addCriteria($this->getReference('criteria_train'));

        $userManager->updateUser($user, true);
        $this->addReference('tim', $user);

    }

    public function getOrder()
    {
        return 2;
    }
}
