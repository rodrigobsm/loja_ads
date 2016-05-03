<?php
error_reporting(0);
ini_set('display_errors', 0);

// conexao ao banco
$conexao = mysql_connect("192.167.7.129", "root", "vertrigo");

if ($conexao) {

	if (!mysql_select_db("loja_ads")) {
		die("Erro ao selecionar o banco de dados.");
	};
	
} else {
	die("Erro ao conectar ao banco.");
}

?>