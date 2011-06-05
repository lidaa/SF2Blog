<?php

namespace App\BlogBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use App\BaseBundle\Controller\BaseController as Controller;

class PostController extends Controller
{

	/**
	* @Route("/post-recent", name="_post_recent")
	* @Template()
	*/
    public function recentAction() 
	{
		$posts = $this->getEm()
					  ->createQuery('SELECT p FROM AppBlogBundle:Posts p ORDER BY p.createdAt DESC')
					  ->execute();
        return $this->render('AppBlogBundle:Post:recent.html.php', array('posts' => $posts));
    }

	/**
	* @Route("/post/{id}", name="_post_show")
	* @Template()
	*/
    public function showAction($id) 
	{
		 
		$post = $this->getEm()->find('AppBlogBundle:Posts', $id);
        return $this->render('AppBlogBundle:Post:show.html.php', array('post' => $post));
    }
 
    public function editAction() {
        return $this->render('AppBlogBundle:Post:edit.html.php', array('' => ''));
    }
 
    public function addAction() {
        return $this->render('AppBlogBundle:Post:add.html.php', array('' => ''));
    }
 
    public function deleteAction() {
        return $this->render('AppBlogBundle:Post:delete.html.php', array('' => ''));
    }

}
