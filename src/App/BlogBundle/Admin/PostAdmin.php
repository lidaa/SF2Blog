<?php
namespace App\BlogBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;

class PostAdmin extends Admin
{
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('title')
            ->add('numberVivits')
            ->add('opened')
            ->add('createdAt')
            ->add('_action', 'actions', array('actions' => array('delete' => array(), 'edit' => array())));
    }
    
    
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('title')
            ->add('opened')
            ->add('content');
    }
    
}