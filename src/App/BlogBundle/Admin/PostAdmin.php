<?php
namespace App\BlogBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;

class PostAdmin extends Admin
{
    protected $list = array(
        'title' => array('identifier' => true),
        'author',
        'enabled',
        'commentsEnabled',
    );

    protected $filter = array(
        'title',
        'author',
        'enabled',
    );
}

