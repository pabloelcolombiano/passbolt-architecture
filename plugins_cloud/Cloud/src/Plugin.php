<?php

namespace Passbolt\Cloud;

class Plugin
{
    public function __construct()
    {
        echo "I am the Cloud plugin\n";
        new \Passbolt\Ee\Plugin();
        echo "Load some Cloud specific plugins now.\n";
    }
}
