<?php
error_reporting(-1);
ini_set('display_errors', 1);

// kick start session
if ('' === session_id())
{
    session_start();
}

define('ENV_MODE', (getenv('ENV_MODE')?getenv('ENV_MODE'):'Development'));
define('ENV_FILE', dirname(__DIR__) . '/config/' . (getenv('APP_ENV') ?: 'base') . '.json');
define('APP_PATH', dirname(__DIR__));

require APP_PATH . '/src/Helpers/Autoloader.php';

$autoLoader = New \Helpers\Autoloader(APP_PATH . '/src/');

$autoLoader->registerNamespaces()->registerGenericNamespaces(['Helpers', 'Database']);

$payload =
[
    'type' => (! isset($argv) ?: 0),
    'args' => (! isset($argv) ? $_GET : $argv),
];

$bootstrap = New \Helpers\Bootstrap($payload);
$bootstrap->run();