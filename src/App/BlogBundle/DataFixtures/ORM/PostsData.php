<?php

namespace App\BlogBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture,
    Doctrine\Common\DataFixtures\OrderedFixtureInterface,
    App\BlogBundle\Entity\Posts;

use Doctrine\Common\Persistence\ObjectManager;

class PostsData extends AbstractFixture implements OrderedFixtureInterface  
{

    public function load(ObjectManager $manager) 
	{

		$post = new Posts();
        $post->setCategory($manager->merge($this->getReference('categorie_PHP')));
		$post->setTitle('PHP, les namespaces');
		$post->setContent(
<<<EOT
PHP, les namespaces PHP, les namespaces PHP, les namespaces PHP, les namespaces
PHP, les namespaces PHP, les namespaces PHP, les namespaces PHP, les namespaces
PHP, les namespaces PHP, les namespaces PHP, les namespaces PHP, les namespaces
PHP, les namespaces PHP, les namespaces PHP, les namespaces PHP, les namespaces
PHP, les namespaces PHP, les namespaces PHP, les namespaces PHP, les namespaces
PHP, les namespaces PHP, les namespaces PHP, les namespaces PHP, les namespaces
PHP, les namespaces PHP, les namespaces PHP, les namespaces PHP, les namespaces
PHP, les namespaces PHP, les namespaces PHP, les namespaces PHP, les namespaces
PHP, les namespaces PHP, les namespaces PHP, les namespaces PHP, les namespaces
EOT
);
		$post->setNumberVivits(0);
		$post->setOpened(1);
		$post->setCreatedAt(new \DateTime());
		$post->setUpdatedAt(new \DateTime());
		$manager->persist($post);
		$manager->flush();


		$post = new Posts();
        $post->setCategory($manager->merge($this->getReference('categorie_Symfony')));
		$post->setTitle('Fixtures et Symfony2');
		$post->setContent(
<<<EOT
Fixtures et Symfony2 Fixtures et Symfony2 Fixtures et Symfony2 Fixtures et Symfony2
Fixtures et Symfony2 Fixtures et Symfony2 Fixtures et Symfony2 Fixtures et Symfony2
Fixtures et Symfony2 Fixtures et Symfony2 Fixtures et Symfony2 Fixtures et Symfony2
Fixtures et Symfony2 Fixtures et Symfony2 Fixtures et Symfony2 Fixtures et Symfony2
Fixtures et Symfony2 Fixtures et Symfony2 Fixtures et Symfony2 Fixtures et Symfony2
Fixtures et Symfony2 Fixtures et Symfony2 Fixtures et Symfony2 Fixtures et Symfony2
Fixtures et Symfony2 Fixtures et Symfony2 Fixtures et Symfony2 Fixtures et Symfony2
Fixtures et Symfony2 Fixtures et Symfony2 Fixtures et Symfony2 Fixtures et Symfony2
Fixtures et Symfony2 Fixtures et Symfony2 Fixtures et Symfony2 Fixtures et Symfony2
EOT
);
		$post->setNumberVivits(0);
		$post->setOpened(1);
		$post->setCreatedAt(new \DateTime());
		$post->setUpdatedAt(new \DateTime());
		$manager->persist($post);
		$manager->flush();


		$post = new Posts();
        $post->setCategory($manager->merge($this->getReference('categorie_Symfony')));
		$post->setTitle('Doctrine2 et Symfony2');
		$post->setContent(
<<<EOT
Doctrine2 et Symfony2 Doctrine2 et Symfony2 Doctrine2 et Symfony2 Doctrine2 et Symfony2
Doctrine2 et Symfony2 Doctrine2 et Symfony2 Doctrine2 et Symfony2 Doctrine2 et Symfony2
Doctrine2 et Symfony2 Doctrine2 et Symfony2 Doctrine2 et Symfony2 Doctrine2 et Symfony2
Doctrine2 et Symfony2 Doctrine2 et Symfony2 Doctrine2 et Symfony2 Doctrine2 et Symfony2
Doctrine2 et Symfony2 Doctrine2 et Symfony2 Doctrine2 et Symfony2 Doctrine2 et Symfony2
Doctrine2 et Symfony2 Doctrine2 et Symfony2 Doctrine2 et Symfony2 Doctrine2 et Symfony2
Doctrine2 et Symfony2 Doctrine2 et Symfony2 Doctrine2 et Symfony2 Doctrine2 et Symfony2
Doctrine2 et Symfony2 Doctrine2 et Symfony2 Doctrine2 et Symfony2 Doctrine2 et Symfony2
Doctrine2 et Symfony2 Doctrine2 et Symfony2 Doctrine2 et Symfony2 Doctrine2 et Symfony2
EOT
);
		$post->setNumberVivits(0);
		$post->setOpened(1);
		$post->setCreatedAt(new \DateTime());
		$post->setUpdatedAt(new \DateTime());
		$manager->persist($post);
		$manager->flush();

    }


    public function getOrder() {
        return 4;
    }

}
