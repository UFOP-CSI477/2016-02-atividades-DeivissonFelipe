<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Análises Laboratoriais</title>
	<link rel="stylesheet" href=".\css\bootstrap.min.css">
	<link rel="stylesheet" href=".\font-awesome-4.7.0\css\font-awesome.min.css">
	<script src=".\js\jquery-3.1.1.js" type="text/javascript"></script>
	<script src="./js/funcoes.js"></script>
	<script src="./js/jquery.validate.js"></script>
	<style>
       .error{
             color:red
       }
	</style>
</head>
<body>

	<nav class="navbar navbar-default">
	  <div class="container-fluid">
	    <div class="navbar-header">
	      <a class="navbar-brand" href="index.php">Laboratório Clínico</a>
	    </div>
	    <ul class="nav navbar-nav">
	      <li><a href="areaGeral.php">Área Geral</a></li>
	      <li class="active"><a href="">Paciente</a></li>
	      <li><a href="protect_admin.php">Administração</a></li>
	    </ul>
	  </div>
	</nav>

	<div class="container well">		
		<div class="col-sm-2 "> 
		  		
			<ul class="nav nav-pills nav-stacked">
			<li align= "center"><a  href="login_paciente.php">Login</a></li>	
			<li align= "center"><a  href="cadastro_paciente.php">Cadastrar</a></li>
			</ul>
		
		</div>
		
		<div class="col-sm-8 col-sm-offset-2" id="conteudo">
	
			<div class="col-sm-8">
			<h3 align="center">Formulário de Acesso</h3>
			<br><br>
			<div class="row">
				<div class="col-sm-4 col-sm-offset-5 ">
					<i class="fa fa-user-circle fa-5x" aria-hidden="true"></i>
				</div>
			</div>
			<br><br>
			<form name="cadastro" id="cadastro" method="post" action="validar_user.php">
				<div class="form-group">
					<label for="login">Login:</label>
					<input type="text" id="login" name="login"class="form-control">
				</div>
				<div class="form-group">
					<label for="senha">Senha</label>
					<input type="password" id="senha" name="senha" class="form-control">
				</div>
				<br>
				<div class="col-sm-12 center-block">
					<input type="submit" value="Login" class="btn btn-lg btn-primary btn-block login">
				</div>
			</form>
			</div>

		</div>

	</div>

</body>
</html>