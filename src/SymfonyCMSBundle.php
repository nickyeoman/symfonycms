<?php

namespace NickYeoman\symfonyCMSBundle;

use Symfony\Component\HttpKernel\Bundle\AbstractBundle;

class symfonyCMSBundle extends AbstractBundle
{

    public function __construct()
    {
        echo("symfonyCMSBundle Loaded");
    }
}