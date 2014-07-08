<?php
/**
 * Created by PhpStorm.
 * User: Administrateur
 * Date: 08/07/14
 * Time: 10:41
 */
namespace Iplib;

class Error
{
    public function handleErrors($errno, $errstr, $errfile, $context)
    {
        echo 'Erreur de l\'application';
        // Logger dans le syslog
        // Envoyer mail à admin ..
    }

    public function handleException(\Exception $e)
    {
        echo 'Erreur de l\'application';
        // Logger dans le syslog
        // Envoyer mail à admin ..
    }
}