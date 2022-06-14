<?php
session_start();
?>
<!doctype html>
<html lang="pt-BR">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Cadastrar Bicicleta</title>


  <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
  <link rel="stylesheet" href="css/login.css">

</head>

<body class="text-center">

  <!--MENU-->
  <nav class="navbar navbar-expand-lg  navbar-dark" style="background-color: #082b4d;">
    <div class="container-fluid">

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">

          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="administracao.php">Início</a>
          </li>

          <li><a class="nav-link active" aria-current="page" href="logout.php">Sair</a></li>

        </ul>

      </div>
    </div>
  </nav>

  <div class="PRINCIPAL">

    <!--Formulário-->
    <div class="div_form">
      <form action="processa_cadastra_bicicleta.php" method="post" class="form_painel">
        <div class="painel_central">
          <h2>Cadastrar Bicicleta</h2>
        </div>

        <div class="painel_adm">

          <input type="text" name="tipo" placeholder="Tipo" required>
          <input type="text" name="marca" placeholder="Marca" required>
          <input type="text" name="modelo" placeholder="Modelo" required>
          <input type="text" name="cor" placeholder="Cor" required>
          <input type="text" name="roda" placeholder="Aros, cubos, pneus" required>
          <input type="text" name="grupo" placeholder="Marchas, passadores, pedivela..." required>
          <input type="text" name="quadro" placeholder="Quadro" required>
          <input type="text" name="guidao" placeholder="Guidão e manoplas" required>
          <input type="text" name="freio" placeholder="Freios" required>
          <input type="text" name="selim" placeholder="Selim e Canote" required>
          <input type="text" name="pedal" placeholder="Pedal" required>
          <input type="text" name="peso" placeholder="Peso" required>
          <input type="file" name="foto" required>
          <input type="text" name="preco" placeholder="Preço" required>
          <label> Imagem da Bicicleta </label>
          <input type="file" name="foto" required>


          <br>

          <div class="botoes">
            <button type="submit" class="botao_cadastrar">Cadastrar Bicicleta</button>
            <button type="reset" class="botao_cadastrar">Limpar Campos</button>
          </div>

        </div>
      </form>
    </div>
  </div>


  <!--RODA PÉ-->
  <section class="rodape">
    <!-- Footer -->
    <footer class="text-center text-white" style="background-color: #082b4d;">
      <!-- Grid container -->
      <div class="container p-4 pb-0">
        <!-- Section: CTA -->
        <section class="">
          <p class="d-flex justify-content-center align-items-center">
            <span class="me-3">3ºD</span>
          </p>
        </section>
        <!-- Section: CTA -->
      </div>
      <!-- Grid container -->

      <!-- Copyright -->
      <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
        © 2020 Copyright:
        <a class="text-white" href="#">Escola Técnica de Brasília</a>
      </div>
      <!-- Copyright -->
    </footer>
    <!-- Footer -->
  </section>

  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>