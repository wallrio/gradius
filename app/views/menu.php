<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
        <a class="navbar-brand" href="/">
            <div id='loading' align='center' style="width:10px; ">
            <img  src="<? echo URL; ?>public/img/gradius.png" width="34px" title="<?php echo $GLOBALS['labels']->title; ?>">
            </div>
        </a>       
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        
        <li><a href="/"><?php echo $GLOBALS['labels']->home; ?></a></li>
        <li><a href="/help"><?php echo $GLOBALS['labels']->help; ?></a></li>
        
        
        
        
      </ul>
        
      
        
        
      <ul class="nav navbar-nav navbar-right">
       
        
         <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $GLOBALS['labels']->language; ?> (<?php echo $GLOBALS['labels']->sys_languagename; ?>) <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
              
            <?php 
                foreach($GLOBALS['labels']->sys_allLanguageName as $index=>$languages){
                      $languagesprefix = $GLOBALS['labels']->sys_allLanguage[$index];
                    if($GLOBALS['labels']->sys_language == $languagesprefix){  
                        echo '<li class="active"><a >'.$languages.'</a></li>';
                    }else{
                        echo '<li><a href="/settings/language/set:'.$languagesprefix.'">'.$languages.'</a></li>';
                    }
                }          
            ?>            
          </ul>
        </li>
        
        <?php if(Session::get('loggedIn')==true): ?>
        
        
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo Session::get('userLogin'); ?> <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#"><?php echo $GLOBALS['labels']->about; ?></a></li>
            <li class="divider"></li>
            <li><a href="/dashboard/logout"><?php echo $GLOBALS['labels']->logout; ?></a></li>
          </ul>
        </li>
        
        
        <?php else: ?>
        <li><form class="navbar-form navbar-left" role="search" action="/login/run/<?php echo $GLOBALS['BOOTSTRAPS']->getURL(); ?>" method="post" style="width: 100%">
        <div class="form-group">
            <div class="input-group">
            <span class="input-group-addon">@</span>
            <input type="text" name="login"  class="form-control" placeholder="<?php echo $GLOBALS['labels']->email; ?>">
            </div>
         
            <div class="input-group">
            <span class="input-group-addon">?</span>
            <input type="password" name="password"  class="form-control" placeholder="<?php echo $GLOBALS['labels']->password; ?>">
            </div>
            
         
        </div>
        <button type="submit" class="btn btn-default"><?php echo $GLOBALS['labels']->enter; ?></button>
      </form></li>
        <?php endif; ?>
        
        
        
        
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>