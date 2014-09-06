<?php

class Error_controller extends Controller
{
    function __construct() {
        parent::__construct();
        //echo 'this is class error';
        
        
    }
    
    public function index() {
        $this->view->render("error/index");
    }
}