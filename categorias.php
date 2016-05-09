<?php
include ("header.php");

?>
<div class="row">
	<div class="col-md-3">
		<h3>Categorias</h3>
		<ul class="list-group">
			<li class="list-group-item"><a href="categorias.php">Todos os Produtos</a></li>
		<?php 
			include("conexao.php");
			$menu = mysql_query("SELECT * FROM categorias ORDER BY nome ASC;");	
			while ($menu_item = mysql_fetch_array($menu)):
		?>
			<li class="list-group-item"><a href="categorias.php?cod_categoria=<?php echo $menu_item['cod_categoria']; ?>"><?php echo $menu_item['nome']; ?></a></li>
		<?php endwhile; ?>	
		</ul>
	</div> 
  
	<div class="col-md-9">
		<h3>Produtos</h3>
		
		<div class="row">
		
			<?php
      
		      
		      if (isset($_REQUEST['cod_categoria'])) {
			      $produtos = mysql_query("SELECT * FROM produtos p
			      						   INNER JOIN categorias c
			      						   ON p.cod_categoria = c.cod_categoria
			      					       WHERE p.cod_categoria = ".$_REQUEST['cod_categoria']);
		      } else {
		      	$produtos = mysql_query("SELECT * FROM produtos WHERE 1");
		      }
		      
		      while ($produto = mysql_fetch_array($produtos)):
		      ?>
		      
		        <div class="col-lg-3">
		          <img class="img-responsive" src="assets/fotos/<?php echo $produto['cod_produto']; ?>.jpg">
		          <h4><?php echo $produto['nome']; ?></h4>
		          <h4 class="text-danger">R$ <?php echo number_format($produto['preco'], 2, ',', '.'); ?></h4>
		          <p><a class="btn btn-primary" href="produto.php?cod=<?php echo $produto['cod_produto']; ?>" role="button"><i class="glyphicon glyphicon-share-alt"></i> COMPRAR</a></p>
		        </div>
		        
		     <?php endwhile; ?>
			
		</div>
		
	</div>
	
</div>  
  




<?php 
include("footer.php");
?>