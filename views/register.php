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
        <div class="register_form">
            <h1>Página de Registro!!</h1>
            <p>Insira seus dados!</p>
            <input id="username" name="username" type="text" placeholder="Username">
            <input id="password" name="password" type="password" placeholder="Password">
            <button id="login-btn" type="button" onclick="fazerRegistro()">Registrar</button><br><br>
                <small>Já tem cadastro ?  <a href="/login">Ir para página de login!!</a></small>
        </div>
    </div>
    <script src="/Assets/register.js"></script>
</body>
</html>
