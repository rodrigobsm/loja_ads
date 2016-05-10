<?php

	if(!empty($_POST)){
		
		include("conexao.php");
		
		$usuario = $_POST["inputEmail"];
		$senha = md5($_POST["inputPassword"]);
		
		$sql = "SELECT * FROM clientes WHERE email='{$usuario}' AND senha='{$senha}';";
		
		$resultado = mysql_query($sql);
						
		if(!empty($resultado)){
		
		$validado = mysql_num_rows($resultado);
		
		if ($validado > 0){
			
			session_start();
			
			$dados = mysql_fetch_array($resultado);
			
			$_SESSION['logado'] = $dados;
			
			$_SESSION['msg']['tipo'] = 'success';
			$_SESSION['msg']['texto'] = "Bem vindo à loja, <b>".$dados['nome']."</b>!";
						
			header("Location: index.php");
			
		} else{
			session_start();
			$_SESSION['msg']['tipo'] = 'danger';
			$_SESSION['msg']['texto'] = "Email e/ou senha incorreto(s).";
			header("Location: login.php");
		}
		
		}
				
	} else {
		
		("Location: login.php");
	}


?>