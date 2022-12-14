<?php

namespace NickYeoman\SymfonyCMSBundle;

use Symfony\Component\HttpKernel\Bundle\AbstractBundle;

class SymfonyCMSBundle extends AbstractBundle
{

    public function __construct()
    {
        echo("SymfonyCMSBundle Loaded");
    }
}