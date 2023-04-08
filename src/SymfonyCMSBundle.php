<?php

namespace NickYeoman\SymfonyCMSBundle;

use Symfony\Component\HttpKernel\Bundle\AbstractBundle;
use Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use NickYeoman\SymfonyCMSBundle\DependencyInjection\SymfonyCMSExtension;
use Symfony\Component\Routing\RouteCollectionBuilder;

class SymfonyCMSBundle extends AbstractBundle
{
    public function getPath(): string
    {
        return dirname(__DIR__);
    }

    public function getContainerExtension(): ?ExtensionInterface
    {
        return new SymfonyCMSExtension();
    }

    protected function configureRoutes(RouteCollectionBuilder $routes): void
    {
        $routes->import('@SymfonyCMSBundle/Resources/config/routes.yaml');
    }
}