<?php

	// inicia sessao
	session_start();
	
	// verifica se o usuario esta autenticado
	if (!isset($_SESSION['logado'])) {
		header("Location: login.php");
		die();
	}

?>