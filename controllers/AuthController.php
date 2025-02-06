<?php

class AuthController {

    public $is_auth = false;
    public $username;
    public $user_id;

    public function login($username, $password){

    //    Login feito dessa forma está suscetível a type juggling
    //    if($username == 'admin' && $password == 'Password!123'){
    //        return true;
    //    }else{
    //       return false;
    //    }
        
    }

    public function register($username, $password){
        return "Tela de Registro!";
    }

    public function checkAuth(){
        return $this->is_auth;
    }
}