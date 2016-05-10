<?php
include ("header.php");

?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf8">
<title>Contato</title>
</head>
<body>
	<table>

		<h1>Contato:</h1>


		<form class="form-horizontal">

			<div class="form-group">
				<label for="inputNome" class="col-sm-2 control-label">Nome</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" id="inputNome"
						placeholder="Nome">
				</div>
			</div>

			<br />
			<br />

			<div class="form-group">
				<label for="inputEmail" class="col-sm-2 control-label">Email</label>
				<div class="col-sm-10">
					<input type="email" class="form-control" id="inputEmail"
						placeholder="Email">
				</div>
			</div>

			<br />
			<br />

			<div class="form-group">
				<label for="inputAssunto" class="col-sm-2 control-label">Assunto</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" id="inputAssunto"
						placeholder="Assunto">
				</div>
			</div>

			<br />
			<br />

			<div class="form-group">
				<label for="inputMensagem" class="col-sm-2 control-label">Mensagem</label>
				<div class="col-sm-10">
					<textarea class="form-control" placeholder="Digite sua Mensagem"></textarea>
				</div>
			</div>

			<br />
			<br />

			<div class="form-group">
				<div class="col-sm-offset-2 col-sm-10"></div>
			</div>
			</div>
			<div class="form-group">
				<div class="col-sm-offset-2 col-sm-10">
					<button type="submit" class="btn btn-default">Enviar</button>
				</div>
			</div>
		</form>

</body>
</html>

<?php
include ("footer.php");
?>