<?php

// Modelo de criação de aplicações MVC

// Model - Conexão com o banco de dados
// View - Tela para o usuário
// Controller - Regra de negócio da aplicação

require_once 'autoload.php';

// Criando uma controladora de rotas improvisada - Não é boa prática
$route = $_SERVER['REQUEST_URI'];
$method = $_SERVER['REQUEST_METHOD'];

switch($route){
    case '/':
        $auth = new AuthController();
        if($auth->checkAuth()){
            echo "Você está logado!";
        }else{
            header('Location: /login');
        }
        break;
    case '/login':
        if($method == 'POST'){
            echo "fazer Login!";
        }elseif($method == 'GET'){
            $controller = new ViewController();
            $controller->render('login');
        }else{
            echo "Method Not Allowed!!!";
        }
        break;
    case '/register':
        if($method == 'POST'){
            echo "fazer Cadastro!";
        }elseif($method == 'GET'){
            $controller = new ViewController();
            $controller->render('register');
        }else{
            echo "Method Not Allowed!!!";
        }
}