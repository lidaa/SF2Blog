<?php
namespace App\BlogBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;

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
}

