<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

use App\Entity\Animal;
use App\Entity\Espece;

class AnimalFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        // $product = new Product();
        // $manager->persist($product);
    $e1 = new Espece();
	$e1->setLibelle("mammifere")->setDescription("nourris avec du lait") ;
	$manager->persist($e1);

	$e2 = new Espece();
	$e2->setLibelle("poissons")->setDescription("nourris avec du plancton") ;
	$manager->persist($e2);

	$a1 = new Animal();
	$a1->setColor('black')->setNom("singe")->setFamille("avec pieds")->setEspece($e2)  ;
	$manager->persist($a1);

	$a2 = new Animal();
	$a2->setColor('black')->setNom("poisson")->setFamille("avec nageoire")->setEspece($e1)  ;
	$manager->persist($a2);

    $manager->flush();
    }
}

