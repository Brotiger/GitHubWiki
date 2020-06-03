<?php
function __autoload($class_name)
{
    $array_paths = array(
    'models',
    'components',
    'config',
    );
    foreach($array_paths as $path){
        $path = ROOT.'/'.$path.'/'.$class_name.'.php';
        if(is_file($path)){
            include_once($path);
        }
    }
}
/*
        © 2020 Берестнев Дмитрий Дмитриевич 
        Контактная информация:
        VK: https://vk.com/brotiger63
        mail: dimka@bdima.ru
        GitHub: https://github.com/Brotiger
        Telegram: @Brotiger63
*/