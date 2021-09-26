<?php

namespace Passbolt\Ee;

class Plugin
{
    public function __construct()
    {
        echo "I am the EE plugin\n";
        new \Passbolt\Ce\Plugin();
        echo "Load some EE specific plugins now.\n";
    }
}
