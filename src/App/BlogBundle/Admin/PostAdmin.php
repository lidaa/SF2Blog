<?php
namespace App\BlogBundle\Admin;

use Sonata\AdminBundle\Admin\Admin,
	Sonata\AdminBundle\Datagrid\ListMapper,
	Sonata\AdminBundle\Form\FormMapper;

class PostAdmin extends Admin
{
    protected $list = array(
        'title' => array('identifier' => true),
        'numberVivits',
        'opened',
        '_action' => array(
            'actions' => array(
                'delete' => array(),
                'edit' => array(),
            )
        ),
    );


    
    protected $filter = array(
        'title',
        'opened',
        'numberVivits',
    );

    protected $form = array(
        'title',
        'content' => array(
					'form_field_options' => array('required' => false), 
					'template' =>'AppBlogBundle:Post:field_content.html.twig'),
        'opened'
    );

    
}