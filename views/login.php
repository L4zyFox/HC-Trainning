<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Simples</title>
    <link href="/Assets/style.css" rel="stylesheet" type="text/css">
</head>
<body>
    <div class="container">
        <?php
        if($_GET['msg']){
            // Tornando vunerável a injeção de código ... XSS por exemplo!
            echo $_GET['msg'];
        }
        ?><br>
        <div class="login_form">
            <h1>Página de Login!!</h1>
            <p>Insira suas credenciais!</p>
            <input id="username" name="username" type="text" placeholder="Username">
            <input id="password" name="password" type="password" placeholder="Password">
                <button id="login-btn" type="button" onclick="fazerLogin()">Entrar</button><br><br>
            <small>É novo por aqui?  <a href="/register">Registrar usuário!</a></small>
        </div>
    </div>
    <script src="/Assets/login.js"></script>
</body>
</html>
