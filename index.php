<?php
#ini_set('display_errors',1);
#error_reporting(E_ALL);

session_start();

define('ROOT', dirname(__FILE__));
define('REPO', "smile1601/theool_doc");

require_once(ROOT.'/components/Autoload.php');

$router = new Router();
$router->run();
/*
        © 2020 Берестнев Дмитрий Дмитриевич 
        Контактная информация:
        VK: https://vk.com/brotiger63
        mail: dimka@bdima.ru
        GitHub: https://github.com/Brotiger
        Telegram: @Brotiger63
*/