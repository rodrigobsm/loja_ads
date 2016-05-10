<?php
include ("header.php");

?>
<div class="row">
	<div class="col-md-3">
		<h4>
			<div class="row">
			<form action="categorias.php" method="get">
				<div class="col-lg-12">
					<div class="input-group">
						<span class="input-group-btn">
							<button class="btn btn-default" type="submit">Buscar</button>
						</span> <input name="buscar" type="text" class="form-control display-block" value="<?php if (isset($_REQUEST['buscar'])) echo $_REQUEST['buscar']; ?>"
							placeholder="O que procura?" autocomplete="off" >
							
					</div>
					<!-- /input-group -->
				</div>
				<!-- /.col-lg-6 -->
				</form>
			</div>
		</h4>
		<h3>Categorias</h3>
		<ul class="list-group">
			<li class="list-group-item"><a href="categorias.php">Todos os
					Produtos</a></li>
		<?php
		include ("conexao.php");
		$menu = mysql_query ( "SELECT * FROM categorias ORDER BY nome ASC;" );
		while ( $menu_item = mysql_fetch_array ( $menu ) ) :
			?>
			<li class="list-group-item"><a
				href="categorias.php?cod_categoria=<?php echo $menu_item['cod_categoria']; ?>"><?php echo $menu_item['nome']; ?></a></li>
		<?php endwhile; ?>	
		</ul>
	</div>

	<div class="col-md-9">
		<h3>Produtos</h3>

		<div class="row">
		
			<?php
			
			
			$produtos_por_pagina = 8;
			$pg_atual = $_REQUEST['pg'];
			
			if (!isset($pg_atual)) $pg_atual = 0;
			$pg_atual = $pg_atual * $produtos_por_pagina;
		
			
			if (isset ( $_REQUEST ['cod_categoria'] )) {
				
				$produtos = mysql_query ( "SELECT * FROM produtos p
			      						   INNER JOIN categorias c
			      						   ON p.cod_categoria = c.cod_categoria
			      					       WHERE p.cod_categoria = " . $_REQUEST ['cod_categoria'] );
				$total_produtos = mysql_num_rows($produtos);
				$total_paginas = ceil(mysql_num_rows($produtos) / $produtos_por_pagina);
				
				$produtos = mysql_query ( "SELECT * FROM produtos p
			      						   INNER JOIN categorias c
			      						   ON p.cod_categoria = c.cod_categoria
			      					       WHERE p.cod_categoria = " . $_REQUEST ['cod_categoria'] . "
										   LIMIT {$pg_atual}, {$produtos_por_pagina}");
		
				
			} if (isset ( $_REQUEST ['buscar'] )) {
				
				$produtos = mysql_query ( "SELECT * FROM produtos p
			      						   INNER JOIN categorias c
			      						   ON p.cod_categoria = c.cod_categoria
			      					       WHERE p.nome LIKE '%" . $_REQUEST ['buscar'] . "%';" );
				$total_produtos = mysql_num_rows($produtos);
				$total_paginas = ceil(mysql_num_rows($produtos) / $produtos_por_pagina);
				
				$produtos = mysql_query ( "SELECT * FROM produtos p
			      						   INNER JOIN categorias c
			      						   ON p.cod_categoria = c.cod_categoria
			      					       WHERE p.nome LIKE '%" . $_REQUEST ['buscar'] . "%'".
									       "LIMIT {$pg_atual}, {$produtos_por_pagina}" );
				
			} else if (!isset($_REQUEST ['buscar']) && !isset ($_REQUEST ['cod_categoria'])) {
				
				$produtos = mysql_query ( "SELECT * FROM produtos WHERE 1" );
				$total_produtos = mysql_num_rows($produtos);
				$total_paginas = ceil(mysql_num_rows($produtos) / $produtos_por_pagina);
				
				$produtos = mysql_query ( "SELECT * FROM produtos WHERE 1 LIMIT {$pg_atual}, {$produtos_por_pagina}" );
				
			}
			
			echo "<div class=\"col-md-12\"><h5 style='clear:both;'>Exibindo ".$total_produtos." produto(s) em ".$total_paginas." página(s).</h5><hr></div>";
			
			while ( $produto = mysql_fetch_array ( $produtos ) ) :
				?>
		      
		        <div class="col-lg-3">
				<img class="img-responsive"
					src="assets/fotos/<?php echo $produto['cod_produto']; ?>.jpg">
				<h4><?php echo substr($produto['nome'], 0, 30); ?>...</h4>
				<h4 class="text-danger">R$ <?php echo number_format($produto['preco'], 2, ',', '.'); ?></h4>
				<p>
					<a class="btn btn-primary"
						href="produto.php?cod=<?php echo $produto['cod_produto']; ?>"
						role="button"><i class="glyphicon glyphicon-share-alt"></i>
						COMPRAR</a>
				</p>
			</div>
		        
		     <?php endwhile; ?>
			
		</div>
		
		<div class="row">
		<div class="col-md-12">
		<hr>
		<p class="pull-left">Navegue entre as páginas:</p>
		<nav class="pull-right">
		  <ul class="pagination">
		  <?php for ($i=0; $i<$total_paginas; $i++): ?>
		    <li class="<?php 
		    	if ($i == $_REQUEST["pg"]) echo 'active';
		    ?>"><a href="categorias.php?pg=<?php echo $i; ?><?php 
		    
		    if (isset($_REQUEST['buscar']))
		   		 echo '&buscar='.$_REQUEST['buscar'];
		    
		    if (isset($_REQUEST['cod_categoria']))
		    	echo '&cod_categoria='.$_REQUEST['cod_categoria'];
		    
		    ?>"><?php echo ($i+1); ?></a></li>
		  <?php endfor; ?>
		  </ul>
		</nav>
		</div>
		</div>

	</div>

</div>





<?php
include ("footer.php");
?>