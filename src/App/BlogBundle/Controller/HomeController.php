<?php

namespace App\BlogBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use App\BaseBundle\Controller\BaseController as Controller;

class HomeController extends Controller
{
	/**
	* @Route("/", name="_home_index")
	* @Template()
	*/
    public function indexAction()
    {
		$posts = $this->getEm()->getRepository('AppBlogBundle:Posts')->findAll();
        return $this->render('AppBlogBundle:Home:index.html.php', array('posts' => $posts));
    }
}
