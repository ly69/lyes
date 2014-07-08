<?php

define('DS', DIRECTORY_SEPARATOR);
define('APP_ENV', getenv('APPLICATION_ENV') ?: 'production');
define('ROOT_PATH', dirname(dirname(__DIR__)));
define('SRC_PATH', ROOT_PATH.DS);
define('PUBLIC PATH', SRC_PATH.DS."public");
define('VENDOR_PATH', ROOT_PATH.DS."vendor");
define('APP_PATH', SRC_PATH.DS."application");

require_once VENDOR_PATH.DS.'autoload.php';

$autoloader = Zend_Loader_Autoloader::getInstance();

$application = new Zend_Application(
    APP_ENV,
    APP_PATH.DS.'core'.DS.'configs'.DS.'application.ini'
);

