<?php if(Session::get('loggedIn')==true): ?>


 <div class="container"  >

        <div class="row" >

            <div class="col-md-6"><div class='column' >
                    <div class="jumbotron" >
 
                    <img src="<? echo URL; ?>public/img/gradius.png" width="100px">                    
                    <h2 ><?php echo $GLOBALS['labels']->title; ?></h2>                    
                    <h5><?php echo $GLOBALS['labels']->descriptionmin; ?></h5>
                    <p><a class="btn btn-primary btn-lg" role="button"><?php echo $GLOBALS['labels']->learnmore; ?></a></p>
                  </div>
                                    
                </div></div>

            <div class="col-md-6"><div class='column'>
                    
                <div class="contentvcenter" >
                    <div class="list-group" align="left">
                    <a href="#" class="list-group-item active">
                      <h4 class="list-group-item-heading">Alertas</h4>
                      <p class="list-group-item-text">Usuários: <span class="badge">42</span> - Sistema: <span class="badge">42</span> - Administradores: <span class="badge">42</span></p>                      
                      <p class="list-group-item-text">Seu ultimo acesso foi em 00/00/0000 ás 00:00</p>                      
                    </a>
                    <a href="#" class="list-group-item">
                      <h4 class="list-group-item-heading">Notas da versão</h4>
                      <p class="list-group-item-text">Saiba o que foi modificado nesta versão</p>
                    </a>    
                    <a href="#" class="list-group-item ">
                      <h4 class="list-group-item-heading">Facebook</h4>
                      <p class="list-group-item-text">Acesse a página oficial do Gradius no facebook e compartilhe, fique por dentro de novidades, tire dúvidas com outros usuários</p>
                    </a>
                    <a href="#" class="list-group-item ">
                      <h4 class="list-group-item-heading">Feedback</h4>
                      <p class="list-group-item-text">Estamos prontos para te ouvir, tem alguma sugestão ou critica, diga-nos o que você acha do Gradius.</p>
                    </a>    
                  </div>
                </div>
                </div></div>

   

        </div>

    </div>



<?php else: ?>





    <div class="container" >

        <div class="row" >

            <div class="col-md-6"><div class='column'>
                    <div class="jumbotron"  >
 
                    <img src="<? echo URL; ?>public/img/gradius.png" width="50%">                    
                    <h2 ><?php echo $GLOBALS['labels']->title; ?> <small><?php echo 'v'.VERSAO; ?></small></h2>                    
                    <h4><?php echo $GLOBALS['labels']->descriptionmin; ?></h4>
                    <p><a class="btn btn-primary btn-lg" role="button"><?php echo $GLOBALS['labels']->learnmore; ?></a></p>
                  </div>
                                    
                </div></div>

            <div class="col-md-6"><div class='column'>
                <div class="contentvcenter" >   
                    <div class="list-group" align="left">
                   
                    <a href="#" class="list-group-item">
                      <h4 class="list-group-item-heading">Notas da versão</h4>
                      <p class="list-group-item-text">Saiba o que foi modificado nesta versão</p>
                    </a>    
                    <a href="#" class="list-group-item ">
                      <h4 class="list-group-item-heading">Facebook</h4>
                      <p class="list-group-item-text">Acesse a página oficial do Gradius no facebook e compartilhe, fique por dentro de novidades, tire dúvidas com outros usuários</p>
                    </a>
                    <a href="#" class="list-group-item ">
                      <h4 class="list-group-item-heading">Feedback</h4>
                      <p class="list-group-item-text">Estamos prontos para te ouvir, tem alguma sugestão ou critica, diga-nos o que você acha do Gradius.</p>
                    </a>    
                  </div>
                </div>
                </div></div>

   

        </div>

    </div>




<?php endif;?>