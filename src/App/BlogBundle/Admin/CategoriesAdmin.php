<?php
namespace App\BlogBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;

class CategorysAdmin extends Admin
{   
    protected $list = array(
        'title' => array('identifier' => true),
        'showed',
    );

    protected $form = array(
        'id',
        'title',
        'showed'
    );

    protected $filter = array(
        'title'
    );
}

