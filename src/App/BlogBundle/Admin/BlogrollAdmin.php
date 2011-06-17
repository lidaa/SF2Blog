<?php
namespace App\BlogBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;

class BlogrollAdmin extends Admin
{

    protected $list = array(
        'link' => array('identifier' => true),
        'category',
        'createdAt',
        '_action' => array(
            'actions' => array(
                'delete' => array(),
                'edit' => array(),
            )
        ),
    );

    protected $maxPerPage = 15;

    protected $form = array(
        'link',
        'category',
    );

    protected $filter = array(
        'category'
    );

    
}