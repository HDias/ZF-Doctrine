<?php

use Zend\Mvc\Application;

/**
 * This makes our life easier when dealing with paths. Everything is relative
 * to the application root now.
 */
chdir(dirname(__DIR__));

define('DEV_ENV', (getenv('APP_ENV') !== 'prod') ? true : false);

if (DEV_ENV) {
    ini_set('display_errors', 1);
    error_reporting(E_ALL | E_STRICT);
}

// Decline static file requests back to the PHP built-in webserver
if (php_sapi_name() === 'cli-server' && is_file(__DIR__ . parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH))) {
    return false;
}

// Setup autoloading
require 'init_autoloader.php';

$config = require_once 'config/application.config.php';

// Run the application!
$app = Application::init($config);

try {
    $app->run();
} catch (\Exception $e) {
    /** @var Logger $logger */
//    $logger = $app->getServiceManager()->get('Logger');
//    $logger->crit($e);
    echo 'Houve um erro. Por favor tente mais tarde.';

    if (DEV_ENV) {
        echo PHP_EOL . PHP_EOL;
        echo $e;
    }
}
