<?php

namespace App\BaseBundle\Controller;

use Symfony\Component\Security\Core\SecurityContext,
    Symfony\Bundle\FrameworkBundle\Controller\Controller,
	Sensio\Bundle\FrameworkExtraBundle\Configuration\Route,
	Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;


class SecurityController extends Controller {

	/**
	* @Route("/login", name="_security_login")
	* @Template()
	*/
    public function loginAction() {
        // get the login error if there is one
        if ($this->getRequest()->attributes->has(SecurityContext::AUTHENTICATION_ERROR)) {
            $error = $this->getRequest()->attributes->get(SecurityContext::AUTHENTICATION_ERROR);
        } else {
            $error = $this->getRequest()->getSession()->get(SecurityContext::AUTHENTICATION_ERROR);
        }
        return $this->render('AppBaseBundle:Security:login.html.php', array(
            'last_username' => $this->getRequest()->getSession()->get(SecurityContext::LAST_USERNAME),
            'error' => $error,
        ));
    }


}
