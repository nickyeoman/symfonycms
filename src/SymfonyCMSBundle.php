<?php

namespace NickYeoman\SymfonyCMSBundle;

use Symfony\Component\HttpKernel\Bundle\AbstractBundle;
use Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use NickYeoman\SymfonyCMSBundle\DependencyInjection\SymfonyCMSExtension;

class SymfonyCMSBundle extends AbstractBundle
{
    public function getPath(): string
    {
        return dirname(path:__DIR__);
    }

    public function getContainerExtension(): ?ExtensionInterface
    {
        return new SymfonyCMSExtension();
    }
}