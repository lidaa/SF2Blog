<?php

namespace App\BlogBundle\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route,
	Sensio\Bundle\FrameworkExtraBundle\Configuration\Template,
	App\BaseBundle\Controller\BaseController as Controller;

class CategoryController extends Controller
{
 
    public function addAction() {
        return $this->render('AppBlogBundle:Category:add.html.php', array('' => ''));
    }
 
    public function editAction() {
        return $this->render('AppBlogBundle:Category:edit.html.php', array('' => ''));
    }
 
    public function listAction() {
        return $this->render('AppBlogBundle:Category:list.html.php', array('' => ''));
    }

	/**
	* @Route("/category/{title} ",  name="_category_select")
	* @Template()
	*/ 
    public function selectAction($title) {
		$category  = $this->getEm()->getRepository('AppBlogBundle:Categories')->findOneByTitle($title);
        return $this->render('AppBlogBundle:Category:select.html.php', array('posts' => $category->getPosts()));
    }
 
    public function deleteAction() {
        return $this->render('AppBlogBundle:Category:delete.html.php', array('' => ''));
    }

}
