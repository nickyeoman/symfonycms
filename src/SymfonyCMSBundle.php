<?php

namespace NickYeoman\SymfonyCMSBundle;

use Symfony\Component\HttpKernel\Bundle\AbstractBundle;
use Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use NickYeoman\SymfonyCMSBundle\DependencyInjection\SymfonyCMSExtension;

class SymfonyCMSBundle extends AbstractBundle
{
    private $extension;

    public function getPath(): string
    {
        return dirname(__DIR__);
    }

    public function getContainerExtension(): ?ExtensionInterface
    {
        if (!$this->extension) {
            $this->extension = new SymfonyCMSExtension();
        }

        return $this->extension ?: new SymfonyCMSExtension();
    }
}