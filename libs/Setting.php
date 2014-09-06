<?php

class Setting {

    function __construct() {
        //$this->db = new Database();       
        Session::init();
    }

    public function setLanguage($attr){
        $GLOBALS['LANGUAGE'] = $attr;
        $GLOBALS['PATHLANGUAGE'] = CONFIG_DIR.'labels'.DS.$GLOBALS['LANGUAGE'].'.xml';
        $GLOBALS['PATHLANGUAGENull'] = CONFIG_DIR.'labels'.DS;        
        Session::set('LANGUAGE', $attr);       
        
            
    }
    
    public function getLanguage(){        
        return Session::get('LANGUAGE');
    }
    
    public function defLanguage(){        
        if(Session::get('LANGUAGE'))
            $this->setLanguage(Session::get('LANGUAGE'));            
        else
            $this->setLanguage($GLOBALS['LANGUAGE']);            
    }
}
