<?php

namespace App\DataFixtures;

use App\Entity\Personne;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory;

class PersonneFixture extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $faker = Factory::create('fr_FR');
        for ($i = 0; $i < 10; $i++) {
            $personne = new Personne();
            $personne -> setFirstname($faker -> firstName);
            $personne -> setName($faker -> name);
            $personne -> setAge(mt_rand(25, 30));
            $manager->persist($personne);
        }

        $manager->flush();
    }
}
