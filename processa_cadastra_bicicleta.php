<?php
	session_start();

	$conectar = mysqli_connect ("localhost", "root", "", "db_bike");
	
	$tipo = $_POST["tipo"];
	$marca = $_POST["marca"];
	$modelo = $_POST["modelo"];
	$cor = $_POST ["cor"];
	$roda = $_POST ["roda"];
	$grupo = $_POST ["grupo"];
	$quadro = $_POST ["quadro"];
	$guidao = $_POST ["guidao"];
	$freio = $_POST ["freio"];
	$selim = $_POST ["selim"];
	$pedal = $_POST ["pedal"];
	$peso = $_POST ["peso"];
	$precoBike = $_POST ["preco"];

/* 	$foto = $_FILES["foto"];
	
	$fotoBike = "img/".$foto["name"];
	move_uploaded_file($foto["tmp_name"], $fotoBike); */

	
	$sql_cadastrar = "INSERT INTO bicicletas (TIPO_BIKE, MARCA_BIKE, MODELO_BIKE, COR_BIKE, RODA_BIKE, 
	GRUPO_BIKE, QUADRO_BIKE, GUIDAO_BIKE, FREIO_BIKE, SELIM_BIKE, PEDAL_BIKE, 
	PESO_BIKE, FOTO_BIKE, PRECO_BIKE) 
	VALUES ('$tipo', '$marca', '$modelo','$cor','$roda','$grupo','$quadro',
	'$guidao','$freio','$selim','$pedal','$peso','$fotoBike','$precoBike')";

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