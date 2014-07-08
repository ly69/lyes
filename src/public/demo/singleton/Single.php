<?php
/**
 * Created by PhpStorm.
 * User: Administrateur
 * Date: 07/07/14
 * Time: 16:55
 */

class Single
{
    private static $instance = null;

    final private function __construct()
    {
    }

    public static function getInstance()
    {
        $class = get_called_class();

        if(!isset(self::$instance[$class])) {
            self::$instance[$class] = new $class();
        }

        return self::$instance[$class];
    }

    final private function __clone()
    {
        trigger_error('Clonage interdit', E_USER_ERROR);
    }
}

