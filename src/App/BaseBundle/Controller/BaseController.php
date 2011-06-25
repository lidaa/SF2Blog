<?php

namespace App\BaseBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller,
	Sensio\Bundle\FrameworkExtraBundle\Configuration\Route,
	Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class BaseController extends Controller
{
	/**
	* @return Doctrine\ORM\EntityManager
	*/
	public function getEm() {
		return $this->get('doctrine')->getEntityManager();
	}
}
