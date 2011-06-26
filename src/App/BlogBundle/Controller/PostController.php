<?php

namespace App\BlogBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use App\BaseBundle\Controller\BaseController as Controller;
use App\BlogBundle\Entity\Comments;
use App\BlogBundle\Entity\Users;

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
	* @Template("AppBlogBundle:Post:show.html.php")
	*/
    public function showAction($id) 
	{
		$comment = new Comments();
		$form = $this->createFormBuilder($comment)
            ->add('user', 'text')
            ->add('content', 'textarea')
            ->getForm();
		$post = $this->getEm()->find('AppBlogBundle:Posts', $id);
		

		$request = $this->get('request');
		if ($request->getMethod() == 'POST') {
			$form->bindRequest($request);
			if ($form->isValid()) {
				// perform some action, such as save the object to the database
				//$comment->setCreatedAt(new \DateTime());
				//$comment->setCreatedAt(new \DateTime());
	
				$em->persist($comment);
				$em->flush();
				return $this->redirect($this->generateUrl('_post_show'));
			}
		}
        return array('post' => $post, 'form' => $form->createView());
    }

}
