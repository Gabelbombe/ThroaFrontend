<?php
opcache_reset(); // stop caching

define ('APP_PATH', dirname(dirname(__FILE__)));

$auto = require      APP_PATH . '/bootstrap/autoload.php';
$app  = require_once APP_PATH . '/bootstrap/start.php';

$app->run();
