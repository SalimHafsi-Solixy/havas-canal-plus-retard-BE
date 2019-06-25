<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        for ($i = 1; $i < 5; $i++) {
            $user = new User();
        $user->setFirstName('Habiba');
        $user->setLastName('Mansouri');
        $user->setPassword('HabibaAltyx2019');
        $user->setPhoneNumber('50 110 228');
        $user->setSubscriptionDate(new \DateTime());

        $manager->persist($user);
    }
    $manager->flush();

    }
}
