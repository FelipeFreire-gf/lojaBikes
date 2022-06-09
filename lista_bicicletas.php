<?php
session_start();
?>

<!doctype html>
<html lang="pt-BR">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Lista bicicletas</title>


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

  <div class="PRINCIPAL">

    <!--Formulário-->
    <div class="div_form">
      <form action="#" method="post" class="form_painel">
        <div class="painel_central">
          <h2>LISTA BICICLETAS</h2>
        </div>

        <div class=""> <?php include "menu_local.php";?> </div>		
				<div id="funcionalidade" class="">
					<?php
						$conectar = mysqli_connect ("localhost", "root", "", "db_bike");			
					
						$sql_consulta = "SELECT idBICICLETAS, MARCA_BIKE, MODELO_BIKE, COR_BIKE, MARCHAS_BIKE, QUADRO_BIKE, FREIO_DIANTEIRO_BIKE, FREIO_TRASEIRO_BIKE, MANOPLA_BIKE, GUIDAO_BIKE, MESA_BIKE, SELIM_BIKE, CANOTE_BIKE, ARO_RODA_BIKE, CUBO_RODA_BIKE, RAIO_RODA_BIKE, PNEUS_RODA_BIKE, PEDAL_RODA_BIKE, PEDIVELA_BIKE, FILA_COMPRA_BIKE, FOTO_BIKE, PRECO_BIKE FROM BICICLETAS";
						$resultado_consulta = mysqli_query ($conectar, $sql_consulta);
											
					?>
					<p> <a href="cadastra_bicicleta.php"> Cadastrar Bicicleta </a> </p>
					<table class="centralizar">
						<tr>
							<td class="">
								<p> Marca </p>
							</td>
							<td>
								<p> Modelo </p>
							</td>
							<td>
								<p> Cor </p>
							</td>
							<td>
								<p> Marchas </p>
							</td>	
							
							<td>
								<p> Quadro </p>
							</td>

							<td>
								<p> Freio Dianteiro </p>
							</td>

							<td>
								<p> Freio Traseiro </p>
							</td>

							<td>
								<p> Manopla </p>
							</td>

							<td>
								<p> Guidão </p>
							</td>

							<td>
								<p> Mesa </p>
							</td>

							<td>
								<p> Selim </p>
							</td>

							<td>
								<p> Canote </p>
							</td>

							<td>
								<p> Aro </p>
							</td>

							<td>
								<p> Cubo </p>
							</td>

							<td>
								<p> Raio </p>
							</td>

							<td>
								<p> Pneus </p>
							</td>

							<td>
								<p> Pedal</p>
							</td>

							<td>
								<p> Pedivela </p>
							</td>

							<td>
								<p> Preço </p>
							</td>

							<td class="">
								<p> Ação </p>
							</td>
						</tr>
						<?php		
							while ($registro = mysqli_fetch_row($resultado_consulta))
							{
						?>						
						<tr>
							<td class="">
								<p>
									<?php echo $registro[1]; ?>
								</p>
							</td>
							<td>
								<p>
									<a href="exibe_bicicleta.php?codigo=<?php echo $registro[0]?>"> 
										<?php echo "$registro[2]"; ?>
									</a>										
								</p>
							</td>

							<td class="">
								<p> <?php echo $registro[3]; ?> </p>
							</td>

							<td class="">
								<p> <?php echo $registro[4]; ?> </p>
							</td>

							<td class="">
								<p> <?php echo $registro[5]; ?> </p>
							</td>

							<td class="">
								<p> <?php echo $registro[6]; ?> </p>
							</td>

							<td class="">
								<p> <?php echo $registro[7]; ?> </p>
							</td>

							<td class="">
								<p> <?php echo $registro[8]; ?> </p>
							</td>

							<td class="">
								<p> <?php echo $registro[9]; ?> </p>
							</td>

							<td class="">
								<p> <?php echo $registro[10]; ?> </p>
							</td>

							<td class="">
								<p> <?php echo $registro[11]; ?> </p>
							</td>

							<td class="">
								<p> <?php echo $registro[12]; ?> </p>
							</td>

							<td class="">
								<p> <?php echo $registro[13]; ?> </p>
							</td>

							<td class="">
								<p> <?php echo $registro[14]; ?> </p>
							</td>

							<td class="">
								<p> <?php echo $registro[15]; ?> </p>
							</td>

							<td class="">
								<p> <?php echo $registro[16]; ?> </p>
							</td>

							<td class="">
								<p> <?php echo $registro[17]; ?> </p>
							</td>

							<td class="">
								<p> <?php echo $registro[18]; ?> </p>
							</td>

							<td class="">
								<p> <?php echo $registro[21]; ?> </p>
							</td>

							<td class="">
								<p> <a href="altera_amp.php?codigo=<?php echo $registro[0]?>"> Alterar </a> </p>
							</td>

						</tr>
						<?php
							}
						?>
					</table>
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