<?php
namespace App\BlogBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;

class UserAdmin extends Admin
{
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('email')
            ->add('username')
            ->add('fullName')
            ->add('lastConnection')
            ->add('numberVisits')
            ->add('enabled')
            ->add('banished')
            ->add('createdAt')
            ->add('_action', 'actions', array('actions' => array('delete' => array(), 'edit' => array())));
    }

    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('email')
            ->add('username')
            ->add('password')
            ->add('fullName')
            ->add('webSite')
            ->add('infos');
    }
}