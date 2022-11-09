<?php
session_start();
require_once('system/config.php');
require_once('system/bootstrap/Autoload.php');
$autoload = new \System\Bootstrap\Autoload();
$autoload->autoloader();
$roter = new \System\router\Routing();
$roter->run();
