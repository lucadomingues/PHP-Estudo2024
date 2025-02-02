<?php
    // Array com os usuarios em seus níveis de acesso
    $usuarios = array(
        array("email" => "autorizadonivel1@gmail.com", "senha" => "1234", "nivel" => "nvl1"),
        array("email" => "autorizadonivel2@gmail.com", "senha" => "4321", "nivel" => "nvl2")
    );
    $_SESSION['usuarios'] = $usuarios;
?>