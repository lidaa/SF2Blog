<?php

namespace App\BlogBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
	/**
	* @Route("/", name="_default_index")
	* @Template()
	*/
    public function indexAction()
    {
        return $this->render('AppBlogBundle:Default:index.html.twig');
    }
}
