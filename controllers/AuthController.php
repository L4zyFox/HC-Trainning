<?php

class AuthController {

    public $is_auth = false;
    public $username;
    public $user_id;

    public function login($username, $Password){
        return "Tela de Login";
    }

    public function register($username, $password){
        return "Tela de Registro!";
    }

    public function checkAuth(){
        return $this->is_auth;
    }
}