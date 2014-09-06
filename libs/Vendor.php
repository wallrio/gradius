<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Vendor
 *
 * @author wallrio
 */
use Respect\Validation\Validator as v ;
use Respect\Validation\Rules;

class Vendor   {
    function __construct() {
        //echo $this->validation('email','wallrio@gmail.com');
    }
    
    public function validation($type,$value){
       
        if($type == 'email'){                        
            return v::string()->email()->validate($value);            
        }                

    }
}
