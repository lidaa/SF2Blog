<?php

namespace App\BlogBundle\DependencyInjection;

use Symfony\Component\HttpKernel\DependencyInjection\Extension;
use Symfony\Component\DependencyInjection\Loader\XmlFileLoader;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\Config\FileLocator;

class AppBlogExtension extends Extension {

    public function load(array $configs, ContainerBuilder $container) {
        $loader = new XmlFileLoader($container, new FileLocator(__DIR__ . '/../Resources/config'));
        
        $config_files = array('admin');
        
        foreach ($config_files as $file)
            $loader->load(sprintf('%s.xml', $file));
    }

}