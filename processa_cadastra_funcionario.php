<?php
	session_start();

	$conectar = mysqli_connect ("localhost", "root", "", "db_bike");
		
	$nome = $_POST["nome"];
	$login = $_POST["login"];
	$senha = $_POST["senha"];
    $cpf = $_POST["cpf"];
    $rg = $_POST["rg"];
    $dataNascimento = $_POST["datanasc"];
    $telefone = $_POST["telefone"];
    $endereco = $_POST["endereco"];
    $ctps = $_POST["ctps"];
    $escolaridade = $_POST["escolaridade"];
    $funcao = $_POST["funcao"];
    $sexo = $_POST["sexo"];

	$sql_consulta = "SELECT LOGIN_FUNCIONARIO FROM FUNCIONARIO 
					 WHERE LOGIN_FUNCIONARIO = '$login'";
							 
	$resultado_consulta = mysqli_query ($conectar, $sql_consulta);
		
	$linhas = mysqli_num_rows ($resultado_consulta);		
		
	if ($linhas == 1) {
		echo "<script> alert ('Login ja cadastrado. Tente outro!') </script>";
			  
		echo "<script> location.href = ('cadastra_funcionario.php') </script>";			
	}
	else { 

		$sql_cadastrar = "INSERT INTO funcionarios (NOME_FUNCIONARIO, LOGIN_FUNCIONARIO, SENHA_FUNCIONARIO, STATUS_FUNCIONARIO, FUNCAO_FUNCIONARIO, ENDERECO_FUNCIONARIO, TELEFONE_FUNCIONARIO, CPF_FUNCIONARIO, RG_FUNCIONARIO, CTPS_FUNCIONARIO, DATA_NASCIMENTO_FUNCIONARIO, SEXO_FUNCIONARIO, ESCOLARIDADE_FUNCIONARIO)VALUES
        	('$nome' , '$login', '$senha', 'ativo', '$funcao', '$endereco', '$telefone', '$cpf', '$rg', '$ctps', '$dataNascimento', '$sexo', '$escolaridade')";
		$resultado_cadastrar = mysqli_query ($conectar, $sql_cadastrar);
		
		if ($resultado_cadastrar == true) { 		
			echo "<script> alert ('$nome cadastrado com sucesso') </script>";
			
			echo "<script> location.href = ('cadastra_funcionario.php') </script>";	
		}
		else { 		
			echo "<script> alert ('ocorreu um erro no servidor. Tente de novo') </script>";
		
			echo "<script> location.href = ('cadastra_funcionario.php') </script>";		
		}	
	}
