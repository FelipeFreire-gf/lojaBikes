<?php
	if ( isset($_SESSION["login_fun"]) ) {
		
		echo $_SESSION["nome_fun"];
		
	}
	else {
	
		echo "<script> 
				alert ('Você não está logado!!!') 
			  </script>";
			
		echo "<script> 
				location.href = ('index.php') 
			  </script>";
	}
?>