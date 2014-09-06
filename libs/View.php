<?php

class View  extends Controller
{
    function __construct() {
        //$this->translation = new Translation();
      // $this->controller = new Controller();
    }
    
    public function getRender($name,$includeHeader = true){
        $file = APP_DIR.'/views/' . $name . '.php';
        ob_start();
        require($file);
        return ob_get_clean();


        return $file;
    }
    
    public function render($name,$includeHeader = true)
    {
        //$this->path = 322;
           // $this->defTranslate();
            
           if($includeHeader == true){
               require APP_DIR.'/views/header.php'; 
           }           
           
           require APP_DIR.'/views/' . $name . '.php';
           if($includeHeader == true){
               require APP_DIR.'/views/footer.php'; 
           }
    }
}