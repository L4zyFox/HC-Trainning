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
       
       
        $userModel = new User();
        $user = $userModel->getUserByUsername($username);
        if($user){

            //    Login feito dessa forma está suscetível a type juggling e a SQL INJECTION
            
            if($user['password'] == $password){
                
            //    $this->is_auth = true;
            //    $this->username = $user['username'];
            //    $this->user_id = $user['id'];
                

            // Agora salva direto no arquivo de sessão

                $_SESSION['is_auth'] = true;
                $_SESSION['username'] = $username;
                $_SESSION['user_id'] = $user['id'];

                return true;
            }else{
                return false;
            }
        }else{
            return false;
        }
    }

    public function register($username, $password){
        $userModel = new User();
        $result = $userModel->registerUser($username, $password);
        return $result;
    }

    public function checkAuth(){
        return $_SESSION['is_auth'];
    }
}