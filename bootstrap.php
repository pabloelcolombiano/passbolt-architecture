<?php

use App\Application;

require_once dirname(__DIR__) . '/passbolt-architecture/vendor/autoload.php';

$client = isset($argv[1]) ? $argv[1] : 'cloud';
$app = new Application($client);
