<?php

class Settings_controller extends Controller
{
    function __construct() {
        parent::__construct();                       
    }
    
    public function index() {
        $this->view->render("error/index");
    }
    
    public function language($attr){     
        //$this->view->settings_languageAttr = $attr;
        //$this->view->render("settings/index");
        
        
        
        
        $this->setting->setLanguage(str_replace('language/set:','',$attr));
          
        //array_shift($GLOBALS['URLPATH_array']);
        // pega a ultima url visitada         
         /*
        for($i=0;$i<=count($GLOBALS['URLPATH_array']);$i++){
           $URLPATH_ind = $GLOBALS['URLPATH_array'];
           //if(isset($GLOBALS['URLPATH_array'][$i]))
           $URLPATH = $GLOBALS['URLPATH_array'][471];
        }
        */
       $URLPATH = $GLOBALS['URLPATH_array'][count($GLOBALS['URLPATH_array'])-1];
       
        //echo $URLPATH;
        
        //echo count($GLOBALS['URLPATH_array'])."== ";
      
        //print_r($GLOBALS['URLPATH_array']);
       $URLPATH = str_replace('index','',$URLPATH);
        header('location: /'.$URLPATH); 
        //echo '<meta http-equiv="refresh" content="5;URL=/'.$URLPATH.'">';
    }
}