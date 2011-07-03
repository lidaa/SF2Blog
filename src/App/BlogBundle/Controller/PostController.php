<?php

namespace App\BlogBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route,
	Sensio\Bundle\FrameworkExtraBundle\Configuration\Template,
	App\BaseBundle\Controller\BaseController as Controller,
	App\BlogBundle\Entity\Comments,
	App\BlogBundle\Entity\Users;

class PostController extends Controller
{

	/**
	* @Route("/post-recent", name="_post_recent")
	* @Template()
	*/
    public function recentAction() 
	{
		$posts = $this->getEntityM()
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
	
		//echo $this->getUser()->isGranted();
		//echo  $user = $this->get('security.context')->getToken()->getUser();
		$comment = new Comments();
		//$comment->setUser();
		
		$form = $this->createFormBuilder($comment)
            ->add('user', 'text', array(
            						'label' => 'Vous :', 
        							'read_only' => 'readOnly')
				)
            ->add('content', 'textarea' , array(
            						'label' => 'Votre commentaire :')
				)
            ->getForm();
		$post = $this->getEntityM()->find('AppBlogBundle:Posts', $id);
		

		$request = $this->get('request');
		if ($request->getMethod() == 'POST') {
			$form->bindRequest($request);
			if ($form->isValid()) {
				$em->persist($comment);
				$em->flush();
				return $this->redirect($this->generateUrl('_post_show'));
			}
		}
        return array('post' => $post, 'form' => $form->createView());
    }

}
