<?php

    define('DS', DIRECTORY_SEPARATOR);     
    define('ROOT', dirname(dirname(__FILE__)).DS);
    define('CORE_DIR', ROOT.'libs'.DS.'Gradius'.DS.'Core'.DS);
    define('CONFIG_DIR', ROOT.'config'.DS);
    define('APP_DIR', ROOT.'app'.DS);
    define('CONTROLLER_DIR', APP_DIR.'controllers'.DS);
    define('LIBS_DIR', ROOT.'libs'.DS);
    
    define('DOMINIO', $_SERVER['HTTP_HOST']);
    define('URL', 'http://' . DOMINIO.DS);
    define('VERSAO', '5.0.0');
    define('DATEVERSAO', '2014');
    
    define('AUTHOR', 'Wallace Rio');
    define('EMAIL', 'gradius@wallrio.com');
    
    $GLOBALS['LANGUAGE'] = 'en';    
    $GLOBALS['PATHLANGUAGE'] = CONFIG_DIR.'labels'.DS.$GLOBALS['LANGUAGE'].'.xml';
    $GLOBALS['PATHLANGUAGENull'] = CONFIG_DIR.'labels'.DS;
    