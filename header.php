<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<meta name="description" content="">
<meta name="author" content="">
<link rel="icon" href="assets/img/logo.png">

<title>Submarin - ADS</title>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

<!-- Bootstrap core CSS -->
<link href="assets/css/bootstrap.css" rel="stylesheet">

<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<link href="assets/css/ie10-viewport-bug-workaround.css"
	rel="stylesheet">

<!-- Custom styles for this template -->
<link href="assets/css/justified-nav.css" rel="stylesheet">

<!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
<!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
<script src="assets/js/ie-emulation-modes-warning.js"></script>

<scritp src="assets/js/bootstrap.min.js"></scritp>
<scritp src="assets/js/npm.js"></scritp>

<scritp src="assets/js/npm/transition.js"></scritp>
<scritp src="assets/js/npm/alert.js"></scritp>
<scritp src="assets/js/npm/button.js"></scritp>
<scritp src="assets/js/npm/carousel.js"></scritp>
<scritp src="assets/js/npm/collapse.js"></scritp>
<scritp src="assets/js/npm/dropdown.js"></scritp>
<scritp src="assets/js/npm/modal.js"></scritp>
<scritp src="assets/js/npm/tooltip.js"></scritp>
<scritp src="assets/js/npm/popover.js"></scritp>
<scritp src="assets/js/npm/scrollspy.js"></scritp>
<scritp src="assets/js/npm/tab.js"></scritp>
<scritp src="assets/js/npm/affix.js"></scritp>

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
				  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				     <?php echo (isset($_SESSION['logado'])) ? $_SESSION['logado']['nome'] : 'Minha Conta' ?> <span class="caret"></span>
				  </button>
				  <ul class="dropdown-menu">
				    <li><a href="#">Entrar...</a></li>
				    <li><a href="#">Sair</a></li>
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