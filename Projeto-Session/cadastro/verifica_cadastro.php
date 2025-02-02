<?php
    session_start();
    require_once '../usuarios.php';

    // Cadastro
    // Verificando se e-mail digitado já está cadastrado
    if(in_array($_POST['email'], $_SESSION['usuarios'], true)){
        header('Location: cadastrar.php?email-ja-cadastrado');
    }else{
        array_push($usuarios, array("email" => $_POST['email'], "senha" => $_POST['senha'], "nivel" => $_POST['nivel']));
        header('Location: ../login/login.php?Cadastro-Concluido');
    }
?>