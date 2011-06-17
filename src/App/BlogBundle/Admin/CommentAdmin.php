<?php
namespace App\BlogBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;

class CommentAdmin extends Admin
{

    protected $list = array(
    );

    protected $maxPerPage = 5;

    protected $form = array(
    );

    protected $filter = array(
    );

    
}