<?php

use App\Application;

require_once dirname(__DIR__) . '/passbolt-architecture/vendor/autoload.php';

$client = 'ee';
$app = new Application($client);
