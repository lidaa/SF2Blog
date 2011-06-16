<?php
namespace App\BlogBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;

class UserAdmin extends Admin
{

    protected $list = array(
        'email' => array('identifier' => true),
        'username',
        'password',
        'fullName',
        'webSite',
        'lastConnection',
        'enabled',
        'token',
        'banished',
        'numberVisits',
        'infos',
        'createdAt',
        'updatedAt',
    );

    protected $maxPerPage = 5;

    protected $form = array(
        'email',
        'username',
        'password',
        'fullName',
        'webSite',
        'lastConnection',
        'enabled',
        'token',
        'banished',
        'numberVisits',
        'infos',
        'createdAt',
        'updatedAt',
    );

    protected $filter = array(
        'enabled',
        'token',
        'banished',
        'numberVisits',
    );

    
}