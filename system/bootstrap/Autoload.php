<?php
namespace System\Bootstrap;

class Autoload{
    public function autoloader()
    {
        spl_autoload_register(function($className){
            $className = str_replace('\\', DIRECTORY_SEPARATOR, $className);
            $className = $_SERVER['DOCUMENT_ROOT']."/mvc/".$className.".php";
            include_once $className;
        });
    }
}