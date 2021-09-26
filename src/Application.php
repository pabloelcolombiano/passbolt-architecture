<?php

namespace App;

class Application
{
    public function __construct(string $client)
    {
        $clientPluginName = 'Passbolt\\' . ucfirst($client) . '\\' . 'Plugin';
        echo "Launching application\n";
        new $clientPluginName();
    }
}
