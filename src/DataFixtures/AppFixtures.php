<?php

namespace App\DataFixtures;

use App\Entity\Skills;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        // $product = new Product();
        // $manager->persist($product);

        $skill = new Skills();
        // $skill->setName('My SQL');
        // $skill->setImg('mysql');
        // $manager->persist($skill);
        // $manager->flush();

        // $skill->setName('PHP');
        // $skill->setImg('php');
        // $manager->persist($skill);
        // $manager->flush();

        // $skill->setName('Javascript');
        // $skill->setImg('js');
        // $manager->persist($skill);
        // $manager->flush();

        // $skill->setName('CSS');
        // $skill->setImg('css');
        // $manager->persist($skill);
        // $manager->flush();

        $skill->setName('HTML');
        $skill->setImg('html.png');

        $manager->persist($skill);
        $manager->flush();
    }
}
