<?php
ini_set('display_errors',1);
error_reporting(E_ALL);

session_start();

define('ROOT', dirname(__FILE__));
define('REPO', "smile1601/SecurellaVM");

require_once(ROOT.'/components/Autoload.php');

$router = new Router();
$router->run();