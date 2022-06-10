<!doctype html>
<html lang="pt-BR">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Cadastrar Funcionário</title>


  <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
  <link rel="stylesheet" href="css/login.css">

</head>

<body class="text-center">

  <!--MENU-->
  <nav class="navbar navbar-expand-lg  navbar-dark" style="background-color: #082b4d;">
    <div class="container-fluid">

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">

          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">Início</a>        
          </li>

          <li><a class="nav-link active" aria-current="page" href="logout.php">Sair</a></li>
        
        </ul>

      </div>
    </div>
  </nav>

  <div class="PRINCIPAL">

    <!--Formulário-->
    <div class="div_form">
      <form action="processa_cadastra_funcionario.php" method="post" class="form_painel">
        <div class="painel_central">
            <h2>Cadastrar Funcionário</h2>
        </div>

        <div class="painel_adm">       
          <input type="text" name="nome" placeholder="Nome" required>
          <input type="text" name="login" placeholder="Login de acesso ao sistema" required>
          <input type="password" name="senha" placeholder="Senha de acesso ao sistema" required>
          <div class="form_radio">
          <label for="Sexo">Sexo: </label> 
          <input type="radio" name="sexo" value="masculino" checked> Masculino
          <input type="radio" name="sexo" value="feminino"> Feminino
          </div>  
          <input type="text" name="cpf" placeholder="CPF" required>
          <input type="text" name="rg" placeholder="RG" required>
          <label for="data">Data de Nascimento</label>
          <input type="date" name="datanasc" placeholder="Data de nascimento" required> 
          <input type="text" name="telefone" placeholder="Telefone" required>
          <input type="text" name="endereco" placeholder="Endereco" required>
          <input type="text" name="ctps" placeholder="CTPS" required>
          <label for="escolaridade">Escolaridade</label required>

            <select name="escolaridade" id="escolaridade">

                <option value="ensino_basico">Ensino Básico</option>
                <option value="ensino_fundamental_incompleto">Ensino Fundamental Incompleto</option>
                <option value="ensino_fundamental_completo">Ensino Fundamental Completo</option>
                <option value="ensino_medio_incompleto">Ensino Médio Incompleto</option>
                <option value="ensino_medio_completo">Ensino Médio Completo</option>
                <option value="ensino_superior_incompleto">Ensino Superior Incompleto</option>
                <option value="ensino_superior_completo">Ensino Superior Completo</option>
                
            </select>

            

          <div class="form_radio">
            <label for="funcao">Função: </label> 
            <input type="radio" name="funcao" value="vendedor" checked> Vendedor
            <input type="radio" name="funcao" value="estoquista"> Estoquista
            </div>

            <br>
          <div class="botoes">
          <button type="submit" class="botao_cadastrar"  >Cadastrar Funcionário</button>      
          <button type="reset"  class="botao_cadastrar"  >Limpar Campos</button>    
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
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
    crossorigin="anonymous"></script>
</body>

</html>