
    <div class="container" >

        <div class="row" >

            <div class="col-sm-3"><div class='column' >
                   
                <div class="panel panel-default">
                <div class="panel-body">
                  Categoria 
                </div>
                    <div class="panel-footer" align="left">

                        <ul class="nav nav-pills nav-stacked">
                            <li id='help_home' ><a href="/help"><?php echo $GLOBALS['labels']->start; ?></a></a></li>      
                            <li id='help_about' ><a   href="/help/about"><?php echo $GLOBALS['labels']->about; ?></a></li>
                                  <li><a href="#">Profile</a></li>
                                  <li><a href="#">Messages</a></li>
                                </ul>

                    </div>
              </div>
                   
 
                                    
                </div></div>

            <div class="col-md-6"><div class='column' >
                    <div id="resultHelpConteudo">   
                <div class="contentvcenter" >  
                    
                    <?php echo $this->helpcontent; ?>
                    
                    
                </div>
                    </div>
                </div></div>

   

        </div>

    </div>
