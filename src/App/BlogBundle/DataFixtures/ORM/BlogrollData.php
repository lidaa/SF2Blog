<?php

namespace App\BlogBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture,
    Doctrine\Common\DataFixtures\OrderedFixtureInterface,
    App\BlogBundle\Entity\Blogroll;

use Doctrine\Common\Persistence\ObjectManager;

class BlogrollData extends AbstractFixture implements OrderedFixtureInterface  
{

    public function load(ObjectManager $manager) 
	{

		$list_links_sf = array
		(
			'http://www.symfony.com',
			'http://www.symfony.com',
			'http://www.symfony.com',
			'http://www.symfony.com',
		);

		foreach($list_links_sf as $value)
		{
			$blogroll = new Blogroll();
			$blogroll->setCategory($manager->merge($this->getReference('categorie_Symfony')));
			$blogroll->setLink($value);
			$blogroll->setCreatedAt(new \DateTime());
			$manager->persist($blogroll);
			$manager->flush();
		}
		$list_links_php = array
		(
			'http://www.php.net',
			'http://www.php.net',
			'http://www.php.net',
			'http://www.php.net',
		);

		foreach($list_links_php as $value)
		{
			$blogroll = new Blogroll();
			$blogroll->setCategory($manager->merge($this->getReference('categorie_PHP')));
			$blogroll->setLink($value);
			$blogroll->setCreatedAt(new \DateTime());
			$manager->persist($blogroll);
			$manager->flush();
		}
    }

    public function getOrder() {
        return 3;
    }

}
