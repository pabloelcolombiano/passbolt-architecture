<?php

use App\Application;

require_once dirname(__DIR__) . '/passbolt-architecture/vendor/autoload.php';

$client = 'cloud';
$app = new Application($client);
