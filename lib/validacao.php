<?php
    // include './boas-vindas.php';

    // Verificando se o login e senha estçao correto para redirecione  a pagina
    function validaLogin ($loginOficial, $passOficial) {
        if ($loginOficial === 'admin' && $passOficial === '8ff9f60baf1194c52bd8ea03097399d1'){
             header('Location: ./boas-vindas.php');
        } else {
            header('Location: ./login.php?=error');
        }
    }
?> 
  