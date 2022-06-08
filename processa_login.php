<?php
	session_start();
	
/*teste com o sistema modelo ok*/

	$conectar = mysqli_connect ("localhost", "root", "", "sistema_modelo");
	
	$login = $_POST["login"];
	$senha = $_POST["senha"];	

/*
SELECT idFUNCIONARIO, NOME_FUNCIONARIO, LOGIN_FUNCIONARIO, SENHA_FUNCIONARIO, 
FUNCAO_FUNCIONARIO FROM funcionarios WHERE LOGIN_FUNCIONARIO = 'admin' AND SENHA_FUNCIONARIO = '1'
*/

		
	$sql_consulta = "SELECT cod_fun, nome_fun, login_fun, senha_fun, funcao_fun FROM funcionarios
					 WHERE 
					       login_fun = '$login' 
					 AND 
					       senha_fun = '$senha'";
					 
	$resultado_consulta = mysqli_query ($conectar, $sql_consulta);
	
	$linhas = mysqli_num_rows ($resultado_consulta);
	
	
	if ($linhas == 1) {	
		$registro = mysqli_fetch_row($resultado_consulta);
		$_SESSION["codigo_fun"] = $registro[0];
		$_SESSION["nome_fun"] = $registro[1];
		$_SESSION["login_fun"] = $registro[2];
		$_SESSION["funcao_fun"] = $registro[4];		
		
		echo "<script> 
					location.href = ('administracao.php') 
			  </script>";
	}
	else {
		echo "<script> 
				  alert ('Login ou Senha Incorretos! Digite Novamente!! processa_login') 
			  </script>";
		echo "<script> location.href = ('index.php') </script>";
	}
?>