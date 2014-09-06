<?php



class Index_controller extends Controller
{
    function __construct() {
        parent::__construct();
               
    }
    
    public function index() {      
        
        
        //$this->view->path = $arg;
        $this->view->render("index/index");
    }
}