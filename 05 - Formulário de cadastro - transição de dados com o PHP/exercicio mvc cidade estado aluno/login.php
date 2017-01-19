<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Acesso ao Sistema</title>
	<link rel="stylesheet" href="./css/bootstrap.css" />
</head>
<body>
	<!-- <form action="validar.php" method="post">
		Usuário: <input type="text" name="usuario">
		Senha: <input type="password" name="senha">
		<input type="submit" value="Acessar">
		<input type="reset" value="Limpar">
	</form>
 -->
	<div class="container">
	  <h2>Login</h2>
	  <form class="form-horizontal" action="validar.php" method="post">
	    <div class="form-group">
	      <label class="control-label col-sm-2" for="email">Usuário:</label>
	      <div class="col-sm-10">
	        <input class="form-control" placeholder="Digite seu id" name="usuario">
	      </div>
	    </div>
	    <div class="form-group">
	      <label class="control-label col-sm-2" for="pwd">Senha:</label>
	      <div class="col-sm-10">          
	        <input type="password" class="form-control" id="pwd" placeholder="Digite sua senha" name="senha">
	      </div>
	    </div>
	    <div class="form-group">        
	      <div class="col-sm-offset-2 col-sm-10">
	        <input class="btn btn-default" type="submit" value="Acessar">
			<input class="btn btn-default" type="reset" value="Limpar">
	      </div>
	    </div>
	  </form>
	</div>

</body>
</html>
