<!DOCTYPE html>
<html>
<head>
<meta charset = UTF-8">
<title>Cadastro</title>
</head>
<body>
<?php include("header.php");?>
<form class="form-horizontal">
<fieldset>

<!-- Form Name -->
<legend>Loja ADS</legend>
  .
<!-- Text input-->
<div class="form-group ">
  <label class="col-md-4 control-label" for="nome">Nome</label>  
  <div class="col-md-4">
  <input id="nome" name="nome" type="text" class="form-control input-md" required>
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="email">Email</label>  
  <div class="col-md-4">
  <input id="email" name="email" type="text" class="form-control input-md" required>
    
  </div>
</div>

<!-- Text input--> 
<div class="form-group">
  <label class="col-md-4 control-label" for="cpf">Cpf</label>  
  <div class="col-md-4">
  <input id="cpf" name="cpf" type="text" class="form-control input-md" required>
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="tel_area">DDD</label>  
  <div class="col-md-1">
  <input id="tel_area" name="tel_area" type="text"  class="form-control input-md" required>
    
  </div>
</div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="tel_numero">Telefone</label>  
  <div class="col-md-2">
  <input id="tel_numero" name="tel_numero" type="text" placeholder="" class="form-control input-md" required>
    
  </div>
</div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="cep">Cep</label>  
  <div class="col-md-2">
  <input id="cep" name="cep" type="text" placeholder="" class="form-control input-md" required>
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="lagradouro">Endereço</label>  
  <div class="col-md-4">
  <input id="lagradouro" name="lagradouro" type="text" placeholder="" class="form-control input-md" required>
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="numero">Número</label>  
  <div class="col-md-1">
  <input id="numero" name="numero" type="text" placeholder="" class="form-control input-md" required>
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="complemento">Complemento</label>  
  <div class="col-md-2">
  <input id="complemento" name="complemento" type="text" placeholder="" class="form-control input-md" required>
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="bairro">Bairro</label>  
  <div class="col-md-4">
  <input id="bairro" name="bairro" type="text" placeholder="" class="form-control input-md" required>
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="uf">UF</label>  
  <div class="col-md-4">
  <input id="uf" name="uf" type="text" placeholder="" class="form-control input-md" required>
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="cidade">Cidade</label>  
  <div class="col-md-4">
  <input id="cidade" name="cidade" type="text" placeholder="" class="form-control input-md" required>
    
  </div>
</div>

<!-- Password input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="senha">Senha</label>
  <div class="col-md-4">
    <input id="senha" name="senha" type="password" placeholder="" class="form-control input-md" required>
    
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for=""></label>
  <div class="col-md-4">
    <style align="center"></style><button class="btn btn-info">Salvar</button>
  </div>
</div>

</fieldset>
</form>
<?php include("footer.php");?>
</body>
</html>