<?php

include("header.php");
include("conexao.php");

session_start();

// verifica qual ação tomar
$acao = (isset($_REQUEST['acao'])) ? $_REQUEST['acao'] : null;

if ($acao == 'adicionar') {
	
	// insere produto no carrinho
	$qnt_atual = $_SESSION['carrinho'][$_POST['cod_produto']]['qnt'];
	$_SESSION['carrinho'][$_POST['cod_produto']] = array('qnt' => $qnt_atual + $_POST['qnt']);

}

if ($acao == 'remover') {

	// insere produto no carrinho
	unset($_SESSION['carrinho'][$_REQUEST['cod_produto']]);

}

?>

<div class="row">
	
  <div class="col-md-12">
  	<h1>Carrinho</h1>
  </div>

  <div class="col-md-12">
  
	<table class="table table-hover">
		
		<thead>
			<tr>
				<th style="width: 1%">Foto</th>
				<th style="width: 40%">Produto</th>
				<th style="width: 5%">Qnt</th>
				<th style="width: 10%">Valor Unit.</th>
				<th style="width: 10%">Subtotal</th>
				<th style="width: 1%">Ações</th>
			</tr>
		</thead>
		
		<tbody>
		
		<?php 
		
			$total_pedido = 0;
		
			foreach ($_SESSION['carrinho'] as $cod_produto => $dados):
			
			$produto = mysql_query("SELECT * FROM produtos WHERE cod_produto = {$cod_produto};");
			$produto = mysql_fetch_array($produto);
			
			$total_pedido += ($produto['preco'] * $dados['qnt']);
			
		?>
		
			<tr>
				<td><img height="100" src="assets/fotos/<?php echo $cod_produto; ?>.jpg"></td>
				<td><?php echo $produto['nome']; ?></td>
				<td><?php echo $dados['qnt']; ?></td>
				<td>R$ <?php echo number_format($produto['preco'], 2, ',', '.'); ?></td>
				<td>R$ <?php echo number_format($produto['preco'] * $dados['qnt'], 2, ',', '.'); ?></td>
				<td><a href="carrinho.php?acao=remover&cod_produto=<?php echo $cod_produto; ?>" class="btn btn-danger">Remover</a></td>
			</tr>
		
		<?php endforeach; ?>	
			
		</tbody>
		
	</table>
	
	<table class="table">
		<tr>
			<td class="pull-right"><h4>Total: R$ <?php echo number_format($total_pedido, 2, ',', '.'); ?></h4></td>
		</tr>
	</table>
		
	<a href="finalizar.php" class="btn btn-success btn-lg pull-right">FINALIZAR COMPRA</a>
  
  </div>     
</div>

<?php include("footer.php"); ?>