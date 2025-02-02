<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="imagens/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
    <script src="script.js"></script>
    <title>Home</title>
</head>
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
          <?php
            session_start();
            if(isset($_SESSION['email'])){
              echo '<button class="btn-sair" type="submit"><a href="login/logout.php">Sair</a></button>';
            }
          ?>
        </div>
      </div>
    </nav>

    <div id="fundo-principal">
      <div id="conteudo-linha1-principal">
        <div id="linha" class="linha1-principal"></div>
        <div class="linha1-principal">VEM PRA BULLSINVESTIDORS</div>
      </div>
      <div id="conteudo-tit-subtit">
        <h1>Tudo o que você precisa saber sobre investimentos.</h1>
        <p>Entendemos por investimentos qualquer valor capaz de gerar um lucro, seja em um período de curto, médio ou longo prazo. Muitas pessoas não investem por pensar que é algo muito complexo e que necessita de uma grande quantia de dinheiro para começar, mas isso não é verdade.</p>
        <button id="btn-redirecionar" href="#container-tipos-investimento">CONHEÇA ESSE UNIVERSO</button>
      </div>
    </div>

    <div id="linha1" class="bloco-tipos">
      <div id="bloco-renda-fixa">
        <div class="tipo-investimento conteudo-bloco">
          <h2>Renda Fixa</h2>
          <p>
            É um tipo de investimento em que você já consegue saber como calcular o rendimento antes mesmo de investir. CDB, LCI, LCA, CRI, CRA e Debêntures são alguns exemplos de aplicações de renda fixa.
          </p>
        </div>
      </div>
      <div>
        <div class="tipo-investimento conteudo-bloco">
          <h2>Renda Variável</h2>
          <p>
            Renda variável é um tipo de investimento em que os retornos não são fixos, mas sim variam de acordo com o desempenho de ativos financeiros. Alguns exemplos de investimentos na Renda Variável são:
            Ações; Fundos de investimento (FII, FIP, FIA etc.); Fundos de índice (ETFs); BDRs; Criptomoedas; entre outras.
          </p>
        </div>
      </div>
    </div>

    <p id="subtitulo-tipo-investimento">Por isso a <strong>Renda Váriavel</strong> é um tipo de investimento mais arriscado que a renda fixa, mas devido o seu risco ela também pode gerar maiores retornos.</p>

    <div id="guia2">
      <div id="tits-guia2">
        <button class="tit-conteudo-guia2">
          <a href="#taxa-selic">Taxa Selic</a>
        </button>
        <button class="tit-conteudo-guia2">
          <a href="#cdb">CDB</a>
        </button>
        <button class="tit-conteudo-guia2">
          <a href="#acoes">Ações</a>
        </button>
        <button class="tit-conteudo-guia2">
          <a href="#fundos-investimento">Fundos de<br>Investimento</a>
        </button>
        <button class="tit-conteudo-guia2">
          <a href="#cripto">Criptomoedas</a>
        </button>
      </div>
    </div>

    <div id="conteudo-guia2">
      <div id="taxa-selic" class="div-conteudo-guia2">
        <div class="texto-conteudo-guia2">
          <h2>Taxa Selic</h2>
          <p>
            A taxa Selic é a taxa básica de juros da economia, que influencia outras taxas de juros do país, como taxas de empréstimos, financiamentos e aplicações financeiras. A definição da taxa Selic é o principal instrumento de política monetária utilizado pelo Banco Central (BC) para controlar a inflação.<br><br>

            A Selic é a taxa de juros média praticada nas operações compromissadas com títulos públicos federais com prazo de um dia útil. O BC realiza operações no mercado de títulos públicos para que a taxa Selic efetiva esteja em linha com a meta da taxa Selic, que é definida pelo Comitê de Política Monetária (Copom) do BC.
          </p>
        </div>
        <div class="img-conteudo">
          <img src="imagens/taxaSelic.jpeg" alt="">
        </div>
      </div>

      <br><div class="linha-conteudo"></div><br>

      <div id="cdb" class="div-conteudo-guia2">
        <div class="texto-conteudo-guia2">
          <h2>CDBs</h2>
          <p>
            Se você já investiu no Tesouro Direto, sabe que quem compra títulos públicos na prática “empresta” dinheiro para o governo fazer a máquina pública girar. Da mesma forma, quem investe em debêntures empresta recursos para uma empresa realizar grandes projetos. A lógica é exatamente a mesma nos certificados de depósito bancário: quem compra CDBs empresta dinheiro para os bancos financiarem suas atividades de crédito.<br><br>

            Os bancos captam dinheiro com os CDBs oferecendo em troca uma remuneração - os juros - aos investidores, por um determinado período. Os recursos são usados por essas instituições para conceder empréstimos a outras pessoas.<br><br>

            Só ficam de fora os valores que os bancos são obrigados a recolher como depósito compulsório junto ao Banco Central - cerca de um terço do que captam. Esse volume de recursos não pode ser emprestado. A obrigação serve exatamente para que o governo consiga controlar o dinheiro em circulação na economia.
          </p>
        </div>
        <div class="img-conteudo">
          <img src="imagens/cdb.jpg" alt="">
        </div>
      </div>

      <br><div class="linha-conteudo"></div><br>

      <div id="acoes" class="div-conteudo-guia2">
        <div class="texto-conteudo-guia2">
          <h2>Ações</h2>
          <p>
            Uma ação representa a menor parcela do capital de uma empresa. Quem compra ações de uma companhia adquire também os direitos — e os deveres — de um sócio.<br><br>

            Se for uma companhia aberta, registrada na Comissão de Valores Mobiliários ( a CVM, órgão que regula e fiscaliza o mercado de capitais brasileiro), suas ações podem ser negociadas publicamente na bolsa de valores.<br><br>

            Uma das principais vantagens de se tornar acionista de uma empresa é poder se beneficiar de parte dos resultados que ela obtiver. Quando uma companhia aberta tem lucro, uma parcela dele é distribuída aos sócios na forma de dividendos, na proporção do número de ações que cada um possuir.<br><br>

            O acionista pode ganhar ainda com a possível valorização do preço dos papéis — que, além do desempenho financeiro da empresa, depende também das perspectivas para o setor em que ela atua e para a economia em geral.
          </p>
        </div>
        <div class="img-conteudo">
          <img src="imagens/acoes.jpg" alt="">
        </div>
      </div>

      <br><div class="linha-conteudo"></div><br>

      <div id="fundos-investimento" class="div-conteudo-guia2">
        <div class="texto-conteudo-guia2">
          <h2>Fundos de Investimento</h2>
          <p>
            Os fundos de investimento são uma opção capaz de agradar diversos perfis de investidores. De um lado, eles são simples - e, por isso, adequados para quem está querendo sair da poupança e começar a fazer aplicações mais rentáveis. De outro, há fundos sofisticados, para quem já está habituado ao mercado financeiro.<br><br>

            Não são poucos os brasileiros que já perceberam as vantagens - entre elas a gestão profissional da carteira e possibilidade de diversificar os investimentos mesmo para quem tem pouco dinheiro.<br><br>

            No país, os fundos somam patrimônio de quase R$ 5,2 trilhões, segundo dados da Anbima (Associação Brasileira das Entidades dos Mercados Financeiro e de Capitais) levantados em agosto de 2019.
          </p>
        </div>
        <div class="img-conteudo">
          <img src="imagens/fundosInvestimentos.png" alt="">
        </div>
      </div>

      <br><div class="linha-conteudo"></div><br>

      <div id="cripto" class="div-conteudo-guia2">
        <div class="texto-conteudo-guia2">
          <h2>Criptomoedas</h2>
          <p>
            Criptomoeda é um sistema de pagamento digital que não depende de bancos para verificar e confirmar transações. É um sistema ponto a ponto que permite a qualquer pessoa enviar e receber pagamentos de qualquer lugar. Em vez do dinheiro físico transportado e trocado no mundo real, os pagamentos em criptomoeda existem unicamente como valores digitais em um banco de dados online que documenta as transações específicas.<br><br>

            Ao transferir fundos de criptomoeda, as transações são registradas em um livro contábil público. A criptomoeda é armazenada em carteiras digitais.<br><br>

            A criptomoeda tem esse nome porque usa o recurso de criptografia para verificar as transações. Isso significa que uma codificação avançada está envolvida no armazenamento e na transmissão de dados de criptomoeda entre as carteiras e os livros contábeis públicos. O objetivo da criptografia é oferecer segurança e proteção.<br><br>

            A primeira criptomoeda foi o Bitcoin, criada em 2009 e ainda hoje a mais conhecida. Grande parte do interesse em criptomoedas é a negociação de mercado visando o lucro, com especuladores às vezes impulsionando os preços até as alturas.
          </p>
        </div>
        <div class="img-conteudo">
          <img src="imagens/cripto.jpeg" alt="">
        </div>
      </div>
    </div>

</body>
</html>