<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<link rel="icon" href="assets/img/logo.png">

<title>Submarino - ADS</title>

<!-- Bootstrap core CSS -->
<link href="assets/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="assets/css/justified-nav.css" rel="stylesheet">
    
    <link href="assets/css/signin.css" rel="stylesheet">

<!-- Custom styles for this template -->
<link href="assets/css/justified-nav.css" rel="stylesheet">

<!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
<!--[if lt IE 9]><script src="assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
<script src="assets/js/ie-emulation-modes-warning.js"></script>

<!-- Dropdown -->
<script src="http://code.jquery.com/jquery-latest.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>


	<div class="container">

		<!-- The justified navigation menu is meant for single line per list item.
           Multiple lines will require custom code not provided by Bootstrap. -->
		<div class="masthead">
			<h3 class="text-muted">
				<img src="assets/img/logo.png" height="80">

				<div class="pull-right">
				<div class="btn-group">
				<div class="logged" align="right">
				<h5>Bem-Vindo</h5>
				  <button type="button" class="btn btn-default dropdown-toggle" 
				  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				  	<?php echo (isset($_SESSION['logado'])) ? $_SESSION['logado']['nome'] : 'Entrar' ?>
				  	<span class="caret"></span>
				  </button>
				  
				  <ul class="dropdown-menu">
				  	<li><a href="login.php">Entrar</a></li>
				    <li><a href="logout.php">Sair</a></li>
				  </ul>
				</div>
				</div>
			</h3>

			<nav>
				<ul class="nav nav-justified">
					<li class=""><a href="index.php">Home</a></li>
					<li><a href="categorias.php">Categorias</a></li>
					<li><a href="carrinho.php">Carrinho</a></li>
					<li><a href="finalizar.php">Finalizar Compra</a></li>
					<li><a href="ajuda.php">Ajuda</a></li>
					<li><a href="contato.php">Contato</a></li>
				</ul>
			</nav>
		</div>

		<br> <br>

		<!-- Conteudo da Pagina -->