<?php

	include("header.php");
	include("conexao.php");
	
	$produto = mysql_query("SELECT * FROM produtos WHERE cod_produto = {$_GET['cod']};");
	$produto = mysql_fetch_array($produto);
	
?>

<div class="row">
  <div class="col-md-5">
  
  	<img class="img-responsive" src="assets/fotos/<?php echo $produto['cod_produto']; ?>.jpg">
  
  </div>
  
  <div class="col-md-7">
  
  <h1><?php echo $produto['nome']; ?></h1>
  <p><?php echo $produto['descricao']; ?></p>
  
   <h4 class="text-danger">R$ <?php echo number_format($produto['preco'], 2, ',', '.'); ?></h4>
   
   <form method="post" action="carrinho.php" class="form-horizontal">
   	
   	<input type="hidden" name="acao" value="adicionar">
   	<input type="hidden" name="cod_produto" value="<?php echo $produto['cod_produto']; ?>">
   	
	   	<div class="form-group">
	   	<input type="text" value="1" name="qnt">
	   	<input type="submit" class="btn btn-primary" value="COMPRAR">
    </div>
   	
   </form>
   
   
  </div>
</div>  

<?php include("footer.php"); ?>