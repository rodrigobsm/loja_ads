<?php include("header.php"); ?>

		<?php if (isset($_SESSION['msg'])): ?>
        <div class="alert alert-<?php echo $_SESSION['msg']['tipo']; ?>" role="alert">
        	<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <?php echo $_SESSION['msg']['texto']; unset($_SESSION['msg']); ?>
        </div>
        <?php endif; ?>

      <div class="jumbotron">
        <h1>Ofertas Dia das Mães</h1>
        <p class="lead">Cras justo odio, dapibus ac facilisis in, 
egestas eget quam. Fusce dapibus, tellus ac cursus commodo, tortor 
mauris condimentum nibh, ut fermentum massa justo sit amet.</p>
        <p><a class="btn btn-lg btn-success" href="#" role="button"><i class="glyphicon glyphicon-hand-right"></i> COMPRE AGORA</a></p>
      </div>
      
      <hr>
      <h3>Confira essas novidades...
      <a class="btn btn-primary pull-right" href="categorias.php">Ver Mais</a>
      </h3>
      <hr>
      <br>

      <!-- Listagem de Produtos em Destaque -->
      <div class="row">
      
      <?php
      
      include("conexao.php");
      
      $produtos = mysql_query("SELECT * FROM produtos WHERE destaque = 1;");
      
      while ($produto = mysql_fetch_array($produtos)):
      ?>
      
        <div class="col-lg-3">
          <img class="img-responsive" src="assets/fotos/<?php echo $produto['cod_produto']; ?>.jpg">
          <h4><?php echo substr($produto['nome'], 0, 65); ?>...</h4>
          <h4 class="text-danger">R$ <?php echo number_format($produto['preco'], 2, ',', '.'); ?></h4>
          <p><a class="btn btn-primary" href="produto.php?cod=<?php echo $produto['cod_produto']; ?>" role="button"><i class="glyphicon glyphicon-share-alt"></i> COMPRAR</a></p>
        </div>
        
     <?php endwhile; ?>
        
      </div>

<?php include("footer.php"); ?>