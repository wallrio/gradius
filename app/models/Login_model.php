<?php

/**
 * Description of Login_model
 *
 * @author wallrio
 */
class Login_model extends Model
{
    function __construct() {
        parent::__construct();
        //echo md5('pagedown');
    }
    
    public function run() {
        
        
        
        list($urlController,$urlMetodo,$urlSubMetodo,$urlMetodoFull,$urlFull) = $GLOBALS['BOOTSTRAPS']->getRouter();
     
        // pega a url que será redirecionada
        $urlFull_array = explode('/',$urlFull);
        array_shift($urlFull_array);
        array_shift($urlFull_array);
        $urlRedirect = implode('/',$urlFull_array);
        
        $login = $_POST['login'];//isset($_POST['login'])?$_POST['login']:null;
        $password = $_POST['password'];//isset($_POST['password'])?$_POST['login']:null;
        $password = md5($password);
        
        $sth = $this->db->prepare('SELECT id FROM users WHERE '
                . 'login = :login AND password = :password');
        $sth->execute(array(
            ':login' => $login,
            ':password' => $password,
        ));
        
        //$data = $sth->fetchAll();
        $count = $sth->rowCount();
        if($count > 0) {
            //login
            Session::init();
            Session::set("loggedIn",true);
            Session::set("userLogin",$login);
            Session::set("userPassword",$login);
            
            //header("location: ../dashboard");
            header('location: /');
        }else{                       
            header('location: /'.$urlRedirect);
        }
        
    }
}
