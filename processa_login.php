<?php
	session_start();

	$conectar = mysqli_connect ("localhost", "root", "", "db_bike");
	
	$login = $_POST["login"];
	$senha = $_POST["senha"];	
		
	$sql_consulta = "SELECT idFUNCIONARIOS, NOME_FUNCIONARIO, LOGIN_FUNCIONARIO, SENHA_FUNCIONARIO,
				            FUNCAO_FUNCIONARIO FROM FUNCIONARIOS
					 WHERE 
                        LOGIN_FUNCIONARIO = '$login' 
					 AND 
                        SENHA_FUNCIONARIO = '$senha'";
					 
	$resultado_consulta = mysqli_query ($conectar, $sql_consulta);
	
	$linhas = mysqli_num_rows ($resultado_consulta);
	
	
	if ($linhas == 1) {	
		$registro = mysqli_fetch_row($resultado_consulta);
		$_SESSION["idFUNCIONARIOS"] = $registro[0];
		$_SESSION["NOME_FUNCIONARIO"] = $registro[1];
		$_SESSION["LOGIN_FUNCIONARIO"] = $registro[2];
		$_SESSION["FUNCAO_FUNCIONARIO"] = $registro[4];		
		
		echo "<script> 
					location.href = ('administracao.php') 
			  </script>";
	}
	else {
		echo "<script> alert ('Login ou Senha Incorretos! Digite Novamente!! processa_login') </script>";
		
		echo "<script> location.href = ('index.php') </script>";
	
	}
?>