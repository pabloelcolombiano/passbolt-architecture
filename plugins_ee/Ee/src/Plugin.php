<?php

namespace Passbolt\Ee;

class Plugin
{
    public function __construct()
    {
        echo "I am the EE plugin\n";
        new \Passbolt\Ce\Plugin();
        new \Passbolt\EeFoo\Plugin();
        new \Passbolt\EeBar\Plugin();
    }
}
