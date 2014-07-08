<?php

define('DS', DIRECTORY_SEPARATOR);
define('APP_ENV', getenv('APPLICATION_ENV') ?: 'production');
define('ROOT_PATH', dirname(dirname(__DIR__)));
define('SRC_PATH', ROOT_PATH.DS . 'src');
define('PUBLIC PATH', SRC_PATH.DS."public");
define('VENDOR_PATH', ROOT_PATH.DS."vendor");
define('LIB_PATH', ROOT_PATH.DS."library");
define('APP_PATH', SRC_PATH.DS."application");

require_once VENDOR_PATH.DS.'autoload.php';

/* Mise en place de la gestion des erreurs */
if ('development' === APP_ENV) {
    \php_error\reportErrors();
} else {
    set_exception_handler(array('\Iplib\error', 'handleException'));
    set_error_handler(array('\Iplib\error','handleErrors'));
}

$autoloader = Zend_Loader_Autoloader::getInstance();

   $application = new Zend_Application(
        APP_ENV,
        APP_PATH.DS.'Core'.DS.'configs'.DS.'application.ini'
    );

    $application->bootstrap();
    $application->run();

function exceptionHandler($e)
{
    echo 'Erreur de l\'application';
    // Logger dans le syslog
    // Envoyer mail à admin ...
}

function errorHandler($errno, $errstr, $errfile, $context)
{
    echo 'Erreur de l\'application';
    // Logger dans le syslog
    // Envoyer mail à admin ...
}