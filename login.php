<?php
    include './lib/validacao.php'

    /*
    // Verificando se a variaveis POST login e senha existe
    if(isset($_POST['email']) && isset($_POST['password'])){
        $login = 'email';
        $password = 'password';
    }

    // Validando função para criptografar a senha
        $senha = '123456';
        if(md5($senha) === '21232f297a57a5a743894a0e4a801fc3'){
    } 

    // Validando se o login e senha estão correto
    function validaLogin () {
        $loginOficial = 'admin';
        $passOficial = '21232f297a57a5a743894a0e4a801fc3';

        if ($loginOficial === 'admin' && $passOficial === '21232f297a57a5a743894a0e4a801fc3'){
            header('Location: boas-vindas.php');
        } else {
            header('Location: login.php ?=error');
            exit;
        }
    }
    validaLogin()
    */
    
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/style.css">
    <script src="https://kit.fontawesome.com/651e159098.js" crossorigin="anonymous"></script>
    <title>Tela de login</title>
</head>
<body>
    <header>
        <a href="#" class="logo">Logo</a>
    </header>
    <main>
        <form action="boas-vindas.php" method="$_POST">
            <label for="e" class="e-mail">
                <i class="fa-solid fa-envelope"></i>
                <input type="email" id="e" name="email" placeholder="Digite seu email" maxlength="40" required>
            </label>
                
            <label for="p" class="password">
                <i class="fa-solid fa-lock"></i>
                <input type="password" id="p" name="password" placeholder="Digite sua senha"required>
            </label>

            
            <button type="submit" name="enviar" class="btn-inicio">Entrar</button>

            <p><a href="#"> Esqueci minha senha</a></a></p>
            <p> Não tem cadastro?<a href="#"> Cadastre-se</a></p>
        </form>

        <script src="./assets/js/main.js"></script>
    </main>
</body>
</html>