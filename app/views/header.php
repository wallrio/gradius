<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?php echo $GLOBALS['labels']->title; ?></title>
        
        
        <script src="<? echo URL; ?>public/components/jquery/jquery.min.js"></script>
        <script src="<? echo URL; ?>public/components/bootstrap/dist/js/bootstrap.min.js"></script>
        
        <link href="<? echo URL; ?>public/components/bootstrap/dist/css/sticky-footer.css" rel="stylesheet">
        <link href="<? echo URL; ?>public/components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
        
        
        <link rel="stylesheet" href="<? echo URL; ?>public/components/bootstrap/dist/css/bootstrap-theme.min.css">
        
        
        <link rel="stylesheet" href="<? echo URL; ?>public/css/default.css">
        
        <script>
            var URL = "<?php echo URL; ?>";            
        </script>
        
        <script src="<? echo URL; ?>public/js/scripts.js"></script>
        <script src="<? echo URL; ?>public/js/help.js"></script>
        <script src="<? echo URL; ?>public/js/default.js"></script>
        
        <?php
        
        if(isset($this->js)){
            foreach($this->js as $js){
                echo '<script src='.URL.'app/views/'.$js.'></script>';
            }
        }
        ?>
    </head>
<body >
    
    <?php Session::init(); ?>
    
    
    <?php require APP_DIR.'/views/' . 'menu' . '.php'; ?>   
    
    <Div style='height:51px; border: 1px solid red'></div>
    
    <?php if(Session::get('loggedIn')==true): ?>
    <div id="header" >
        
        <ol class="breadcrumb" style="margin:0px;">
            <?php
                $i = 0;
                $pathinSom = "";
                $len = count($GLOBALS['labels']->pathArray);
                
                foreach($GLOBALS['labels']->pathArray as $index=>$pathin){                 
                    $pathinSom .= $pathin.'/';    
                    
                    $pathinName = $GLOBALS['labels']->pathNameArray[$index];
                    
                    if ($i == 0) {
                       
                        echo  '<li><a href="/'.str_replace("home", "", strtolower($pathin)).'">'.$pathinName.'</a></li>';
                    } else if ($i == $len - 1) {
                        echo '<li href="/'.$pathinSom.'" class="active">'.$pathinName.'</li>';
                    }else{
                        echo  '<li><a href="/'.$pathinSom.'">'.$pathinName.'</a></li>';
                    }
                    $i++;
                }
            ?>
        
   
      </ol>         
    </div>   
    <?php endif; ?>
              
        
    <div  id="content" >
 