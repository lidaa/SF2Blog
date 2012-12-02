<?php

namespace App\BlogBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture,
    Doctrine\Common\DataFixtures\OrderedFixtureInterface,
    App\BlogBundle\Entity\Categories;

use Doctrine\Common\Persistence\ObjectManager;

class CategoriesData extends AbstractFixture implements OrderedFixtureInterface  
{

    public function load(ObjectManager $manager) 
	{

		$list_categories = array
		(
			'PHP',
			'Symfony',
			'JavaScript',
			'JQuery',
			'Css',
		);

		foreach($list_categories as $value)
		{
			$categorie = new Categories();
			$categorie->setTitle($value);
			$categorie->setShowed(1);
			$categorie->setCreatedAt(new \DateTime());
			$manager->persist($categorie);
			$manager->flush();
			$this->addReference('categorie_'.$value, $categorie);
		}
    }

    public function getOrder() {
        return 1;
    }

}
