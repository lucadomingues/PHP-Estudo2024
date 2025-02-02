<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="imagens/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
    <title>Contato</title>
</head>

<?php
  include('login/verifica_acesso.php');
?>

<body id="pagina-contato">
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand" href="home.php" id="titulo-logo">BullsInvestidors</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs>
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0" id="menu-guias">
              <li class="nav-item">
                <a class="nav-link" href="home.php" name="home">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="galeria.php" name="galeria">Galeria</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contato.php" name="contato">Contato</a>
              <li class="nav-item">
                <a class="nav-link" href="sobre.php" name="sobre">Sobre</a>
            </ul>
            <button class="btn-sair" type="submit"><a href="login/logout.php">Sair</a></button>
          </div>
        </div>
    </nav>

    <div id="container-geral-contatos">
        <div id="coluna1">
            <div id="linha1">
                <div id="telefone" class="blocos-linha1">
                    <div class="conteudo-bloco">
                        <img src="imagens/telefone.png" alt="" class="img-icons-contato">
                        <p class="titulo-blocos-contato">NÚMERO DE<br>TELEFONE</p>
                        <p>11 3634-7070<br>11 91234-5678</P>
                    </div>
                </div>
                <div id="email" class="blocos-linha1">
                    <div class="conteudo-bloco">
                        <img src="imagens/email.png" alt="" class="img-icons-contato">
                        <p class="titulo-blocos-contato">E-MAIL</p>
                        <p>olympiabr@olympia.com.br</p>
                    </div>
                </div>
            </div>
            <div id="linha2">
                <div id="bloco-endereco">
                    <div class="conteudo-bloco">
                        <img src="imagens/localizacao.png" alt="" class="img-icons-contato">
                        <p class="titulo-blocos-contato">NOSSA LOCALIZAÇÃO</p>
                        <p>Rua Pararan, Nº 1234, Algum Bairro,<br>São Paulo, 01123-123</p>
                    </div>
                </div>
            </div>
        </div>
        <div id="coluna2">
            <div id="div-form-contato">
                <form action="" id="form-contato">
                    <p id="titulo-coluna2-form">Entre em contato<br>conosco</p>
    
                    <input type="text" class="input-form-contato" placeholder="Digíte seu nome completo"><br>
                    <input type="email" class="input-form-contato" placeholder="Digíte seu melhor e-mail"><br>
                    <textarea name="obs" id="obs-form" class="input-form-contato"></textarea><br>
                    <input type="submit" id="btn-form-contato">
                </form>
            </div>
        </div>
    </div>
</body>
</html>