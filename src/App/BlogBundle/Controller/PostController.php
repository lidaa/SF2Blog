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
					  ->setMaxResults(4)	
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

}
