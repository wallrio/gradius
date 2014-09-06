    <?php  
    
    class AutoLoad  
    {  
          
        function core($className)  
        {          	
        	
            $className = ltrim($className, '\\'); 
            $fileName  = ''; 
            $namespace = ''; 
            if ($lastNsPos = strrpos($className, '\\')) { 
                $namespace = substr($className, 0, $lastNsPos); 
                $className = substr($className, $lastNsPos + 1); 
                $fileName  = str_replace('\\', DS, $namespace) . DS; 
            } 
            $fileName .= str_replace('_', DS, $className) . '.php'; 
          
            require __DIR__.DS.$className.".php";          
              
        }  
          
    }  