<?php

    // Verificando se a variaveis POST login e senha existe
    if(isset($_POST['email']) && isset($_POST['password'])){
        $login = htmlspecialchars($_POST['email']);
        $password = htmlspecialchars($_POST['password']);
    }

    // Validando função para criptografar a senha
    function criptografia () {
        $senha = 'Dev2022';

        if(md5($senha) === 'c8063b4a4823f1c542487f67a2557d61') {
            echo "Senha correta";
        }else {
        echo 'senha incorreta';
        }
    }
    criptografia ();

    // Validando se o login e senha estão correto e  Verificando se o login e senha estçao correto para redirecione  a pagina
    function validaLogin () {
        $loginOficial = 'admin';
        $passOficial = 'c8063b4a4823f1c542487f67a2557d61';

        if ($loginOficial === 'admin' && $passOficial === 'c8063b4a4823f1c542487f67a2557d61'){
             header('Location: boas-vindas.php');
        } else {
            header('Location: login.php ?=error');
        }
    }
    validaLogin()
?> 
  