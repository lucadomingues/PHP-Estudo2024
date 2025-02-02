<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuario</title>
</head>
<body>
    <?php
        $usuario = "Marcos";
        //Criptografando senha.
        $senha = base64_encode("123456");

        echo '<br><hr>';
        echo 'Nome do Usuário: '.$usuario;
        echo '<br>';
        echo 'Senha do Usuário: '.$senha;
        echo'<hr>';

        //Descriptografando senha.
        echo 'Senha descriptografada: '.base64_decode("MTIzNDU2");
    ?>
</body>
</html>