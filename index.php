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
            $request = file_get_contents('php://input');
            $data_obj = json_decode($request);
        //    $userLogado = $data_obj->username;
        //    echo 'Seja bem-vindo ' . $userLogado;
            $auth = new AuthController();
            $result = $auth->login($data_obj->username, $data_obj->password);
            if($result){
                echo "Login realizado com sucesso!";
            }else{
                echo "Usuário ou Senha inválido!";
            }

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