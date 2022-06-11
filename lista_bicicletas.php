<?php
session_start();
?>

<!doctype html>
<html lang="pt-BR">

<head>
<<<<<<< HEAD
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Lista bicicletas</title>


	<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
	<link rel="stylesheet" href="css/login.css">
=======
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lista bicicletas</title>


    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="css/login.css">
>>>>>>> c54e85c4fa2c2b9900e811cd88ab1ae4b1d28574

</head>

<body class="text-center">

<<<<<<< HEAD
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

		<div class="form_painel">
			<!--Cabeçalho do painel menu-->
			<div class="painel_central">
				<h2>LISTA BICICLETAS</h2>
			</div>
			<div class="form_painel"> <?php include "menu_local.php"; ?> </div> <!-- ====================================================================================================== -->
		</div>

		<div class="lista">
			<div id="funcionalidade" class="div_direita">
				<?php
				$conectar = mysqli_connect("localhost", "root", "", "db_bike");

				$sql_consulta = "SELECT idBICICLETAS, TIPO_BIKE, MARCA_BIKE, MODELO_BIKE, COR_BIKE, RODA_BIKE, 
						GRUPO_BIKE, QUADRO_BIKE, GUIDAO_BIKE, FREIO_BIKE, SELIM_BIKE, PEDAL_BIKE, 
						PESO_BIKE, FOTO_BIKE, PRECO_BIKE FROM BICICLETAS";
				$resultado_consulta = mysqli_query($conectar, $sql_consulta);

				?>
				<p> <a href="cadastra_bicicleta.php"> Cadastrar Bicicleta </a> </p>
				<table class="centralizar">
					<tr>
						<th class="">
							<p> Modelo </p>
						</th>
						<th>
							<p> Marca </p>
						</th>
						<th>
							<p> Cor </p>
						</th>
						<th>
							<p> Tipo </p>
						</th>
						<th>
							<p> Ação </p>
						</th>

					</tr>
					<?php
					while ($registro = mysqli_fetch_row($resultado_consulta)) {
					?>
						<tr>
							<td class="">
								<p>
									<a href="exibe_amp.php?codigo=<?php echo $registro[0] ?>">
										<?php echo $registro[3]; ?>
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
									<?php echo $registro[4]; ?>
								 </p>
							</td>

							<td>
								<p> 
									<?php echo $registro[1]; ?>
								 </p>
							</td>

							<td class="">
								<p> <a href="altera_amp.php?codigo=<?php echo $registro[0] ?>"> Alterar </a> </p>
							</td>

						</tr>
					<?php
					}
					?>
				</table>
			</div>
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
=======
    <!--MENU-->
    <nav class="navbar navbar-expand-lg  navbar-dark" style="background-color: #082b4d;">
        <div class="container-fluid">

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Olá
                            <?php include "valida_login.php"; ?></a>
                    </li>

                    <li><a class="nav-link active" aria-current="page" href="logout.php">Sair</a></li>

                </ul>

            </div>
        </div>
    </nav>



    <!--Formulário-->

    <div class="principal_listas">

        <div class="form_painel">
            <!--Cabeçalho do painel menu-->
            <div class="painel_central">
                <h2>LISTA BICICLETAS</h2>
            </div>
            <div class="form_painel"> <?php include "menu_local.php"; ?> </div>
            <!-- ====================================================================================================== -->
        </div>

        <div class="lista">
            <div id="funcionalidade" class="div_direita">
                <?php
				$conectar = mysqli_connect("localhost", "root", "", "db_bike");

				$sql_consulta = "SELECT idBICICLETAS, TIPO_BIKE, MARCA_BIKE, MODELO_BIKE, COR_BIKE, RODA_BIKE, 
						GRUPO_BIKE, QUADRO_BIKE, GUIDAO_BIKE, FREIO_BIKE, SELIM_BIKE, PEDAL_BIKE, 
						PESO_BIKE, FOTO_BIKE, PRECO_BIKE FROM BICICLETAS";
				$resultado_consulta = mysqli_query($conectar, $sql_consulta);

				?>
                <p> <a href="cadastra_bicicleta.php"> Cadastrar Bicicleta </a> </p>
                <table class="centralizar">
                    <tr>
                        <th class="">
                            <p> Marca </p>
                        </th>
                        <th>
                            <p> Modelo </p>
                        </th>
                        <th>
                            <p> Cor </p>
                        </th>
                        <th>
                            <p> Ação </p>
                        </th>

                    </tr>
                    <?php
					while ($registro = mysqli_fetch_row($resultado_consulta)) {
					?>
                    <tr>
                        <td class="">
                            <p>
                                <?php echo $registro[3]; ?>
                            </p>
                        </td>
                        <td>
                            <p>
                                <a href="exibe_amp.php?codigo=<?php echo $registro[0] ?>">
                                    <?php echo "$registro[4]"; ?>
                                </a>
                            </p>
                        </td>

                        <td class="">
                            <p> <?php echo $registro[5]; ?> </p>
                        </td>



                        <td class="">
                            <p> <a href="altera_amp.php?codigo=<?php echo $registro[0] ?>"> Alterar </a> </p>
                        </td>

                    </tr>
                    <?php
					}
					?>
                </table>
            </div>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>
>>>>>>> c54e85c4fa2c2b9900e811cd88ab1ae4b1d28574
</body>

</html>