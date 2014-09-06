<?php

/**
 * Description of Xml
 *
 * @author wallrio
 */
class Xml {
    
    function __construct() {
      $this->pathLang = $GLOBALS['PATHLANGUAGE'];
    }
    
    public function defineLanguage($lang){
        $this->pathLang = $GLOBALS['PATHLANGUAGENull'].$lang.'.xml';
    }
    public function findByAttribute($attr, $value){
        $xml = simplexml_load_file($this->pathLang);
        foreach($xml->string as $string) {			
           if( strtolower($value) == strtolower($string[$attr]) ) {
                return $string;
           }
       }
    }
}
