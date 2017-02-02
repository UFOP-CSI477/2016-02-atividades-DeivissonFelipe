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
				<h2 align="center">Cadastro de Alunos</h2>

				<form name="cadastro" id="cadastro" method="post" action="validar_user_cad.php">
					
					<div class="form-group">
						<label for="nome">Nome:</label>
						<input type="text" name="nome" 	id="nome" class="form-control">
					</div>

				 	<div class="form-group">
						<label for="nome">Login:</label>
						<input type="text" name="login" id="login" class="form-control">
					</div>

					<div class="form-group">
						<label for="senha">Senha</label>
						<input type="password" name="senha" id="senha" class="form-control" minlength="8" >
					</div>

					<div class="form-group">
						<label for="cSenha">Confirmação de Senha</label>
						<input type="password" name="cSenha" id="cSenha" class="form-control"  minlength="8">
					</div>

					<div class="col-xs-6">
						<input type="submit" value="Cadastrar" class="btn btn-primary btn-block">
					</div>
					<div class="col-xs-6">
						<input type = "reset" value = "Limpar" class="btn btn-danger btn-block" />
					</div>
					<br><br>
				</form>
			</div>



		</div>

	</div>

</body>
</html>