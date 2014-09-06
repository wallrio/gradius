
                      
                      <?php
    if(!isset($this)){
        $pathrais = '../../../';
        require_once $pathrais.'loadlibs.php';   
    }
?>

<ul class='nav nav-pills nav-stacked'>
  <li class='active'>
    <a href='#'>
      <span class='badge pull-right'>?</span>
      <?php echo ucfirst($GLOBALS['labels']->start); ?>
    </a>
  </li>  
</ul>

<h2><?php echo  ucfirst($GLOBALS['labels']->title); ?></h2>



<div class="panel panel-default">
  <!-- Default panel contents -->
  
  <div class="panel-body">
    <?php echo ucfirst($GLOBALS['labels']->descriptionmin); ?>
  </div>

  <!-- Table -->
  <table class="table">
      
          <tr><td style='font-weight: bold'><?php echo ucfirst($GLOBALS['labels']->version); ?>:</td><td><?php echo VERSAO; ?></td></tr>
           <tr><td style='font-weight: bold'><?php echo ucfirst($GLOBALS['labels']->year); ?>:</td><td><?php echo DATEVERSAO; ?></td></tr>
           <tr><td style='font-weight: bold'><?php echo ucfirst($GLOBALS['labels']->author); ?>:</td><td><?php echo AUTHOR; ?></td></tr>
           <tr><td style='font-weight: bold'><?php echo ucfirst($GLOBALS['labels']->email); ?>:</td><td><?php echo EMAIL; ?></td></tr>
          
      
  </table>
</div>