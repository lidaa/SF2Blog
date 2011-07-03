<?php

namespace App\BlogBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route,
	Sensio\Bundle\FrameworkExtraBundle\Configuration\Template,
	App\BaseBundle\Controller\BaseController as Controller,
	App\BlogBundle\Entity\Comments,
	App\BlogBundle\Entity\Users;

class UserController extends Controller
{

	/**
	* @Route("/inscription", name="_user_new")
	* @Template("AppBlogBundle:User:new.html.php")
	*/
    public function newAction() 
	{
		$user = new Users();
		$em = $this->getEntityM();
		$form = $this->createFormBuilder($user)
            ->add('username', 'text')
            ->add('password', 'text')
            //->add('re-password', 'text')
            ->add('email', 'text')
            ->add('fullName', 'text')
            ->add('webSite', 'text')
            ->add('infos', 'textarea')
            ->getForm();

		$request = $this->get('request');
		if ($request->getMethod() == 'POST') 
		{
			$form->bindRequest($request);
			if ($form->isValid()) 
			{
				$this->encodePassword($user);
				$em->persist($user);
				$em->flush();
				return $this->redirect($this->generateUrl('_home_index'));
			}
		}
        return array('form' => $form->createView());
    }

}
