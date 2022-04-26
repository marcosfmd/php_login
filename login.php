<?php
    include './lib/validacao.php';

    // Verificando se a variaveis POST login e senha existe
    if(isset($_POST['user']) && isset($_POST['password'])){
        $login = htmlspecialchars($_POST['user']);
        $password = md5(htmlspecialchars($_POST['password']));
        validaLogin($login, $password);
    }

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
        <form action="login.php" method="POST">
            <label for="e" class="e-mail">
                <i class="fa-solid fa-envelope"></i>
                <input type="text" id="e" name="user" placeholder="Digite seu login" maxlength="40" required>
            </label>
                
            <label for="p" class="password">
                <i class="fa-solid fa-lock"></i>
                <input type="password" id="p" name="password" placeholder="Digite sua senha"required>
            </label>

            
            <button type="submit" name="enviar" class="btn-inicio">Entrar</button>

            <p><a href="#"> Esqueci minha senha</a></a></p>
            <p> Não tem cadastro?<a href="#"> Cadastre-se</a></p>
        </form>
        <?php
            if (isset($_GET['validaLogin']) && $_GET['validaLogin'] === 'erro') {
                echo "<h2> Login inexistente </h2>";
            }
        ?>

        <script src="./assets/js/main.js"></script>
    </main>
</body>
</html>