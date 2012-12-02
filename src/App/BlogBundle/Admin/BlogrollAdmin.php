<?php
namespace App\BlogBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;

class BlogrollAdmin extends Admin
{

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('link')
            ->add('category')
            ->add('createdAt')
            ->add('_action', 'actions', array('actions' => array('delete' => array(), 'edit' => array())));
    }
    
    
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('link')
            ->add('category');
    }
    
}