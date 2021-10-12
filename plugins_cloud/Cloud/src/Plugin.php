<?php

namespace Passbolt\Cloud;

class Plugin
{
    public function __construct()
    {
        echo "I am the Cloud plugin\n";
        new \Passbolt\Ee\Plugin();
        new \Passbolt\CloudFoo\Plugin();
    }
}
