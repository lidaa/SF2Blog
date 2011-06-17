<?php
namespace App\BlogBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;

class CommentAdmin extends Admin
{

    protected $list = array(
        'user',
        'post',
        'content',
        'createdAt'
    );

    protected $maxPerPage = 20;

    protected $form = array(
        'post',
        'content'
    );

    protected $filter = array(
        'user',
        'post',
    );
 
}