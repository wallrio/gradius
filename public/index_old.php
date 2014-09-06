    <?php  
    
    /* old method to load library
     * 
     * 
        // library controller
        require LIBS_DIR.'Bootstrap.php';
        require LIBS_DIR.'Controller.php';
        require LIBS_DIR.'Model.php';
        require LIBS_DIR.'View.php';
        
        // library model   
        require LIBS_DIR.'Setting.php';
        require LIBS_DIR.'Database.php';
        require LIBS_DIR.'Session.php';
        require LIBS_DIR.'Xml.php';
        require LIBS_DIR.'Translation.php';
        require LIBS_DIR.'Vendor.php';
    */ 
    
    header('Content-Type: text/html; charset=utf-8');  
      
    define('DS', DIRECTORY_SEPARATOR);     
    define('ROOT', dirname(dirname(__FILE__)));
    define('CORE_DIR', ROOT.DS.'libs'.DS.'Gradius'.DS.'Core'.DS);
    
    // declara o autoloader
    require_once CORE_DIR.'AutoLoad.php';   
    $AutoLoad = new AutoLoad();        
    spl_autoload_register(array($AutoLoad, 'core'));  

    
    use \Gradius\Core\Controller; 

    $controller = new Controller();

    
    
    if (!empty($_GET['action'])) {
    	$controller->{$_GET['action']}();
    }
//echo $controller->teste;

/*

use Respect\Rest\Router;

require_once __DIR__ . "/../vendor/autoload.php";

//require_once __DIR__ . "/../Application/config";
$teste = new Gradius\Test();

$r3 = new Router();


$r3->get('/hello',function(){
	echo "olá";
});

*/