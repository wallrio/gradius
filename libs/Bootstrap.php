<?php
/*
 * Monitora o request do usuário, ou seja, a solicitação URL do usuário, e 
 * redireciona o usuário, para o controller conforme a URL solicitada.
 */

class Bootstrap {

    function __construct() {            
        $this->defRouter();
        
        //$GLOBALS['BOOTSTRAPS'] = $this;
        //list($urlController,$urlMetodo,$urlSubMetodo,$urlMetodoFull,$urlFull) = $GLOBALS['BOOTSTRAPS']->getRouter();
        
     
    }
    
    public function getURL(){
        list($urlController,$urlMetodo,$urlSubMetodo,$urlMetodoFull,$urlFull) = $this->getRouter();
        return $urlFull;
    }
    public function getRouter($urlRequest = false) {  
        $urlFull = isset($_GET['url'])?$_GET['url']:null;        
        $url = isset($urlFull)?rtrim($urlFull, '/'):null;       
        $url = explode('/', $url);     
        
        $urlController = isset($url[0])?$url[0]:null;
        $nameController = ucwords($urlController) . '_controller';
        $urlMetodo = isset($url[1])?$url[1]:null;
        $urlSubMetodo = isset($url[2])?$url[2]:null;
        
        // remove o controller da url
        $urlFull_array = explode(DS,$urlFull);
        array_shift($urlFull_array);
        $urlMetodoFull = implode($urlFull_array,DS);
        
        if($urlRequest){            
            if( strtolower($urlRequest) == strtolower($urlFull) || 
                  $urlFull == null  ) {                
                return true;
            }else{
                return false;
            }
        }else{
            return array($urlController, $urlMetodo, $urlSubMetodo,$urlMetodoFull,$urlFull);
        }
        
        
    }
    
    public function setLastUrlFull($urlFull){
            $this->lastUrlFull = $urlFull;
    }
   
    private function defRouter() {     
        $GLOBALS['BOOTSTRAPS'] = $this;   
        
        list($urlController,$urlMetodo,$urlSubMetodo,$urlMetodoFull,$urlFull) = $this->getRouter();
        $nameController = ucwords($urlController) . '_controller';
              
        $actionFull = basename($urlFull);
        
        // guarda na session um histórico das url visitadas
        Session::init();
        //if(isset($urlFull) || $this->getRouter('index') == true){
            
            $urlFullforce = $urlFull;
                    
            if($this->getRouter('index')){       
                $urlFullforce = "index";
            }
            
           // echo $urlFullforce;
            //if(!Session::get('URLPATH_count')){
            //    Session::set('URLPATH_count',0);
           // }else{
                Session::set('URLPATH_count',Session::get('URLPATH_count') + 1);
           // }                   
            $historyURL_array = Session::get('URLPATH');                              
            $historyURL_array[Session::get('URLPATH_count')] = $urlFullforce;           
            $GLOBALS['URLPATH_array'] = $historyURL_array;            
            Session::set('URLPATH',$historyURL_array);
       // }
        
        //print_r($GLOBALS['URLPATH_array']);
        //print_r($historyURL_array);
        
        if($this->getRouter('index')){            
            require CONTROLLER_DIR . 'Index_controller' . '.php';   
            $controller = new Index_controller();
            $controller->index();
            return false;
        }else {          
            
            
            
            if(strpos($actionFull,":")){                                
                $nameController_act = substr($nameController, strpos($nameController,":"),strpos($nameController,"_")-strpos($nameController,":"));
                if(strpos(strtolower($nameController),strtolower($urlController).'_')){ 
                    $nameController = str_replace($nameController_act,'',$nameController);
                }
                $action = substr($actionFull, strpos($actionFull,":"));
                //$nameController = str_replace($action,'',$nameController);
                $action = str_replace(':','',$action);                             
            }            
            $action = isset($action)?$action:null; 
            //if(strpos(strtolower($nameController),strtolower($urlController).'_')){                           
                //$nameController= ucwords($urlController).$nameController;                       
           // }
             //echo $urlController.'-'.$nameController;
            
            $fileController = CONTROLLER_DIR . $nameController . '.php';
            $fileControllerError = CONTROLLER_DIR . 'Error_controller' . '.php';   
            
            
            
            if(file_exists($fileController)) {            
                require $fileController;       
            }else{
                $this->error($fileControllerError);
                return false;
            }

            $controller = new $nameController;        
            $controller->loadModel($urlController);
            
                  
                    
            if (isset($urlMetodo) && method_exists($controller, $urlMetodo)) {  
                if(isset($urlMetodoFull)){                    
                    
                    $controller->{$urlMetodo}($urlMetodoFull);
                    return false;
                }else{                                  
                    $controller->{$urlMetodo}();                      
                    return false;
                }
            }else if (isset($urlMetodo) && method_exists($controller, $urlMetodo) == false) {                     
                $this->error($fileControllerError);
                return false;
            }else if (!isset($urlMetodo) && method_exists($controller, $urlMetodo) == false && $action) {                     
                echo $action;
                //$controller->{$action}();
                //echo $action;
                //$controller->index();
                return false;
            }else if (!isset($urlMetodo) && method_exists($controller, $urlMetodo) == false ) {                     
                
                $controller->index();
                return false;
            }                                           
        }                                                             
    }
    
    
    
    function error($fileControllerError){
              require $fileControllerError;
                $controller = new Error_controller();            
                $controller->index();
                 return false;
     }

}
