<?php

namespace NickYeoman\SymfonyCMSBundle\DependencyInjection;

use ReflectionExtension;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Extension\Extension;
use Symfony\Component\DependencyInjection\Loader\YamlFileLoader;

class SymfonyCMSExtension extends Extension
{
    public function load(array $configs, ContainerBuilder $container)
    {
        $loader = new YamlFileLoader(
            new YamlFileLoader(
                $container,
                new FileLocator(paths:__DIR__ . '/../../config'))
            );

        $loader->load(resource: 'services.yaml');
    }

}