<?php
	session_start();

	$conectar = mysqli_connect ("localhost", "root", "", "db_bike");
	
	$marca = $_POST["marca"];
	$modelo = $_POST["modelo"];
	$cor = $_POST ["cor"];
	$marchas = $_POST ["marchas"];
	$quadro = $_POST ["quadro"];
	$freioDianteiro = $_POST ["freioDianteiro"];
	$freioTraseiro = $_POST ["freioTraseiro"];
	$manopla = $_POST ["manopla"];
	$guidao = $_POST ["guidao"];
	$mesa = $_POST ["mesa"];
	$selim = $_POST ["selim"];
	$canote = $_POST ["canote"];
	$aroRoda = $_POST ["aroRoda"];
	$cuboRoda = $_POST ["cuboRoda"];
	$raioRoda = $_POST ["raioRoda"];
	$pneusRoda = $_POST ["pneusRoda"];
	$pedal = $_POST ["pedal"];
	$pedivela = $_POST ["pedivela"];
	$precoBike = $_POST ["preco"];

	$foto = $_FILES["foto"];
	
	$fotoBike = "img/img_bikes/Mormaii".$foto["name"];
	move_uploaded_file($foto["tmp_name"], $fotoBike);

	$sql_cadastrar = "INSERT INTO bicicletas (MARCA_BIKE, MODELO_BIKE, COR_BIKE, MARCHAS_BIKE, QUADRO_BIKE, FREIO_DIANTEIRO_BIKE, FREIO_TRASEIRO_BIKE, MANOPLA_BIKE, GUIDAO_BIKE, MESA_BIKE, SELIM_BIKE, CANOTE_BIKE, ARO_RODA_BIKE, CUBO_RODA_BIKE, RAIO_RODA_BIKE, PNEUS_RODA_BIKE, PEDAL_RODA_BIKE, PEDIVELA_BIKE, FILA_COMPRA_BIKE, FOTO_BIKE, PRECO_BIKE) 
					  VALUES ('$marca', '$modelo', '$cor','$marchas','$quadro','$freioDianteiro','$freioTraseiro','$manopla','$guidao','$mesa','$selim','$canote','$aroRoda','$cuboRoda','$raioRoda','$pneusRoda','$pedal','$pedivela','N','$fotoBike','$precoBike')";
											
	$sql_resultado_cadastrar = mysqli_query ($conectar, $sql_cadastrar);
	
	if ($sql_resultado_cadastrar == true) { 	
		echo "<script> alert ('$modelo cadastrado com sucesso') </script>";
		echo "<script> location.href = ('cadastra_bicicleta.php') </script>";		
	}
	else { 	
		echo "<script> alert ('ocorreu um erro no servidor ao tentar cadastrar') </script>";
		
		echo "<script> location.href = ('cadastra_bicicleta.php') </script>";
	 
	}
?>