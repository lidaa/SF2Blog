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
			$blogrolls = $this->getEm()
			  ->createQuery('SELECT b FROM AppBlogBundle:Blogroll b')
			  ->execute();

		}	
		else
		{
			$blogrolls = $this->getEm()
			  ->createQuery('SELECT c FROM AppBlogBundle:Categories c WHERE c.showed = 1')
			  ->execute();
		}
		
        return $this->render('AppBlogBundle:Blogroll:list.html.php', array('blogrolls' => $blogrolls));
    }
 
    public function addAction() {
        return $this->render('AppBlogBundle:Blogroll:add.html.php', array('' => ''));
    }
 
    public function deleteAction() {
        return $this->render('AppBlogBundle:Blogroll:delete.html.php', array('' => ''));
    }
 
    public function editAction() {
        return $this->render('AppBlogBundle:Blogroll:edit.html.php', array('' => ''));
    }
 
    public function allAction() {
        return $this->render('AppBlogBundle:Blogroll:all.html.php', array('' => ''));
    }

}
