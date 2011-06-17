<?php
namespace App\BlogBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;

class UserAdmin extends Admin
{

    protected $list = array(
        'email' => array('identifier' => true),
        'username',
        'fullName',
        'lastConnection',
        'numberVisits',
        'enabled',
        'banished',
        '_action' => array(
            'actions' => array(
                'edit' => array(),
                'delete' => array()
            )  
        )
    );

    protected $maxPerPage = 15;

    protected $form = array(
        'email',
        'username',
        'password',
        'fullName',
        'webSite',
        'infos',
    );

    protected $filter = array(
        'username',
        'enabled',
        'banished',
        'numberVisits',
    );

    
}