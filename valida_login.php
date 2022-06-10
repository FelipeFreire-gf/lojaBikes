<?php
	if ( isset($_SESSION["LOGIN_FUNCIONARIO"]) ) {
		
		echo $_SESSION["NOME_FUNCIONARIO"];
		
	}
	else {
        
		echo "<script> alert ('Você não está logado!!! valida login') </script>"; 
		echo "<script> location.href = ('index.php')  </script>";
	}
?>