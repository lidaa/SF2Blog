<?php

namespace App\BlogBundle\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route,
	Sensio\Bundle\FrameworkExtraBundle\Configuration\Template,
	App\BaseBundle\Controller\BaseController as Controller;


class BlogrollController extends Controller
{

	/**
	* @Route("/blogroll/category/{category} ",  name="_blogroll_list")
	* @Template()
	*/ 	 
    public function listAction($category = null) {
		
		if($category == null)
		{
			$blogrolls = $this->getEntityM()
			  ->createQuery('SELECT b FROM AppBlogBundle:Blogroll b ORDER BY b.link')
			  ->execute();
		}	
		else
		{
			$blogrolls = $this->getEntityM()
			  ->createQuery('SELECT c FROM AppBlogBundle:Categories c WHERE c.showed = 1')
			  ->execute();
		}
		
        return $this->render('AppBlogBundle:Blogroll:list.html.php', array('blogrolls' => $blogrolls));
    }
 
    public function allAction() {
        return $this->render('AppBlogBundle:Blogroll:all.html.php', array('' => ''));
    }

}
