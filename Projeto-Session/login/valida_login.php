<?php
    session_start();
    require_once '../usuarios.php';

    $usuario_autenticado = false;

    foreach($_SESSION['usuarios'] as $user){
        // Verificando se usuário e senha digitados conferem.
        if($user['email'] == $_POST['email'] && $user['senha'] == $_POST['senha']){
            $_SESSION['email'] = $_POST['email'];
            $_SESSION['nivel'] = $user['nivel'];
            $usuario_autenticado = true;
        }
        //Se autenticado redirecionado para página Home.php
        if($usuario_autenticado){
            header('Location: ../home.php');
        }else{
            // Redirecionando para a pagina index.php com informe de erro.
            header('Location: login.php?email-ou-senha-incorretos');
        }
    }
?>