<html>
<head>
  <meta charset="utf-8" />
  <title>Login</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="../style.css">
</head>

<?php
  if(isset($_GET['email-ou-senha-incorretos'])){
    $erro = 'E-mail ou Senha incorretos!';
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
            <a class="nav-link" href="../home.php" name="home">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../galeria.php" name="galeria">Galeria</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../contato.php" name="contato">Contato</a>
          <li class="nav-item">
            <a class="nav-link" href="../sobre.php" name="sobre">Sobre</a>
        </ul>
      </div>
    </div>
  </nav>

  <div class="container">    
    <div class="row">
      <div class="card-login">
        <div class="card">
          <div class="card-header">
            Login
          </div>
          <div class="card-body">
            <form action="valida_login.php" method="post">
              <div class="form-group">
                <input name="email" type="email" class="form-control" placeholder="E-mail">
              </div>
              <div class="form-group">
                <input name="senha" type="password" class="form-control" placeholder="Senha">
              </div>

              <p id="msg-erro"><?php echo $erro ?? '' ?></p>
              
              <input class="btn btn-lg btn-info btn-block" type="submit" id="btnEnviar" value='Entrar'><br>
              <p id="msg-cadastrar">Não tem uma conta? <a href="../cadastro/cadastrar.php">Inscreva-se!</a></p>
            </form>
            <div>
            </div>
          </div>
        </div>
      </div>
  </div>

  <script src="script.js"></script>
</body>
</html>