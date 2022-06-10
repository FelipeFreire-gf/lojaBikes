<?php
session_start();
?>

<!doctype html>
<html lang="pt-BR">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Administração</title>


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
            <a class="nav-link active" aria-current="page" href="index.php">Olá <?php include "valida_login.php"; ?></a>

          </li>

          <li><a class="nav-link active" aria-current="page" href="logout.php">Sair</a></li>

        </ul>

      </div>
    </div>
  </nav>
  
  
    <!--Formulário-->
    
<div class="principal_listas"> 
  
        <div class="form_painel">                                      <!--Cabeçalho do painel menu-->
              <div class="painel_central"><h2>LISTA FUNCIONÁRIOS</h2>
          </div>   
            <div class="form_painel"> <?php include "menu_local.php"; ?> </div> <!-- ====================================================================================================== -->
        </div>


  <div class="lista">    
    <div id="funcionalidade" class="div_direita" >					
      <?php
      $conectar = mysqli_connect("localhost", "root", "", "db_bike");

      $sql_consulta = "SELECT idFUNCIONARIOS, NOME_FUNCIONARIO, FUNCAO_FUNCIONARIO, STATUS_FUNCIONARIO, ENDERECO_FUNCIONARIO, TELEFONE_FUNCIONARIO, CPF_FUNCIONARIO, RG_FUNCIONARIO, CTPS_FUNCIONARIO, DATA_NASCIMENTO_FUNCIONARIO, SEXO_FUNCIONARIO, ESCOLARIDADE_FUNCIONARIO FROM FUNCIONARIOS";
      $resultado_consulta = mysqli_query($conectar, $sql_consulta);

      ?>
      <p align="right"> <a href="cadastra_funcionario.php"> Cadastrar funcionário </a> </p>
      <table class="form_painel " >
        <tr>
          
            <th> Nome </th>
          
          
            <th> Função </th>
        
          
            <th> Status </th>
          
         
            <th> Ação </th>
          
        </tr>
                    <?php		
          while ($registro = mysqli_fetch_row($resultado_consulta)) 
          {											
        ?>						
        <tr>
          <td class="esquerda">
            <p>
              <a href="exibe_fun.php?codigo=<?php echo $registro[0]?>"> 
                <?php 
                  echo "$registro[1]";
                ?>
              </a>
            </p>
          </td>
          <td>
            <p>									 
              <?php echo "$registro[2]"; ?>
            </p>
          </td>
          <td>
            <p>									 
              <?php 
                echo "$registro[3]";
              ?>
            </p>
          </td>
                        <td class="direita">
            <p>
              <a href="altera_fun.php?codigo=<?php echo $registro[0]?>">
                Alterar	
              </a>
            </p>
          </td>
        </tr>
        <?php
          }
        ?>
        </table>
    </div>  
  </div>
</div>
<!-- ====================================================================================================== -->  
    
  

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
        <a class="text-white" href="#">Escola técnica de Brasília</a>
      </div>
      <!-- Copyright -->
    </footer>
    <!-- Footer -->
  </section>

  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>