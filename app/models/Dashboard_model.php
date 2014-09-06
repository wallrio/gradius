<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Dashboard_model
 *
 * @author wallrio
 */
class Dashboard_model extends Model{
     function __construct() {      
         parent::__construct();
    }
    
    public function xhrInsert() {
        $text = $_POST['text'];
        $sth = $this->db->prepare('INSERT INTO data (text) VALUES (:text)');
        $sth->execute(array(':text' => $text));
               
    }
}
