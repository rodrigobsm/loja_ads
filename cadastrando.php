<?php
	// conecta no banco de dados	
	include("conexao.php");
	
	// recebe os dados do formulário 
	$nome=mysql_real_escape_string($_POST['nome']);
	$email=mysql_real_escape_string($_POST['email']);
	$senha=md5($_POST['senha']);
	$cpf=mysql_real_escape_string($_POST['cpf']);
	$tel_area=mysql_real_escape_string($_POST['tel_area']);
	$tel_numero=mysql_real_escape_string($_POST['tel_numero']);
	$cep=mysql_real_escape_string($_POST['cep']);
	$logradouro=mysql_real_escape_string($_POST['logradouro']);
	$numero=mysql_real_escape_string($_POST['numero']);
	$complemento=mysql_real_escape_string($_POST['complemento']);
	$bairro=mysql_real_escape_string($_POST['bairro']);
	$cidade=mysql_real_escape_string($_POST['cidade']);
	$uf=mysql_real_escape_string($_POST['uf']);
	
	// verifica se email existe no banco de dados
	$search = "SELECT * FROM clientes WHERE email = '$email'";
	mysql_query($search,$conexao);
	if(@mysql_num_rows($search) > 0){
		// informa que email ja esta em uso e redireciona para tela de cadastro
		echo "<script> alert('Email já cadastrado! Por favor utilize outro email ou tente recuperar sua senha!'); window.location.replace('cadastro.php'); </script>"; 
	}else{
		// cadastra usuario no banco e redireciona para tela de login
		$queryCadastro = "INSERT INTO clientes (nome, email, senha, cpf, tel_area, tel_numero, cep, logradouro, numero, complemento, bairro, cidade, uf) VALUES ('$nome', '$email','$senha','$cpf','$tel_area','$tel_numero','$cep','$logradouro','$numero','$complemento','$bairro','$cidade','$uf')";
		mysql_query($queryCadastro,$conexao);	
		echo "<script> alert('Cadastro realizado com sucesso por favor realize login no sistema!'); window.location.replace('login.php'); </script>"; 
	}
	
	

?>