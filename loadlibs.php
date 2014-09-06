<?php


    if(!isset($pathrais))  
        $pathrais = '';
        
    require $pathrais.'config/path.php';
    require $pathrais.'config/database.php';
    
    // load local library 
    require_once $pathrais.'autoload.php';   
    $autoload = new autoLoad();        
    spl_autoload_register(array($autoload, 'libs'));  
        
    //load library extern with composer
    require_once $pathrais.'vendor'.DS.'autoload.php';
    
    if($pathrais){
        $controller = new Controller();
    }