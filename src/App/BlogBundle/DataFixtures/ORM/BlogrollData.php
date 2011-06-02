<?php

namespace App\BlogBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture,
    Doctrine\Common\DataFixtures\OrderedFixtureInterface,
    App\BlogBundle\Entity\Blogroll;

class BlogrollData extends AbstractFixture implements OrderedFixtureInterface  
{

    public function load($manager) 
	{

		$list_links = array
		(
			'http://www.symfony.com',
			'http://www.symfony.com',
			'http://www.symfony.com',
			'http://www.symfony.com',
			'http://www.symfony.com',
		);

		foreach($list_links as $value)
		{
			$blogroll = new Blogroll();
			$blogroll->setCategory($manager->merge($this->getReference('categorie_Symfony')));
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
