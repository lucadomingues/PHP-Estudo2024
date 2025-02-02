<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="imagens/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
    <title>Sobre Você</title>
</head>

<?php
  include('login/verifica_acesso.php');
?>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand" href="home.php" id="titulo-logo">BullsInvestidors</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="menuGuias">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link" href="home.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="galeria.php">Galeria</a>
              </li>
            <li class="nav-item">
                <a class="nav-link" href="contato.php">Contato</a>
            <li class="nav-item">
                <a class="nav-link" href="sobre.php">Sobre</a>
            </ul>
            <button class="btn-sair" type="submit"><a href="login/logout.php">Sair</a></button>
          </div>
        </div>
    </nav>

    <div id="fundo-sobre-nos">
      <h1>Sobre Nós</h1>
      <h3>Vem crescer com a gente!</h3>
    </div>

    <div id="div-conteudo-sobre">
      <div class="conteudo-sobre">
        <h2>Missão</h2>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aliquam earum necessitatibus qui modi veritatis quidem nesciunt, a esse possimus amet. Eligendi itaque ipsa consequatur exercitationem a accusantium sed? Cupiditate, neque!</p>
      </div>
      <div class="conteudo-sobre">
        <h2>Visão</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias harum, optio ex maiores totam, autem aliquid vitae voluptatibus corporis laborum id et quisquam libero cumque dolorum sequi doloribus aspernatur saepe?</p>
      </div>
      <div class="conteudo-sobre">
        <h2>Valores</h2>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Harum numquam, nobis voluptatem, vel asperiores tenetur tempora facere provident assumenda enim eos nihil veniam repudiandae dolores voluptates eum repellendus. Amet, harum.</p>
      </div>
    </div>
</body>
</html>