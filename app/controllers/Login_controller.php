<?php

class Login_controller extends Controller
{
    function __construct() {
        parent::__construct();        
    }
    
    public function index() {      
       // $this->view->path = "index";
        $this->view->render("login/index");
    }
    
    public function run(){
        //if($this->vendor->validation('email',$_POST['login']))
        $this->model->run();
    }
    
}