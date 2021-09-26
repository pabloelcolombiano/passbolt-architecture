<?php

namespace Passbolt\Ce;

class Plugin
{
    public function __construct()
    {
        echo "I am the CE plugin\n";
        new \Passbolt\CeFoo\Plugin();
    }
}
