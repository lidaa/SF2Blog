<?php

namespace App\BlogBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route,
	Sensio\Bundle\FrameworkExtraBundle\Configuration\Template,
	App\BaseBundle\Controller\BaseController as Controller;

class HomeController extends Controller
{
	/**
	* @Route("/", name="_home_index")
	* @Template()
	*/
    public function indexAction()
    {
		$posts = $this->getEntityM()
					  ->createQuery('SELECT p FROM AppBlogBundle:Posts p ORDER BY p.createdAt DESC')
					  ->execute();
        return $this->render('AppBlogBundle:Home:index.html.php', array('posts' => $posts));
    }
}
