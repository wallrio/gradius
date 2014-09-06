<?php

class Help_controller extends Controller
{
    function __construct()
    {
        parent::__construct();       
    }
    
    public function index() {        
        $this->view->page = 'home';
        $this->view->helpcontent = $this->view->getRender("help/home");
        $this->view->render("help/index");
        echo '<script>$("#help_'.$this->view->page.'").toggleClass("active");</script>';
    }
    public function other($arg = false)
    {             
        //$this->view->path = $arg;
        $this->view->render("help/other");
        
         //$model = new Help_model();
         //$this->view->blah = $model->blah();
        
        //require_once APP_DIR . 'models/Help_model.php';
        
    }
    
    public function about() {        
        $this->view->page = 'about';
        $this->view->helpcontent = $this->view->getRender("help/about");
        $this->view->render("help/index");        
        echo '<script>$("#help_'.$this->view->page.'").toggleClass("active");</script>';
    }
}