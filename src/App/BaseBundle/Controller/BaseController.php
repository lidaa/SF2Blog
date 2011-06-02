<?php

namespace App\BaseBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class BaseController extends Controller
{
	/**
	* @return Doctrine\ORM\EntityManager
	*/
	public function getEm() {
		return $this->get('doctrine')->getEntityManager();
	}
}
