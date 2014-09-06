<?php

class Controller
{
    function __construct() {
       // echo 'Main controller<br/>';
        //$this->view = new View();
        //define('GLOBALVIEW', new View());
        $GLOBALS['labels'] = new View();
        $this->view = new View();
        $this->xml = new Xml();
        
        $this->setting = new Setting();              
        $this->setting->defLanguage();
         
        $this->translation = new Translation();
        $this->defTranslate();
        
        
        $this->vendor = new Vendor();
        
    }
    
    public function loadModel($name)
    {        
        $path = APP_DIR . 'models/' . ucwords($name) . '_model.php';       
        if(file_exists($path)) {                       
            require $path;
            $modelName = ucwords($name) . '_model';            
            $this->model = new $modelName;
            
        }
    }
    
    public function defTranslate(){                                 
        $this->translation->autoDefine();        
    }
}