<!-- <?php

    // Verificando se a variaveis POST login e senha existe
    if(isset($_POST['email']) && isset($_POST['password'])){
        $login = 'email';
        $password = 'password';
    }

    // Validando função para criptografar a senha
        $senha = '123456';
        if(md5($senha) === '21232f297a57a5a743894a0e4a801fc3'){
        echo "senha correta";
        exit;
    } 

    // Validando se o login e senha estão correto
    function validaLogin () {
        $loginOficial = 'admin';
        $passOficial = '21232f297a57a5a743894a0e4a801fc3';

        if ($loginOficial === 'admin' && $passOficial === '21232f297a57a5a743894a0e4a801fc3'){
            header('Location: ./boas-vindas.php');
            exit;
        } else {
            header('Location: ./ogin.php ?=error');
            exit;
        }
    }
    validaLogin()
?> -->
  