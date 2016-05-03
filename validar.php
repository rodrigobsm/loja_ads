<?php

	if(!empty($_POST)){
		
		include("conexao.php");
		
		$usuario = $_POST["usuario"];
		$senha = $_POST["senha"];
		
		$sql = "SELECT * FROM usuarios WHERE login='{$usuario}' AND senha='{$senha}';";
		
		$resultado = mysql_query($sql);
		$validado = mysql_num_rows($resultado);
		
		if ($validado == true){
			
			session_start();
			
			$dados = mysql_fetch_array($resultado);
			
			$_SESSION['logado'] = $dados['cod_usuario'];
			
			header("Location: index.php");
			
		}
				
	} else {
		
		header("Location: login.php");
	}


?>