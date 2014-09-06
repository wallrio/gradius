<?php


/**
 * Description of Translation
 *
 * @author wallrio
 */
class Translation {
    function __construct() {       
        $this->xml = new Xml();
    }
    
    public function go($string,$lang = LANGUAGE){                       
       $this->xml->defineLanguage($lang);             
       $string = $this->xml->findByAttribute('name',$string);              
       return $string;
    }
    
    public function autoDefine(){
                               
        $xml = simplexml_load_file($this->xml->pathLang);
        foreach($xml->string as $string) {			         
               $GLOBALS['labels']->{$string['name']} = $string;                  
               $GLOBALS['labels']->{$string['name']}['name'] = $string['name'];                  
       }
       
       // cria um array com as linguagens disponiveis na pasta config/labels
       if ($handle = opendir($GLOBALS['PATHLANGUAGENull'])) {
            while (false !== ($entry = readdir($handle))) {
                if ($entry != "." && $entry != "..") {                                                    
                    $GLOBALS['labels']->sys_allLanguage[] = str_replace('.xml','',$entry);
                    $xmlgetname = simplexml_load_file($GLOBALS['PATHLANGUAGENull'].DS.$entry);                    
                    $GLOBALS['labels']->sys_allLanguageName[] = $xmlgetname->name;                                                           
                }
            }
            closedir($handle);
        }

       
       
       $GLOBALS['labels']->sys_languagename = $xml->name;
       $GLOBALS['labels']->sys_language = str_replace('.xml','',basename($this->xml->pathLang));
           
       /*
       // pega a ultima url visitada
       for($i=0;$i<=count($GLOBALS['URLPATH_array']);$i++){
           $URLPATH_ind = $GLOBALS['URLPATH_array'];
           if(isset($GLOBALS['URLPATH_array'][$i-1]))
           $URLPATH = $GLOBALS['URLPATH_array'][$i-1];
       }
       */
     
      $URLPATH = $GLOBALS['URLPATH_array'][count($GLOBALS['URLPATH_array'])];
     
      $URLPATH_array = explode(DS,$URLPATH);
      $URLPATH_array = array_filter($URLPATH_array);
      $URLPALL = "";
      foreach($URLPATH_array as $URLP){
          $URLPALL .=  $GLOBALS['labels']->$URLP . DS;
      }
      
      
      //$URLPALL = rtrim($URLPALL, DS);
      
        if($URLPATH == "index"){
            $GLOBALS['labels']->path = ucwords($GLOBALS['labels']->home['name']);
            $GLOBALS['labels']->pathName = ucwords($GLOBALS['labels']->home);
        }else{
            $GLOBALS['labels']->path = ucwords($URLPATH);
            
            $GLOBALS['labels']->pathName = ucwords($URLPALL);
        }
        
       
        
        $GLOBALS['labels']->pathArray = explode('/',$GLOBALS['labels']->path);
        $GLOBALS['labels']->pathNameArray = explode('/',$GLOBALS['labels']->pathName);
        
        $GLOBALS['labels']->pathArray = array_filter($GLOBALS['labels']->pathArray);
        //$GLOBALS['labels']->pathArray = explode('/',$URLPATH);
        
        $GLOBALS['labels']->copyright = "&reg ".$GLOBALS['labels']->title;
       
    }
}
