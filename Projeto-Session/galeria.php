<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="imagens/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
    <title>Galeria</title>
</head>

<?php
  include('login/verifica_acesso.php');
  if($_SESSION['nivel'] == 'nvl1'){
    include('login/logout.php');
  }
?>

<body>
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

  <div id="fundo-galeria">
      <h1>Notas e moedas ao redor do mundo</h1>
  </div>

  <div id="container-imagens">
    <div class="linha-imagens">
      <div class="img-notas">
        <img src="imagens/nota1.jpg" alt="">
      </div>
      <div class="img-notas">
        <img src="imagens/nota2.jpg" alt="">
      </div>
      <div class="img-notas">
        <img src="imagens/nota3.jpg" alt="">
      </div>
    </div>
    <div class="linha-imagens">
      <div class="img-notas">
        <img src="imagens/nota4.jpg" alt="">
      </div>
      <div class="img-notas">
        <img src="imagens/nota5.jpeg" alt="">
      </div>
      <div class="img-notas">
        <img src="imagens/nota6.jpeg" alt="">
      </div>
    </div>
    <div class="linha-imagens">
      <div class="img-notas">
        <img src="imagens/nota7.jpg" alt="">
      </div>
      <div class="img-notas">
        <img src="imagens/nota8.jpg" alt="">
      </div>
      <div class="img-notas">
        <img src="imagens/nota9.jpeg" alt="">
      </div>
    </div>
    <div class="linha-imagens">
      <div class="img-notas">
        <img src="imagens/nota10.jpg" alt="">
      </div>
      <div class="img-notas">
        <img src="imagens/nota11.jpg" alt="">
      </div>
      <div class="img-notas">
        <img src="imagens/nota12.jpg" alt="">
      </div>
    </div>
    <div class="linha-imagens">
      <div class="img-notas">
        <img src="imagens/nota13.jpg" alt="">
      </div>
      <div class="img-notas">
        <img src="imagens/nota14.jpg" alt="">
      </div>
      <div class="img-notas">
        <img src="imagens/nota15.jpg" alt="">
      </div>
    </div>
    <div class="linha-imagens">
      <div class="img-notas">
        <img src="imagens/nota16.jpg" alt="">
      </div>
      <div class="img-notas">
        <img src="imagens/nota17.jpg" alt="">
      </div>
      <div class="img-notas">
        <img src="imagens/nota18.jpg" alt="">
      </div>
    </div>
  </div>

</body>
</html>