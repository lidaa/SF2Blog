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
	public function getEntityM() 
	{
		return $this->get('doctrine')->getEntityManager();
	}

	/**
	* @return Doctrine\ORM\EntityManager
	*/
    public function encodePassword($user) 
    {
        $factory = $this->getSecurityEF();
        $encoder = $factory->getEncoder($user);
        $password = $encoder->encodePassword($user->getPassword(), $user->getSalt());
        $user->setPassword($password);
    }
    
	/**
	* @return
	*/
	public function getSecurityEF() 
	{
		return $this->get('security.encoder_factory');
	}

    /**
     *
     * @return Security\Core\SecurityContext  
     */
    public function getSecurityC() {
        return $this->get('security.context');
    }
    
    /**
     * Return the connected user instance
     * 
     * @return user instance 
     */
    public function getUser() {
        $token = $this->getSecurityC()->getToken();

        if (!$token)
            throw ExceptionController::forbiden();

        return $token->getUser();
    }
    
}
